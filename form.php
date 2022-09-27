<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dang nhap</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style type="text/css">
    body{
        margin:0px;
        padding:0px;
        background-color: #17a2b8;
        height: 100vh;
    }
    .container form{
        margin:100px 0px 0px 250px;
        max-width: 600px;
        height: 320px;
        border: 1px solid #9C9C9C;
        background-color: #EAEAEA;
    }
    .container h3{
        margin-top:30px;
        text-align:center;
    }
    .container lable{
        margin:0px 20px 20px 20px;
    }
    .container input[type="text"]{
        margin:0px 20px 20px 20px;
        max-width: 560px;
    }

    .container input[type="password"]{
        margin:0px 20px 20px 20px;
        max-width: 560px;
    }

    .container input[type="submit"]{
        margin-top:40px;
        max-width: 100px;
        margin-left:250px;
    }
</style>
</head>
<body>
    <div class="container">
        <form action="xuly.php" method="Post" > 
            <h3>LOGIN</h3>
            <lable> Username</lable>
            <input type='text'name='username'class="form-control" required=""/> 
            <lable> Passwword</lable>
            <input type='password' name='password'class="form-control" required=""/> 
            <input type="submit" class="btn btn-block btn-info" value="đăng nhập" />
        </form>
    </div>
    
</body>
</html>
