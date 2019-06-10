
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

                    $statement=$conn->prepare("select age from Customer ORDER BY id DESC LIMIT 1");

                    $statement->execute();
                    //pre define array file
                    $json=[];
                    while ($row=$statement->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        // echo $id."=>";
                        // echo $age."<br>";
                        $json[]=[(int)$age];
                    }
                    echo json_encode($json);


                }
                catch(PDOException $ex)
                {
                    die("error with ".$ex->getMessage());
                }


            ?>
