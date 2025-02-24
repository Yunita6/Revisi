<h1>Edit Employee</h1>
<form method="post">
    <label for="nama">Nama:</label><br>
    <input type="text" name="nama" value="<?php echo $pegawai['nama']; ?>" required><br>
    <label for="alamat">Alamat:</label><br>
    <input type="text" name="alamat" value="<?php echo $pegawai['alamat']; ?>" required><br>
    <label for="posisi">Posisi:</label><br>
    <input type="text" name="posisi" value="<?php echo $pegawai['posisi']; ?>" required><br>
    <label for="gaji">Gaji:</label><br>
    <input type="number" name="gaji" value="<?php echo $pegawai['gaji']; ?>" required><br><br>
    <input type="submit" value="Update Employee">
</form>
