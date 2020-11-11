<?php
function ubah_huruf($string)
{
    for ($i = 0; $i < strlen($string); $i++) {
        $string[$i] = chr(ord($string[$i]) + 1);
    }
    return $string;
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br>";
echo ubah_huruf('developer'); // efwfmpqfs
echo "<br>";
echo ubah_huruf('laravel'); // mbsbwfm
echo "<br>";
echo ubah_huruf('keren'); // lfsfo
echo "<br>";
echo ubah_huruf('semangat'); // tfnbohbu
