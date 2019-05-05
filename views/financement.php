<?php
    //Setup
    session_start();
    require('banner.php');
    require('../models/cars.php');

    define('MINIMUM_FINANCING_FOR_SECOND_INTEREST_RATE', 10001);
    define('TPS', 5);
    define('TVQ', 9.975);

    $initialCarPrice = $_SESSION['price'];
    $selectedInterestRate = null;
    $indexOfSelectedRate = null;
    $totalCarPrice = null;

    if (isset($_POST['interestRate'])) {
        $selectedInterestRate = $interestRates[defineInterestRateType($initialCarPrice, $interestRates)][$_POST['interestRate']];
        $indexOfSelectedRate = $_POST['interestRate'];
    }


    //View
    writeBanner();

    echo "<div class='container'>";
    echo "<form action='financement.php' method='post'>";
    printLineBreaks(1);

    $interestRateType = defineInterestRateType($initialCarPrice, $interestRates);
    $test = writeInterestRatesForm($interestRates, $selectedInterestRate, $interestRateType);

    printLineBreaks(1);
    echo 'Coût initial de la voiture : ' . printCarPrice($initialCarPrice);
    printLineBreaks(1);

    $advancePayment = writeNumberTypeInput('acompte');
    echo " <input type = 'submit' value = 'Calculer'>";
    echo '</form>';

    $carPriceAfterAdvancePayment = removeAdvancePaymentFromCarPrice($advancePayment, $initialCarPrice);
    echo 'Coût total: ';
    printCarPrice($carPriceAfterAdvancePayment);
    printLineBreaks(1);

    calculateTotalTaxes($initialCarPrice);
    printLineBreaks(1);

    $totalCarPrice = calculateTotalCarPrice($carPriceAfterAdvancePayment, $selectedInterestRate);
    printLineBreaks(1);
    echo 'Coût total du véhicule : ' . number_format((float)$totalCarPrice, 2, '.', '') . '$';
    printLineBreaks(1);

    $monthlyPayments = calculateMonthlyPayment($totalCarPrice, getNumberOfMonthsForCorrespondingIndex($indexOfSelectedRate));
    printLineBreaks(1);
    echo 'Coût Mensuel : ' . number_format((float)$monthlyPayments, 2, '.', '') . '$';
    printLineBreaks(1);

    echo "</div>";

    // Functions
    function defineInterestRateType($initialPrice, $interestRatesArray)
    {
        $interestRateType = '';

        if ($initialPrice >= MINIMUM_FINANCING_FOR_SECOND_INTEREST_RATE) {
            $interestRateType = key($interestRatesArray);
        } else {
            next($interestRatesArray);
            $interestRateType = key($interestRatesArray);
        }

        return $interestRateType;
    }

    function writeInterestRatesForm($interestRatesArray, $selectedInterestRate, $interestRateType)
    {
        echo "Taux d'intérêts : ";
        echo "<select name='interestRate'>";

        for ($i = 0; $i < sizeOf($interestRatesArray["$interestRateType"]); $i++) {
            if (isset($selectedInterestRate) && $selectedInterestRate == $interestRatesArray[$interestRateType][$i]) {
                echo "<option selected='selected' value='" . $i . "'>" . getNumberOfMonthsForCorrespondingIndex($i) . " mois" . "</option>";
            } else {
                echo "<option value='" . $i . "'>" . getNumberOfMonthsForCorrespondingIndex($i) . " mois" . "</option>";
            }
        }

        echo '</select>';
    }

    function getNumberOfMonthsForCorrespondingIndex($index)
    {
        $numberOfMonths = null;
        switch ($index) {
            case 0:
                $numberOfMonths = 60;
                break;
            case 1:
                $numberOfMonths = 48;
                break;
            case 2:
                $numberOfMonths = 36;
                break;
            case 3:
                $numberOfMonths = 24;
                break;
            case 4:
                $numberOfMonths = 12;
                break;
        }

        return $numberOfMonths;
    }

    function  writeNumberTypeInput($name)
    {
        echo ucFirst($name) . ' : ';
        echo '<form action = "financement.php" method = "post">';
        $advancePayment = 0;

        if (isset($_POST['' . $name . ''])) {
            echo '<input type = "number" name = "' . $name . '" value = "' . htmlSpecialChars($_POST['' . $name . '']) . '" autofocus />';
            $advancePayment = $_POST['' . $name . ''];
        } else {
            echo '<input type = "number" name = "' . $name . '" value = "" autofocus />';
        }

        printLineBreaks(1);
        return $advancePayment;
    }

    function printCarPrice($number)
    {
        $digitsOfNumber = str_split($number);

        for ($i = 0; $i < sizeOf($digitsOfNumber); $i++){

            if ($number > 100000 && $i == 3) {
                echo ',';
            } elseif ($number < 100000 && $number > 10000 && $i == 2) {
                echo ',';
            } elseif ($number < 10000 && $i == 1) {
                echo ',';
            }

            echo $digitsOfNumber {
            $i};
        }

        echo '$';
    }

    function removeAdvancePaymentFromCarPrice($advancePayment, $initialCarPrice)
    {
        if (is_numeric($advancePayment)) {
            $carPriceAfterAdvancePayment = $initialCarPrice - $advancePayment;
        } else {
            $carPriceAfterAdvancePayment = $initialCarPrice;
        }

        return $carPriceAfterAdvancePayment;
    }

    function calculateTotalTaxes($initialCarPrice)
    {
        $tps = $initialCarPrice * (TPS / 100);
        $tvq = $initialCarPrice * (TVQ / 100);
        $totalTaxes = $tps + $tvq;

        echo ' - TPS : ' . number_format((float)$tps, 2, '.', '') . '$';
        printLineBreaks(1);
        echo ' - TVQ : ' . number_format((float)$tvq, 2, '.', '') . '$';
        printLineBreaks(1);
        echo ' - Total Taxes : ' . number_format((float)$totalTaxes, 2, '.', '') . '$';

        return $totalTaxes;
    }

    function calculateTotalCarPrice($carPrice, $interestRate)
    {
        $totalCarPrice = ($carPrice) * (1 + ($interestRate / 100));

        return $totalCarPrice;
    }

    function calculateMonthlyPayment($totalCarPrice, $numberOfMonths)
    {
        $monthlyPayment = null;

        if($numberOfMonths > 0){
            $monthlyPayment = $totalCarPrice / $numberOfMonths;
        }

        return $monthlyPayment;
    }

    function printLineBreaks($number)
    {
        for ($i = 0; $i < $number; $i++) {
            echo '<br>';
        }
    }
 ?>