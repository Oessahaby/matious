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
                    "_id" => '$Customer type',
                    'Customer type' => ['$first' => '$Customer type'],
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
   
    public function show()
    {
        $count = $this->getCount();
        $label = array();
        $data = array();
        $nbr = json_decode($this->nbr_achat_per_client(),true);
        foreach ($nbr as $key) {
            array_push($label,$key['_id']);
            array_push($data,$key['sum']);
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
        return view('post',['label' => $label, 'data' => $data,'count'=>$count,
        'labelRevue'=>$labelRevue,'dataRevue'=>$dataRevue,'labelRating'=>$labelRating,'dataRating'=>$dataRating]);
        
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
   }
   
}
