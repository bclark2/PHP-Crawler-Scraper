<?php

/*
  Remember to be considerate when you are scraping data.
  Check the terms of use of sites that you are scraping.
  Ask for permission when appropriate, if you are careless
  you could get your IP address banned.
*/

# Url of website to download

$url         = "http://www.YourTargetUrl.com";
$target_file = fopen($url, "r");

 /*
   Make sure that the target_file does not
   return null. Without the if check, the
   while loop will keep running and could
   cause problems for the server you are
   requesting data from.
*/

# Grab the HTML data   

if($target_file !== NULL) {

    while (!feof($target_file))

    	echo fgets($target_file, 4096);

    fclose($target_file);
}
