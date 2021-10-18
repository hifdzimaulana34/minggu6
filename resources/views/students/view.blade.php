@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('STUDENT DATA') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="/students/{{$student->id}}" method="post">
                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NIM</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Department</th>
                                <th>Phone Number</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->nim}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->class}}</td>
                                <td>{{$student->department}}</td>
                                <td>{{$student->phone_number}}</td>
                            </tr>
                            <a href="/students" class="btn btn-primary">Return</a>
                        </tbody>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection