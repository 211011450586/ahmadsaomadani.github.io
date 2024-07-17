
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
        <?php

        if(isset($_POST["login"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
            require_once "koneksi.php";
            $sql = "SELECT * FROM pengguna WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user){
                if(password_verify($password, $user["password"])){
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("location: index.php");
                    die();
                }
            }else{
                echo "<div class='alert alert-denger'>Email tidak cocok</div>";
            }

              }

        ?>
        <form action="login.php" method="POST">
            <div class="form-group">
                <input type="email" placeholder="Enter Email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Enter Password" name="password" class="form-control">
            </div>
            <div class="form-btn">
                <input type="submit" value="login" name="login" class="btn btn-primary">
            </div>
        </form>
        <div><p>Belum Terdaptar? <a href="registrasi.php">Daftar Disini</a></p>
        </div>
    </div>
</body>
</html>