<?php

$data=[["ID"=>1, "Nombre"=>"Juan", "Edad"=>50],["ID"=>2, "Nombre"=>"Luis", "Edad"=>20],["ID"=>3, "Nombre"=>"Pedro", "Edad"=>30]];
header('Content-Type: application/json');
echo json_encode($data);
 ?>
