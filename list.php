<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form data</title>
</head>
<body>
    <?php
        $conn = mysqli_connect ("localhost", "root", 'Root$_1234', "registration");

        if(!$conn){
            die(",b> ERROR: Could not connect. </b>"
            .mysqli_connect_error());
        }

        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            // echo " <b>Name:</b> " . $row["name"]. " <br> <b>Email:</b> " . $row["email"]. "<br> <b>Phone:</b> " . $row["phone"]. "<br> <b>Password: </b>".$row["password"] ."<br> <br>";
            
            echo "<table border='1px;'>
                <tr>
                <th> Id </th>
                <th> Name </th>
                <th> Email </th>

                </tr>";
                
                
                while($row = mysqli_fetch_array($result)){

                    echo "<tr>";
                    echo "<td>" .$row['id']. "</td>";
                    echo "<td>" .$row['name']."</td>";
                    echo "<td>" .$row['email']. "</td>";
                    // echo "<td>" .$row['password']. "</td>";
                    echo "</tr>";

                }
            echo "</table>";

        } else {
            echo "0 results";
        }

        mysqli_close($conn);
    ?>
</body>
</html>