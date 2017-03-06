<!DOCTYPE html>
<html lang="en">
<head>
    <!--Page basics-->
    <title>Seattle Livability</title>
    <meta name="description" content="Find your neighborhood in Seattle">
    <?php include('include/supports.php') ?>
</head>
<body>

<!--HEADER-->
<?php include('include/header.php')?>

<!--PAGE CONTENT-->
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2>Seattle's Best... Neighborhoods</h2>
            <hr>
            <p>Are you thinking about moving to Seattle? Do you wonder what neighborhoods are most suitable for your needs? Based on crime, walkability, traffic, and cost, our tool allows you to explore what neighborhoods fulfills your needs.
            </p>
            <p>Utilizing a simple rating system of low or high, what you select dictates what is outputted. Do you want high walkability but low housing costs? Or is low crime and low walkability more important? Based on what you want, our tool gives you the top 5 neighborhoods and accompanying visualizations for you to explore at your pleasing.
            </p>
            <hr>
            <a href="selections.php"><input type="button" class="btn btn-lg" value="Find My Neighborhood"></a>
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
