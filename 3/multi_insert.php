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

    $fn = trim($_POST['fn']);
    $ln = trim($_POST['ln']);
    $em = trim($_POST['em']);

    $stmt = mysqli_prepare($conn, "INSERT INTO student (firstname, lastname, email) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sss", $fn, $ln, $em);

    if (mysqli_stmt_execute($stmt)) {

        // Redirect to the same page after successful insert
        header("Location: " . $_SERVER['PHP_SELF'] . "?success=1");
        exit();

    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

<?php
if (isset($_GET['success'])) {
    echo "<p style='color:green; font-weight:bold;'>
            Student record inserted successfully.
          </p>";
}
?>

<form method="POST">

    <label>Enter First Name</label><br>
    <input type="text" name="fn" placeholder="First Name" required>
    <br><br>

    <label>Enter Last Name</label><br>
    <input type="text" name="ln" placeholder="Last Name" required>
    <br><br>

    <label>Enter Email</label><br>
    <input type="email" name="em" placeholder="Email" required>
    <br><br>

    <input type="submit" value="Submit">

</form>

</body>
</html>