<?php

//lower Upper next Upper
function lUnUS($str)
{
    $t = explode("_", $str);
    $res = "";
    for ($i = 0; $i < count($t); $i++) {
        $res = $res . ucfirst($t[$i] . " ");
    }
    return rtrim($res, " ");
}

//lower Upper next Upper
function lUnU($str)
{
    $t = explode("_", $str);
    $res = "";
    for ($i = 0; $i < count($t); $i++) {
        $res = $res . ucfirst($t[$i]);
    }
    return $res;
}

//lower Lower next Upper
function lLnU($str)
{
    $t = explode("_", $str);
    $res = "";
    for ($i = 0; $i < count($t); $i++) {
        if ($i == 0) {
            $res = $res . lcfirst($t[$i]);
        } else {
            $res = $res . ucfirst($t[$i]);
        }
    }
    return $res;
}

//upper Upper next Underline
function uUnU($str)
{
    $str = preg_replace('/(?<!^)([A-Z])/', '_\\1', $str);

    $t = explode("_", $str);

    $res = "";
    for ($i = 0; $i < count($t); $i++) {
        $res = $res . lcfirst($t[$i]) . "_";
    }
    return rtrim($res, "_");
}


$str = "data_baru";
echo "<br>";
echo lUnUS($str); //data_baru TO Data Baru
echo "<br>";
echo lUnU($str); //DataBaru
echo "<br>";
echo lLnU($str); //dataBaru

$str = "DataBaru";
echo "<br>";
echo uUnU($str); //data_baru