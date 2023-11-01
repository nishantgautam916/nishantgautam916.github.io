<!DOCTYPE html>
<html>
<head>
    <title>Data Result</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Data Result</h1>
        <div class="text-center">
            <?php
            if (isset($_POST['number'])){
                $model = $_POST['model'];
                $number = $_POST['number'];
                $seats = $_POST['seats'];
                $rent = $_POST['rent'];

                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "rental";
                $conn = mysqli_connect($servername, $username, $password, $database);

                $sql = "INSERT INTO `user credentials` (`model`, `number`, `seats`, `rent`) VALUES ('$model', '$number', '$seats', '$rent');";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo "Registered successfully";
                } else {
                    echo "Couldn't add the data: " . mysqli_error($conn);
                }
            } else {
                echo "Please fill in all details";
            }
            ?>
        </div>
    </div>
</body>
</html>
