<?php
include "koneksi_db.php";
$data = mysqli_query($koneksi, "SELECT * FROM matakuliah");
?>

<h2>Daftar Mata Kuliah</h2>
<a href="tambah.php">Tambah Data</a>
<br><br>

<table border="1">
<tr>
    <th>No</th>
    <th>Kode MK</th>
    <th>Nama MK</th>
    <th>SKS</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;
while ($d = mysqli_fetch_array($data)) {
?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['kode_mk']; ?></td>
    <td><?php echo $d['nama_mk']; ?></td>
    <td><?php echo $d['sks']; ?></td>
    <td>
        <a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
        <a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>

