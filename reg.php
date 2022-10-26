<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
</head>
<body>

<?php   
    ini_set('display_errors', 1);
    $conn = mysqli_connect("localhost", "root", 'Root$_1234', "registration")or
    die("ERROR: Could not connect.".mysqli_connect_error());


if(isset($_POST['submit']) ) {
    // $ID = $_REQUEST['id'];
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $password1 =md5($_POST['password1']);
    $password2 = md5($_POST['password2']);
    // $image =($_POST['image']);

    $sql = ("SELECT email FROM students WHERE email='$email'");

    $result = mysqli_query($conn,$sql);


    if(mysqli_num_rows($result) > 0){
        // echo "Email already exists". die( mysqli_query());
        header("Location:register.php?error=Email already exists");
    } else{

    

    if($password1 != $password2){ 
        header("Location:register.php?error=Two passwords doesn't match");
    } else {

    // if(!empty($_FILES['image']['name'])){
    //     $fileName = basename($_FILES['image']['name']);
    //     $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

    //     $allowTypes = array('jpg', 'jpeg', 'png');
    //     if(in_array($fileType, $allowTypes)){
    //         $image = $_FILES['image']['tmp_name'];
    //         $img_content = addslashes(file_get_contents($image));
    //     }
    // }

$sql = "INSERT INTO students (name, email, password) VALUES ('$name', '$email', '$password1')"
or die(mysqli_error());

if(mysqli_query($conn, $sql)){
    echo "<div style='text-align: center; margin-top: 100px;'>";
    echo "<h3> Registered Successfully";

    echo nl2br("\n <br> Hello $name <br>");

    echo (" You can <a href='login.php'> Login </a> to you account now!");

    echo "</div>";
    
}

else{
     echo "<b>ERROR: Data storing unsuccessful</b>"
    . die(mysqli_error());
}

}

}
}

mysqli_close($conn);




    ?>


</body>
</html>
