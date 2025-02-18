<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group input:focus {
            outline: none;
            border-color: #007BFF;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Halaman Tambah Data</h1>
        <form action="simpan.php" method="POST">
            <div class="form-group">
                <label for="Id_Jenis">Id Jenis</label>
                <input type="text" id="Id_Jenis" name="Id_Jenis" required>
            </div>
            <div class="form-group">
                <label for="Nama_Jenis">Nama Jenis</label>
                <input type="text" id="Nama_Jenis" name="Nama_Jenis" required>
            </div>
            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>