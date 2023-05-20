<!DOCTYPE html>
<html>

<head>
    <title>Hasil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Hasil Formulir</h1>
        {{-- <a href="{{url('form')}}" class="btn btn-succes">Tambahin Data</a> --}}
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Lokasi</th>
                    <th>Jenis Kelamin</th>
                    <th>Skill</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $value['nama'] }}</td>
                    <td>{{ $value['email'] }}</td>
                    <td>{{ $value['lokasi'] }}</td>
                    <td>{{ $value['jenis_kelamin'] }}</td>
                    <td>
                    @foreach($value['skill'] as $item)
                        <ul>
                            <li>{{ $item }}</li>
                        </ul>
                    @endforeach
                </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>