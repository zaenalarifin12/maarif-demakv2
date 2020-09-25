@extends('layouts.master')

@section("title", "Video Promosi")

@section('heading', "Video Promosi")

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/home") }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Video Promosi</li>
@endsection

@section('content')
    
          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">


              <!-- Project Card Example -->
              <div class="card shadow mb-4">
              
                <div class="card-body">
            
                    
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <iframe width="100%" height="400" src="https://www.youtube.com/embed/{{ $video->link ?? "" }}">
                                </iframe>
                
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <form action="{{ url("admin/video-promosi") }}" method="post" >
                            <div class="form-group">
                                <label for="">Ganti Link</label>
                                <textarea name="link" class="form-control" id="" cols="40" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-sm btn-primary">Ganti</button>
                            </div>
                            @csrf
                        </form>
                    </div>
                    
                </div>
              </div>


            </div>

          </div>

@endsection