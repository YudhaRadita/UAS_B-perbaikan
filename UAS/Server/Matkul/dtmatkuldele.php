<?php
    include_once("../dbkoneksi.php");
    
    $r["sukses"]=false;
    if(isset($_POST["kode"])){
        $KODE=$_POST["kode"];
        
        $sql = "DELETE FROM mk WHERE KDMK='".$KODE."'";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);