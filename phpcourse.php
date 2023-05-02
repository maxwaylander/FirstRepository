<?php
print_r($_POST);
$lab = $_POST['lab'];
if (isset($_GET['l'])){
    header('Location: ' . 'phpcourse.php?l=' . $lab);
    exit();
}

?>