<?php
class Hitung {

    function tambah() {
        $args = func_get_args();
        $jumlah = count($args);

        if ($jumlah == 2) {
            return $args[0] + $args[1];
        } elseif ($jumlah == 3) {
            return $args[0] + $args[1] + $args[2];
        }
    }
}

$h = new Hitung();

echo $h->tambah(2, 3);       // 5
echo "\n";
echo $h->tambah(1, 2, 3);    // 6
?>