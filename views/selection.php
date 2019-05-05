<?php
	//Setup
	require('../models/cars.php');
	require('banner.php');
	session_start();

	define("IMAGE_FOLDER_PATH", "../img/");
	define('MODEL_PICTURE_HEIGHT', 128);
	define('MODEL_PICTURE_WIDTH', 168);
	define('DEFAULT_PICTURE_WIDTH', 500);
	define('DEFAULT_PICTURE_HEIGHT', 350);
	$model = $_SESSION['model'];


	//Views
	writeBanner();

	echo '<div class="container">
		<br>
		<div class="row">
			<div class="col">
				<h1 class="modelName">' . $model . '</h1>
			</div>
		</div>
	</div>
		<div class="container-fluid" id="modelImgBG">
			<div class="row">
				<div class="col">';
					displayDefaultModelImage($model, $defaultImages);
				echo '</div>
			</div>
		</div>
		<br>';
		
	echo '<div class="container">';
		displayProfiles($model, $modelProfiles);
	echo '</div>';


	//Functions
	function displayProfiles($requestedModel, $profileArray) {
		$imgID = 0;
		
		foreach ($profileArray as $brands) {
			foreach ($brands as $model => $models) {
				if ($requestedModel == $model) {
					foreach ($models as $cars) {
						echo '<div class="row carSelection">
								<div class="col">';
						foreach ($cars as $attribute => $value) {
							if (checkIfStringIsImgPath($value)) {
								$imgID++;
								createTinyImage($value, $imgID, MODEL_PICTURE_HEIGHT, MODEL_PICTURE_WIDTH);
							} elseif (is_int($value)) {
								printCarPrice($value);
								echo '<br>';
							} else {
								echo $attribute . ' : ' . $value . '<br>';
							}
						}
						echo '</div> </div> <br>';
					}
				}
			}
		}
	}

	function displayDefaultModelImage($requestedModel, $imagesArray) {
		$ID = 'modelImg';
		
		foreach($imagesArray as $brands) {
			foreach($brands as $model => $imagePath){
				if($requestedModel == $model) {
					createTinyImage($imagePath, $ID, DEFAULT_PICTURE_HEIGHT, DEFAULT_PICTURE_WIDTH);
				}
			}
		}
	}

	function printCarPrice($number) {
		$digitsOfNumber = str_split($number);
		echo 'Price : <a href = "../controllers/comptabilite.php?price=' . $number . '">';
		
		for($i = 0; $i < sizeOf($digitsOfNumber); $i++) {
			if ($number < 100000 && $i == 2) {
				echo ',';
			} elseif ($number > 100000 && $i == 3) {
				echo ',';
			} elseif ($number < 10000 && $i == 1) {
				echo ',';
			}
			echo $digitsOfNumber{$i};
		}

		echo '$ </a>';
	}

	function checkIfStringIsImgPath($string) {
		$possiblePath = substr($string, 0, 7);

		if ($possiblePath == IMAGE_FOLDER_PATH) {
			return true;
		}

		return false;
	}

	function createTinyImage($pathToImg, $imgID, $height, $width) {
		$img_src = imagecreatefromjpeg($pathToImg);
		$img_dest = imagecreatetruecolor($width, $height);
		$img_dest_name = 'mini_car' . $imgID . '.jpg';

		$width_src = imagesx($img_src);
		$height_src = imagesy($img_src);
		$width_dest = $width;
		$height_dest = $height;

		imagecopyresampled($img_dest,$img_src,0,0,0,0,$width_dest,$height_dest,$width_src,$height_src);

		imagejpeg($img_dest, $img_dest_name);

		echo "<a href=$pathToImg> <img id=$imgID src=$img_dest_name /> </a>";

		imagedestroy($img_src);
		imagedestroy($img_dest);
	}
?>