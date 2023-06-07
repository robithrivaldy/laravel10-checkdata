<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>SDN PEDURUNGAN 01</title>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<center>
    <h1 class=" mt-5">SDN PEDURUNGAN 01</h1>
    <h2 class="pb-5">HASIL SISWA NISN <b><u>{{ $item->nisn }} </u></b> </h2>
</center>
<div class="container ">
    <table class="table border">
        <tr>

            <th>Nama Siswa</th>
            <th>No ujian</th>
            <th>NISN</th>
            <th>TTL</th>
            <th>Kelas</th>
            <th>lulus</th>

        </tr>

        <tr>

            <td>{{ $item->name }}</td>
            <td>{{ $item->no_ujian }}</td>
            <td>{{ $item->nisn }}</td>
            <td>{{ $item->ttl }}</td>
            <td>{{ $item->kelas }}</td>
            <td>{{ $item->lulus }}</td>
        </tr>

    </table>
</div>
