<?php

$name = "Mokaddes Ali";

echo "My name is $name\n";
echo "My name is $name\n \t";
echo 'My name is $name\n \t';
echo 'My name is $name'; 

echo "\nI'm $name\n";      
echo 'I\'m $name'; //signle qutation \' mean apostropy

//single qutation can not pass variable name value
//double qutation can pass variable name and give value


// *** Heredoc strings means jemon jave dibe same sei vabei output asbe,,
$text = <<<EOT
This is
multiline $name
  String
EOT;
echo $text;

// *** Nowdoc strings means jemon jave dibe same sei vabei output asbe,,
$text = <<<'EOT'
This is
multiline $name
  String
EOT;
echo $text;

//Summary
//Heredoc strings are like double-quoted strings without escaping.
//Nowdoc strings are like single-quoted strings without escaping.



//*** String Length with space count

$sentence     = "PHP is awesome";
$stringLength = strlen($sentence);
echo "\n $stringLength\n";
//word count
$stringWords = str_word_count($sentence);
echo "\n $stringWords \n";
// reverse sentence
$stringReverse = strrev($sentence);
echo "\n $stringReverse \n";

// find a word from long sentence
$stringPosition = strpos($sentence, "is");
echo "String position of is: " . "$stringPosition\n";

//replace a word in sentence
$stringReplace = str_replace("awesome", "Powerful Language", $sentence);
echo "$stringReplace\n";

//Translate in Lowecase and UpperCase
$stringLowerCase = strtolower($sentence);
echo "\n$stringLowerCase\n";

$stringUpperCase = strtoupper($stringReplace);
echo "\n$stringUpperCase\n";

//remove extra space from string
$extraSpace     = "   Laravel is very wonderful framework   ";
$extraSpaceTrim = trim($extraSpace);
echo "\n $extraSpaceTrim \n";

//cut a string from another string
$cutString = substr($extraSpace, 3, 7);
echo "\n$cutString\n";

//Test string case sensitive
$str1 = "Apple"; 
$str2 = "apple"; 
$caseSensitive = strcmp($str1, $str2);
echo "$caseSensitive\n"; 


$str1 = "apple"; 
$str2 = "apple"; 
$caseSensitive = strcmp($str1, $str2);
echo "$caseSensitive\n"; 

$str1 = "apple"; 
$str2 = "Apple"; 
$caseSensitive = strcmp($str1, $str2);
echo "$caseSensitive\n"; 

// test insensitive 
$str1 = "apple"; 
$str2 = "apple"; 
$caseInSensitive = strcasecmp($str1, $str2);
echo "$caseInSensitive\n";


// Note Book
// Uppercase to Lowercase => -1 
// Lowercase to Uppercase => 1
// same to same => 0



//Hashing Password to encode
$password = "secret";
$hashPassword1 = md5 ($password); 
echo($hashPassword1);
$hashPassword2 = sha1 ($password); 
echo"\n$hashPassword2";