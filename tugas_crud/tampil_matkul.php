<?php
include "ambil_matkul.php";
?>

<a href="tambah.php">Tambah Matakuliah</a>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nama Matkul</th>
    <th>SKS</th>
    <th>Aksi</th>
</tr>

<?php while ($d = mysqli_fetch_array($data)) { ?>
<tr>
    <td><?= $d['id']; ?></td>
    <td><?= $d['nama_matkul']; ?></td>
    <td><?= $d['sks']; ?></td>
    <td>
        <a href="edit.php?id=<?= $d['id']; ?>">Edit</a>
        <a href="hapus.php?id=<?= $d['id']; ?>">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
