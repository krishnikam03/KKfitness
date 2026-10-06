<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "kk_fitness";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $plan = $_POST['plan'];

    $sql = "INSERT INTO members (name, mobile, email, age, gender, plan)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssiss", $name, $mobile, $email, $age, $gender, $plan);

    if ($stmt->execute()) {
        echo "<h2>Registration Successful! 💪</h2>";
        echo "<p>Welcome to KK FITNESS.</p>";
        echo "<a href='payment.html'>Proceed to Payment</a>";
    } else {
        echo "Registration Failed: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();

?>