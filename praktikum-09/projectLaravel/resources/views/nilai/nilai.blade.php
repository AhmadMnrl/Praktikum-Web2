<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nilai</title>
</head>

<body>
    @php
        $nama = 'Budi';
        $nilai = 59.99;
    @endphp
    {{-- struktur kendali if --}}
    @if ($nilai >= 60)
        @php $ket = "Lulus"; @endphp
    @else
        @php $ket = "Gagal"; @endphp
    @endif
    <h4>Siswa {{ $nama }} dengan nilai {{ $nilai }} dinyatakan {{ $ket }}</h4>
</body>

</html>