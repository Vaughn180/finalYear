composer require crodas/influx-php:\*
<?php
$client = new \crodas\InfluxPHP\Client(
    "localhost", // host
    8086,        // port
);

$db = $client->countingpeople;

foreach ($db->query("SELECT * FROM countppl;") as $row) {
    var_dump($row, $row->time);
}




?>