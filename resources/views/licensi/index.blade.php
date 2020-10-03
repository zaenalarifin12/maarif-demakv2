@extends('layouts.master')

@section("title", "Licensi")

@section('heading', "Licensi")

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Licensi</li>
@endsection

@section('content')
    
          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">


              <!-- Project Card Example -->
              <div class="card shadow mb-4">
              
                <div class="card-body">

                    <form action="{{ url("admin/licensi") }}" method="post" >

                    <div class="row">

                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    
                                    <div class="form-group">
                                        <label for="">Nama Yayasan</label>
                                        <input type="text" class="form-control" name="nama" value=" {{ $licensi->nama  }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" value="{{ $licensi->alamat }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ $licensi->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Telepone</label>
                                        <input type="text" class="form-control" name="telepone" value="{{ $licensi->telepone }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Faks</label>
                                        <input type="text" class="form-control" name="telepone" value="{{ $licensi->telepone }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jadwal</label>
                                        <input type="text" class="form-control" name="faks" value="{{ $licensi->jadwal }}">
                                    </div>
                                </div>
                                <div class="col">
                                    
                                    <div class="form-group">
                                        <label for="">Hotline</label>
                                        <input type="text" class="form-control" name="hotline" value="{{ $licensi->hotline }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Facebook</label>
                                        <input type="text" class="form-control" name="facebook" value="{{ $licensi->facebook }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Instagram</label>
                                        <input type="text" class="form-control" name="instagram" value="{{ $licensi->instagram }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Youtube</label>
                                        <input type="text" class="form-control" name="youtube" value="{{ $licensi->youtube }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Twitter</label>
                                        <input type="text" class="form-control" name="twitter" value="{{ $licensi->twitter }}">
                                    </div>
                                </div>

                            </div>
                        </div>
                            
                            
                            @csrf
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Perbarui</button>
                            </div>
                        </div>
                   </div>
                </form>

                    
                </div>
              </div>


            </div>

          </div>

@endsection