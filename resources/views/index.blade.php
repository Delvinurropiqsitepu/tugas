<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <H1>HALAMAN AWAL</H1>
    <table>
        <thead>
            <th>name</th>
            <th>harga</th>
            <th>tanggal</th>
            <th>barang</th>
            <th>aksi</th>
        </thead>
        <tbody>
            @foreach ($data as $dt)
                <tr>
                    <td>{{ $dt->name }}</td>
                    <td>{{ $dt->harga }}</td>
                    <td>{{ $dt->tanggal }}</td>
                    <td>{{ $dt->barang}}</td>
                    <td >
                        <a href="{{route('edit', $dt->id)}}"><button>edit</button></a>
                        <form action="{{ route('destroy', $dt->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button>hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('create')}}">Tambah</a>
</body>
</html>