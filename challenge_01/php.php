<?php

function countWords($message) {
    $wordCounts = [];
    $words = str_word_count(strtolower($message), 1);
    
    foreach ($words as $word) {
        $wordCounts[$word] = isset($wordCounts[$word]) ? $wordCounts[$word] + 1 : 1;
    }

    $result = '';
    foreach ($wordCounts as $word => $count) {
        $result .= $word . $count;
    }

    return $result;
}

$messageFile = 'https://codember.dev/data/message_01.txt';
$message = file_get_contents($messageFile);

$result = countWords($message);
echo $result;


?>


