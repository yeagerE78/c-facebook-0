<?php
session_start();
include('conn.php');
if (isset($_POST['login'])) {
    try {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $stmt = $conn->prepare("SELECT * FROM user where email = :email");
        $stmt -> bindParam(':email' , $email);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row > 0){
            $h_password = $row['password'];
            if (password_verify($password,$h_password)){
                $_SESSION['user'] = $row['firstname'] .' ' .$row['lastname'];
                header("location:../main.php");
            }else{
                header("location:../index.php");
            }
        } else{
             header("location:../index.php");
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}; ?>
