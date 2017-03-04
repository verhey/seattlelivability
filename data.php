<!DOCTYPE html>
<html lang="en">
<head>
    <!--Page basics-->
    <title>Seattle Livability - Neighborhood Data</title>
    <meta name="description" content="View data on particular neighborhood in Seattle">

    <!--Load rest of page basics-->
    <?php include('include/supports.php') ?>

    <!--DB Connection-->
    <?php
        include_once('include/connection.php');
        $link = fConnectToDatabase();
    ?>

    <!--Tableau JS Supports-->
    <script type="text/javascript" src="https://public.tableau.com/javascripts/api/tableau-2.js"></script>
</head>
<body>

<!--HEADER-->
<?php include('include/header.php')?>

<?php
    //Capture vars from query string
    $traffic = $_GET['traffic'];
    $housing = $_GET['housing'];
    $walk = $_GET['walkability'];
    $nvCrime = $_GET['nonviolentcrime'];
    $rent = $_GET['rent'];
    $violentCrime = $_GET['violentcrime'];

    //Store values in cookie
    setcookie("SL_Options_Traffic", $traffic);
    setcookie("SL_Options_Housing", $housing);
    setcookie("SL_Options_Walk", $walk);
    setcookie("SL_Options_NVCrime", $nvCrime);
    setcookie("SL_Options_Rent", $rent);
    setcookie("SL_Options_VCrime", $violentCrime);
?>

<!--PAGE CONTENT-->
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php
                //Debug - Check DB connection
                if ($link->connect_error) {
                    die("Connection failed: " . $link->connect_error);
                }
                echo "Connected successfully";
                ?>
            <br>
            <h1>Your Results:</h1>
            <h3>Traffic: <?php echo $traffic?></h3>
                <p>
                    <?php
                        fGetTraffic($link, $traffic);
                    ?>
                </p>
            <h3>Housing: <?php echo $housing?></h3>
                <p>
                    <?php
                        fGetHousing($link, $housing);
                    ?>
                </p>
            <h3>Walkability: <?php echo $walk?></h3>
                <p>
                <?php
                        fgetWalkability($link, $walk);
                    ?>
                </p>
            <h3>Non-Violent Crime: <?php echo $nvCrime?></h3>
                <p>
                    <?php
                        fgetNVCrime($link, $nvCrime);
                    ?>
                </p>
            <h3>Rent Prices: <?php echo $rent?></h3>
                <p>
                    <?php
                        fgetRent($link, $rent);
                    ?>
                </p>
            <h3>Violent Crime: <?php echo $violentCrime?></h3>
                <p>
                    <?php
                        fgetVCrime($link, $violentCrime);
                    ?>
                </p>
        </div>
    </div>
</div>

<!--ABOUT CARDS-->
<?php include('include/aboutcards.php')?>
<br>

<!--FOOTER-->
<?php include('include/footer.php')?>
</body>
</html>
