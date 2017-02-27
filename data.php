<!DOCTYPE html>
<html lang="en">
<head>
    <!--Page basics-->
    <title>Seattle Livability - Neighborhood Data</title>
    <meta name="description" content="View data on particular neighborhood in Seattle">

    <!--Load rest of page basics-->
    <?php include('include/supports.php') ?>

    <!--DB Connection-->
    <?php include('include/connection.php') ?>

    <!--Tableau JS Supports-->
    <script type="text/javascript" src="https://public.tableau.com/javascripts/api/tableau-2.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
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
?>


<!--PAGE CONTENT-->
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php
                //Debug - show user input
                echo "Traffic: $traffic <br>";
                echo "Housing: $housing <br>";
                echo "Walk: $walk <br>";
                echo "Nonviolent Crime: $nvCrime <br>";
                echo "Rent: $rent <br>";
                echo "Violent Crime: $violentCrime <br>"
            ?>
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
