<?php
/**
 * This scripts pre-generates the php-safe-functions.php script (containing only one array)
 * @package php-safe-functions
 * @author Yannick Warnier <yannick.warnier@beeznest.com>
 */
/**
 * Initialize the reading
 */
$file = 'functions.txt';
$destFile = 'php-safe-functions.php';
$resultString = '<?php'."\n".
    '/**'."\n".
    ' * This list is a whitelist of safe functions to use in combination'."\n".
    ' * with the disable_functions parameter of php.ini, for example, you'."\n".
    ' * could reuse the $safeFunctionsIni string like this at the beginning'."\n".
    ' * of your script:'."\n".
    ' *   <?php'."\n".
    ' *   require \'php-safe-functions.php\';'."\n".
    ' *   ini_set(\'disable_functions\', $safeFunctionsIni);'."\n".
    ' *   // Your script here'."\n".
    ' **/'."\n\n";
$resultStringIni = '';
$resultArray = '';
// Read file containing all existing functions, assuming it is in functions.txt
$lines = file($file);
foreach ($lines as $line) {
    if (substr($line, 0, 1) == '/') { continue; }
    $resultStringIni .= trim($line).",";
    $resultArray .= "    '".trim($line)."',\n";
}
$resultString .= '$safeFunctionsIni = "'.substr($resultStringIni,0,-1)."\";\n";
$resultString .= '$safeFunctionsArray = array('."\n".$resultArray.')'."\n";
file_put_contents($destFile, $resultString);
