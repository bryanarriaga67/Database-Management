<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CS4342 Create License</title>

    <!-- Importing Bootstrap CSS library https://getbootstrap.com/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div style="margin-top: 20px" class="container">
        <h1>Create License</h1>
        <!-- styling of the form for bootstrap https://getbootstrap.com/docs/4.5/components/forms/ -->
        <form action="create_license.php" method="post">

            <div class="form-group">
                <label for="LNumber">License Number</label>
                <input class="form-control" type="text" id="LNumber" name="LNumber">
            </div>

            <div class="form-group">
                <label for="LStatus">License Status</label>
                <input class="form-control" type="text" id="LStatus" name="LStatus">
            </div>
            <div class="form-group">
                <label for="LEYear">License Expiration Year</label>
                <input class="form-control" type="number" id="LEYear" name="LEYear">
            </div>

            <div class="form-group">
                <label for="LEMonth">License Expiration Month</label>
                <input class="form-control" type="text" id="LEMonth" name="LEMonth">
            </div>

            <div class="form-group">
                <label for="LEDay">License Expiration Day</label>
                <input class="form-control" type="text" id="LEDay" name="LEDay">
            </div>

            <div class="form-group">
                <label for="LIYear">License Issue Year</label>
                <input class="form-control" type="number" id="LIYear" name="LIYear">
            </div>

            <div class="form-group">
                <label for="LIMonth">License Issue Month</label>
                <input class="form-control" type="text" id="LIMonth" name="LIMonth">
            </div>

            <div class="form-group">
                <label for="LIDay">License Issue Day</label>
                <input class="form-control" type="text" id="LIDay" name="LIDay">
            </div>

            <div class="form-group">
                <label for="LCode">License Code</label>
                <input class="form-control" type="text" id="LCode" name="LCode">
            </div>
            
            <div class="form-group">
                <label for="BName">Business Name</label>
                <input class="form-control" type="text" id="BName" name="BName">
            </div>

             <div class="form-group">
                <label for="RegBName">Register Business Name</label>
                <input class="form-control" type="text" id="RegBName" name="RegBName">
            </div>

             <div class="form-group">
                <label for="AID">Agent ID</label>
                <input class="form-control" type="text" id="AID" name="AID">
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
        if (isset($_POST['Submit'])) {

    
            /**
             * Grab information from the form submission and store values into variables.
             */
            $LNumber = isset($_POST['LNumber']) ? $_POST['LNumber'] : " ";  
            $LStatus = isset($_POST['LStatus']) ? $_POST['LStatus'] : " ";
            $LEYear = isset($_POST['LEYear']) ? $_POST['LEYear'] : " ";
            $LEMonth = isset($_POST['LEMonth']) ? $_POST['LEMonth'] : " ";
            $LEDay = isset($_POST['LEDay']) ? $_POST['LEDay'] : " ";
            $LIYear = isset($_POST['LIYear']) ? $_POST['LIYear'] : " ";
            $LIMonth = isset($_POST['LIMonth']) ? $_POST['LIMonth'] : " ";
            $LIDay = isset($_POST['LIDay']) ? $_POST['LIDay'] : " ";
            $LCode = isset($_POST['LCode']) ? $_POST['LCode'] : " ";
            $BName = isset($_POST['BName']) ? $_POST['BName'] : " ";
            $RegBName = isset($_POST['RegBName']) ? $_POST['RegBName'] : " ";
            $AID = isset($_POST['AID']) ? $_POST['AID'] : " ";

            
            //Insert into Student table;
            
            $queryLicense  = "INSERT INTO License (LNumber, LStatus, LEYear, LEMonth, LEDay, LIYear, LIMonth, LIDay, LCode, BName, RegBName, AID)
                        VALUES ('".$LNumber."', '".$LStatus."', '".$LEYear."', '".$LEMonth."', '".$LEDay."','".$LIYear."', ".$LIMonth."', '".$LIDay."', '".$LCode."', '".$BName."', '".$RegBName."' , '".$AID."');";

            // The query sent to the DB can be printed by not commenting the following row
            //echo $queryStudent;
            if ($conn->query($queryLicense) === TRUE) {
            echo "<br> New record created successfully for license ".$LNumber;
            } else {
                echo "<br> The record was not created, the query: <br>" . $queryLicense . "  <br> Generated the error <br>" . $conn->error;
            }

            // To redirect the page to the student menu right after the query is executed, use the following statement 
            // header("Location: student_menu.php");
}
?>


</body>

</html>