<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Store</title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#cat1">Phones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#cat2">watches</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#cat3">sports</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#other">other</a>
      </li>
    </ul>
  </div>
</nav>

         <div class="shadow-lg p-4 mb-4 bg-white text-center fs-1" id="cat1">Details</div>
         <!-- <div class="card m-5 " style="width:300px;float: left;"> -->
          <!-- <div class="card-body" > -->
            <h4 class="card-title">{{$productdetails['name']}}</h4>
            <p class="card-text">price : ${{$productdetails['price']}}</p>
          <!-- </div>  -->

          <a href="#"><img class="card-img-bottom" src="{{asset($productdetails['img'])}}" alt="Card image" style="width:100%;"></a>
          <!-- </div>  -->



</body>
</html>