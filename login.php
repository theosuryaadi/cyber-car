<?php 

require_once("dbconnect.php");
if(isset($_POST['login'])){

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM admin WHERE email_admin=:email OR pass_admin=:password";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":email" => $email,
        ":password" => $password
    );

    $stmt->execute($params);

    $admin = $stmt->fetch(PDO::FETCH_ASSOC);
    header("Location: home.php");

    // jika admin terdaftar
    if($admin){
        // verifikasi password
        if(password_verify($password, $admin["pass_admin"])){
            // buat Session
            session_start();
            $_SESSION["admin"] = $admin;
            // login sukses, alihkan ke halaman home
            header("Location: home.php");
        }
    }
}
?>