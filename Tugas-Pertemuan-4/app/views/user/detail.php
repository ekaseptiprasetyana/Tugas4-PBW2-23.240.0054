<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Detail Pengguna</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Detail Pengguna</h1>
        <table class="table table-bordered mt-4">
            <tr>
                <th>ID</th>
                <td><?= $user['id'] ?></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td><?= $user['name'] ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= $user['email'] ?></td>
            </tr>
        </table>
        <a href="index.php" class="btn btn-primary">Kembali</a>
    </div>
</body>
</html>
