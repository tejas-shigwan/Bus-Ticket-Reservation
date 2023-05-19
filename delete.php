<?php
include("book_form.php");

$id = $_GET['id'];

$request = "DELETE FROM book_form WHERE id = '$id' ";
$result = mysqli_query($connection, $request);

if ($result) {
    echo "<script>alert('Ticket Cancelled')</script>";
?>
    
    <meta http-equiv="refresh" content="0; url = http://localhost/project/cancel.php" />
<?php
} else {
    "Failed to delete";
}
?>