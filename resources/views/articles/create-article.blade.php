@extends('dash-layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <h3  class="text-center text-danger"><b>Add Lyrics</b></h3>
            <div class="form-group">
                @if(Session::has('Lyrics added'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('Lyrics added')}}
                </div>
                @endif
                <form  action="{{route('articles.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <label class="m-2">Song Title</label>
                    <input type="text" name="title" class="form-control m-2" placeholder="title">
            
                    <label class="m-2">Lyrics</label>
                    <textarea name="body" cols="30" rows="10" class="ckeditor form-control m-2" id="my-editor" placeholder="Body"></textarea>


                    <label class="m-2">Translation</label>
                    <textarea name="translation" cols="30" rows="10" class="ckeditor form-control m-2" id="my-editor" placeholder="Translation"></textarea><br>
                    
                    <button type="submit" class="btn btn-success">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>
    @endsection

    @push('scripts')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('my-editor');
        </script>
    @endpush