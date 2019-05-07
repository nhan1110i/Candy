<?php
    include('../Connect/Connect.php');
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Admin</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link href="CSS/AdminCSS.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="CSS/JS.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
<script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
</head>
<body>
    <form method="POST">
        <div>
            <div class="form-login center-block fa-border">
                <div class="container-fluid">
                    <br />
                    <div class="container-fluid">
                        
                        <img src="IMG/AdminImage/AvaLogin.jpg" class="img-circle img-responsive center-block ava-login" />
                    </div>
                    <div class="form-group">
                        <label>Account :</label>
                        <input type="text" class="form-control" height="36px" name="account">
                        <br />
                        <label>Password :</label>
                        <input type="password" class="form-control" height="36px" name="password" >
                        <span class="text-center text-danger">Wrong password</span>
                    </div>
                    <input type="submit" name="btnLogin" value="ĐĂNG NHẬP" class="btn-block btn btn-primary">
                    <span class="text-danger">Forgot Password ?</span>
                </div>
            </div>
        </div>
    </form>
    <?php
        if(isset($_POST['btnLogin'])){
            
            $account = $_POST['account'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM account WHERE AccountName = '$account' AND AccountPassword = '$password'";
            $temp = mysqli_query($conn,$sql);
            // $data = mysqli_fetch_assoc($temp);
            if(mysqli_num_rows($temp) != 0){
                echo "<script type='text/javascript'> swal('ĐĂNG NHẬP THÀNH CÔNG');</script>";
                 header('Location: Page/Home.php');
            }else{
                
            }
        }
    ?>
</body>
</html>