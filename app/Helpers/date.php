<?php

use Illuminate\Support\Carbon;

/**
 * Return a Carbon instance.
 */
function carbon(string $parseString = '', string $tz = null): Carbon
{
    return new Carbon($parseString, $tz);
}

/**
 * Return a formatted Carbon date.
 */
function humanize_date(Carbon $date, string $format = 'd F Y, H:i'): string
{
    return $date->format($format);
}

function tagToChar($value): string
{
    $value = str_replace('&nbsp; &nbsp;',' ',$value);
    $value = str_replace('&nbsp;&nbsp;',' ',$value);
    $value = str_replace('&nbsp;&nbsp; ',' ',$value);
    $value = str_replace(' &nbsp;&nbsp;',' ',$value);
    $value = str_replace('&nbsp;',' ',$value);
    $value = str_replace('&rsquo;','`',$value);
    $value = str_replace('&laquo;','"',$value);
    $value = str_replace('&raquo;','"',$value);

    return $value;
}

function smallNews($value): string{


    $value = mb_substr(strip_tags(trim(htmlspecialchars_decode(tagToChar($value)))),0,350);

    return $value;

}

function linkRev($nav):string{
    if(strlen($nav->link)>0){
        $di=['id'=>$nav->link];
    }else{
        $di = [];
    }

    if(strlen($nav->page)<2){
        $link = 'index';
    }else{
        $link = route($nav->page,$di);
    }
    return $link;
}

function topNews($value): string{


    $value = strip_tags(trim(htmlspecialchars_decode(mb_substr(tagToChar($value),0,100))));

    return $value;

}

function allNews($value): string{

    $value = htmlspecialchars_decode(tagToChar($value));


    return $value;

}

function LenStr($value): int{

    return strlen($value);

}

