<?php 
function downfile($fileurl)
{
$filename=$fileurl;
$file  =  fopen($filename, "rb"); 
Header( "Content-type:  application/octet-stream "); 
Header( "Accept-Ranges:  bytes "); 
Header( "Content-Disposition:  attachment;  filename= wanci.zip"); 
$contents = "";
while (!feof($file)) {
 $contents .= fread($file, 8192);
}
echo $contents;
fclose($file); 
}
$url="wanci.zip";
downfile($url);
?>