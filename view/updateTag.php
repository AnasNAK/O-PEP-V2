<?php
include 'session.php';


if (isset($_POST["checkeValues"]) && isset($_POST["themeId"])) {
    $valuesChecked = $_POST["checkeValues"];
    $valuesCheckbox = $_POST["values"];
    $themeId = $_POST["themeId"];


    foreach ($valuesCheckbox as $valueCheckbox) {
        if (in_array($valueCheckbox, $valuesChecked)) {
            $queryUpdate = " UPDATE tag  SET TagSt = 1 WHERE Themeid = $themeId And idTag = $valueCheckbox";
        } else {

            $queryUpdate = "UPDATE tag SET TagSt = 0 WHERE Themeid = $themeId And idTag = $valueCheckbox";
        }

        if ($mysqli->query($queryUpdate) === TRUE) {
            echo "Query executed successfully!";
        } else {
            echo "Error executing query: " . $mysqli->error;
        }
    }
    header("Location: dashboardtheme.php");
    exit();
}
