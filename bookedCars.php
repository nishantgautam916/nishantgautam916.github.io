<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center">Car Rental Booking</h1>
                <form method="post">
                    <div class="form-group">
                        <label for="days">Number of Days</label>
                        <input type="text" name="days" id="days" class="form-control" placeholder="Enter number of days" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Pickup Date</label>
                        <input type="date" name="date" id="date" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Book Car</button>
                </form>
                <?php
                if (isset($_POST['days']) && isset($_POST['date'])) {
                    $days = $_POST['days'];
                    $date = $_POST['date'];

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "rental";
                    $conn = mysqli_connect($servername, $username, $password, $database);

                    $sql = "INSERT INTO `booked`(`days`, `fromday`) VALUES ('$days', '$date')";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo "Rented successfully";
                    } else {
                        echo "Error";
                    }
                } else {
                    echo "Please fill in all details";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
