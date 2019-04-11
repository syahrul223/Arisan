<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arisan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
        <div class="container">
            <div class="row align-items-start">
                <div class="col align-self-start">
                    <h1 class="text-center">Arisan</h1>
                </div>
                <br>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <form action="{{ route('arisan.kocok', rand(1, $arisan->where('status_bayar', 'lunas')->count())) }}" method="post">
                        @csrf
                        @if ($arisan->where('status_bayar', 'belum_bayar')->count() > 0)
                            <span class="d-inline-block has-info" data-toggle="popover" data-content="Masih Ada Yang Belum Lunas">
                                <button class="btn btn-danger" type="button" disabled> Kocok</button>
                            </span>
                        @else
                        <button class="btn btn-success" type="submit"> Kocok</button>
                        @endif
                    </form>
                </div>
                <div class="col">
                    @if($arisan->where('status_bayar', 'belum_bayar')->count() > 0)
                    <div class="alert alert-danger" role="alert">
                        Masih Ada Yang Belum Melunasi Pembayaran
                    </div>
                    @else
                    <div class="alert alert-info" role="alert">
                        Pengocokan Bisa Dilakukan
                    </div>
                    @endif
                </div>
                <div class="col text-right">
                    <a href="{{ route('arisan.create') }}" class="btn btn-success">Tambah</a>
                </div>
            </div>
            <br>
            <div class="row align-items-center">
                <div class="col-xl-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th>No</th>
                                <th>Nama Anggota</th>
                                <th>Alamat</th>
                                <th>Status Bayar</th>
                                <th>Status Menang</th>
                                <th colspan="3" class="text-center">Aksi</th>
                            </tr>
                            @foreach ($arisan as $item)
                                <tr class="{{ @$item->status_menang == 'menang' ? 'table-warning' : ''}}">
                                    <td>{{ @$item->id_arisan }}</td>
                                    <td>{{ @$item->anggota->nama_anggota}}</td>
                                    <td>{{ @$item->anggota->alamat}}</td>
                                    <td class="{{ @$item->status_bayar == 'lunas' ? 'bg-success' : 'bg-danger'}}"> {{ @$item->status_bayar == 'lunas' ? 'Lunas' : 'Belum'}}</td>
                                    <td>{{ @$item->status_menang == 'menang' ? 'Menang' : 'Belum'}}</td>
                                    <td class="text-center"><a href="{{ route('arisan.edit', @$item->id_anggota)}}" class="btn btn-warning"> Ubah</i></a></td>
                                    <td class="text-center">
                                        <form action="{{ route('arisan.destroy', @$item->id_anggota)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit"> Hapus</button>
                                        </form>
                                    </td>
                                    @if (@$item->status_bayar == 'belum_bayar')
                                        <td class="text-center">
                                            <form action="{{ route('arisan.bayar', @$item->id_arisan)}}" method="post">
                                                @csrf
                                                @method('POST')
                                                <button type="submit" class="btn btn-primary"> Bayar</button>
                                            </form>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
</html>