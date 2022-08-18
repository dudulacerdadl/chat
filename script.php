<?php
if (!empty($_POST)) {
    file_put_contents('test.txt', $_POST['digitar']);
}
?>