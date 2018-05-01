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
<div id="main-contents">
    <p>This is task 2</p>
<?php

	/**
	 * @param string $value
	 *
	 * @return string
	 */

///////////////////Task 2A///////////////////

    echo "<br />Task 2A<br />";

    function calcIt($value1, $value2, $value3){
	    $total = $value1 + $value2 - $value3;
	    return $total;
    }

    $val1 = 30;
    $val2 = 6;
    $val3 = 3;

    echo "<p>The result of the calculation is " . calcIt($val1, $val2, $val3) . ". </p>";


////////////////////task 2B//////////////////

    function toppings(){
	    // form
	    echo "<form action='task2.php' method='post'>
			    <input type='checkbox' name='pizza[]' value='Pepperoni'/> Pepperoni<br>
			    <input type='checkbox' name='pizza[]' value='Mushrooms'/> Mushrooms<br>
			    <input type='checkbox' name='pizza[]' value='Olives'/> Olives<br>
			    <input type='checkbox' name='pizza[]' value='Pineapple'/> Pineapple<br>
			    <input type='submit' value='Submit Selection' name='submit' />
		    </form>";

	    // lets get the data from the form using an array
	    @$toppings = $_POST['pizza'];
	    @$pizza1 = $toppings[0];
	    @$pizza2 = $toppings[1];
	    @$pizza3 = $toppings[2];
	    @$pizza4 = $toppings[3];

	    // and when the button is clicked
	    if(isset($_POST["submit"])){
		    if (isset($_POST['pizza'])){
			    $toppings = $_POST['pizza'];
			    foreach ($toppings as $key => $val){
				    echo $val . '<br/>';
			    }
		    }else {
			    echo 'No toppings were selected';
		    }
	    }
    }
    // now we call the function
    echo "<p>". toppings(). "</p>";

//////////////////////////Task 2C///////////////////

    echo "Task 2C<br />";

    function var_func(){
	    echo "There were " . func_num_args() . " numbers passed: " . "<br />"; // the number of argument
	    $count = func_num_args();
	    for($i = 0; $i < $count; $i++){
		    $num = $i + 1; // use to the number the argument
		    echo "Number " . "$num" . " = " . func_get_arg($i) . ".<br />";
	    }
    }

    var_func(1, 2, 3, 4, 5);

//////////////////////////Task 2D/////////////////////

    echo "<br />Task 2D<br />";

    var_func(16, 18, 20);


?>




</div>
<footer>
    <p>N Sheik</p>
</footer>
</body>
</html>