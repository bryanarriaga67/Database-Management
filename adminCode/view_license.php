<?php
/*
* Reference for tables: https://getbootstrap.com/docs/4.5/content/tables/
*/

session_start();
require_once('../config.php');
require_once('../validate_session.php');
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Importing Bootstrap CSS library https://getbootstrap.com/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <?php $sql = "SELECT * FROM License";
    if ($result = $conn->query($sql)) {
    ?>
        <table class="table" width=50%>
            <thead>
                <td> LNumber</td>
                <td> LStatus</td>
                <td> LEYear</td>
                <td> LEMonth</td>
                <td> LEDay</td>
                <td> LIYear</td>
                <td> LIMonth</td>
                <td> LIDay</td>
                <td> LCode</td>
                <td> BName</td>
                <td> RegBName</td>
                <td> AID</td>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_row()) {
                ?>
                    <tr>
                    <td><?php printf("%s", $row[0]); ?></td>
                        <td><?php printf("%s", $row[1]); ?></td>
                        <td><?php printf("%s", $row[2]); ?></td>
                        <td><?php printf("%s", $row[3]); ?></td>
                        <td><?php printf("%s", $row[4]); ?></td>
                        <td><?php printf("%s", $row[5]); ?></td>
                        <td><?php printf("%s", $row[6]); ?></td>
                        <td><?php printf("%s", $row[7]); ?></td>
                        <td><?php printf("%s", $row[9]); ?></td>
                        <td><?php printf("%s", $row[9]); ?></td>
                        <td><?php printf("%s", $row[10]); ?></td>
                        <td><?php printf("%s", $row[11]); ?></td>
                        <td><a href="update_student_interface.php?Sid=<?php echo $row[0] ?>">Update</a></td>
                        <td><a href="delete_student.php?Sid=<?php echo $row[0] ?>">Delete</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php
    }
    ?>
    <!-- Link to return to student_menu-->
    <a href="admin_menu.php">Back to Admin Menu</a><br>
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>