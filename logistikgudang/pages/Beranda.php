
             <?php
    $host = "localhost";
    $dbname = "SITB";
    $username = "root";
    $password = " ";
    $db = "";//db adalah objek dari class PDO
    try {
        $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
        catch (PDOException $exception){
        die("Connection error: ".$exception->getMessage());
    }

        $query = $db->prepare("SELECT * FROM barang");//prepare konsepnya hanyalah mempersiapkan bahan bahan yang di perlukan 
        $query->execute();
        $data = $query->fetchAll();?>

    
<<?php foreach ($isi_barang as $ib) { ?>
        <tr>
            <td>1</td>
            <td><?= $ib['kode_barang'] ?></td>
            <td><?= $ib['nama_barang'] ?></td>
            <td><?= $ib['merek'] ?></td>
            <td><?= $ib['satuan'] ?></td>
            <td><?= $ib['harga'] ?></td>
            <td><?= $ib['stok'] ?></td>
        </tr>
        <?php } ?>






                    