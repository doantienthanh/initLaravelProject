<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Trang chủ</title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="/home">
    <img src="https://st2.depositphotos.com/5486388/8161/v/950/depositphotos_81616862-stock-illustration-hotel-logo-template.jpg" alt="logo" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item" style="margin-left:30px;">
      <a class="nav-link" href="#"><i class='fas fa-home' style='font-size:24px'>Trang chủ</i></a>
    </li>
    <li class="nav-item" style="margin-left:30px;">
      <a class="nav-link" href="#"><i class='fas fa-star' style='font-size:24px'>Phòng & Mức giá</i></a>
    </li>
    <li class="nav-item" style="margin-left:30px;">
      <a class="nav-link" href="#"><i class='fas fa-clock' style='font-size:24px'>Đặt phòng</i></a>
    </li>
    <li class="nav-item" style="margin-left:30px;">
      <a class="nav-link" href="#"><i class='fas fa-images' style='font-size:24px'>Hình ảnh</i></a>
    </li>
    <li class="nav-item" style="margin-left:30px;">
      <a class="nav-link" href="#"><i class='fab fa-delicious' style='font-size:24px'>Giới thiệu</i></a>
    </li>
    <li class="nav-item" style="margin-left:30px;">
      <a class="nav-link" href="#"><i class='fas fa-user-alt' style='font-size:24px'>Liên hệ</i></a>
    </li>
  </ul>
</nav>
<div class="container" style="margin-top:50px;">
  <div class="card-deck">
    @foreach($rooms as $room)
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <div class="card  text-black bg-light mt-5"
            style="width:100%;height:550px;margin-top:20px;margin-bottom:20px;">
            <div class="card-header">
                <img class="card-img-top" src="{{'/storage/'. $room->image}}" alt="Card image"
                    style="width:100%;height:250px;">
                    </div>
            <div class="card-body">
                <h4 class="card-title" style="text-align:center;">{{$room->name}}</h4> <br>
                <p class="card-text" style="color:black;">Loại phòng:&emsp;<span style="float:right;"> {{$room->typeroom}}</b></span>
                <p class="card-text" style="color:black;">Diện tích:&emsp; <span style="float:right;">{{$room->getArea()}}</span></p>
                <p class="card-text" style="color:black;">Giá phòng:&emsp;<span style="float:right;">  {{$room->getPrice()}}</span></p>
            </div>
            <div class="card-footer">
            <p class="card-text" style="color:black;">Xem:&emsp;<span style="float:right;">  Đặt phòng</span></p>     
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>