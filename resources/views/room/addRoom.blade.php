<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/home">Trang chủ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Thêm sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <h1 class="text-center">THÊM SẢN PHẨM</h1>
        <form action="/home/addProduct" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="name">Tên sản phẩm</label>
                <input id="name" class="form-control" type="text" name="name"> <br>           
                <label for="typeroom">Loại Phong</label>
                <input id="typeroom" class="form-control" type="text" name="typeroom"><br>
                @error('number')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="number">Số phòng</label>
                <input id="number" class="form-control" type="number" name="number"><br>
                @error('area')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="area">Diện tích</label>
                <input id="area" class="form-control" type="number" name="area"><br>
                @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="price">Giá</label>
                <input id="price" class="form-control" type="number" name="price"><br>
                <label for="image">Chọn ảnh</label>
                <input id="image" class="form-control" type="file" name="image"><br>
            </div>
            <button class="btn btn-info" type="submit">Submit</button>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>