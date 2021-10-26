@extends('dash-layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3  class="text-center text-danger"><b>Edit Article</b></h3>
                @if(Session::has('Article Updated'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('Article Updated')}}
                    @endif 
                <div class="form-group">
                    <form  action="{{route('articles.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$article->id}}">
                        <label class="m-2">title</label>
                        <input type="text" name="title" value="{{$article->title}}" class="form-control m-2" placeholder="title">
                

                        <label class="m-2">date</label>
                        <input type="text" name="date" value="{{$article->date}}" class="form-control m-2" placeholder="date">
                    

                        <label class="m-2">month</label>
                        <input type="text" name="month" value="{{$article->month}}" class="form-control m-2" placeholder="month">
                        

                        <label class="m-2">author</label>
                        <input type="text" name="author" value="{{$article->author}}" class="form-control m-2" placeholder="author">
                    


                        <label class="m-2">Profile Picture</label>
                        <input type="file" class="form-control m-2" name="file" onchange="previewFile(this)">
                        <img id="previewImg" alt="profile image"  src="{{asset('images')}}/{{$article->profileimage}}" style="max-width:130px;margin-top:20px;">
                    

                        <label class="m-2">body</label>
                        <textarea name="body" cols="20" rows="4" value="{{$article->body}}" class="form-control m-2" placeholder="body"></textarea>


                        <button type="submit" class="btn btn-danger mt-3">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
