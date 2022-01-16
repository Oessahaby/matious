<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function csvToArray($filename = '', $delimiter = ',')
    {
        if (!file_exists($filename) || !is_readable($filename))
            echo 'jdjjdj';
    
        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header){
                    $header = $row;
                    
                }
                     
                else
                   
                    $data[] = array_combine($header, $row);
                   
                    
            }
            fclose($handle);
        }
        
        return $data;
    }
   public function nbr_achat_per_client(){
    $all = Post::raw(function ($collection) {
        return $collection->aggregate([
            [
                '$group' => [
                    "_id" => ['$Customer type','$Gender'],
                    'Customer type' => ['$first' => '$Customer type'],
                    'Gender' => ['$first' => '$Gender'],
                    'sum' => ['$sum' => 1]
                ]
            ],

        ]);
    });
    return json_encode($all);
   }
   public function type_paiement(){
    $all = Post::raw(function ($collection) {
        return $collection->aggregate([
            [
                '$group' => [
                    "_id" => '$Payment',
                    'Payment' => ['$first' => '$Payment'],
                    'sum' => ['$sum' => 1]
                ]
            ],

        ]);
    });
    return json_encode($all);
   }
   public function getCount(){
       $all = Post::count();
       return $all;
   }
   public function revenue_per_categorie(){
    
    $all = Post::raw(function ($collection) {
        return $collection->aggregate([
            [
                '$group' => [
                    "_id" => '$Product line',
                    'Product line' => ['$first' => '$Product line'],
                    'sum' => ['$sum' => '$gross income']
                ]
            ],

        ]);
    });
    return $all;
   }
   public function rating_per_sex(){
    $all = Post::raw(function ($collection) {
        return $collection->aggregate([
            [
                '$group' => [
                    "_id" => '$Gender',
                    'Gender' => ['$first' => '$Gender'],
                    'sum' => ['$avg' => '$Rating']
                ]
            ],

        ]);
    });
    return $all;
   }
   
   public function sum_per_date(){
    $all = Post::raw(function ($collection) {
        return $collection->aggregate([
            [
                '$group' => [
                    "_id" => '$Date',
                    'Gender' => ['$first' => '$Date'],
                    'sum' => ['$sum' => 1]
                ]
            ],

        ]);
    });
    return $all;
   }
    public function show()
    {
        $count = $this->getCount();
        $labelMale = array();
        $dataMale = array();
        $labelFamele = array();
        $dataFamele = array();
        $nbr = json_decode($this->nbr_achat_per_client(),true);
        foreach ($nbr as $key) {
            if ($key['Gender']=="Male") {
                array_push($labelMale,$key['_id']);
                array_push($dataMale,$key['sum']);
            }
            else {
                array_push($labelFamele,$key['_id']);
                array_push($dataFamele,$key['sum']);
            }
            
        }
        $labelRevue = array();
        $dataRevue = array();
        $nbrRevue = json_decode($this->revenue_per_categorie(),true);
        foreach ($nbrRevue as $key) {
            array_push($labelRevue,$key['_id']);
            array_push($dataRevue,$key['sum']);
        }
        $labelRating = array();
        $dataRating = array();
        $nbrRating = json_decode($this->rating_per_sex(),true);
        foreach ($nbrRating as $key) {
            array_push($labelRating,$key['_id']);
            array_push($dataRating,$key['sum']);
        }
        $labelPayment = array();
        $dataPayment = array();
        $nbrPayment = json_decode($this->type_paiement(),true);
        foreach ($nbrPayment as $key) {
            array_push($labelPayment,$key['_id']);
            array_push($dataPayment,$key['sum']);
        }
        $labelDate = array();
        $dataDate = array();
        $nbrDate = json_decode($this->sum_per_date(),true);
        foreach ($nbrDate as $key) {
            $key1 = explode("/",$key['_id']);
            unset($key1[2]);
            $key2 = join("-",$key1);
            array_push($labelDate,$key2);
            array_push($dataDate,$key['sum']);
        }
        
        return view('post',['labelMale' => $labelMale, 'dataMale' => $dataMale,
        'labelFamele' => $labelFamele, 'dataFamele' => $dataFamele,'count'=>$count,
        'labelRevue'=>$labelRevue,'dataRevue'=>$dataRevue,'labelRating'=>$labelRating,'dataRating'=>$dataRating,
        'labelPayment'=>$labelPayment,'dataPayment'=>$dataPayment,'labelDate'=>$labelDate,'dataDate'=>$dataDate]);
        
        
    }
    public function store()
   {
       $file = public_path('test.csv');
       $fileArray = $this->csvToArray($file);
      for ($i=0; $i <count($fileArray) ; $i++) { 
        $fileArray[$i]['gross income'] = floatval($fileArray[$i]['gross income']);
        $fileArray[$i]['Unit price'] = floatval($fileArray[$i]['Unit price']);
        $fileArray[$i]['Tax 5%'] = floatval($fileArray[$i]['Tax 5%']);
        $fileArray[$i]['Total'] = floatval($fileArray[$i]['Total']);
        $fileArray[$i]['cogs'] = floatval($fileArray[$i]['cogs']);
        $fileArray[$i]['Quantity'] = intval($fileArray[$i]['Quantity']);
        $fileArray[$i]['Rating'] = floatval($fileArray[$i]['Rating']);
        $fileArray[$i]['gross margin percentage'] = floatval($fileArray[$i]['gross margin percentage']);
 
    } 
        Post::truncate();
        Post::insert($fileArray);
        return redirect('/post');
   }
   
}
