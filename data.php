<!DOCTYPE html>
<html lang="en">
<head>
    <!--Page basics-->
    <title>Results</title>
    <meta name="description" content="Form results - Seattle Livability">

    <!--Load rest of page basics-->
    <?php include('include/supports.php') ?>

    <!--DB Connection-->
    <?php
        include_once('include/connection.php');
        $link = fConnectToDatabase();
        include('include/gets.php');
    ?>
</head>
<body>

<!--HEADER-->
<?php include('include/header.php')?>

<?php
    if (
    empty($_GET['traffic'])
    OR empty($_GET['housing'])
    OR empty($_GET['walkability'])
    OR empty($_GET['nonviolentcrime'])
    OR empty($_GET['rent'])
    OR empty($_GET['violentcrime'])
    ) {
        echo "<div class='container text-center'>";
        echo "<img src='img/chris.png' class='center-block'>";
        echo "<h1>Please Enter All Your Preferences!</h1>";
        echo "<h2>If you don't, we can't give you accurate information!</h2><br>";
        echo "<input type='button' class='btn btn-lg text-center' value='Take Me Back'>";
        die();
    }

    //Capture vars from query string first
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
            <h1 class="text-center">Your Results:</h1><hr>

            <!--View Traffic Results-->
            <h3 class="text-center">Traffic: <?php echo ucfirst($traffic);?>est Incidents</h3>
                <table class="table table-sm">
                    <thead>
                    <tr>
                        <th>Neighborhood</th>
                        <th class="text-center">Traffic Incidents</th>
                        <th class="text-center">View In Tableau</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php fGetTraffic($link, $traffic);?>
                    </tbody>
                </table>

            <!--View Housing Results-->
            <hr>
            <h3 class="text-center">Housing: <?php echo ucfirst($housing);?>est Prices</h3>
                <table class="table table-sm">
                    <thead>
                    <tr>
                        <th>Neighborhood</th>
                        <th class="text-center"><a target="_blank" href="https://www.zillow.com/research/zhvi-methodology-6032/">ZHVI</a></th>
                        <th class="text-center">ZHVI Rank</th>
                        <th class="text-center">View In Tableau</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php fGetHousing($link, $housing);?>
                    </tbody>
                </table>

            <!--View Walk Score Results-->
            <hr>
            <h3 class="text-center">Walkability: <?php echo ucfirst($walk);?>est Walk Scores</h3>
                <table class="table table-sm">
                    <thead>
                    <tr>
                        <th>Neighborhood</th>
                        <th class="text-center"><a target="_blank" href="https://www.walkscore.com/">Walk Score</a></th>
                        <th class="text-center">Number of Restaurants</th>
                        <th class="text-center">View In Tableau</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php fgetWalkability($link, $walk);?>
                    </tbody>
                </table>

            <!--View Non Violent Crime Results-->
            <hr>
            <h3 class="text-center">Non-Violent Crime: <?php echo ucfirst($nvCrime);?>est Number of Incidents</h3>
            <table class="table table-sm">
                <thead>
                <tr>
                    <th>Neighborhood</th>
                    <th class="text-center">Number of Incidents</th>
                    <th class="text-center">View In Tableau</th>
                </tr>
                </thead>
                <tbody>
                    <?php fgetNVCrime($link, $nvCrime);?>
                </tbody>
            </table>


            <!--View Rent Results-->
            <hr>
            <h3 class="text-center">Rent Prices: <?php echo ucfirst($rent);?>est Prices</h3>
            <table class="table table-sm">
                <thead>
                <tr>
                    <th>Neighborhood</th>
                    <th class="text-center"><a target="_blank" href="https://www.zillow.com/research/zillow-rent-index-methodology-2393/">ZRI</a></th>
                    <th class="text-center">ZRI Rank</th>
                    <th class="text-center">View In Tableau</th>
                </tr>
                </thead>
                <tbody>
                <?php fgetRent($link, $rent);?>
                </tbody>
            </table>

            <!--View Violent Crime Results-->
            <hr>
            <h3 class="text-center">Violent Crime: <?php echo ucfirst($violentCrime);?>est Number Of Incidents</h3>
            <table class="table table-sm">
                <thead>
                <tr>
                    <th>Neighborhood</th>
                    <th class="text-center">Number of Incidents</th>
                    <th class="text-center">View In Tableau</th>
                </tr>
                </thead>
                <tbody>
                    <?php fgetVCrime($link, $violentCrime);?>
                </tbody>
            </table>
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
