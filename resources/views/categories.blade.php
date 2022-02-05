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
        @foreach($category as $cat)
          @if($cat=="phones")
         <div class="shadow-lg p-4 mb-4 bg-white text-center fs-1" id="cat1">{{$cat}}</div>
         @foreach ($phones as $phone)
        <div class="card m-5 " style="width:300px;float: left;">
          <div class="card-body" >
            <h4 class="card-title">{{$phone['name']}}</h4>
            <p class="card-text">price : ${{$phone['price']}}</p>
          </div>
          <a href="{{url('/'.$cat.'/'. $phone['id'])}}"><img class="card-img-bottom" src="{{asset($phone['img'])}}" alt="Card image" style="width:100%;height:200px"></a>
          </div>
          @endforeach
                  <div style="clear: both;"></div>
          @endif

          @if($cat=="watches")
        <div class="shadow-lg p-4 mb-4 bg-white text-center fs-1"id="cat2">{{$cat}}</div>
         @foreach ($watches as $watch)
        <div class="card m-5 " style="width:300px;float: left;">
          <div class="card-body" >
            <h4 class="card-title">{{$watch['name']}}</h4>
            <p class="card-text">price : ${{$watch['price']}}</p>
          </div>
          <a href="{{url('/'.$cat.'/'. $watch['id'])}}"><img class="card-img-bottom" src="{{asset($watch['img'])}}" alt="Card image" style="width:100%;height:200px"></a>
          </div>
          @endforeach
          <div style="clear: both;"></div>
          @endif

          @if($cat=="sports")
        <div class="shadow-lg p-4 mb-4 bg-white text-center fs-1" id="cat3">{{$cat}}</div>
         @foreach ($sports as $sport)
        <div class="card m-5 " style="width:300px;float: left;">
          <div class="card-body" >
            <h4 class="card-title">{{$sport['name']}}</h4>
            <p class="card-text">price : ${{$sport['price']}}</p>
            <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
          </div>
          <a href="{{url('/'.$cat.'/'. $sport['id'])}}"><img class="card-img-bottom" src="{{asset($sport['img'])}}" alt="Card image" style="width:100%;height:200px"></a>
          </div>
          @endforeach
          <div style="clear: both;"></div>
          @endif

          @if($cat=="other")
        <div class="shadow-lg p-4 mb-4 bg-white text-center fs-1" id="other">{{$cat}}</div>
         @foreach ($other as $other1)
        <div class="card m-5 " style="width:300px;float: left;">
          <div class="card-body" >
            <h4 class="card-title">{{$other1['name']}}</h4>
            <p class="card-text">price : ${{$other1['price']}}</p>
            <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
          </div>
          <a href="{{url('/'.$cat.'/'. $other1['id'])}}"><img class="card-img-bottom" src="{{asset($other1['img'])}}" alt="Card image" style="width:100%;height:200px"></a>
          </div>
          @endforeach
          <div style="clear: both;"></div>
          @endif

       @endforeach

</body>
</html>