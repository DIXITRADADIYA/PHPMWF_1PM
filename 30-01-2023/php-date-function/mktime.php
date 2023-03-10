<?php
$date=mktime(date("h"),date("i"),date("s"),date("m")-2,date("d")-29,date("y")-2);
echo "29 days before 2 months 2 years a date is :".date("d/m/Y",$date);

?>