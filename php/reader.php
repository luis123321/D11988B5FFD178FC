<?php 

 	mysqli_set_charset($dbconnect,'utf8');
    $sql = ("SELECT id,title,content FROM frontpagecontent WHERE id='1'");
    $query = mysqli_query($dbconnect,$sql);
    if($query){
    $row = mysqli_fetch_row($query);
        $id = $row[0];
        $title = $row[1];
        $content = $row[2];
    };

 ?>