<?php
function _date($format, $timezone)
{
	$timestamp=false;
	$defaultTimeZone='UTC';
	if(date_default_timezone_get() != $defaultTimeZone) date_default_timezone_set($defaultTimeZone);
    $userTimezone = new DateTimeZone(!empty($timezone) ? $timezone : 'GMT');
    $gmtTimezone = new DateTimeZone('GMT');
    $myDateTime = new DateTime(($timestamp!=false?date("r",(int)$timestamp):date("r")), $gmtTimezone);
    $offset = $userTimezone->getOffset($myDateTime);
    return date($format, ($timestamp!=false?(int)$timestamp:$myDateTime->format('U')) + $offset);
}
?>