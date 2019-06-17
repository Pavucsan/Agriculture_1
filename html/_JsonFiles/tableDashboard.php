<?php
echo '<table class="table table-striped">';                              
        echo '<thead>
        <tr>
            <th>#</th>
            <th>Temprature</th>    
            <th>Humility</th>
            <th>Moiture</th>                            
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
                // $statement=$conn->prepare("select t.id_temp,h.Humil_Actual,t.Temp_Actual,m.Moi_Actual 
                // from tbl_temp as t,tbl_humil as h,tbl_moi as m 
                // ORDER BY t.id_temp  DESC LIMIT 10 and");
                // $statement=$conn->prepare("SELECT t.Temp_Actual in (SELECT Temp_Actual FROM tbl_temp ORDER BY id_temp DESC LIMIT 10),
                //                                   h.Humil_Actual in (SELECT Humil_Actual FROM tbl_humil ORDER BY id_humil DESC LIMIT 10),
                //                                   m.Moi_Actual in (SELECT Moi_Actual FROM tbl_temp ORDER BY id_moi DESC LIMIT 10)
                //                             FROM tbl_temp as t,tbl_humil as h,tbl_moi as m");
                $statement=$conn->prepare("SELECT t.id_temp,t.Temp_Actual,h.Humil_Actual,m.Moi_Actual
                                        FROM tbl_temp as t,tbl_humil as h,tbl_moi as m
                                        WHERE t.id_temp=m.id_moi and t.id_temp=h.id_humil
                                        ORDER BY m.id_moi DESC,h.id_humil DESC,t.id_temp DESC LIMIT 10");

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