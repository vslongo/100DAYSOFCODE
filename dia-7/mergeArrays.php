<?php

$nums1 = array(1,2,3,0,0,0);
$nums2 = array(2,5,6); 

$mergedArray = array_merge($nums1, $nums2);
sort($mergedArray);
print_r($mergedArray);