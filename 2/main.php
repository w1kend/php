<?php
require('Classes/Circle.php');
require('Classes/Pyramid.php');
require('Classes/Rectangle.php');

//printing figure area
function printArea($obj)
{
    global $json;
    array_push($json[get_class($obj)], $obj->getProps());
    echo get_class($obj) . " area: " .$obj->area() ."\n";
}

function writePropsToFile($json)
{
    $file = fopen('figures.json','wb');
    fwrite($file,json_encode($json));
    fclose($file);
}

function readFileProps()
{   global $figures;

    $file = fopen('figure.json','rb');
    $props =  array(json_decode(fread($file,filesize('figure.json'))));
    //create figures array
    foreach ($props[0]->Circle as $value){
        array_push($figures,new Circle($value->radius));
    }
    foreach ($props[0]->Rectangle as $value){
        array_push($figures,new Rectangle($value->width,$value->height));
    }
    foreach ($props[0]->Pyramid as $value){
        array_push($figures,new Pyramid($value->side));
    }
}

$json =["Rectangle" => [],
    "Circle" => [],
    "Pyramid" => []
];
$figures = [];
//reading file and creating figures array
readFileProps();
//sorting array
usort($figures, function($a,$b){ return $a->area() < $b->area();});
//pring figures area
array_map("printArea",$figures);
//writing figures props to file.json
writePropsToFile($json);




