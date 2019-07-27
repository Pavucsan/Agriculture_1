<!-- this for Temprature -->
<script>
    //get the data from 
    <?php    
        include "_JsonFiles/phpCode2.php";
    ?> 

    google.charts.load('current', {'packages':['gauge']});
    google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable(<?php echo "[",json_encode($json[0][0]).",".json_encode($json[0][1])."]";?>);

        var options = {
          width: 400, height: 200,
          redFrom: 35, redTo: 50,
          yellowFrom:25, yellowTo: 35,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('tempMeter'));

        chart.draw(data, options);

        setInterval(function() {
          //data.setValue(0, 1, 20 + Math.round(30 * Math.random()));
          chart.draw(data, options);
        }, 1000);        
      }
</script>
<!-- End temp meter -->
<!-- Moutre level -->

<script>
    
    google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],          
          ['Moutre', 25]          
        ]);

        var options = {
          width: 400, height: 200,
          redFrom: 35, redTo: 50,
          yellowFrom:25, yellowTo: 35,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('MotureMeter'));

        chart.draw(data, options);

        setInterval(function() {
          data.setValue(0, 1, 20 + Math.round(30 * Math.random()));
          chart.draw(data, options);
        }, 13000);
        setInterval(function() {
          data.setValue(1, 1, 20 + Math.round(30 * Math.random()));
          chart.draw(data, options);
        }, 5000);
        setInterval(function() {
          data.setValue(2, 1, 10 + Math.round(10 * Math.random()));
          chart.draw(data, options);
        }, 26000);
      }

</script>
<!-- End Moutre level -->

<!-- Humility Level -->
<script>
          google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],          
          ['Humility', 25]          
        ]);

        var options = {
          width: 400, height: 200,
          redFrom: 35, redTo: 50,
          yellowFrom:25, yellowTo: 35,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('humilityMeter'));

        chart.draw(data, options);

        setInterval(function() {
          data.setValue(0, 1, 20 + Math.round(30 * Math.random()));
          chart.draw(data, options);
        }, 13000);
        setInterval(function() {
          data.setValue(1, 1, 20 + Math.round(30 * Math.random()));
          chart.draw(data, options);
        }, 5000);
        setInterval(function() {
          data.setValue(2, 1, 10 + Math.round(10 * Math.random()));
          chart.draw(data, options);
        }, 26000);
      }
</script>
<!-- End humility meter -->