<?php
echo "<pre>";
function genArr()
{
    $cnt = 10001;
    $test = array();
    $nums = '0123456789';
    $lngth = strlen($nums);
    for ($i = 0; $i < $cnt; $i++) {
        $randString = '';
        for ($j = 0; $j < 6; $j++) {
            $randString .= $nums[rand(0, $lngth - 1)];
        }
        array_push($test, $randString);
    }
    return $test;
}

function task1a($arr)
{
    if ($arr)
        return array_map('intval', $arr);

    return false;
}

function task1b($arr)
{
    $tmpArr = array();

    if ($arr) {
        foreach ($arr as $el) {
            $el = (int)$el;
            array_push($tmpArr, $el);
        }
        return $tmpArr;
    }

    return false;
}

function task1c($arr)
{
    $tmpArr = array();
    //$biggestInt = 9223372036854775807;
    if ($arr) {
        var_dump($arr);
        echo "<hr>";
        for($i = 0; $i < count($arr); $i++) {
            array_push($tmpArr, (int)$arr[$i]);
        }
        return $tmpArr;
    }

    return false;
}

/*
2. Дан массив $arr состоящий из таких элементов ["key1": [5,7,3,5], "key2": ["gdf1", "fgdf2", "gdf3", "fgdf4"], "key3": [[1,2], [3,4], [5,6], [7,8]] ...]
Ключи key1, key2, .. всегда разные, но имеют одинаковую длину.
Необходимо преобразовать в массив вида [["key1": 5, "key2": "gdf1", "key3": [1,2]], ["key1": 7, "key2": "fgdf2", "key3": [3,4]], .... ],
у которого длина массива равна длине ключа и каждый ключ соответствует своему значению.
*/

function task2()
{
    $glob = [];
    $arr = array("key1" => [5, 7, 3, 5], "key2" => ["gdf1", "fgdf2", "gdf3", "fgdf4"], "key3" => [[1, 2], [3, 4], [5, 6], [7, 8]]);

    for ($i = 0; $i < count($arr["key1"]); $i++) {
        $test = [];
        foreach($arr as $key => $val) {
            $tmp = array($key => $arr[$key][$i]);
            $test[$key] = $tmp[$key];
        }
        $glob[] = $test;
    }
    echo json_encode($glob);
}




//var_dump(task1a(genArr()));
//var_dump(task1b(genArr()));
var_dump(task1c(genArr()));
//task2();

