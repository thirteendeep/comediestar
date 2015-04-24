<?php
function lorem($size = 150) {
    $str = "Lorem ipsum dolor sit ahmed, consec tetur adipiscing elit. Proin imperdiet felis id nisl faucibus elementum. Donec at convallis turpis. In ut eros id turpis porta sodales. Proin eget odio nec ante hendrerit pellentesque id id tortor. In molestie, augue eu rhoncus sodales, libero eros porttitor nulla, vel aliquam felis neque sed tellus. Mauris varius libero a tincidunt commodo. Morbi et velit tincidunt, mollis nulla vitae, ornare nisi. Aliquam tristique vulputate eros eu tempor. Quisque congue dui eu arcu pretium posuere. Morbi tincidunt dui felis, ac pretium dui rutrum non. Pellentesque mollis metus quis lorem laoreet, sit amet vehicula leo lobortis. Phasellus bibendum non sem eget imperdiet. Pellentesque a placerat risus, vitae elementum nulla. Mauris at urna lectus. Pellentesque vel orci vel nulla ultricies sodales";
    echo ucfirst(trim(substr($str, rand(0, 15), $size)));
}
function albums($titre) {
    $albums = array(
        array("Jean-Louis Murat","Babel"),
        array("Antoine Corriveau","Les ombres longues"),
        array("Philippe B", "Ornithologie, la nuit"),
        array("Timber Timbre", "Hot Dreams"),
        array("Julien Sagot", "Valse 333"),
        array("Miossec, Ici-bas", "ici même"),
        array("Eman X Vlooper", "XXL"),
        array("Keith Kouna", "Le voyage d'hiver"),
        array("CharlÉlie Couture", "ImMortel"),
        array("St. Vincent","St. Vincent"),
        array("Andy Stott","Faith In Strangers"),
        array("Ben Frost","Aurora"),
        array("Flying Lotus","You're Dead!"),
        array("Hauschka","Abandoned Cities"),
        array("Ought","More Any Other Day"),
        array("Philippe B","Ornithologie","la nuit"),
        array("Robert Plant","lullaby and... The Ceaseless Roar"),
        array("Swans","To Be Kind"),
        array("Tanya Tagaq","Animism"),
        array("Timber Timbre","Hot Dreams"),
        array("Joyce DiDonato"," Stella di Napoli Erato "),
        array("Stéphanie Lapointe"," Les amours parallèles"),
        array("Jean-Efflam Bavouzet"," Concertos pour piano de Haydn"),
        array("Jean-François Bélanger"," Les Vents Orfèvres"),
        array("Christian Tetzlaff"," Concertos pour violon de Chostakovitch 1 et 2"),
        array("Cindy Bédard"," Fille du vent"),
        array("Julie Boulianne"," Handel et Porpora"),
        array("Philippe B."," Ornithologie"," la nuit"),
        array("Jan Kobow"," Schubert - Winterreise"),
        array("Gilles Vigneault"," Vivre debout"),
        array("Leonard Cohen"," Popular Problems"),
        array("Piers Faccini et Vincent Ségal"," Songs of Time Lost"),
        array("Bryan Ferry"," Avonmore"),
        array("Serge Fiori"," Serge Fiori"),
        array("Catherine Leduc"," Rookie"),
        array("Jean-Louis Murat"," Babel"),
        array("Tom Petty and the Heartbreakers"," Hypnotic Eye"),
        array("Robert Plant"," lullaby and... The Ceaseless Roar"),
        array("Alain Souchon & Laurent Voulzy"," Alain Souchon & Laurent Voulzy"),
        array("Mara Tremblay"," À la manière des anges")
        );
    $rand_keys = array_rand($albums);
    if ($titre) {
        return $albums[$rand_keys][0];
    }
    else {
        return $albums[$rand_keys][1];;
    }
}
?>