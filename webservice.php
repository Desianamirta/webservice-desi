<html>
<pre>Dilihat dari Indonesia Wilayah Kudus </pre>
ASTRONOMY
<body>
  <pre>
  <?php
  $json_string = file_get_contents("http://api.wunderground.com/api/2787748c5dc1150e/astronomy/q/Indonesia/Kudus.json");
  $parsed_json = json_decode($json_string);
  $test = $parsed_json->{"moon_phase"}->{"hemisphere"};
  echo "Fase Matahari di wilayah Kudus yaitu fase : ${test}\n";
  ?>
  </pre>
PLANNER
  <pre> 
  <?php
  $json_string = file_get_contents("http://api.wunderground.com/api/2787748c5dc1150e/planner_07010731/q/Indonesia/Kudus.json");
  $parsed_json = json_decode($json_string);
  $cloud = $parsed_json->trip->cloud_cover->cond;
  $temph = $parsed_json->trip->temp_high->avg->C;
  $templ = $parsed_json->trip->temp_low->avg->C;
  echo
 "Cuaca di wilayah Kudus : $cloud
  Suhu tertinggi di wilayah Kudus : $temph <sup>O</sup> C 
  Suhu terendah di wilayah Kudus : $templ <sup>O</sup> C\n";
  ?>
  </pre>
FORECAST
 <pre>
 <?php
  $json_string = file_get_contents("http://api.wunderground.com/api/2787748c5dc1150e/forecast/q/Indonesia/kudus.json ");
  $parsed_json = json_decode($json_string);
  $forecast = $parsed_json->forecast->txt_forecast->date;
  echo
  "Waktu ramalan cuaca wilayah Kudus : $forecast
  \n";
  ?>
   </pre>
 </body>
</html>