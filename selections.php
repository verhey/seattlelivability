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
<!--Init Bootstrap tooltips-->
<script type="text/javascript">
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>


<!--PAGE CONTENT-->
<div class="container">
    <!--Form header-->
    <div class="col-12 text-left">
        <div class="row">
            <h2 class="text-center">Tell us about yourself:</h2>
            <p class="text-center">
                <i> In order to make recommendations, we need to know what you're interested in:</i>
            </p>
            <hr>
        </div>

        <!--Load in JS to handle "template" picking"-->
        <script src="js/main.js"></script>
        <div class="row">
            <!--Template options-->
            <div class="col-sm-6 text-center">
                <div>
                    <h3>Let Us Pick For You:</h3>
                    <p><i> Less Accurate: We'll try and guess what you'd like</i></p>
                </div>
                <br>
                <form name="templates">
                    <h4>I am a:</h4>
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-primary">
                            <input type="radio" name="options" id="student" onchange=setStudent()> Student
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" name="options" id="professional" onchange=setProfessional()> Professional
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" name="options" id="parent" onchange=setParent()> Parent
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" name="options" id="retiree" onchange=setRetiree()> Retiree
                        </label>
                    </div>
                </form>
            </div>


            <div class="col-sm-6 text-center">
                <h3>Show Me A Neighborhood With:</h3>
                <p><i> More Accurate: You tell us exactly what you'd like:</i></p>
                <br>

                <form method="get" id="neighborhoodoptions" class="text-center" action="data.php">

                    <!--Left panel-->
                    <div class="col-sm-4">
                        <!--Traffic-->
                        <a href="#" data-toggle="tooltip" title="Understand higher traffic often means a higher number of restaurants, social activity, etc.">
                            <h4 class="text-center">Traffic:</h4>
                        </a>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary" id="labelTrafHigh">
                                <input type="radio" name="traffic" value="high" id="inputTrafHigh"> High
                            </label>
                            <label class="btn btn-primary" id="labelTrafLow">
                                <input type="radio" name="traffic" value="low" id="inputTrafLow"> Low
                            </label>
                        </div>
                        <!--Walkability-->
                        <a href="#" data-toggle="tooltip" title="The more walkable the neighborhood, the more restaurants and shops are nearby.">
                            <h4 class="text-center">Walkability:</h4>
                        </a>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary" id="labelWalkHigh">
                                <input type="radio" name="walkability" value="high" id="inputWalkHigh"> High
                            </label>
                            <label class="btn btn-primary" id="labelWalkLow">
                                <input type="radio" name="walkability" value="low" id="inputWalkLow"> Low
                            </label>
                        </div>
                    </div>

                    <!--Middle panel-->
                    <div class="col-sm-4">
                        <!--Rent Prices:-->
                        <a href="#" data-toggle="tooltip" title="Generally, the higher the housing prices, the more bars, restaurants, etc. are nearby.">
                            <h4 class="text-center">Rent Prices:</h4>
                        </a>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary" id="labelRentHigh">
                                <input type="radio" name="rent" value="high" id="inputRentHigh"> High
                            </label>
                            <label class="btn btn-primary" id="labelRentLow">
                                <input type="radio" name="rent" value="low" id="inputRentLow"> Low
                            </label>
                        </div>
                        <!--Housing Prices:-->
                        <a href="#" data-toggle="tooltip" title="Generally, the higher the housing prices, the more schools, parks, etc. are nearby.">
                            <h4 class="text-center">Housing Prices:</h4>
                        </a>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary" id="labelHouseHigh">
                                <input type="radio" name="housing" value="high" id="inputHouseHigh"> High
                            </label>
                            <label class="btn btn-primary" id="labelHouseLow">
                                <input type="radio" name="housing" value="low" id="inputHouseLow"> Low
                            </label>
                        </div>
                    </div>

                    <!--Right column-->
                    <div class="col-sm-4">
                        <!--Violent Crime-->
                        <a href="#" data-toggle="tooltip" title="Obviously nobody wants lots of violent crime. But bars, clubs, or other forms of fun often lead to an upward trend in violent crime in neighborhoods. Something to think about...">
                            <h4 class="text-center">Violent Crime:</h4>
                        </a>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary" id="labelVCHigh">
                                <input type="radio" name="violentcrime" value="high" id="inputVCHigh"> High
                            </label>
                            <label class="btn btn-primary" id="labelVCLow">
                                <input type="radio" name="violentcrime" value="low" id="inputVCLow"> Low
                            </label>
                        </div>
                        <!--Non-violent Crime-->
                        <a href="#" data-toggle="tooltip" title="Petty crime, property crime, etc. The walkability of a neighborhood is usually directly correlated with its crime rate.">
                            <h4 class="text-center">Non-Violent Crime:</h4>
                        </a>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary" id="labelNVCHigh">
                                <input type="radio" name="nonviolentcrime" value="high" id="inputNVCHigh"> High
                            </label>
                            <label class="btn btn-primary" id="labelNCVLow">
                                <input type="radio" name="nonviolentcrime" value="low" id="inputNVCLow"> Low
                            </label>
                        </div>
                    </div>

                    <!--Submit button-->
                    <div class="col-sm-12 text-center">
                        <br>
                        <input type="submit" class="btn btn-lg" value="Show Results">
                        <input type="button" class="btn btn-lg" value="Reset" onclick=clearSelections()>
                    </div>
                </form>
            </div>
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
