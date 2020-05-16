<!-- script untuk menanpilkan urutan/list siswa -->
<!DOCTYPE html>

<html>
<head>
    <title>CRUD sederhana</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class=navbar navbar-inverse>
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ URL::to('siswa') }}">laravel</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('siswa') }}">Meliha Semua Siswa</a></li>
                <li><a href="{{ URL::to('siswa/create') }}">Membuat Siswa</a></li>
            </ul>
        </nav>
        <h1>Semua Siswa</h1>
        @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <table class="talble table-striped table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>No Hp</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $key => $value)
                <tr>
                    <td>{{ $value->id_siswa }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>{{ $value->alamat }}</td>
                    <td>{{ $value->no_hp }}</td>
                    <td>
                        <a class= "btn btn-small btn- succes" href="{{ URL::to('siswa/' . $value->id_siswa) }}">Tampilkan Siswa Ini</a>
                        <a class= "btn btn-small btn-info" href="{{ URL::to('siswa/' . $value->id_siswa. '/edit') }}">Edit siswa Ini</a>
                    </td>
                </tr>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>