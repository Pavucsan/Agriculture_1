
<?php
    include "..\source\connection\conn.php";
    $statement=$conn->prepare("select * from tbl_temp ORDER BY id_temp DESC LIMIT 10");

    $statement->execute();
    //pre define array file
    $json=[];
    while ($row=$statement->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        // echo $id."=>";
        // echo $age."<br>";
        $json[]=[(int)$id_temp,(int)$Temp_Actual];
    }
    echo json_encode($json);
?>
