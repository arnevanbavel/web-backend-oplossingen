<?php

    $startKapitaal  =   100000;
    $renteVoet      =   8;
    $aantalJaar     =   10;


    function intrest( $startKapitaal, $renteVoet, $aantalJaar )
    {
        static $arrayDump   =   array();
        static $teller      =   1;

        $winst = ($startKapitaal /100) * $renteVoet;
        $totaal = $startKapitaal + $winst;

        $arrayDump[] .= 'Na ' . $teller . ' jaar bedraagt het totaal bedrag ' . floor($totaal) . ' en is de winst voor dat jaar ' . floor($winst);

        if ($teller < $aantalJaar)
        {
            ++$teller;
            return intrest( $totaal, $renteVoet, $aantalJaar );
        }

        return $arrayDump;



    }

    $winstHans = intrest( $startKapitaal, $renteVoet, $aantalJaar );

?>

<!doctype html>
<html>
<head>
<title></title>
</head>
<body>
    
    <ul>
            <?php foreach($winstHans as $value): ?>
                <li><?php echo $value ?></li>
            <?php endforeach ?>
        </ul>
    
</body>
</html>