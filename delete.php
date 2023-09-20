<?php
$conn = mysqli_connect('localhost', 'root', '', 'contact_db');
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $delete = "DELETE FROM `contact_form` WHERE id= '" . $id . "' ";
    $result = mysqli_query($conn, $delete);
    if ($result) {
        header("Location:admin.html");
    } else {
        die(mysqli_error($conn));
    }

} else {
    header("Location:admin.html");
}
?>