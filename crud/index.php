<?php
require_once ('Db.php');
require_once ('Crud.php');
require_once ('ModelPengguna.php');
$crud = new Crud();
//$db = new Db();
//$query = "select * from data_pengguna";//perintah memanggil semua data pada table pengguna
$hasil = $crud->index();//mengeksekusi query pada no 3
echo "<a href='insert.php'>Insert</a>";
$no = 0;
?>
<table border="1px">
    <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Modify</th>
        <th>Hapus</th>
        <th>Delete</th>
    </tr>
    <?php
    if ($hasil->num_rows>0) { // memeriksa jumlah data pada table pengguna
        while ($row = $hasil->fetch_assoc()) { // melakukan perulangan sebanyak jumlah data dan dimasukkan kedalam array dengan inisial variabel $row
            ?>
            <tr class="kambing">
                <td><?= $no?></td>
                <td><?= $row['uid']?><!--Memanggil column uid pada table pengguna-->
                <td><?= $row['nama']?></td>
                <td><?= $row['modify']?></td>
                <td><a href="update.php?nim=<?= $row['nim']?>">edit</a></td>
                <td><a href="delete.php?nim=<?= $row['nim']?>">hapus</a></td>
            </tr>
            <?php
            $no++;
        }
    }
    ?>
</table>
