@extends('layouts.master')

@section('title')
    Edit Admin KKM
@endsection


@section('heading')
    Edit Admin KKM
@endsection

@section('css')
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url('admin/admin-kkm') }}">Admin KKM</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Edit Admin KKM</li>
@endsection

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul class="p-0 m-0" style="list-style: none;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row d-flex justify-content-between">
                <h5>Edit Admin KKM</h5>
            </div>
        </div>
        <div class="card-body">
            
            <form action="{{ url("/admin/admin-kkm/$user->uuid") }}" method="post">
                    @csrf
                    @method("PUT")
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" disabled name="email" value="{{ ($user->email) ? $user->email : old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" disabled name="name" value="{{ ($user->name) ? $user->name : old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Forum KKM</label>
                            <select name="mata_pelajaran" disabled id="" class="form-control">
                                <option>{{ $user->mata_pelajaran->lembaga->nama }} - {{ $user->mata_pelajaran->nama }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">password <span class="text-primary font-bold">Silahkan Di Isi jika ingin mengganti password</span> </label> 
                            <input type="password" class="form-control" required name="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
            </form>

        </div>
    </div>


@endsection
