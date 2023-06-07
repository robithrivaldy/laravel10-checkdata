<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>SDN PEDURUNGAN 01</title>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<div class="p2 m-5">
    <h1>SDN PEDURUNGAN 01</h1>
    <h2>LIHAT HASIL KELULUSAN SISWA </h2>
</div>
<div class="p2 m-5 col-6">
    <form action="{{ url('/') }}" method="post">
        @csrf
        <div class="form-group mb-2">
            <input type="text" name="nisn" class="form-control" placeholder="NISN" required>
        </div>
        <div class="form-group mt-2">
            <button class="btn btn-success" type="submit">LIHAT</button>
        </div>
    </form>
</div>
