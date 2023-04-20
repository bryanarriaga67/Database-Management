<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CS4342 Create Employee</title>

    <!-- Importing Bootstrap CSS library https://getbootstrap.com/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div style="margin-top: 20px" class="container">
        <h1>Create Employee</h1>
        <!-- styling of the form for bootstrap https://getbootstrap.com/docs/4.5/components/forms/ -->
        <form action="create_license.php" method="post">

            <div class="form-group">
                <label for="ESSN">Employee SSN</label>
                <input class="form-control" type="text" id="ESSN" name="ESSN">
            </div>

            <div class="form-group">
                <label for="EGender">Employee Gender</label>
                <input class="form-control" type="text" id="EGender" name="EGender">
            </div>
            <div class="form-group">
                <label for="EPosition">Employee Position</label>
                <input class="form-control" type="text" id="EPosition" name="EPosition">
            </div>

            <div class="form-group">
                <label for="EPay">Employee Pay</label>
                <input class="form-control" type="number" id="EPay" name="EPay">
            </div>

            <div class="form-group">
                <label for="EDay">Day</label>
                <input class="form-control" type="text" id="EDay" name="EDay">
            </div>

            <div class="form-group">
                <label for="EMonth">Month</label>
                <input class="form-control" type="text" id="EMonth" name="EMonth">
            </div>

            <div class="form-group">
                <label for="EYear">Year</label>
                <input class="form-control" type="text" id="EYear" name="EYear">
            </div>

            <div class="form-group">
                <label for="BName">Business Name</label>
                <input class="form-control" type="text" id="BName" name="BName">
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
            $Essn = isset($_POST['ESSN']) ? $_POST['ESSN'] : " ";  
            $Egender = isset($_POST['EGender']) ? $_POST['EGender'] : " ";
            $Eposition = isset($_POST['EPosition']) ? $_POST['EPosition'] : " ";
            $Epay = isset($_POST['EPay']) ? $_POST['EPay'] : " ";
            $Eday = isset($_POST['EDay']) ? $_POST['EDay'] : " ";
            $Emonth = isset($_POST['EMonth']) ? $_POST['EMonth'] : " ";
            $Eyear = isset($_POST['EYear']) ? $_POST['EYear'] : " ";
            $Bname = isset($_POST['BName']) ? $_POST['BName'] : " ";
            
            
            //Insert into Student table;
            
            $queryEmployee  = "INSERT INTO Employee (ESSN, EGender, EPosition, EPay, EDay, EMonth, EYear, BName)
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