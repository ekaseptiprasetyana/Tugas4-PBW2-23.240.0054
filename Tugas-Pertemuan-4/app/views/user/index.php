<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Daftar Pengguna</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Daftar Pengguna</h1>
        <a href="index.php?action=create" class="btn btn-success mb-3">Tambah Pengguna</a>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                foreach ($users as $user): 
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td>
                        <a href="?action=detail&id=<?= $user['id'] ?>" class="btn btn-info">Detail</a>
                        <a href="?action=edit&id=<?= $user['id'] ?>" class="btn btn-warning">Edit</a>
                        <a href="?action=delete&id=<?= $user['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
