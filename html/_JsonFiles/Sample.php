<?php

// $url = 'phpCurrentTemp.php'; // path to your JSON file
// //$url = 'sample.json'; // path to your JSON file
// //$data = '{	"age": 12,	"race": 13}';
// $data = file_get_contents($url); // put the contents of the file into a variable
// $characters = json_decode($data); // decode the JSON feed
// //echo $data;

// echo $characters->age;



?>
<script>
var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    myObj = JSON.parse(this.responseText);
    document.getElementById("demo").innerHTML = myObj[0];
  }
};
xmlhttp.open("GET", "phpCurrentTemp.php", true);
xmlhttp.send();
</script>

<div id="demo">

</div>