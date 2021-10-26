@extends('dash-layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3  class="text-center text-danger"><b>Edit Sermon</b></h3>
                @if(Session::has('Sermon Updated'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('Sermon Updated')}}
                    </div>
                    @endif 
                <div class="form-group">
                    <form  action="{{route('sermons.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$dat->id}}">
                        <label class="m-2">title</label>
                        <input type="text" name="title" value="{{$dat->title}}" class="form-control m-2" placeholder="title">

                        <label class="m-2">Description</label>
                        <input type="text" name="desc" value="{{$dat->desc}}" class="form-control m-2" placeholder="Description">

                        <label class="m-2">Video Link</label>
                        <input type="" name="file" value="{{$dat->file}}" class="form-control m-2" placeholder="Link">


                        <button type="submit" class="btn btn-danger mt-3">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
