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

function smallNews($value): string{

    $value = str_replace('&nbsp; &nbsp;',' ',$value);
    $value = str_replace('&nbsp;&nbsp;',' ',$value);
    $value = str_replace('&nbsp;&nbsp; ',' ',$value);
    $value = str_replace(' &nbsp;&nbsp;',' ',$value);
    $value = str_replace('&nbsp;',' ',$value);
    $value = str_replace('&rsquo;','`',$value);
    $value = str_replace('&laquo;','"',$value);
    $value = str_replace('&raquo;','"',$value);


    $value = strip_tags(trim(htmlspecialchars_decode(mb_substr($value,0,250))));

    return $value;

}

function allNews($value): string{

      $value = str_replace('&nbsp; &nbsp;',' ',$value);
      $value = str_replace('&nbsp;&nbsp;',' ',$value);
      $value = str_replace('&nbsp;&nbsp; ',' ',$value);
      $value = str_replace(' &nbsp;&nbsp;',' ',$value);
      $value = str_replace('&nbsp;',' ',$value);
      $value = str_replace('&rsquo;','`',$value);
      $value = str_replace('&laquo;','"',$value);
      $value = str_replace('&raquo;','"',$value);


    //$value = strip_tags(trim(htmlspecialchars_decode($value)));
    $value = htmlspecialchars_decode($value);
    $value = $value ;

    return $value;

}
