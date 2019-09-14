<?php

function envDefaultSet($var,$value) {
  if(empty(getenv($var))) {
    putenv($var.'='.$value);
  }
}

function isoDateConvert($datetime,$timezone,$format) {
  
  $date = new \DateTime( $datetime, new \DateTimeZone( 'UTC' ) );
  $date->setTimezone( new \DateTimeZone( $timezone ) );
  return $date->format($format);

}