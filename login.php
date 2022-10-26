<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Login</title>

    <style>

        body{
            background-image: url('https://img1.wsimg.com/isteam/stock/DxeZmJo');
            background-repeat: no-repeat;
            background-size: cover;
            /* height: 100vh; */
            margin: auto 0;
            position: relative;
            }

        .main{
                margin: auto;
            /* height: 500px; */
            padding: 20px;
            width: min-content;
            /* border: 1px solid #000000; */
            margin-top: 100px;
            background-color: #ffffffab;
            border-radius: 10px;
        }

        input{
            background-color: #ffffffab;
            border: none;
            padding: 3px; 
            width: 200px;
            margin: 10px auto;
        }

        @media screen and (max-width: 400px) {
            h1{
                font-size: 20px;
                width: 200px !important;
            }
        }

    </style>
</head>
<body>

    <div class="container">
    <h1 class="mt-5" style="text-align: center; text-transform: Uppercase; font-weight: bold; color: #ffffff; width: 398px; margin: auto; border-radius: 26px; padding: 5px; background-color: #000000;">Student corner</h1>

    <div class="main">

        <form action="login_auth.php" method="post">
            <h5 style="font-weight: bold; text-align: center;">Login Here</h5>
        
                <div class="form">

                    <input type="email" placeholder="Email" name="email" required>
                
                    <input type="password" placeholder="Password" name="password" required>

                    <a href="register.php" style="color: blue; float: right;"> Don't have an account? <a>

                    <?php if(isset($_GET['error'])) { ?>
            <div class="alert alert-danger" role="alert" style="background: none !important; color: red !important; border: none; padding: 0px;">
                    <?=$_GET['error'] ?>
            </div>
         <?php } ?>

                    <div class="button" style="text-align: center;">
                        <button class="btn btn-primary mt-3" name="submit">Login</button>
                    </div>
                </div>
        </form>
    </div>   
    </div> 

</body>
</html>