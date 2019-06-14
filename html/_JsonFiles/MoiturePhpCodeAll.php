
<?php
    include "..\source\connection\conn.php";
    $statement=$conn->prepare("select * from tbl_moi ORDER BY id_moi DESC LIMIT 10");

    $statement->execute();
    //pre define array file
    $json=[];
    while ($row=$statement->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        // echo $id."=>";
        // echo $age."<br>";
        $json[]=[(int)$id_moi,(int)$Moi_Expect,(int)$Moi_Actual,(String)$Moi_Time];
    }
    echo json_encode($json);
?>
