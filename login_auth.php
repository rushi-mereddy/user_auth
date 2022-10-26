<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Login Auth</title>
</head>
<body>
    <?php
    ini_set('display_errors', 1);
    $conn = mysqli_connect("localhost", "root", 'Root$_1234', "registration")   or
        die("ERROR: Could not connect.".mysqli_connect_error());
    
    

    if(isset($_POST["submit"])) {
        // username and password sent from form 

                
        $email = ($_POST['email']);
        $password = ($_POST['password']); 
        $enc_pwd =md5($password);


        session_start();

        $_SESSION['email'] = $email;
        
        
        $sql = ("SELECT * FROM students WHERE email='$email' AND password='$enc_pwd'");
x
       $result = mysqli_query($conn, $sql);

       $num = mysqli_num_rows($result);
        
        $query = "SELECT * FROM students WHERE email='$email'";
        $qry_result = $conn->query($query);

        $user = mysqli_fetch_array($result);
        
        $_SESSION['name']= $user['name'];


    ?>

      <?php if($num == 1){
        header("Location: profile.php");
    } else {
            header("Location: login.php?error=Incorrect email or password.");
       }
     }
?>
    



    
</body>
</html>