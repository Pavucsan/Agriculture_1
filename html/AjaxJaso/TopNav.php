<script>//Temp
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        document.getElementById("temp").innerHTML = myObj[0][2];
        document.getElementById("TempExpectLevel").innerHTML = myObj[0][1]+" <sup>0</sup>f";

        // document.getElementById("moiture").innerHTML = myObj[0][2]+"%";
        // document.getElementById("MoiExpectLevel").innerHTML = myObj[0][1];

    }
    };
    // xmlhttp.open("GET", "_JsonFiles/phpCurrentTemp.php", true);
    xmlhttp.open("GET", "_JsonFiles/TempPhpCodeActualResult.php", true);
    xmlhttp.send();
</script>


<script>//moiture

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        document.getElementById("moiture").innerHTML = myObj[0][2]+"%";
        document.getElementById("MoiExpectLevel").innerHTML = myObj[0][1];
    }
    };
    // xmlhttp.open("GET", "_JsonFiles/phpCurrentTemp.php", true);
    xmlhttp.open("GET", "_JsonFiles/MoiturePhpCodeAll.php", true);
    xmlhttp.send();
</script>

<script>//humility
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        document.getElementById("humility").innerHTML = myObj[0][2];
        document.getElementById("HumiExpectLevel").innerHTML = myObj[0][1];
    }
    };
    // xmlhttp.open("GET", "_JsonFiles/phpCurrentTemp.php", true);
    xmlhttp.open("GET", "_JsonFiles/HumilityPhpCodeAll.php", true);
    xmlhttp.send();
</script> 

