<?php

// Composer
require './vendor/autoload.php';

// env file
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

// Functions + Header Output
require './inc/functions.php';
require './inc/header.php';

// env defaults set
envDefaultSet('DATE_FORMAT', 'd/m/Y H:i');
envDefaultSet('RESULTS_COUNT','30');
envDefaultSet('TIMEZONE','Europe/London');

// CSV Load
$file = file(getenv('CSV_LOCATION'));
$resultsCount = getenv('RESULTS_COUNT')+1;

// CSV to Array
for ($i = max(0, count($file)-$resultsCount); $i < count($file); $i++) {
  $speedFile[$i] = $file[$i];
}
$csv = array_map('str_getcsv', $speedFile);

// Clean Up Output
foreach($csv as $key => $speedtest) {
  $csv[$key][4] = number_format($speedtest[4], 2);
  $csv[$key][5] = number_format($speedtest[5], 2);
  $csv[$key][6] = number_format($speedtest[6] / 1000000, 1);
  $csv[$key][7] = number_format($speedtest[7] / 1000000, 1);
  $csv[$key][3] = isoDateConvert($speedtest[3], getenv('TIMEZONE'), getenv('DATE_FORMAT'));
}

// Array Defs
$download_array = array();
$upload_array = array();
$date_array = array();

// Reverse CSV File
$csv = array_reverse($csv);

// Results Output
require './inc/latest-result.php';
require './inc/previous-results.php';

// Footer Output
require './inc/footer.php';