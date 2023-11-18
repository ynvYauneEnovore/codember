<?php

function miniCompiler($input)
{
    $numericValue = 0;
    $output = "";

    for ($i = 0; $i < strlen($input); $i++) {
        $symbol = $input[$i];

        switch ($symbol) {
            case "#":
                $numericValue++;
                break;
            case "@":
                $numericValue--;
                break;
            case "*":
                $numericValue *= $numericValue;
                break;
            case "&":
                $output .= $numericValue;
                break;
        }
    }

    return $output;
}

// Archivo proporcionado
$input = "&###@&*&###@@##@##&######@@#####@#@#@#@##@@@@@@@@@@@@@@@*&&@@@@@@@@@####@@@@@@@@@#########&#&##@@##@@##@@##@@##@@##@@##@@##@@##@@##@@##@@##@@##@@##@@##@@&";

$output = miniCompiler($input);
echo "Resultado de ejecutar el programa: $output\n";
