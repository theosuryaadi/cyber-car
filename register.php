<?php
$nama = $_POST['name'];
$pass = $_POST['password'];
$email = $_POST['email'];

if(!empty($nama) || !empty($pass) || !empty($email)){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "showroom-mobil";


    //Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }else {
        $SELECT = "SELECT email_admin From admin Where email_admin = ? Limit 1";
        $INSERT = "INSERT Into admin (nama_admin, pass_admin, email_admin) values(?,?,?)";
        
        //prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum==0){
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sss", $nama,$pass,$email);
            $stmt->execute();
            echo "<script>alert('Yeeyy, Kamu berhasil register!');</script>";
        }else {
            echo "<script>alert('Email is already registered');</script>";
        }
        $stmt->close();
        $conn->close();    
    }

}else {
    echo "<script>alert('All field are required');</script>";
    die();
}
