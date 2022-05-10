<?php
    include "database.php";
    session_start();
?>

<?php
header("Location: ../index.php");
        
        if(isset($_POST["submit"]))
            {  
                 $sq="insert into utilizatori_noi(UN_ID,NUME,PRENUME,EMAIL,DATA_NASTERII,HOBBY,CONSUM_MASINA,DEPLASARE,PANOURI_SOLARE,RECICLARE,ULEI,COPACI,DESEURI,CURENT_ELECTRIC,CONSUM_GAZ,PARERE,SCOR) values(NULL,'{$_POST["nume1"]}','{$_POST["prenume1"]}','{$_POST["email1"]}','{$_POST["data_nasterii1"]}','{$_POST["hobby1"]}','{$_POST["CO2_masina1"]}','{$_POST["raspuns11"]}','{$_POST["raspuns21"]}','{$_POST["raspuns31"]}','{$_POST["raspuns41"]}','{$_POST["Range1"]}','{$_POST["raspuns51"]}','{$_POST["CO2_curent1"]}','{$_POST["CO2_gaze1"]}','{$_POST["raspuns61"]}','{$_POST["score1"]}')";
                 $db->query($sq);
                 
             }
             
?>
