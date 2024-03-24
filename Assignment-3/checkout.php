<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Edit Payment Information - PayDude™</title>
		<link rel="stylesheet" href="css/styles.css" />
	</head>
	<body>
		<header>
			<h1><em>Slice</em>Symphony</h1>
		</header>
		<main>
			<h2>Your order is now processed! Please wait to receive your pizza</h2>
<?php
    /* All form elements must be checked - that required information is present and that all form data
    is in the correct format. Security checks must also be made before database queries are made */

	// STEP 16: Set a variable to capture the first name from the submitted form, using the GET array and the fname value

	$fullName = $_GET['fullName'];
	$bigpizza = $_GET['bigpizza'];
	$midpizza = $_GET['midpizza'];
	$smolpizza = $_GET['smolpizza'];
	$toppings = $_GET['toppings'];
	$carryout = $_GET['carryout'];
	$delivery = $_GET['delivery'];
	$slicebig = $_GET['slicebig'];
	$slicemid = $_GET['slicemid'];
	$slicesmol = $_GET['slicesmol'];
	$address = $_GET['address'];
	$crusttype = $_GET['crustType'];
	$phoneNum = $_GET['phoneNum'];
	$email = $_GET['email'];
	
	
	// STEP 18: Set a variable to capture the last name from the submitted form, using the GET array and the lname value

	// STEP 20: Capture the Alert Settings from the submitted form, using the GET array and the alert value
	//$alert = $_GET['alert'];
	//echo('<p>Your alert choices are: ' .$alert[0].'and '.$alert[1]'and'.$alert[2].'</p>');
	/*echo('<p>Here are a list of toppings you selected:<p>');
	foreach ($toppings as $listItem){
		echo('<li>'.$listItem.'</li>');
	}
	
	echo('</ul>');
	*/
	if (isset($_GET['toppings'])) {
		$selectedToppings = $_GET['toppings'];
		$toppingLabels = [
			'blackol' => 'Black Olives',
			'ched' => 'Cheddar Cheese',
			'jala' => 'Jalapeno',
			'greenpep' => 'Green pepper',
			'pinapp' => 'Pineapple',
			'bananpep' => 'Banana Pepper',
			// Add more toppings here
		];
		echo '<p>Here are the toppings you selected:</p>';
		foreach ($selectedToppings as $topping) {
			if (isset($toppingLabels[$topping])) {
				echo '<li>' . htmlspecialchars($toppingLabels[$topping]) . '</li>';
			}
		}
		
		echo '</ul>';
	} else {
		echo '<p>No toppings selected.</p>';
	}
		
		//echo '<ul>';
		
	if ($_SERVER["REQUEST_METHOD"] === "GET") {
		if (isset($_GET["shapepizza"])) {
			$selectedShape = $_GET["shapepizza"];
		
	// STEP 17: Output a friendly message to confirm that everything went well, including the $fname variable in a paragraph
	echo('<p>Thanks for your order! '.$fullName.' - your order of '.$bigpizza.' larges with '.$slicebig.' slices, '.$midpizza.' mediums with '.$slicemid.' slices , and '.$smolpizza.' smalls with '.$slicesmol.' slices with the above toppings is placed The shape you chose for your pizza is '.$selectedShape.' and '.$crusttype.'. You wished to recieve your pizza through means of '.$carryout.''.$delivery.' Please wait patiently as your pizza is completed!</p>');
} else {
	echo ("<p>You didn't select a pizza shape.<p>");
}
}
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET["delivery_option"]) && $_GET["delivery_option"] === "delivery") {
        // Handle delivery
        $address = $_GET["address"]; // You should retrieve the address from the form data.
		$DelInstruct = $_GET["DelInstruct"];
        echo('<p>Your delivery to '.$address.' will be there in around 20-30 minutes. delivery instructions are ' .$DelInstruct. ' <p>');
    } else {
        // Handle pickup
        echo('<p>Please pick your order up in 10-15 minutes<p>');
    }
}
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET["crusttype"])) {

        $crusttype = $_GET["crusttype"];
		if ($crusttype === "Reg") {
            $crusttype = "Regular";
        }
		else if($crusttype === "Crun") {
            $crusttype = "Cracker crust";
        }
		else if($crusttype === "Pan") {
            $crusttype = "Deep Dish";
        }
		else if($crusttype === "Thin") {
            $crusttype = "Thin crust";
        }
		
        echo "You selected: " . $crusttype;
    } else {
        echo "No crust type selected.";
    }
} else {
    echo "Form not submitted.";
}
	// STEP 19: Update the above paragraph to now include the last name

	/*echo('<p>The Alert Settings you have chosen include the following notifications:</p>
	<ul>');
		// STEP 21: The checkboxes for the Alert Settings will be sent as an array (as there could be more than one option checked by the user - so we need to loop through each item with a FOREACH loop)
		foreach ($alert as $listItem){
			echo('<li>'.$listItem.'</li>');
		}
	echo('</ul>');*/
?>
		</main>
        <footer>
            <p><small>©Slice Symphony Ltd. All rights reserved</small></p>
        </footer>
	</body>
</html>