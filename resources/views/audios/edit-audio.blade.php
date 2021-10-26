@extends('dash-layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3  class="text-center text-danger"><b>Edit Audio</b></h3>
                @if(Session::has('Audio Updated'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('Audio Updated')}}
                    </div>
                    @endif 
                <div class="form-group">
                    <form  action="{{route('audios.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$audio->id}}">
                        <label class="m-2">title</label>
                        <input type="text" name="title" value="{{$audio->title}}" class="form-control m-2" placeholder="title">


                        <label class="m-2">Audio File</label>
                        <input type="file" class="form-control m-2" value="{{asset('audios')}}/{{$audio->audio}}"name="file">


                        <button type="submit" class="btn btn-danger mt-3">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
