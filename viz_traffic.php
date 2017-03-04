<!DOCTYPE html>
<html lang="en">
<head>
    <!--Page basics-->
    <title>Seattle Livability - Neighborhood Data</title>
    <meta name="description" content="View data on particular neighborhood in Seattle">

    <!--Load rest of page basics-->
    <?php include('include/supports.php') ?>

    <!--Tableau JS Supports-->
    <script type="text/javascript" src="https://public.tableau.com/javascripts/api/tableau-2.js"></script>
</head>
<body>

<!--HEADER-->
<?php include('include/header.php')?>

<?php
//Capture vars from query string
$neighborhoods = $_GET['neighborhoods'];
?>

<!--PAGE CONTENT-->
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php echo $neighborhoods;?>
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
