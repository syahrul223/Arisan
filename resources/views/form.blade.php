<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>{{ empty($anggota) ? 'Tambah Anggota' : 'Edit Anggota'}}</title>
</head>
<body>
    <br>
    <div class="container">
        <div class="row align-items-start justify-content-md-center">
            <div class="text-center">
                <h1>{{ empty($anggota) ? 'Tambah Anggota' : 'Ubah Data Anggota'}}</h1>
            </div>
        </div>
        <br>
        <br>
        <form action="{{ empty($anggota) ? route('arisan.store') : route('arisan.update', $anggota->id_anggota) }}" method="post">
            @csrf
            @if (!empty($anggota))
                {{ method_field('patch') }}
            @endif
                <div class="form-group">
                    <label class="control-label">Masukan Nama Anggota :</label>
                    <input type="text" class="form-control" name="nama_anggota" value="{{ @$anggota->nama_anggota }}" id="nama_anggota" required placeholder="Nama Anggota">
                </div>
                <div class="form-group">
                    <label class="control-label">Masukan Alamat</label>
                    <textarea name="alamat" class="form-control" id="alamat"  cols="15" rows="5">{{ @$anggota->alamat }}</textarea>
                </div>                    
            <button type="submit" class="btn btn-success btn-flat">{{ empty($anggota) ? 'Tambah' : 'Ubah'}}</button>
            <a href="{{ route('arisan.index') }}" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</body>
</html>