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
    <li class="nav-item" style="margin-left:30px;">
      <a class="nav-link" href="/home/formAddProduct">Thêm sản phẩm</a>
    </li>
  </ul>
</nav>
<div class="container" style="margin-top:50px;">
@include('room/cardProduct')
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>