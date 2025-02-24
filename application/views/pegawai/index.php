<h1>Data Pegawai</h1>
<a href="<?php echo site_url('pegawai/add'); ?>">Add New Employee</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Posisi</th>
            <th>Gaji</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pegawai as $peg): ?>
            <tr>
                <td><?php echo $peg['id']; ?></td>
                <td><?php echo $peg['nama']; ?></td>
                <td><?php echo $peg['alamat']; ?></td>
                <td><?php echo $peg['posisi']; ?></td>
                <td><?php echo $peg['gaji']; ?></td>
                <td>
                    <a href="<?php echo site_url('pegawai/edit/' . $peg['id']); ?>">Edit</a>
                    <a href="<?php echo site_url('pegawai/delete/' . $peg['id']); ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
