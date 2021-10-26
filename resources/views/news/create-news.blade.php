@extends('dash-layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <h3  class="text-center text-danger"><b>Add News</b></h3>
            <div class="form-group">
                @if(Session::has('News added'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('News added')}}
                </div>
                @endif
                <form  action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <label class="m-2">News Title</label>
                    <input type="text" name="title" class="form-control m-2" placeholder="title">
            

                    <label class="m-2">Categories</label>
                    <input type="text" name="categories" class="form-control m-2" placeholder="categories">
                

                    <label class="m-2">Countries Covered</label>
                    <input type="text" name="country" class="form-control m-2" placeholder="country">
                
                    <label class="m-2">Date</label>
                    <input type="text" name="date" class="form-control m-2" placeholder="date">
                

                    <label class="m-2">News Tag</label>
                    <input type="text" name="newstag" class="form-control m-2" placeholder="newstag">
                    

                    <label class="m-2">Status</label>
                    <input type="text" name="status" class="form-control m-2" placeholder="status">
                 


                    <label class="m-2">Cover Picture</label>
                    <input type="file" class="form-control m-2" name="file" onchange="previewFile(this)">
                    <img id="previewImg" alt="profile image" style="max-width:200px;margin-top:40px;"><br><br><br>
                   
                    <label class="m-2">Body Image 1 (Optional)</label>
                    <input type="file" class="form-control m-2" name="file" onchange="previewFile(this)">
                    <img id="image1" alt="bodyimage1" style="max-width:130px;margin-top:20px;"><br><br>

                    <label class="m-2">Body Image 2 (Optional)</label>
                    <input type="file" class="form-control m-2" name="file" onchange="previewFile(this)">
                    <img id="image2" alt="bodyimage2" style="max-width:130px;margin-top:20px;"><br><br>

                    <label class="m-2">News Body</label>
                    <textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="body"></textarea>


                    <button type="submit" class="btn btn-success">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>
    @endsection
