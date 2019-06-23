
<?php
include "source\connection\conn.php";

    $statement=$conn->prepare("select * from tbl_moi AS m,tbl_humil AS h,tbl_temp AS t where id_humil=id_moi && id_temp=id_moi ORDER BY id_moi DESC LIMIT 10");
    //ORDER BY id DESC LIMIT 10

    $statement->execute();
    //pre define array file
    $json=[];
    while ($row=$statement->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        //echo $Temp_Actual." ";
        //echo $Humil_Actual." ";
        //echo $Moi_Actual."<br>";
        $json[]=[(int)$Temp_Actual,(int)$Humil_Actual,(int)$Moi_Actual];
    }
    echo json_encode($json);


?>
