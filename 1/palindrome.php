<?php
if (isset($_POST['n'])) {
    $n = $_POST['n'];
    $temp = $n;
    $rev = 0;

    while ($n > 0) {
        $rem = $n % 10;
        $rev = ($rev * 10) + $rem;
        $n = (int)($n / 10);
    }

    if ($temp == $rev) {
        echo "$temp is a Palindrome Number..!!";
    } else {
        echo "$temp is not a Palindrome Number..!!";
    }
}
?>

<form method="post">
    Enter The Number:
    <input type="number" name="n" required>
    <input type="submit" value="Check">
</form>