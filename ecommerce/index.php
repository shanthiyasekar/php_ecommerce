<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommmerce websit usin php and mysql</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <style>
        .btn-outline-success {
            color: #fff; /* Set the text color to white */
        }
    </style>
</head>
<body>
    
    <!-- navbar -->

  <div class="container-fluid p-0">
    <!-- first child -->
   
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
     
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                      <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Products</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Register</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Contact</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Total Price:100/-</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
        </nav>
        <!-- second child -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Welcome Guest</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                  </li>
                </ul>
              </div>
            </nav>

      <!-- third child -->
        <div class="bg-light">
            <h3 class="text-center">Hidden store</h3>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil nesciunt </p>
        </div>

      <!-- fourth child -->
      <div class="row">
          <div class="col-md-10">
            <!-- products -->
            <div class="row">
              <div class="col-md-4 mb-2">
                <div class="card" >
                  <img class="card-img-top" src="/ecommerce/images/apple.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-info">Add to cart</a>
                        <a href="#" class="btn btn-secondary">View More</a>
                    </div>
                </div>
              </div>
              <div class="col-md-4 mb-2">
                <div class="card" >
                  <img class="card-img-top" src="/ecommerce/images/cap.webp" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-info">Add to cart</a>
                        <a href="#" class="btn btn-secondary">View More</a>
                    </div>
                </div>
              </div>
              <div class="col-md-4 mb-2">
                <div class="card" >
                  <img class="card-img-top" src="/ecommerce/images/dairy.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-info">Add to cart</a>
                        <a href="#" class="btn btn-secondary">View More</a>
                    </div>
                </div>
              </div>
              <div class="col-md-4 mb-2">
                <div class="card" >
                  <img class="card-img-top" src="/ecommerce/images/capsicum.jpeg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-info">Add to cart</a>
                        <a href="#" class="btn btn-secondary">View More</a>
                    </div>
                </div>
              </div>
              <div class="col-md-4 mb-2">
                <div class="card" >
                  <img class="card-img-top" src="/ecommerce/images/capsicum.jpeg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-info">Add to cart</a>
                        <a href="#" class="btn btn-secondary">View More</a>
                    </div>
                </div>
              </div>
              <div class="col-md-4 mb-2">
                <div class="card" >
                  <img class="card-img-top" src="/ecommerce/images/capsicum.jpeg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-info">Add to cart</a>
                        <a href="#" class="btn btn-secondary">View More</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2 bg-secondary p-0">
            <!-- brands to be displayed -->
            <ul class="navbar-nav me-auto text-center">
              <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link text-light"><h4>Brand1</h4></a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link text-light"><h4>Brand2</h4></a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link text-light"><h4>Brand3</h4></a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link text-light"><h4>Brand4</h4></a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link text-light"><h4>Brand5</h4></a>
              </li>
            </ul>
            <!-- categories to be displayed -->
            <ul class="navbar-nav me-auto text-center">
              <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link text-light"><h4>Category1</h4></a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link text-light"><h4>Category2</h4></a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link text-light"><h4>Category3</h4></a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link text-light"><h4>Category4</h4></a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link text-light"><h4>Category5</h4></a>
              </li>
            </ul>
          </div>
      </div>
  <!-- last child -->

    <div class="bg-info p-3 text-center "> 
      <p>All rights reserved -designed by Shanthiya-2023</p>
    </div>
  </div>
 
         
    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>