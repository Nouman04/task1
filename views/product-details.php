<?php
require_once('rb.php');



class ProductDetails{
    public function _getDetails($id)
    {
        R::setup("mysql:host=localhost;dbname=ecommerce", "root", ""); 
        $product =  R::getAll( 'select * from products where id=?',[$id]);
        return $product;
    }
}

$id = htmlspecialchars($id);
$obj = new ProductDetails;
$productDetail = $obj->_getDetails($id);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/task1/style.css"  crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Product Detail</title>
</head>
<body>
    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">ECOM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link active" class="text-light"href="http://localhost/task1/products">Products</a>
                <!-- <a class="nav-item nav-link" href="#">Features</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
                <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
                </div>
            </div>
        </nav>

    </div>
    <div class="container-fluid mt-5">
        <i><h2>Product Details:</h2></i> 
        <div class="container mt-3">

            <div class="row">
                <div class="card mb-3">
                        <img src="/task1/views/uploads/<?=$productDetail[0]['image']?>" class="img-detail card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?=$productDetail[0]['title']?></h5>
                            <p class="card-text"><?=$productDetail[0]['description']?></p>
                            <p class="card-text">Price: <?=$productDetail[0]['price']?>$</p>
                            <p class="card-text"><small class="text-muted">In Stock</small></p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                BUY NOW
                            </button>
                        </div>
                        </div>
                    
                </div>
        </div>

    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            
            <div class="modal-dialog">
                <form action="add-order" method="post">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="product_id" value="<?=$productDetail[0]['id']?>">
                        <input type="text" name="name" id="" class="mb-4" placeholder="Your Name"></br>
                        <input type="text" name="total" id="" class="mb-4" placeholder="Total"></br>
                        <textarea name="description" id="" cols="30" rows="10" placeholder="description"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Proceed</button>
                    </div>
                    </div>
                </form>
            </div>
     </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Powered 2021</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    </nav>
    
</body>
</html>