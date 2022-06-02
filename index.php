<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shopping Cart Course Discoveryvip.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"> 
</head>

<body>
    <header class="header">
        <div class="htop">
            <div id="checkoutdiv " class="container">
                <div class="row">
                    <div class="col-md-6 text-xs-right ">(<span class="items text-muted"></span> <small>items</small>) <span class="total"></span> </div>
                    <div class="col-md-6 text-xs-right"> <span class="btn btn-success" data-toggle="modal" data-target="#cart">Open Shopping Cart</span><a href="checkout.php" class="btn btn-primary">Proceed to checkout</a></div>
                </div>
            </div>
        </div>
        <div class="hbot">
            <div class="container">
                <nav class="navbar navbar-full navbar-dark bg-inverse">
                    <button class="navbar-toggler light float-xs-right hidden-sm-up" type="button" data-toggle="collapse" data-target="#nvbar"></button>
                    <div id="nvbar" class="collapse navbar-toggleable-xs">
                        <ul class="nav navbar-nav float-sm-right ">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div class="content">
        <!-- content changes on each page -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="car" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#car" data-slide-to="0" class="active"></li>
                            <li data-target="#car" data-slide-to="1"></li>
                            <li data-target="#car" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"><img src="images/appleLogo1.jpg"></div>                                                                                          <div class="carousel-item"><img src="images/imac1.jpg"></div><!--http://placehold.it/1250x400-->                                            <div class="carousel-item"><img src="images/xplus.jpg"></div><!--http://placehold.it/1250x400-->                                      </div> 
                               <a class="left carousel-control" href="#car" role="button" data-slide="prev"><span class="icon prev"></span></a> <a class="right carousel-control" href="#car" role="button" data-slide="next"><span class="icon next"></span></a> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <p>Here at EdenTree NZ, LLC we are proud to bring you the latest in cutting edge technology at highly competitive prices.</p>
                    <p>We are, and have for the past decade, been an exclusive Apple Product dealership, renowned for excellent sales and service.</p>
                    <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                    <p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                    <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,</p>
                </div>
                <div class="col-md-4">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla consequat massa quis enim.</p>
                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, . Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                    <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">SD Card 32GB</h3>
                            <h6 class="card-subtitle text-muted">$10.00</h6> <img src="http://placehold.it/350x150" class="img-fluid"> </div>
                        <div class="card-block">
                            <div class="card-text">Product information description why its the best product ever blah blah <a href="#" class="productItem btn btn-primary" data-name="SD Card" data-s="4GB" data-price="1000" data-id="6">Add to Cart</a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Cable 4</h3>
                            <h6 class="card-subtitle text-muted">$16.00</h6> <img src="http://placehold.it/350x150" class="img-fluid"> </div>
                        <div class="card-block">
                            <div class="card-text">Product information description why its the best product ever blah blah <a href="#" class="productItem btn btn-primary" data-name="Cable" data-s="4" data-price="1600" data-id="7">Add to Cart</a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Cable 1</h3>
                            <h6 class="card-subtitle text-muted">$3.00</h6> <img src="http://placehold.it/350x150" class="img-fluid"> </div>
                        <div class="card-block">
                            <div class="card-text">Product information description why its the best product ever blah blah <a href="#" class="productItem btn btn-primary" data-name="Cable" data-s="1" data-price="300" data-id="8">Add to Cart</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <p class="text-xs-center">&copy; Injabulo 2018 </p>
        </div>
    </footer>
    <!-- Modals -->
    <div class="modal fade" id="cart" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Shopping Cart</h4></div>
                <div class="modal-body">
                    <table class="table table-hover">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Remove</th>
                                <th>Qty</th>
                                <th>Item Name</th>
                                <th>Cost</th>
                                <th class="text-xs-right">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody id="output"> </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Continue Shopping</button><a href="checkout.php" class="btn btn-primary">Proceed to checkout</a></div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>