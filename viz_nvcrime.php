<!DOCTYPE html>
<html lang="en">
<head>
    <!--Page basics-->
    <title>Tableau - Traffic Incidents</title>
    <meta name="description" content="View traffic incident data for Seattle Neighborhoods">

    <!--Load rest of page basics-->
    <?php include('include/supports.php') ?>

    <?php
        //Capture vars from query string
        If (!empty($_GET['neighborhood'])) {
            $neighborhood = $_GET['neighborhood'];
        }
        else $neighborhood = "";
    ?>
    <!--Tableau JS Supports-->
    <script type="text/javascript" src="https://public.tableau.com/javascripts/api/tableau-2.js"></script>
    <script type="text/javascript">
        function initViz() {
            var containerDiv = document.getElementById("vizContainer"),
                url = "https://public.tableau.com/views/SeattleLivability_NonviolentCrimes/Dashboard3",
                options = {
                    "[Zone/Beat]" : "<?php echo $neighborhood?>",
                    hideTabs: true,
                    onFirstInteractive: function () {
                        console.log("Run this code when the viz has finished loading.");
                    }
                };

            var viz = new tableau.Viz(containerDiv, url, options);
            // Create a viz object and embed it in the container div.
        }

        var viz = new tableau.Viz(containerDiv, url, options);
        // Create a viz object and embed it in the container div.
    </script>
</head>
<body onload=initViz();>

<!--HEADER-->
<?php include('include/header.php')?>

<!--PAGE CONTENT-->
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php if($neighborhood != "") echo "<a href='viz_nvcrime.php'><h4 class='text-center'>Remove Filters</h4></a>"; ?>
            <div id="vizContainer" style="width:800px; height:1000px;"></div>
        </div>
    </div>
</div>

<!--FOOTER-->
<?php include('include/footer.php')?>
</body>
</html>
