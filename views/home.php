<?php 
	//Setup
	session_start();
	require('banner.php');

	$brands = $_SESSION['brands'];
	$models = $_SESSION['models'];
	$selectedModel = null;
	
	if(isSet($_POST['brand'])){
		$selectedModel = $_POST['brand'];
		sort($models[$selectedModel]);
	}


	//View
	writeBanner();
	
	echo "<div class='container'>
			<br>
			<div class='row'>
				<div class='col'>";
					writeBrandSelectionForm($brands, $selectedModel);
				echo "</div>
				<div class='col'>";
					writeCarSelectionForm($models, $selectedModel);
				echo "</div>
			</div>";
	
	
	
	// Functions
	function writeBrandSelectionForm($brands, $selectedModel){
		echo "<form action='home.php' method='post'>";
		echo "<select class='form-control' name='brand'>";
			for($i = 0; $i < sizeOf($brands); $i++){
				if($brands[$i] == $selectedModel){
					echo "<option selected='selected' value='".$brands[$i]."'>".$brands[$i]."</option>";
				} else {
					echo "<option value='".$brands[$i]."'>".$brands[$i]."</option>";
				}
				echo "<br>";
			}
		echo "</select>";
		echo "<input class='btn btn-primary mb-2' type='submit' value='Confirmer'>";
		echo "</form>";
	}
	
	function writeCarSelectionForm($models, $selectedModel){
		echo "<form action='..\controllers\profile.php' method='post'>";
		if(isSet($selectedModel)){
			echo "<select class='form-control' name='model'>";
			for($i = 0; $i < sizeOf($models[$selectedModel]); $i++){
				echo "<option value='".$models[$selectedModel][$i]."'>".$models[$selectedModel][$i]."</option>";
				echo "<br>";
			}
			echo "</select>";
			echo "<input class='btn btn-primary mb-2' type='submit' value='Confirmer'>";
		} else {
			echo "Choose a Brand First";
		}
		echo "</form>";
	}
	
?>