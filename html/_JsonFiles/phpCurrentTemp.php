
<?php
include "..\source\connection\conn.php";
    $statement=$conn->prepare("select age from Customer ORDER BY id DESC LIMIT 1");

    $statement->execute();
    //pre define array file
    $json=[];
    $json_array=array();
    while ($row=$statement->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        // echo $id."=>";
        // echo $age."<br>";
        //$json[]="{'name':".(int)$age."}";
        $json[]=(int)$age;
        $json_array[]=$row;
    }
    echo json_encode($json);
    //print(json_encode($json_array));


?>
