<?php
echo '<table class="table table-striped">';                              
        echo '<thead>
        <tr>
            <th>#</th>
            <th>Temprature</th>    
            <th>Humility</th>                          
        </tr>
        </thead>
        <tbody>';
        class TableRows extends RecursiveIteratorIterator 
        {
            function __construct($it)
            {
                Parent::__construct($it,self::LEAVES_ONLY);
            }
            function current(){
                return "<td style='width:150px;'>".Parent::current()."</td>";
            }
            function beginChildren()
            {
                echo "<tr>";
            }
            function endChildren(){
                echo "<tr>";
            }
        }//endTable Row
        
            include "source/connection/conn.php";
                /********************Select Data */
                $statement=$conn->prepare("select id,age,name,age from Customer ORDER BY id DESC LIMIT 10");
                $statement->execute();
                //set the resulting array to associative
                $result=$statement->setFetchMode(PDO::FETCH_ASSOC);
                //$result = $statement->setFetchMode(PDO::FETCH_ASSOC); 
                foreach(new TableRows(new RecursiveArrayIterator($statement->fetchAll())) as $k=>$v) { 
                    echo $v;
                }                                     
            $conn = null;
        
echo "</tbody>
    </table>";
?>