<?php
    // $locations=[
    //     'mirpur'    =>      ['kashem','hashem','rahim'],
    //     'tejgaon'   =>      'jashim',
    //     'banani'    =>      'elton'
    // ];
    // foreach ($locations as $keys => $val) {
    //     if ($keys == 'mirpur') {
    //         foreach ($val as $d) {
    //             echo "Your name is {$d} and you live in {$keys} <br>";
    //         }
    //     } else {
    //         echo "Your name is {$val} and you live in {$keys} <br>";
    //     }
    // }
    $food=['alu','potol','lau','kumra','dherosh','ada'];
    echo "<pre>";
        print_r($food);
    echo "</pre>";
    echo "<br>";
    $info=['hello','I','am','sadman'];
    $string = implode('//',$info);
    echo "<pre>";
        print_r($string);
    echo "</pre>";
    $devs_info="Hello, I am Md Sadman Ahsan and I love to code";
    $s_a=explode(' ',$devs_info);
    echo "<pre>";
        print_r($s_a);
    echo "</pre>";
    echo "<br>";
    /*
        count number of elements in array
    */
    echo "Total number of element is: ".count($food);
    echo "<br>";
    /*
        print first element of an array
    */
    echo "The first element of array is: ".current($food);
    echo "<br>";
    /*
        print last element of an array
    */
    echo "The last element of array is: ".end($food);
    echo "<br>";
    /*
        print next element of an array
    */
    echo "The next element of array is: ".next($food);
    echo "<br>";
    /*
        check if element present in array
    */
    if (in_array('kumra',$food)) {
        echo "ache vai";
    } else {
        echo "nai vai";
    }
    echo "<br>";
    /*
        add element in array after last
    */
    array_push($food,'jamrol');
    echo "<pre>";
        print_r($food);
    echo "</pre>";
    echo "<br>";
    /*
        remove element in array after last
    */
    array_pop($food);
    echo "<pre>";
        print_r($food);
    echo "</pre>";
    echo "<br>";
    /*
        add element in array after first
    */
    array_unshift($food,'chichinga');
    echo "<pre>";
        print_r($food);
    echo "</pre>";
     /*
        remove element in array after first
    */
    array_shift($food);
    echo "<pre>";
        print_r($food);
    echo "</pre>";
    echo "<br>";
    //array shuffle
    shuffle($food);
    $new=end($food);
    echo "<pre>";
        print_r($new);
    echo "</pre>";



?>