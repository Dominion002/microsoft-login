<?php
include("connection.php");
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $sql="select * from signup where username='$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    // if($count_email == 0 ){
        // if($password != 0 ){
            // $hash = password_hash($password, PASSWORD_DEFAULT);
            // $sql = "INSERT INTO signup(email, password) VALUES ('$email', '$password')";
            // $result = mysqli_query($conn, $sql);
            if($result){
                header("Location: index2.php");
            }
        // }

    // }

    else{
        if($count_email>0){
            echo '<script>
            window.location.href="index.php"
            alert ("Email already exist!!")
            </script>';
        }
    }
}
?>