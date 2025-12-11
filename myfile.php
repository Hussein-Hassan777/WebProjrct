<?php
include("myfile_backend.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table tr {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <table border="1" id="emp">
        <tr>
            <th>empno</th>
            <th>empname</th>
            <th>address</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row[0] . "</td>";
            echo "<td>" . $row[1] . "</td>";
            echo "<td>" . $row[2] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <form>
        <input type="text" id="no">
        <input type="text" id="name">
        <input type="text" id="address">
    </form>
    <script>
        var tbl = document.getElementById("emp");
        for (var x = 1; x < tbl.rows.length; x++) {
            tbl.rows[x].onclick = function () {
                document.getElementById("no").value = this.cells[0].innerHTNL;
                document.getElementById("name").value = this.cells[1].innerHTNL;
                document.getElementById("address").value = this.cells[2].innerHTNL;
            }
        }
    </script>
</body>

</html>