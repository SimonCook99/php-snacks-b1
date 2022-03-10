<?php

    //testo lungo che contiene 5 punti
    $testoLungo= "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum et quia voluptatum nostrum Animi libero voluptatum totam. Lorem ipsum dolor gelit. In optio ad earum voluptatem quidem! veniam totam velit explicabo inventore. Qui, eveniet.";

    //la funzione explode ritorna un'array con tutti i paragrafi
    $listaParagrafi = explode(".", $testoLungo);

    //infine scorro l'array e scrivo ogni singolo paragrafo, all'interno di un tag <p>
    for($i = 0; $i < count($listaParagrafi); $i++){
        $paragrafo = $listaParagrafi[$i];

        echo "<p>" . $paragrafo . "</p>";
    }

?>
