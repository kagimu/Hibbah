@extends('dash-layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <h3  class="text-center text-danger"><b>Add Audio</b></h3>
            <div class="form-group">
                @if(Session::has('Audio added'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('Audio added')}}
                </div>
                @endif
                <form  action="{{route('audios.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <label class="m-2">title</label>
                    <input type="text" name="title" class="form-control m-2" placeholder="title">
                 


                    <label class="m-2">Audio File</label>
                    <input type="file" class="form-control m-2" name="file">

                   
                    <button type="submit" class="btn btn-danger mt-3">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>
    @endsection
