<?php
    require 'vendor/autoload.php';
    require 'rb.php';
    // application route starts here

    Flight::route('/', function(){
        echo 'hello world!';
    });
    
    //Flight::route('/products',array('Products','_getProducts'));
    Flight::route('/products',function(){
        Flight::render('products.php');
    });


    // Flight::route('/product-details',function(){
    //     Flight::render('product-details.php');

    // });
    Flight::route('/product-details/@id',function($id){
        Flight::render('product-details.php',array('id'=>$id));

    });


    Flight::route('POST/add-order',function($id){
        echo "I am inside Post";
    });

    Flight::route('/thanks',function(){
        Flight::render('thankyou.php');

    });










    Flight::start();

?>