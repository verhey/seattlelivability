<!DOCTYPE html>
<html lang="en">
<head>
    <!--Page basics-->
    <title>Seattle Livability - Neighborhood Data</title>
    <meta name="description" content="View data on particular neighborhood in Seattle">
    <?php include('include/supports.php') ?>
</head>
<body>

<!--HEADER-->
<?php include('include/header.php')?>

<!--PAGE CONTENT-->
<?php
    //traffic=high & housing=high & walkability=high & nonviolentcrime=high &rent=high &violentcrime=high
    //Capture vars from query string
    $traffic = $_GET['traffic'];
    $housing = $_GET['housing'];
    $walk = $_GET['walkability'];
    $nvCrime = $_GET['nonviolentcrime'];
    $rent = $_GET['rent'];
    $violentCrime = $_GET['violentcrime'];
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <?php
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
