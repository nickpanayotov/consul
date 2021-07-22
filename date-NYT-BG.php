<!-- Current date in NYT format -->
<?php 
date_default_timezone_set("Europe/Moscow");
$arr = [
'януари',
'февруари',
'март',
'април',
'май',
'юни',
'юли',
'август',
'септември',
'октомври',
'ноември',
'декември'
];

$month = date('n')-1;
echo "Днес е ".' '.date('d').' '.$arr[$month].' '.date('Y'). " г.";
?>