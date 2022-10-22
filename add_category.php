<?php
require('connection.php');


?>


<!DOCTYPE html>
<html>

<head>
    <title>Add Category</title>
</head>

<body>

    <?php

    if (isset($_GET['category_name'])) {
        $category_name      = $_GET['category_name'];
        $category_entrydate =  $_GET['category_entrydate'];

        $sql =  "INSERT INTO category (category_name,category_entrydate) 
                  VALUES('$category_name','$category_entrydate')";

        if ($conn->query($sql) == TRUE) {
            echo 'Data Inserted';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    ?>
    <br>

    <form action="add_category.php" method="GET">
        Category:<br>
        <input type="text" name="category_name"><br><br>

        Category Entery Date:<br>
        <input type="date" name="category_entrydate"><br><br>

        <input type="submit" value="submit">
    </form>
</body>

</html>