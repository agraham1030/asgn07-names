<?php
include 'functions/utility-functions.php';
include 'functions/name-functions.php';
$fileName = 'names.txt';
$fullNames = load_full_names($fileName);
$firstNames = load_first_names($fullNames);
$lastNames = load_last_names($fullNames);
$validFullNames = load_valid_full_names($fullNames, $firstNames, $lastNames);
$validFirstNames = load_valid_names($fullNames, $firstNames);
$validLastNames = load_valid_names($fullNames, $lastNames);

// $findMe = ',';
// echo $fullNames[0] . '<br>';
// echo strpos($fullNames[0], $findMe) . '<br>';
// echo substr($fullNames[0], 0, strpos($fullNames[0], $findMe));
// exit();

// ~~~~~~~~~~~~ Display results ~~~~~~~~~~~~ //

echo '<h1>Names - Results</h1>';

echo '<h2>All Names</h2>';
echo "<p>There are " . sizeof($fullNames) . " total names</p>";
echo '<ul style="list-style-type:none">';
foreach ($fullNames as $fullName) {
    echo "<li>$fullName</li>";
}
echo "</ul>";

echo '<h2>All Valid Names</h2>';
echo "<p>There are " . sizeof($validFullNames) . " valid names</p>";
echo '<ul style="list-style-type:none">';
foreach ($validFullNames as $validFullName) {
    echo "<li>$validFullName</li>";
}
echo "</ul>";

echo '<h2>Unique Full Names</h2>';
$uniqueValidNames = (array_unique($validFullNames));
echo ("<p>There are " . sizeof($uniqueValidNames) . " Unique names</p>");
echo '<ul style="list-style-type:none">';
foreach ($uniqueValidNames as $uniqueValidNames) {
    echo "<li>$uniqueValidNames</li>";
}
echo "</ul>";

echo '<h2>Unique First Names</h2>';
$uniqueFirstNames = (array_unique($validFirstNames));
echo ("<p>There are " . sizeof($uniqueFirstNames) . " Unique first names</p>");
echo '<ul style="list-style-type:none">';
foreach ($uniqueFirstNames as $uniqueFirstName) {
    echo "<li>$uniqueFirstName</li>";
}
echo "</ul>";

echo '<h2>Unique Last Names</h2>';
$uniqueLastNames = (array_unique($validLastNames));
echo ("<p>There are " . sizeof($uniqueLastNames) . " Unique last names</p>");
echo '<ul style="list-style-type:none">';
foreach ($uniqueLastNames as $uniqueLastName) {
    echo "<li>$uniqueLastName</li>";
}
echo "</ul>";

echo '<h2>Most Common First Names</h2>';
$mostCommonFirstNames = find_most_common($validFirstNames);
echo ("<p>The top 5 most common first names are: </p>");
echo '<ul style="list-style-type:none">';
foreach($mostCommonFirstNames as $firstName) {
    echo "<li>" . $firstName . ": " . howMany($firstName, $validFirstNames) . "</li>";
}
echo "</ul>";

echo '<h2>Most Common Last Names</h2>';
$mostCommonLastNames = find_most_common($validLastNames);
echo ("<p>The top 5 most common last names are: </p>");
echo '<ul style="list-style-type:none">';
foreach($mostCommonLastNames as $lastName) {
    echo "<li>" . $lastName . ": " . howMany($lastName, $validLastNames) . "</li>";
}
echo "</ul>";
