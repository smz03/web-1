<?php
// buat data mahasiswa dan simpan ke dalam array assosiatif
$ns1 = ['id'=>3,'nim'=>011075,'uts'=>80,'uas'=>90,'tugas'=>95];
$ns2 = ['id'=>2,'nim'=>011023,'uts'=>75,'uas'=>97,'tugas'=>80];
$ns3 = ['id'=>1,'nim'=>011045,'uts'=>87,'uas'=>82,'tugas'=>73];

// simpan variable data array assosiatif ke dalam array indexing
$ar_nilai = [$ns1, $ns2, $ns3];
?>
<!-- buat table dengan elemen html -->
<h3 style="text-align:center;">DAFTAR NILAI MAHASISWA</h3>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>TUGAS</th>
            <th>NILAI AKHIR</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach($ar_nilai as $nilai){
            echo '<tr><td>' .$nomor. '</td>';
            echo '<td>'.$nilai['nim'].'</td>';
            echo '<td>'.$nilai['uts'].'</td>';
            echo '<td>'.$nilai['uas'].'</td>';
            echo '<td>'.$nilai['tugas'].'</td>';
            $nilai_akhir = (($nilai['uts'] + $nilai['uas'])/2 +($nilai['tugas']))/2;
        // fungsi number format untuk membuat format penulisan bilangan angka, seperti ribuan ratusan dan lainnya
            echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
            echo '</tr>';
            $nomor++;
        }
        ?>

<!-- tutup table -->
    </tbody>
</table>