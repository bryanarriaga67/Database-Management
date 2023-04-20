<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CS4342 Create Student</title>

    <!-- Importing Bootstrap CSS library https://getbootstrap.com/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div style="margin-top: 20px" class="container">
        <h1>Create Business</h1>
        <!-- styling of the form for bootstrap https://getbootstrap.com/docs/4.5/components/forms/ -->
        <form action="create_business.php" method="post">

            <div class="form-group">
                <label for="business_name">Business Name</label>
                <input class="form-control" type="text" id="business_name" name="business_name">
            </div>
            <div class="form-group">
                <label for="TIN">TIN</label>
                <input class="form-control" type="number" id="TIN" name="TIN">
            </div>
            <div class="form-group">
                <label for="last_name">ADA</label>
                <input class="form-control" type="text" id="ADA" name="ADA">
            </div>

            <div class="form-group">
                <label for="Type">Type</label>
                <input class="form-control" type="text" id="Type" name="Type">
            </div>

            <div class="form-group">
                <label for="Period">Period</label>
                <input class="form-control" type="text" id="Period" name="Period">
            </div>

            <div class="form-group">
                <label for="Email">Email</label>
                <input class="form-control" type="text" id="Email" name="Email">
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
            $sbusinessName = isset($_POST['business_name']) ? $_POST['business_name'] : " ";  
            $sTin = isset($_POST['TIN']) ? $_POST['TIN'] : " ";
            $sADA = isset($_POST['ADA']) ? $_POST['ADA'] : " ";
            $sType = isset($_POST['Type']) ? $_POST['Type'] : " ";
            $sPeriod = isset($_POST['Period']) ? $_POST['Period'] : " ";
            $sEmail = isset($_POST['Email']) ? $_POST['Email'] : " ";
            
            //Insert into Student table;
            
            $queryBusiness  = "INSERT INTO Business (BName,BTIN,BADA,Btype,BPeriod,BEmail)
                        VALUES ('".$sbusinessName."', '".$sTin."', '".$sADA."', '".$sType."', '".$sPeriod."','".$sEmail."');";

            // The query sent to the DB can be printed by not commenting the following row
            //echo $queryStudent;
            if ($conn->query($queryBusiness) === TRUE) {
            echo "<br> New record created successfully for Business ".$sbusinessName;
            } else {
                echo "<br> The record was not created, the query: <br>" . $queryBusiness . "  <br> Generated the error <br>" . $conn->error;
            }

            // To redirect the page to the student menu right after the query is executed, use the following statement 
            // header("Location: student_menu.php");
}
?>


</body>

</html>