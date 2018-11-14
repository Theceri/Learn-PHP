<?php
$text = "The quick brown fox jumps over the lazy dog. That sentence contains all the letters of the alphabet.";
echo str_word_count($text);
echo "<br>";
echo strtoupper($text);
echo "<br>";
echo strtolower($text);
$text_upper = strtoupper($text);
echo "<br>";
echo str_replace("lazy","hardworking",$text);
echo "<br>";
echo ucwords($text);

echo "<br>";
echo pow(2, 5);

$result=pow(2,0.88);

$today = date("d-m-Y H:i:s");
echo "<br>";
echo $today;

file_put_contents("data.txt",$text);

echo "<br>";
echo file_get_contents("data.txt");

//Function that converts timestamp to a date
echo "<br>";
echo "<br>";
echo date('d/m/Y H:i:s', -1000000000);

//Function to create a folder
$path = "C:\Users\admin\Desktop\phpfolder2";
if (!file_exists($path)) {
    mkdir($path, 0777);
}

//Function to read to read the contents of a folder (the names of the files in the folder)
echo "<br>";
echo "<br>";
$download_files_and_folders = scandir("C:\Users\admin\Downloads");
print_r($download_files_and_folders);