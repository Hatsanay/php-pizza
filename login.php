<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Boostrap4\bootstrap.min.css">
    <script src="Boostrap4/bootstrap.min.js"></script>
    <script src="Boostrap4/popper.min.js"></script>
</head>
        <style>
            body {
                background-color: #1e7e34;
            }
            .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
                color: #fff;
            }
        </style>
<body>
    <div class="comtianer">
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="margin-top: 10%;" >
            <H1 align="center">เข้าสู่ระบบ</H1>
        <form action="/action_page.php"style="margin-top:30px">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="อีเมล*" id="email" style="height:50px;" >
            </div>
            <div class="form-group">
                <input type="password" class="form-control mt-3" placeholder="รหัสผ่าน*" id="pwd" style="height:50px;">
            </div>
            <button type="submit" class="btn btn-danger btn-block btn-lg" style="margin-top: 25px;">เข้าสู่ระบบ</button>
            <a href="index.php" class="btn btn-primary btn-block btn-lg" style="margin-top: 5px;">ย้อนกลับ</a>
        </form>
        </div>
        <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>