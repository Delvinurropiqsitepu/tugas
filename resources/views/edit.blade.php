<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>
    <form action="{{ route('update', $product->id) }}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Masukkan judul" value="{{ old('judul', $product->judul) }}">
        @error('name')
            <div>{{ $message }}</div>
        @enderror
        <input type="number" name="harga" placeholder="Masukkan harga" value="{{ old('tahun', $product->tahun) }}">
        @error('harga')
            <div>{{ $message }}</div>
        @enderror
        <input type="date" name="tanggal" placeholder="Masukkan tanggal" value="{{ old('stok', $product->stok) }}">
        @error('tanggal')
            <div>{{ $message }}</div>
        @enderror

        <select name="barang">
            <option value="electronic" {{ old('barang', $product->barang) == 'electronic' ? 'selected' : '' }}>Electronic</option>
            <option value="furniture" {{ old('barang', $product->barang) == 'furniture' ? 'selected' : '' }}>Furniture</option>
        </select>
        @error('barang')
            <div>{{ $message }}</div>
        @enderror
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
