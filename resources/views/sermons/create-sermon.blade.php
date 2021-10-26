@extends('dash-layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <h3  class="text-center text-danger"><b>Add Video</b></h3>
            <div class="form-group">
                @if(Session::has('Video added'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('Video added')}}
                </div>
                @endif
                <form  action="{{route('sermons.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <label class="m-2">Title</label>
                    <input type="text" name="title" class="form-control m-2" placeholder="title">
                 

                    <label class="m-2">Category</label>
                    <input type="text" name="category" class="form-control m-2" placeholder="Category">

                    <label class="m-2">Year</label>
                    <input type="text" name="year" class="form-control m-2" placeholder="Year">

                    <label class="m-2">Video link</label>
                    <input type="text" name="file" class="form-control m-2" placeholder="Video Link">

                    <label class="m-2">Cover Picture</label>
                    <input type="file" class="form-control m-2" name="coverpic" onchange="previewFile(this)">
                    <img id="previewImg" alt="coverpic" style="max-width:200px;margin-top:40px;"><br><br><br>

                   
                    <button type="submit" class="btn btn-success">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>
    @endsection
