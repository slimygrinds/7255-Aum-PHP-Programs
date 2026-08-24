<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Update record
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = intval($_POST['id']);
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $sql = "UPDATE student
            SET firstname='$firstname', lastname='$lastname'
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully.<br><br>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// Fetch records
$sql = "SELECT id, firstname, lastname FROM student";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
</head>
<body>

<h3>Student Records</h3>

<table border="2" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
    </tr>

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["firstname"]; ?></td>
        <td><?php echo $row["lastname"]; ?></td>
    </tr>
    <?php
        }
    } else {
        echo "<tr><td colspan='3'>No records found.</td></tr>";
    }
    ?>

</table>

<br>

<form method="POST">
    ID:
    <input type="number" name="id" required><br><br>

    First Name:
    <input type="text" name="firstname" required><br><br>

    Last Name:
    <input type="text" name="lastname" required><br><br>

    <input type="submit" value="Update">
</form>

</body>
</html>

<?php
mysqli_close($conn);
?>