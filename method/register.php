<?php
include('conn.php');

if (isset($_POST['register'])) {
    try {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $sql = 'INSERT INTO user (firstname,lastname,email,password) VALUES (:firstname,:lastname,:email,:password)';    
        $stmt = $conn->prepare($sql);
        $stmt -> bindParam(':firstname' , $firstname);
        $stmt -> bindParam(':lastname' , $lastname);
        $stmt -> bindParam(':email' , $email);
        $stmt -> bindParam(':password' , $password);
        $stmt -> bindParam(':firstname' , $firstname);
        if ($stmt->execute()){
            header("location:../index.php");
        };
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}; ?>
