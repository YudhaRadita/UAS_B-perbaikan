<?php
    include_once("../dbkoneksi.php");
    
    $r["sukses"]=false;
    if(isset($_POST["iddsn"])){
        $ID=$_POST["iddsn"];
        
        $sql = "DELETE FROM dosen WHERE ID_DOSEN='".$ID."'";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);