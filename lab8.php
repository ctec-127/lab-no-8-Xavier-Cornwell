<!DOCTYPE html>
<html>

<head>
    <title>Temperature Converter</title>
    <!-- add boostrap css link -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
    <script src="jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php require  "inc/functions.inc.php"; ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="https://www.flickr.com">flickr <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.vimeo.com">vimeo</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="https://www.github.com">git</a>
                </li>
            </ul>

        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid bg-danger">
        <div class="container">
            <h1 class="display-4 text-light">Info about the temperature converter!</h1>
            <p class="lead text-light">Just select your unit from the select, then select the unit you want to convert it to. Next
                in the textbox type in the amount of the unit you want to convert
                its that simple!</p>
        </div>
    </div>

    <div id="wrapper" class="col-12 text-center bg-info">

        <h1 class="text-center">Temperature Converter</h1>
        <h4>CTEC 127 - PHP with SQL 1</h4>
        <div id="innerwrap">
            <form method="POST" class="col-12 row" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="section col-md-6 col-xs-12 card bg-success p-5">
                    <div>
                        <label for="temp" class="form-control-lg" >Temperature</label>
                        <input type="text" class="form-control-md"
                            value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>"
                            name="originaltemp" size="7" maxlength="7" id="temp">

                        <select name="originalunit" class="form-control-lg">
                            <option value="--Select--"
                                <?php if($originalUnit == "--Select--") echo ' selected="selected"';?>>
                                --Select--</option>
                            <option value="celsius" <?php if($originalUnit == "celsius") echo ' selected="selected"';?>>
                                Celsius
                            </option>
                            <option value="farenheit"
                                <?php if($originalUnit == "farenheit") echo ' selected="selected"';?>>
                                Farenheit</option>
                            <option value="kelvin" <?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>
                                Kelvin			
                            </option>
                        </select>
                    </div>
                </div>
                <div class="section col-md-6 col-xs-12 card bg-success p-5">
                    <div>
                        <label for="convertedtemp" class="form-control-lg" >Converted Temperature</label>
                        <input type="text"
                            value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>"
                            name="convertedtemp" size="7" maxlength="7" id="convertedtemp" readonly>

                        <select name="conversionunit" class="form-control-lg">
                            <option value="--Select--"
                                <?php if($conversionUnit == "--Select--") echo ' selected="selected"';?>>
                                --Select--</option>
                            <option value="celsius"
                                <?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>
                                Celsius</option>
                            <option value="farenheit"
                                <?php if($conversionUnit == "farenheit") echo ' selected="selected"';?>>
                                Farenheit</option>
                            <option value="kelvin" <?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>
                                Kelvin
                            </option>

                        </select>
                    </div>
                </div>
                
        <input class="btn btn-lg btn-warning mb-5 mt-5" type="submit" value="Convert" />
        </form>
		</div>
    </div><!-- end wrapper div-->
    <div class="col-12">
        <div class="row">
            <div class="card col-md-6 col-xs-12 bg-warning p-5">

				<h3 class="mb-2">Conversion Formulas</h3>
                <h4>Celsius conversion formulas</h4>
                <p>Celsius to Fahrenheit = T(°C) × 9/5 + 32 <br>
                    Celsius to Kelvin = T(°C) + 273.15</p>
                <h4>Fahrenheit conversion formulas</h4>
                <p>Fahrenheit to Celsius = (T(°F) - 32) × 5/9<br>
                    Fahrenheit to Kelvin = (T(°F) + 459.67)× 5/9</p>
                <h4>Kelvin conversion formulas</h4>
                <p>Kelvin to Fahrenheit = T(K) × 9/5 - 459.67 <br>
                    Kelvin to Celsius = T(K) - 273.15</p>
            </div>
            <div class=" card col-md-6 col-xs-12 bg-success p-5">

                <h3>Temperature Unit Info</h3>
                <p>Celsious, Fahrenheit, and Kelvin are ways to measure temperature. Kelvin unlike Celsious and
                    Farhenheit is based on an absolute scale. This makes it great for science aplications.
                    Celsious is based off of the boiling point and freezing point of water. Zero degrees is freezing
                    while 100 degrees is boiliing for water in celcious.
                    Farhenheit scale was based off of Romers scale. For Romers scale water boils at 60, brine freezes at
                    0 degrees, water freezes and melts at 7.5 degrees, and body temperature at 22.5. To get rid of the
                    fractions or decimals Farhenheit multiplied each of these values by 4. </p>
            </div>
        </div>
    </div>

</body>

</html>