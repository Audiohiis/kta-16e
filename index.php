<?php
    $text = file_get_contents('text.txt');

    /*  1.Kui on suure tähe ees '? '. '! ', '. ' siis lause algussõnade array'sse (kaasa arvatud esimene lause). Kui mitu           järjestikust suure tähega sõna (nende vahel tühik), siis need üheks elemendiks liita.
        2. Teised suurte algustähtedega sõnad. Kui mitu järjestikust suure tähega sõna (nende vahel tühik), siis need üheks elemendiks
        3. Võrrelda kahte array'd omavahel, luua uus array kus pole kordusi ning eemaldada lause esimesed sõnad kui nad pole nimed.
        
        $lause_esimesed_sõnad
        $lause_teised_sõnad
        $kordusteta_sõnad
    */
    
    $laused = explode(". ", $text);
    print_r($laused);

    //echo json_encode($laused);