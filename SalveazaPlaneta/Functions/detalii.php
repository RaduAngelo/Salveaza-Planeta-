<?php
          include "database.php";
          session_start();

          if(isset($_POST["submit1"]))
            { 

            
                $sq="insert into utilizatori_noi(UN_ID,NUME, PRENUME,EMAIL,DATA_NASTERII,HOBBY,POSEDA_MASINA, CONSUM_MASINA) values (NULL, 'Alex', 'Ae', 'asdasd', '2022-05-02', '2', '1', '1.2');";
                $db->query($sq);
            }
?>