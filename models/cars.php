<?php
	$brands = array("Volkswagen", "Porsche", "Toyota", "BMW", "Honda",);
	
	$models = array(
		'Volkswagen' => array(
			'Tiguan',
			'Golf',
			'Jetta'
		),
		
		'Porsche' => array(
			'911 Carrera',
			'Panamera',
			'Macan'
		),
		
		'Toyota' => array(
			'Corolla',
			'Prius',
			'Camry'
		),

		'BMW' => array(
			'BMW 3 Series',
			'BMW 4 Series',
			'BMW 6 Series'
		),

		'Honda' => array(
			'Acura ILX',
			'Acura RDX',
			'Acura TLX'
		),
	);

	$modelProfiles = array(
		'Volkswagen' => array(
			'Tiguan' => array(
				'Tiguan' => array('Image' => '../img/Volkswagen/Tiguan/Volkswagen_Tiguan.jpg', 'name' => 'Tiguan', 'Prix' => 29225, 'Couleur' => 'Orange', 'Transmission' => 'Automatique', 'Année' => '2019', 'Kilométrage' => '0 KM'),
				'Tiguan AllSpace' => array('Image' => '../img/Volkswagen/Tiguan/Volkswagen_Tiguan_AllSpace.jpg', 'Nom' => 'Tiguan AllSpace', 'Prix' => 34675, 'couleur' => 'Rouge', 'Transmission' => 'Automatique', 'Année' => '2019', 'Kilométrage' => '0 KM'),
				'Tiguan R-Line' => array('Image' => '../img/Volkswagen/Tiguan/Volkswagen_Tiguan_R_Line.jpg', 'Nom' => 'Tiguan R-Line', 'Prix' => 39575, 'couleur' => 'Blanc', 'Transmission' => 'Manuelle', 'Année' => '2018', 'Kilométrage' => '0 KM')
			),
				
			'Golf' => array(
				'Golf GTI TCR' => array('Image' => '../img/Volkswagen/Golf/Volkswagen_Golf_GTI_TCR.jpg','Nom' => 'Golf GTI TCR', 'Prix' => 22500, 'Couleur' => 'Rouge', 'Transmission' => 'Manuelle', 'Année' => '2017', 'Kilométrage' => '30 000 KM'),
				'Golf Sportsvan' => array('Image' => '../img/Volkswagen/Golf/Volkswagen_Golf_Sportsvan.jpg', 'Nom' => 'Golf Sportsvan', 'Prix' => 25600, 'Couleur' => 'Rouge', 'Transmission' => 'Automatique', 'Année' => '2015', 'Kilométrage' => '50 000 KM'),
				'Golf R' => array('Image' => '../img/Volkswagen/Golf/Volkswagen_Golf_R.jpg', 'Nom' => 'Golf R','Prix' => 30020, 'Couleur' => 'Bleu', 'Transmission' => 'Manuelle', 'Année' => '2013', 'Kilométrage' => '100 000 KM')
			),

			'Jetta' => array(
				'Jetta' => array('Image' => '../img/Volkswagen/Jetta/Volkswagen_Jetta.jpg', 'Nom' => 'Jetta', 'Prix' =>  24095, 'Couleur' => 'Blanc', 'Transmission' => 'Automatique', 'Année' => '2015', 'Kilométrage' => '45 000 KM'),
				'Jetta GLI' => array('Image' => '../img/Volkswagen/Jetta/Volkswagen_Jetta_GLI.jpg', 'Nom' => 'Jetta GLI', 'Prix' =>  20995, 'Couleur' => 'Gris', 'Transmission' => 'Manuelle', 'Année' => '2017', 'Kilométrage' => '10 000 KM'),
				'Jetta Hybrid' => array('Image' => '../img/Volkswagen/Jetta/Volkswagen_Jetta_Hybrid.jpg', 'Nom' => 'Jetta Hybrid', 'Prix' =>  27695, 'Couleur' => 'Argent', 'Transmission' => 'Automatique', 'Année' => '2018', 'Kilométrage' => '0 KM')
			)
		),

		'Porsche' => array(
			'911 Carrera' => array(
				'911 Carrera S' => array('Image' => '../img/Porsche/911_Carrera/Porsche_911_Carrera_S.jpg', 'Nom' => '911 Carrera S', 'Prix' =>  120000, 'Couleur' => 'Argent', 'Transmission' => 'Manuelle', 'Année' => '2019', 'Kilométrage' => '0 KM'),
				'911 Carrera T' => array('Image' => '../img/Porsche/911_Carrera/Porsche_911_Carrera_T.jpg', 'Nom' => '911 Carrera T', 'Prix' =>  116500, 'Couleur' => 'Rouge', 'Transmission' => 'Manuelle', 'Année' => '2018', 'Kilométrage' => '10 000 KM'),
				'911 Carrera S Cabriolet' => array('Image' => '../img/Porsche/911_Carrera/Porsche_911_Carrera_S_Cabriolet.jpg', 'nom' => '911 Carrera S Cabriolet', 'Prix' =>  134100, 'Couleur' => 'Jaune', 'Transmission' => 'Automatique', 'Année' => '2016', 'Kilométrage' => '30 000 KM')
			),

			'Panamera' => array(
				'Panamera' => array('Image' => '../img/Porsche/Panamera/Porsche_Panamera.jpg', 'nom' => 'Panamera', 'Prix' =>  98300, 'Couleur' => 'Bleu', 'Transmission' => 'Automatique', 'Année' => '2016', 'Kilométrage' => '35 000 KM'),
				'Panamera 4 Sport Turismo' => array('Image' => '../img/Porsche/Panamera/Porsche_Panamera_Sport_Turismo.jpg', 'nom' => 'Panamera 4 Sport Turismo', 'Prix' =>  110600, 'Couleur' => 'Argent', 'Transmission' => 'Automatique', 'Année' => '2019', 'Kilométrage' => '0 KM'),
				'Panamera GTS' => array('Image' => '../img/Porsche/Panamera/Porsche_Panamera_GTS.jpg', 'nom' => 'Panamera GTS', 'Prix' =>  146200, 'Couleur' => 'Rouge', 'Transmission' => 'Automatique', 'Année' => '2017', 'Kilométrage' => '30 000 KM')
			),

			'Macan' => array(
				'Macan' => array('Image' => '../img/Porsche/Macan/Porsche_Macan.jpg', 'nom' => 'Macan', 'Prix' =>  54100, 'Couleur' => 'Bleu', 'Transmission' => 'Manuelle', 'Année' => '2012', 'Kilométrage' => '15 000 KM'),
				'Macan GTS' => array('Image' => '../img/Porsche/Macan/Porsche_Macan_GTS.jpg', 'nom' => 'Macan GTS', 'Prix' =>  76000, 'Couleur' => 'Rouge', 'Transmission' => 'Automatique', 'Année' => '2015', 'Kilométrage' => '35 000 KM'),
				'Macan S' => array('Image' => '../img/Porsche/Macan/Porsche_Macan_S.jpg', 'nom' => 'Macan S', 'Prix' =>  61400, 'Couleur' => 'Argent', 'Transmission' => 'Manuelle', 'Année' => '2016', 'Kilométrage' => '20 000 KM')
			)
		),

		'Toyota' => array(
			'Corolla' => array(
				'Corolla 2014' => array('Image' => '../img/Toyota/Corolla/Toyota_Corolla_2014.jpg', 'nom' => 'Corolla 2014', 'Prix' =>  8917, 'Couleur' => 'Bleu', 'Transmission' => 'Automatique', 'Année' => '2014', 'Kilométrage' => '27 000 KM'),
				'Corolla 2011' => array('Image' => '../img/Toyota/Corolla/Toyota_Corolla_2011.jpg', 'nom' => 'Corolla 2011', 'Prix' =>  5480, 'Couleur' => 'Rouge', 'Transmission' => 'Manuelle', 'Année' => '2011', 'Kilométrage' => '75 000 KM'),
				'Corolla 2010' => array('Image' => '../img/Toyota/Corolla/Toyota_Corolla_2010.jpg', 'nom' => 'Corolla 2010', 'Prix' =>  4538, 'Couleur' => 'Argent', 'Transmission' => 'Automatique', 'Année' => '2010', 'Kilométrage' => '60 000 KM')
			),

			'Prius' => array(
				'Prius 2019' => array('Image' => '../img/Toyota/Prius/Toyota_Prius_2019.jpg', 'nom' => 'Prius 2019', 'Prix' =>  30234, 'Couleur' => 'Bleu', 'Transmission' => 'Manuelle', 'Année' => '2019', 'Kilométrage' => '0 KM'),
				'Prius C 2018' => array('Image' => '../img/Toyota/Prius/Toyota_Prius_C_2018.jpg', 'nom' => 'Prius C 2018', 'Prix' =>  26255, 'Couleur' => 'Rouge', 'Transmission' => 'Manuelle', 'Année' => '2018', 'Kilométrage' => '9 000 KM'),
				'Prius Prime 2017' => array('Image' => '../img/Toyota/Prius/Toyota_Prius_Prime_2017.jpg', 'nom' => 'Prius Prime 2017', 'Prix' =>  27360, 'Couleur' => 'Blanc', 'Transmission' => 'Manuelle', 'Année' => '2017', 'Kilométrage' => '24 000 KM')
			),

			'Camry' => array(
				'Camry 2018' => array('Image' => '../img/Toyota/Camry/Toyota_Camry.jpg', 'nom' => 'Camry 2018', 'Prix' =>  37004, 'Couleur' => 'Rouge', 'Transmission' => 'Manuelle', 'Année' => '2018', 'Kilométrage' => '11 000 KM'),
				'Camry TRD 2020' => array('Image' => '../img/Toyota/Camry/Toyota_Camry_TRD.jpg', 'nom' => 'Camry TRD 2020', 'Prix' =>  55904, 'Couleur' => 'Blanc', 'Transmission' => 'Manuelle', 'Année' => '2020', 'Kilométrage' => '0 KM'),
				'Camry 2015' => array('Image' => '../img/Toyota/Camry/Toyota_Camry_Hybrid.jpg', 'nom' => 'Camry 2015', 'Prix' =>  20884, 'Couleur' => 'Bleu', 'Transmission' => 'Automatique', 'Année' => '2015', 'Kilométrage' => '12 000 KM')
			)
		),

		'BMW' => array(
			'BMW 3 Series' => array(
				'BMW 3 Series' => array('Image' => '../img/BMW/BMW_3_Series/BMW_3_Series.jpg', 'nom' => 'BMW 3 Series', 'Prix' =>  49000, 'Couleur' => 'Blanc', 'Transmission' => 'Automatique', 'Année' => '2016', 'Kilométrage' => '23 000 KM'),
				'BMW 3 Series Touring' => array('Image' => '../img/BMW/BMW_3_Series/BMW_3_Series_Touring.jpg', 'nom' => 'BMW 3 Series Touring', 'Prix' =>  48900, 'Couleur' => 'Argent', 'Transmission' => 'Manuelle', 'Année' => '2017', 'Kilométrage' => '18 000 KM'),
				'BMW 3 Series Gran Turismo' => array('Image' => '../img/BMW/BMW_3_Series/BMW_3_Series_Gran_Turismo.jpg', 'nom' => 'BMW 3 Series Gran Turismo', 'Prix' =>  51050, 'Couleur' => 'Bleu', 'Transmission' => 'Manuelle', 'Année' => '2019', 'Kilométrage' => '0 KM')
			),

			'BMW 4 Series' => array(
				'BMW 4 Series Coupé' => array('Image' => '../img/BMW/BMW_4_Series/BMW_4_Series_Coupe.jpg', 'nom' => 'BMW 4 Series Coupé', 'Prix' =>  52150, 'Couleur' => 'Bleu', 'Transmission' => 'Automatique', 'Année' => '2019', 'Kilométrage' => '0 KM'),
				'BMW 4 Series Gran Coupé' => array('Image' => '../img/BMW/BMW_4_Series/BMW_4_Series_Gran_Coupe.jpg', 'nom' => 'BMW 4 Series Gran Coupé', 'Prix' =>  62600, 'Couleur' => 'Argent', 'Transmission' => 'Automatique', 'Année' => '2016', 'Kilométrage' => '28 000 KM'),
				'BMW M4' => array('Image' => '../img/BMW/BMW_4_Series/BMW_M4.jpg', 'nom' => 'BMW M4', 'Prix' =>  79150, 'Couleur' => 'Argent', 'Transmission' => 'Manuelle', 'Année' => '2019', 'Kilométrage' => '0 KM')
			),

			'BMW 6 Series' => array(
				'BMW 6 Series Gran Turismo' => array('Image' => '../img/BMW/BMW_6_Series/BMW_6_Series_Gran_Turismo.jpg', 'nom' => 'BMW 6 Series Gran Turismo', 'Prix' =>  76700, 'Couleur' => 'Blanc', 'Transmission' => 'Automatique', 'Année' => '2019', 'Kilométrage' => '0 KM'),
				'BMW M6 Gran Coupé' => array('Image' => '../img/BMW/BMW_6_Series/BMW_M6_Gran_Coupe.jpg', 'nom' => 'BMW M6 Gran Coupé', 'Prix' =>  131800, 'Couleur' => 'Argent', 'Transmission' => 'Automatique', 'Année' => '2019', 'Kilométrage' => '0 KM'),
				'BMW M6 Convertible' => array('Image' => '../img/BMW/BMW_6_Series/BMW_M6_Convertible.jpg', 'nom' => 'BMW M6 Convertible', 'Prix' =>  132300, 'Couleur' => 'Bleu', 'Transmission' => 'Manuelle', 'Année' => '2015', 'Kilométrage' => '25 000 KM')
			)
		),

		'Honda' => array(
			'Acura ILX' => array(
				'2019 Acura ILX' => array('Image' => '../img/Honda/Acura_ILX/Acura_ILX_2019.jpg', 'nom' => 'Acura ILX 2019', 'Prix' =>  31550, 'Couleur' => 'Blanc', 'Transmission' => 'Manuelle', 'Année' => '2019', 'Kilométrage' => '0 KM'),
				'2016 Acura ILX' => array('Image' => '../img/Honda/Acura_ILX/Acura_ILX_2016.jpg', 'nom' => 'Acura ILX 2016', 'Prix' =>  21211, 'Couleur' => 'Bleu', 'Transmission' => 'Automatique', 'Année' => '2016', 'Kilométrage' => '30 000 KM'),
				'2013 Acura ILX' => array('Image' => '../img/Honda/Acura_ILX/Acura_ILX_2013.jpg', 'nom' => 'Acura ILX 2013', 'Prix' =>  16674, 'Couleur' => 'Argent', 'Transmission' => 'Manuelle', 'Année' => '2013', 'Kilométrage' => '45 000 KM')
			),

			'Acura RDX' => array(
				'2019 Acura RDX' => array('Image' => '../img/Honda/Acura_RDX/Acura_RDX_2019.jpg', 'nom' => 'Acura RDX 2019', 'Prix' =>  47500, 'Couleur' => 'Bleu', 'Transmission' => 'Manuelle', 'Année' => '2019', 'Kilométrage' => '0 KM'),
				'2016 Acura RDX' => array('Image' => '../img/Honda/Acura_RDX/Acura_RDX_2016.jpg', 'nom' => 'Acura RDX 2016', 'Prix' =>  31651, 'Couleur' => 'Argent', 'Transmission' => 'Manuelle', 'Année' => '2016', 'Kilométrage' => '16 000 KM'),
				'2013 Acura RDX' => array('Image' => '../img/Honda/Acura_RDX/Acura_RDX_2013.jpg', 'nom' => 'Acura RDX 2013', 'Prix' =>  21422, 'Couleur' => 'Argent', 'Transmission' => 'Automatique', 'Année' => '2013', 'Kilométrage' => '60 000 KM')
			),

			'Acura TLX' => array(
				'2018 Acura TLX' => array('Image' => '../img/Honda/Acura_TLX/Acura_TLX_2018.jpg', 'nom' => 'Acura TLX 2018', 'Prix' =>  45695, 'Couleur' => 'Blanc', 'Transmission' => 'Automatique', 'Année' => '2018', 'Kilométrage' => '9 000 KM'),
				'2016 Acura TLX' => array('Image' => '../img/Honda/Acura_TLX/Acura_TLX_2016.jpg', 'nom' => 'Acura TLX 2016', 'Prix' =>  27660, 'Couleur' => 'Argent', 'Transmission' => 'Manuelle', 'Année' => '2016', 'Kilométrage' => '30 000 KM'),
				'2015 Acura TLX' => array('image' => '../img/Honda/Acura_TLX/Acura_TLX_2015.jpg', 'nom' => 'Acura TLX 2015', 'Prix' =>  24431, 'Couleur' => 'Rouge', 'Transmission' => 'Manuelle', 'Année' => '2015', 'Kilométrage' => '40 000 KM')
			)
		)
	);

	$defaultImages = array(
		'Volkswagen' => array(
			'Tiguan' => '../img/Volkswagen/Tiguan/Volkswagen_Tiguan_default.jpg',
			'Golf' => '../img/Volkswagen/Golf/Volkswagen_Golf_default.jpg',
			'Jetta' => '../img/Volkswagen/Jetta/Volkswagen_Jetta_default.jpg'
		),

		'Porsche' => array(
			'911 Carrera' => '../img/Porsche/911_Carrera/Porsche_911_Carrera_default.jpg',
			'Macan' => '../img/Porsche/Macan/Porsche_Macan_default.jpg',
			'Panamera' => '../img/Porsche/Panamera/Porsche_Panamera_default.jpg'
		),

		'Toyota' => array(
			'Camry' => '../img/Toyota/Camry/Toyota_Camry_default.jpg',
			'Corolla' => '../img/Toyota/Corolla/Toyota_Corolla_default.jpg',
			'Prius' => '../img/Toyota/Prius/Toyota_Prius_default.jpg'
		),

		'BMW' => array(
			'BMW 3 Series' => '../img/BMW/BMW_3_Series/BMW_3_Series_default.jpg',
			'BMW 4 Series' => '../img/BMW/BMW_4_Series/BMW_4_Series_default.jpg',
			'BMW 6 Series' => '../img/BMW/BMW_6_Series/BMW_6_Series_default.jpg'
		),

		'Honda' => array(
			'Acura ILX' => '../img/Honda/Acura_ILX/Acura_ILX_default.jpg',
			'Acura RDX' => '../img/Honda/Acura_RDX/Acura_RDX_default.jpg',
			'Acura TLX' => '../img/Honda/Acura_TLX/Acura_TLX_default.jpg'
		)
	);

	$interestRates = array(
		'Finance<=10K' => array(
			6.00, //60 mois - 6.00%
			6.10, //48 mois - 6.10% 
			6.25, //36 mois - 6.25% 
			6.95, //24 mois - 6.95% 
			6.950  //12 mois - 6.95%
		),

		'Finance>10K' => array(
			5.85, //60 mois - 5.85%
			6.30, //48 mois - 6.30%
			6.30, //36 mois - 6.30%
			7.25, //24 mois - 7.25%
			7.25 //12 mois - 7.25%
		)
	)
?>