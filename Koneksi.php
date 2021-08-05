<?php
    $nama = $_POST['username'];   //untuk memanggil string username  dari android
    $pass = $_POST['password'];  //untuk memanggil string password dari android
    require "koneksi.php";  // koneksi ke database
    $query = "SELECT * from table_login where userbame = '$nama' AND password = '$pass';";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
                   $response = array();
                   $code = "login_true";
                   $message = "Selamat Datang".$namas;
                   array_push($response, array("code"=>$code, "message"=>$message));
                echo json_encode(array("server_response"=>$response));
          }
 
           else
 
          {
 
                   $response = array();
 
                   $code = "login_false";
 
                   $message = "Maaf data anda belum terdaftar..!";
 
                   array_push($response, array("code"=>$code, "message"=>$message));
 
                   echo json_encode(array("server_response"=>$response));
 
           }
 
 
 
           mysqli_close($conn);
 
?>