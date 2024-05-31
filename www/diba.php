<?php
// 二维数组，包含商品订货信息
$products = array(
    array("序号", "书名", "数量", "单价","总价"),
    array("1", "php编程", 200, 32.3,6460),
    array("2", "web编程", 300, 30.3,9090),
    array("3", "php编程", 150, 45,6750),
	array("4", "ASP编程", 500, 30,15000)
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品订货单</title>
</head>
<body>
    <h1>商品订货单</h1>
    <table border: none>
        <?php
        foreach ($products as $row) {
            echo "<tr>";
            foreach ($row as $cell) {
                echo "<td>$cell</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
   
</body>
</html>