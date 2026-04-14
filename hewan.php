<?php
class Hewan {
    function suara() {
        echo "Hewan bersuara...";
    }
}

class Kucing extends Hewan {
    function suara() {
        echo "Meong...";
    }
}

$h = new Hewan();
$k = new Kucing();

$h->suara(); // Hewan bersuara...
echo "\n";
$k->suara(); // Meong...
?>