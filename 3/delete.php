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

// Delete record
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $n = intval($_POST['n']);

    $sql = "DELETE FROM student WHERE id = $n";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully.<br><br>";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

// Fetch records
$sql = "SELECT id, firstname, lastname FROM student";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Student</title>
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

        while($row = mysqli_fetch_assoc($result)) {
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
    Enter ID to Delete:
    <input type="number" name="n" required>
    <input type="submit" value="Delete">
</form>

</body>
</html>

<?php
mysqli_close($conn);
?>