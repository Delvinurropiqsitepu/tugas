<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="masukkan judul">
        <input type="number" name="harga" placeholder="masukkan judul">
        <input type="date" name="tanggal" placeholder="masukkan judul">
        <select name="barang">
            <option value="electronic">electronic</option>
            <option value="furniture">furniture</option>
        </select>
        <input type="submit" value="simpan">
    </form>
</body>
</html>