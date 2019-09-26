<?php
echo 'Hoe veel activiteiten wil je toevoegen?' . PHP_EOL;

$aantal = readline();

if (is_numeric($aantal));
elseif (!is_numeric($aantal)) {
    echo "$aantal" . ' is geen getal!';
    exit;
}
echo "Je gaat $aantal activiteiten toevoegen!" . PHP_EOL;
$action = array(

);
for ($o = 1; $o <= $aantal; $o++) {

    array_push($action, readline("Wat wil je aan je bucketlist toevoegen?" . PHP_EOL));
}
echo "Op je bucketlist staan: " . PHP_EOL;
foreach($action as $actie1)
echo "$actie1".PHP_EOL;