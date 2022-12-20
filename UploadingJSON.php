<?php
$FoundPath = $_REQUEST["Filepath"]; //request the needed data
$FoundData = $_REQUEST["Data"];
$FoundFileName = $_REQUEST["FileName"];
//echo $FoundPath;
//echo $FoundName;
//echo $
echo "Creating File";

if (is_dir($FoundPath)) //if the directory doesnt exist, then make it
{
}else{
	mkdir($FoundPath, 0777,true);
	
}

$myFile = fopen($FoundPath . "/" . $FoundFileName,"w") or die ("Unable to open file"); //save the file into this folder
fwrite($myFile, $FoundData);
echo "File Created";
?>