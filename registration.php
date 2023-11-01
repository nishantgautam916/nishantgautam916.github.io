<!DOCTYPE html>
<html>
<head>
    <title>Registration Result</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Registration Result</h1>
        <div class="text-center">
            <?php
            if (isset($_POST['usernamea']) && isset($_POST['passworda'])) {
                $usernamea = $_POST['usernamea'];
                $passworda = $_POST['passworda'];
                
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "rental";
                $conn = mysqli_connect($servername, $username, $password, $database);
                
                $sql = "INSERT INTO `user credentials` (`username`, `password`) VALUES ('$usernamea', '$passworda')";
                $result = mysqli_query($conn, $sql);
                
                if ($result) {
                    echo "Registered successfully";
                } else {
                    echo "This username already exists. Please try another one.";
                }
            } else {
                echo "Please fill in all details";
            }
            ?>
        </div>
    </div>
</body>
</html>

