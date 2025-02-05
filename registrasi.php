<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST["submit"])){
            $fullName = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $konfirpassword = $_POST["konfir_password"];

            $passwordHash = password_hash($password, PASSWORD_DEFAULT );
            $errors = array();
            if (empty($fullName) or empty($email) or empty($password) or empty($konfirpassword)){
                array_push($errors, "semua bidang wajib diisi");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                array_push($errors, "emailnya tidak valid");
            }
            if (strlen($password)<8){
                array_push($errors, "password harus minimal 8 karakter");
            }
            if ($password!==$konfirpassword){
                array_push($errors, "kata sandi tidak cocok");
            }
            if (count($errors)>0){
               foreach($errors as $error){
                echo "<div class='alert alert-denger'>$error</div>";
               } 
            } else{
                require_once "koneksi.php";
                $sql = "INSERT INTO pengguna (full_name, email, password) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                if ($prepareStmt){
                    mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-succes'>Anda berhasil mendaftar.</div>";
                }else{
                    die("Koneksi gagal: " . mysqli_connect_error());
                }
            }
        }
       

        ?>
        <form action="registrasi.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="konfir_password" placeholder="Konfir Password:">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
        <div><p>Sudah Punya Akun? <a href="login.php">Login Disini</a></p>
    </div>
</body>
</html>