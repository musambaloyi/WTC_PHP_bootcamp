#!/usr/bin/php
<?php
if ($argv[1]) {
    for ($i = 1; $i < $argc; $i++) {
        $newstr = preg_split('/[\s]+/', trim($argv[$i]));
        $num = count($newstr);
        foreach ($newstr as $v) {
            echo ($i++ === $num) ? $v : $v." ";
        }
    }
    echo "\n";
}
?>