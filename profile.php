<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <title>Profile</title>
</head>
<body>

<?php session_start();
    if (isset($_SESSION['name'])){  
?>
    
        <div class="main">
            <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                    </li>
                    
                </ul>
                <form class="" role="logout">
                
                    <a href="logout.php"> <button class="btn btn-outline-success" type="button">Logout</button></a>
                </form>
                </div>
            </div>
            </nav>

            <div class="body">
                <div class="text-center"> 
            
                        <img src="<?php echo ($user['image']); ?>" width = "100px" height = "100px" style="border-radius: 50%;"/> 
                </div>
                
                <h1 class="fw-bold text-center mt-4">  <?php echo "Hi Mr." .$_SESSION['name']; ?> </h1>


            </div>
        </div> 

        <?php } else {
            header("Location:login.php?error=login to continue");
        }

        ?>

</body>
</html>