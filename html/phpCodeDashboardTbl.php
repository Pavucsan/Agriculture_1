
            <?php
                $serverName="localhost";
                $userName="root";
                $password="";
                $dbName="PDOmyDB";
            
                try{
                /***********************Connection string */
                    $conn=new PDO("mysql:host=$serverName;dbname=$dbName",$userName,$password);
                    //$conn=new PDO("mysql:host=$serverName;",$userName,$password);
            
                    //set the pdo error mode tho exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    //echo "Connection successful! <br>";
                /***********************End connection string */

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


                }
                catch(PDOException $ex)
                {
                    die("error with ".$ex->getMessage());
                }


            ?>
