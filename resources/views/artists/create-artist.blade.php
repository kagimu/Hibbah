@extends('dash-layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <h3  class="text-center text-danger"><b>Add New Artist</b></h3>
            @if(Session::has('Artists added'))
            <div class="alert alert-success" role="alert">
                {{Session::get('Artists added')}}
            </div>
            @endif
            <div class="form-group">
                <form  action="{{route('artists.store')}}"" method="post" enctype="multipart/form-data">
                    @csrf

                    <label class="m-2">Real Name</label>
                    <input type="text" name="real_name" class="form-control m-2" placeholder="Real Name">
                    <span style="color: red">@error('real_name'){{$message}}@enderror</span>

                    <label class="m-2">Stage Name</label>
                    <input type="text" name="stage_name" class="form-control m-2" placeholder="Stage Name">
                    <span style="color: red">@error('stage_name'){{$message}}@enderror</span>
                    
                    <fieldset class="form-group">
                        <legend>Gender</legend>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender" id="optionsRadios1" value="Female" checked> Female
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender" id="optionsRadios2" value="Male"> Male
                            </label>
                        </div>
                    </fieldset>
                    
                    <label class="m-2">Country</label>
                    <input type="text" name="Country" class="form-control m-2" placeholder="Country">
                    <span style="color: red">@error('Country'){{$message}}@enderror</span>

                    <label class="m-2">District</label>
                    <input type="text" name="District" class="form-control m-2" placeholder="District">
                    <span style="color: red">@error('District'){{$message}}@enderror</span>

                    <label class="m-2">Search Tags</label>
                    <input type="text" name="Search_tags" class="form-control m-2" placeholder="Search Tags">
                    <span style="color: red">@error('Search_tags'){{$message}}@enderror</span>

                    <label class="m-2">Profile Picture</label>
                    <input type="file" class="form-control m-2" name="file" onchange="previewFile(this)">
                    <img id="previewImg" alt="profile image" style="max-width:130px;margin-top:20px;">

                    <label class="m-2">Biography</label>
                    <textarea name="Biography" cols="30" rows="10" class="ckeditor form-control m-2" id="my-editor" placeholder="Biography"></textarea>
                    <span style="color: red">@error('Biography'){{$message}}@enderror</span>

                    <button type="submit" class="btn btn-success mt-3">Submit</button>

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