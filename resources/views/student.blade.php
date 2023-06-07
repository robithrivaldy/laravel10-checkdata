<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Student</title>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="p2 m-5 col-6">
    <h1>MASUKKAN SISWA KELULUSAN</h1>
    <form action="{{ url('student') }}" method="post">
        @csrf
        {{-- NAMA --}}
        <div class="form-group mb-2">
            <input type="text" name="name" class="form-control" placeholder="NAMA" required>
        </div>
        {{-- NO UJIAN --}}
        <div class="form-group mb-2">
            <input type="text" name="no_ujian" class="form-control" placeholder="NO UJIAN" required>
        </div>
        {{-- NISN --}}
        <div class="form-group mb-2">
            <input type="text" name="nisn" class="form-control" placeholder="NISN" required>
        </div>
        {{-- TTL --}}
        <div class="form-group mb-2">
            <input type="text" name="ttl" class="form-control" placeholder="TTL" required>
        </div>
        {{-- KELAS --}}
        <div class="form-group mb-2">
            <input type="text" name="kelas" class="form-control" placeholder="KELAS" required>
        </div>
        {{-- LULUS --}}
        <div class="form-group mb-2">
            <input type="text" name="lulus" value="LULUS" class="form-control" placeholder="LULUS" required>
        </div>
        <div class="form-group mt-2">
            <button class="btn btn-success" type="submit">Create</button>
        </div>
    </form>
</div>


<table class="table m-5">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>No ujian</th>
        <th>NISN</th>
        <th>TTL</th>
        <th>Kelas</th>
        <th>lulus</th>
        <th>Action</th>
    </tr>
    @foreach ($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->no_ujian }}</td>
            <td>{{ $item->nisn }}</td>
            <td>{{ $item->ttl }}</td>
            <td>{{ $item->kelas }}</td>
            <td>{{ $item->lulus }}</td>
            <td>
                <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button
                        class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        Edit</button></a>
                <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8"
                    style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"
                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                            aria-hidden="true"></i> Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
