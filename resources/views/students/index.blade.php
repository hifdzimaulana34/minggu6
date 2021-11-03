@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card-header" align="center"><b>{{ __('JURUSAN TEKNOLOGI INFORMASI POLITEKNIK NEGERI MALANG') }}</b></div>
        <div class="card">
            <div class="card-header">{{ __('STUDENT DATA') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <a href="/students/create" class="btn btn-primary">Add Data</a><br><br>
                    <form class="form" method="get" action="{{route('search')}}">
                            <label for="search" class="d-block mr-2">Pencarian Data Mahasiswa</label>
                            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan nama">
                            <button type="submit" class="btn btn-primary mb-1">Cari</button>
                    </form>
                    <!-- Start kode untuk form pencarian -->
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <br><br>

                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Department</th>
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($student as $s)
                            <tr>
                                <td>{{ $s->nim }}</td>
                                <td>{{ $s->name }}</td>
                                <td>{{ $s->kelas->class_name }}</td>
                                <td>{{ $s->department }}</td>
                                <td>
                                    <form action="/students/{{$s->id}}" method="post">
                                        <a href="/students/{{$s->id}}/edit" class="btn btn-warning">Edit</a>
                                        <a href="/students/{{$s->id}}" class="btn btn-primary">View</a>
                                        <a href="/students/{{$s->id}}/nilai" class="btn btn-warning">Nilai</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                        
                                    </form>
                                </td>
                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection