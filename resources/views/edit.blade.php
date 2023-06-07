<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Student</title>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="p2 m-5 col-6">
    <h1>UBAH SISWA KELULUSAN</h1>
    <form action="{{ url('student/' . $students->id) }}" method="post">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" id="id" value="{{ $students->id }}" id="id" />
        {{-- NAMA --}}
        <div class="form-group mb-2">
            <input type="text" name="name" value="{{ $students->name }}" class="form-control" placeholder="NAMA"
                required>
        </div>
        {{-- NO UJIAN --}}
        <div class="form-group mb-2">
            <input type="text" name="no_ujian" value="{{ $students->no_ujian }}" class="form-control"
                placeholder="NO UJIAN" required>
        </div>
        {{-- NISN --}}
        <div class="form-group mb-2">
            <input type="text" name="nisn" value="{{ $students->nisn }}" class="form-control" placeholder="NISN"
                required>
        </div>
        {{-- TTL --}}
        <div class="form-group mb-2">
            <input type="text" name="ttl" value="{{ $students->ttl }}" class="form-control" placeholder="TTL"
                required>
        </div>
        {{-- KELAS --}}
        <div class="form-group mb-2">
            <input type="text" name="kelas" value="{{ $students->kelas }}" class="form-control" placeholder="KELAS"
                required>
        </div>
        {{-- LULUS --}}
        <div class="form-group mb-2">
            <input type="text" name="lulus" value="{{ $students->lulus }}" value="LULUS" class="form-control"
                placeholder="LULUS" required>
        </div>
        <div class="form-group mt-2">
            <button class="btn btn-success" type="submit">UBAH SIMPAN</button>
        </div>
    </form>
</div>
