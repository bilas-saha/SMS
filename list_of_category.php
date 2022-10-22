<?php
require('connection.php');


?>

<!DOCTYPE html>
<html>

<head>
    <title>List Of Category</title>
</head>

<body>

    <?php

    $sql = " SELECT * FROM category";

    $query = $conn->query($sql);

    echo "<table border='1'>
        <tr>
            <th>Category</th>
            <th>Date</th>
            <th>Action</th>
        </tr>";
    while ($data = mysqli_fetch_assoc($query)) {
        $category_id        = $data['category_id'];
        $category_name      = $data['category_name'];
        $category_entrydate = $data['category_entrydate'];

        echo
        "<tr>
            <th>$category_name</th>
            <th>$category_entrydate</th>
            <td>
                 <a href='edit_category.php?id=$category_id'>
                    Edit
                 </a>
            </td>
        </tr>";
    }
    echo "</table";

    ?>


</body>

</html>