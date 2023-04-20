<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CS4342 Create Office</title>

    <!-- ImporOFFAddress g Bootstrap CSS library https://getbootstrap.com/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div style="margin-top: 20px" class="container">
        <h1>Create Office</h1>
        <!-- styling of the form for bootstrap https://getbootstrap.com/docs/4.5/components/forms/ -->
        <form action="create_office.php" method="post">

            <div class="form-group">
                <label for="OFFID">Office ID</label>
                <input class="form-control" type="number" id="OFFID" name="OFFID">
            </div>
            <div class="form-group">
                <label for="OFFAddress">Office Address</label>
                <input class="form-control" type="text" id="OFFAdress" name="OFFAdress">
            </div>
            <div class="form-group">
                <label for="OFFEmail">Office Email</label>
                <input class="form-control" type="text" id="OFFEmail" name="OFFEmail">
            </div>
            
            <div class="form-group">
                <input class="btn btn-primary" name='Submit' type="submit" value="Submit">
            </div>
        </form>
        <div>
            <br>
            <a href="admin_menu.php">Back to Admin Menu</a></br>
        </div>

        <!-- jQuery and JS bundle w/ Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    
    
    <?php
        session_start();
        require_once('../config.php');
        require_once('../validate_session.php');
        if (isset($_POST['Submit'])){

    
            /**
             * Grab information from the form submission and store values into variables.
             */
            $OFFID = isset($_POST['OFFID']) ? $_POST['OFFID'] : " ";  
            $OFFAddress = isset($_POST['OFFAddress']) ? $_POST['OFFAddress'] : " ";
            $OFFEmail = isset($_POST['OFFEmail']) ? $_POST['OFFEmail'] : " ";
            
            //Insert into Student table;
            
            $queryOffice  = "INSERT INTO Office (OFFID, OFFAddress, OFFEmail)
                        VALUES ('".$OFFID."', '".$OFFAddress."', '".$OFFEmail."');";

            // The query sent to the DB can be printed by not commenOFFAddress g the following row
            //echo $queryStudent;
            if ($conn->query($queryOffice) === TRUE) {
            echo "<br> New record created successfully for Business ".$OFFID;
            } else {
                echo "<br> The record was not created, the query: <br>" . $queryOffice . "  <br> Generated the error <br>" . $conn->error;
            }

            // To redirect the page to the student menu right after the query is executed, use the following statement 
            // header("Location: student_menu.php");
}
?>


</body>

</html>