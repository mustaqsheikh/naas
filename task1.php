<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My great web site</title>
    <meta name="description" content="My Assignment 3">
</head>
<body>
<?php include 'menu.inc'; ?>
<header>

</header>
<div id="main">


	<?php

	/**
	 * @param string $value
	 *
	 * @return string
	 */


//////////////Task 1A//////////////////

    echo "<br />Task 1A <br />";

	function trip($value = '1')
	{
		switch ($value)
		{

			case 1:
				echo "The light is on!";
				break;

			case 0:
				echo "The light is off!";
				break;


		}
	}

	// Producing the Output via way 1
	echo trip() . '<p> and now again </p>';

	// Producing the Output via way 2
    echo '<p>' . trip(1) . '</p>';


/////////////////Task 1B/////////////////

    function values($length, $height = 10, $width = 15) {
	    $statement = "The volume of the rectangle is ";
	    $volume = $length * $height * $width;
	    echo $statement . $volume;
    }

    // The 3 ways to call the function to produce the result of 150
    echo "<br /><br />Task 1B <br />";
    values(1);
    echo "<br />";
    values($myLength = 1);
    echo "<br />";
    values(1, 10, 15);
    echo "<br />";


/////////////////Task 1C/////////////////

    echo "<br />Task 1C <br />";

    function add_veggies(&$veggie_array) {
	    $values = func_get_args();
	    foreach($values as $value) {
		    $veggie_array = array(); // changes
		    $veggie_array[] = $value;
	    }
	    for($i = 0; $i < count($veggie_array); $i++) {
		    echo $veggie_array[$i] . "   ";
	    }
    }

    $broccoli = "broccoli";
    $beetroot = "beetroot";
    $spinach = "spinach";
    $carrot = "carrot";
    $beans = "beans";
    add_veggies($broccoli);
    add_veggies($beetroot);
    add_veggies($beans);
    add_veggies($spinach);
    add_veggies($carrot);

    echo "<br /><br />";

	?>


</div>
<footer>
    <p>N Sheik</p>
</footer>
</body>
</html>