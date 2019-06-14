
<?php
include "source\connection\conn.php";
    $statement=$conn->prepare("select * from Customer ORDER BY id DESC LIMIT 1");

    $statement->execute();
    //pre define array file
    $json=[];
    while ($row=$statement->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        // echo $id."=>";
        // echo $age."<br>";
        $json[]=array(array('Label', 'Value'),array('TEMP',(int)$age));
    }
    echo "[",json_encode($json[0][0]).",".json_encode($json[0][1])."]";

?>
