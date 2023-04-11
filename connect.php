<?php
    $Email = $_POST['Email'];
    $password = $_POST['password'];
    $mobilenumber = $_POST['mobilenumber'];


    $conn = new mysqli('localhost','root',','test');
    if($conn->connect_error){
        die('connection failed : '.$conn->connect_error');
    }else{
        $stmt = $conn->prepare("insert into registration(Email, Password, Mobilenumber)
            values(?,?,?)");
        $stmt->bind_param("ssi",$Email,$Password,$Mobilenumber);
        $stmt->execute();
        echo "login successfully...";
        $stmt->close();
        $conn->close();
}
?>