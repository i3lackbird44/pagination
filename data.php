<?php
    $json = [
       [
        "name"=>"bird",
        "country"=>"TH"
       ],
       [
        "name"=>"jame",
        "country"=>"TH"
       ],
       [
        "name"=>"jay",
        "country"=>"USA"
       ],
       [
        "name"=>"nook",
        "country"=>"UK" 
       ],
       [
        "name"=>"kamsai",
        "country"=>"JP" 
       ]
    ];
    $data = json_encode($json);
    echo $data;
?>