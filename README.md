
## About Project
This Project is a dashboard that contains some graphs about a csv file [test.csv](https://github.com/Oessahaby/matious/blob/main/public/test.csv)

## Description 
This project describes graphs below
* Generalities
    * the number of transactions per the type of payment 
    ![](https://github.com/Oessahaby/matious/blob/main/resources/images/im1.PNG)
    * Bar charts
        * sum of gross volume per category
        * number of transactions per type of customer
    ![](https://github.com/Oessahaby/matious/blob/main/resources/images/im2.PNG)
    * Line chart
        * number of transactions per date in 2019
    ![](https://github.com/Oessahaby/matious/blob/main/resources/images/im3.PNG)
## Requirement
1. Install php
2. Install [composer](https://getcomposer.org/)
3. Install laravel
4. Create an account in [MongoDb ATLAS](https://www.mongodb.com/cloud/atlas)
## How to run this project
1. Clone this project
2. Go to /conf/database.php and put at the mongodb setting the url provides by mongodb atlas
3. run php artisan serve 
4. Go to http://localhost:800
5. Lancer http://localhost:800/posts pour importer le fichier test.csv to mongodb



 