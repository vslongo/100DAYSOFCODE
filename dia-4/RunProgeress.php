<?php

function runProgress(array $arr)
{
    $daysOfProgress = 0;
    $firstItem = $arr[0];

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > $firstItem) {
            $daysOfProgress++;
        }
        $firstItem = $arr[$i];
    }

    echo "total day of progress: " . $daysOfProgress;
}
runProgress([10, 11, 12, 9, 10]);
