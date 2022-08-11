<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Boostrap4/bootstrap.min.css">
    <script src="Boostrap4/bootstrap.min.js"></script>
    <script src="Boostrap4/popper.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>
<body>

 <?php
    include "navbar.php" 
 ?>

<div id="demo" class="carousel slide carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner"style="margin-top:60px;">
    <div class="carousel-item active">
      <img src="images\ps1.jpg "alt="Los Angeles" style="width:105%;">
    </div>
    <div class="carousel-item">
      <img src="images\ps2.jpg" alt="Chicago" style="width:105%;">
    </div>
    <div class="carousel-item">
      <img src="images\ps3.webp" alt="Chicago" style="width:105%;">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>



<div class="container mt-3">
    <div class="row">
        <div class="col-md-4">
            <img class="card-img-top"  src="images\img1.webp" alt="" class="img-fluid" >
        </div>
        <div class="col-md-4">
            <img class="card-img-top"  src="images\img2.webp" alt="" class="img-fluid">
        </div>
        <div class="col-md-4">
            <img class="card-img-top"  src="images\img3.webp" alt="" class="img-fluid">
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-3">
        <div class="card">
            <img class="card-img-top" src="images\p1.webp" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">พิซซ่าญี่ปุ่นซีฟู้ด</h4>
                <p class="card-text">กุ้ง, ปลาหมึก, เบคอน, กะหล่ำปลี, หอมญี่ปุ่น, ปลาโอแห้ง, สาหร่ายญี่ปุ่น และซอสโอโคโน มิยากิ</p>
                <h3>฿399.00</h3>
                <a href="#" class="btn btn-primary">สั่งซื้อ</a>
            </div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="card">
            <img class="card-img-top" src="images\p2.webp" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">ดับเบิ้ลเป๊ปเปอโรนี</h4>
                <p class="card-text">ไก่ทอด 10 ชิ้น
                    ไก่วิงซ์แซ่บ 8 ชิ้น เฟรนช์ฟรายส์ (ปกติ) 2 ที่ มันบด (ปกติ) 2 ที่</p>
                <h3>฿598.00</h3>
                <a href="#" class="btn btn-primary">สั่งซื้อ</a>
            </div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="card">
            <img class="card-img-top" src="images\k3.png" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">ชิคแอนด์แชร์</h4>
                <p class="card-text">ไก่แซ่บบบบบ ไม่ยั้งแชร์ได้ทุกมื้อจัดเต็มกับ 5 วิงซ์แซ่บและออริกาโน่บัน 1 ชิ้น</p>
                <h3>฿99.00</h3>
                <a href="#" class="btn btn-primary">สั่งซื้อ</a>
            </div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="card">
            <img class="card-img-top" src="images\k4.png" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">เดอะบอกซ์ซิคเนเจอร์</h4>
                <p class="card-text">ไก่ทอด 2 ชิ้น ไก่วิงซ์แซ่บ 2 ชิ้น ทาร์ตไข่ 1 ชิ้น 
                    ฟรายส์ผู้พัน (ปกติ) 1 ที่ เป๊ปซี่ ปกติ 1 ที่</p>
                <h3>฿159.00</h3>
                <a href="#" class="btn btn-primary">สั่งซื้อ</a>
            </div>
        </div>
        </div>
    </div>
</div>


</body>
</html>