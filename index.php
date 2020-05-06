<? php 
date_default_timezone_set ( 'Europe / Paris' );
date_default_timezone_set ( 'Europe / Paris' );
$presenTime  new dateTime;
date_default_timezone_set ( 'Europe / Paris' );
$presenTime = new dateTime;
$destinationTime = new dateTime ( '10 juillet 2992 08:00:00 ' );
$timeBetween = $presentTime -> diff ( $destinationTime );
?>
<! DOCTYPE html >
<html  lang = " fr ">
<div>
    <meta charset = " utf-8 " >
    <meta name = " viewport " content = " width = device-width, initial-scale = 1, shrink-to-fit = no " >
    <title>Retour vers le futur</title>
    <meta name = " author " content = " BIET Jordan " >
    <meta name = " description " content = " Retour vers le futur " >
    <link href = " main.css " rel = " stylesheet " type = " text / css " >
</div>
<div>
    <div>
    <h1>Heure de destination</h1>
    <h2><? =$destinationTime->format ( 'M d Y h: i' )?></h2>
    <h1>Heure actuelle</h1>
    <h2> <? =$presentTime -> format ( 'M d Y h: i' ) ?></h2 >
    <h1>Intervalle</h1>
    <h2><?=$timeBetween->format ( '% R% y years% m months% d days,% h hours% i minutes' )?></h2>
    <h1>Carburant (1 unité par jour parcouru) </h1>
    <h2><?=$timeBetween->days?> unit</h2>
    </div>
</div>
</html>
