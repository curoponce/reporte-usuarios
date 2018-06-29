@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>TABLA DE USUARIOS</h2>

                    <table class="table table-striped">

                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>email</th>
                                <th>fecha de creación</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($users as $u)
                            <tr>
                                <td>{{ $u->id }}</td>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->email }}</td>
                                <td>{{ $u->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>

                    {!! $users->render() !!}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Generar Reporte</div>

                <div class="card-body text-center">
                    <form action="{{ route('ver.pdf') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Vista previa de pdf</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
