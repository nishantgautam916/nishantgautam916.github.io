<!DOCTYPE html>
<html>
<head>
    <title>Login Result</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Login Result</h1>
        <div class="text-center">
            <?php
            if (isset($_POST['usernameb']) && isset($_POST['passwordb')) {
                $usernameb = $_POST['usernameb'];
                $passwordb = $_POST['passwordb'];
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "rental";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql = "SELECT `username`, `password` FROM `user credentials` WHERE username ='$usernameb' AND password = '$passwordb'";
                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);
                
                if ($conn) {
                    echo "Connection successful<br>";
                } else {
                    echo "Connection error: " . mysqli_error($conn);
                }
                
                if ($num == 1) {
                    echo "Logged in";
                    header("Location: loggedcars.html");
                } else {
                    echo "Not logged in";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
