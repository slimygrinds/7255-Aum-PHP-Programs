<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $em = $_POST['em'];

    $stmt = mysqli_prepare($conn, "INSERT INTO student (firstname, lastname, email) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sss", $fn, $ln, $em);

    if (mysqli_stmt_execute($stmt)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>

<html>
<body>

<form method="POST">
    Enter The First Name
    <input type="text" name="fn" placeholder="First Name" required><br><br>

    Enter The Last Name
    <input type="text" name="ln" placeholder="Last Name" required><br><br>

    Enter The Email
    <input type="email" name="em" placeholder="Email" required><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>