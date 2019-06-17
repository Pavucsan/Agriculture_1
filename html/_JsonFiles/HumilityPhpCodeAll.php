
<?php
    include "..\source\connection\conn.php";
    $statement=$conn->prepare("select * from tbl_humil ORDER BY id_humil DESC LIMIT 10");

    $statement->execute();
    //pre define array file
    $json=[];
    while ($row=$statement->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        // echo $id."=>";
        // echo $age."<br>";
        $json[]=[(int)$id_humil,(int)$Humil_Expect,(int)$Humil_Actual,(String)$Humil_Time];
    }
    echo json_encode($json);
?>
