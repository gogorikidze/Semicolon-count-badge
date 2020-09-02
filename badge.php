<?php
$xml = file_get_contents("https://rawgit.com/gogorikidze/three.php/master/three.php");
$number = count(explode(';', $xml)) + 2000;
$svg = file_get_contents("http://img.shields.io/badge/Semicolons-".$number."-cyan.svg");

header('Content-type: image/svg+xml');
echo $svg;

/*echo "<svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='104' height='20' role='img' aria-label='Semicolons: ".$number."'><title>Semicolons: ".$number."</title><linearGradient id='s' x2='0' y2='100%'><stop offset='0' stop-color='#bbb' stop-opacity='.1'/><stop offset='1' stop-opacity='.1'/></linearGradient><clipPath id='r'><rect width='104' height='20' rx='3' fill='#fff'/></clipPath><g clip-path='url(#r)'><rect width='73' height='20' fill='#555'/><rect x='73' width='31' height='20' fill='cyan'/><rect width='104' height='20' fill='url(#s)'/></g><g fill='#fff' text-anchor='middle' font-family='Verdana,Geneva,DejaVu Sans,sans-serif' text-rendering='geometricPrecision' font-size='110'><text aria-hidden='true' x='375' y='150' fill='#010101' fill-opacity='.3' transform='scale(.1)' textLength='630'>Semicolons</text><text x='375' y='140' transform='scale(.1)' fill='#fff' textLength='630'>Semicolons</text><text aria-hidden='true' x='875' y='150' fill='#010101' fill-opacity='.3' transform='scale(.1)' textLength='210'>".$number."</text><text x='875' y='140' transform='scale(.1)' fill='#fff' textLength='210'>".$number."</text></g></svg>";*/
?>
