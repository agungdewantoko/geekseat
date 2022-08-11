<?php

require_once "Wordcount.php";
require_once "Rules.php";

$method = $_GET['method'];

if ($method == 'calcRules') {

    $witch = array();
    foreach ($_POST['age_of_death'] as $key => $value) {
        $witch[] = new Witch($value, $_POST['year_of_death'][$key]);
    }

    $rules = new Rules($witch);
    $killResult = $rules->getResult();

    echo $killResult;
}
