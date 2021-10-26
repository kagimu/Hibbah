@extends('dash-layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h3  class="text-center text-danger"><b>Update Artist</b></h3>
            @if(Session::has('Artist Updated'))
            <div class="alert alert-success" role="alert">
                {{Session::get('Artist Updated')}}
            @endif
            <div class="form-group">
                <form  action="/update/{{ $artist->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("put")
                    <label class="m-2">Real Name</label>
                    <input type="text" name="real_name" class="form-control m-2" placeholder="Real Name" value="{{ $artist->real_name}}">
                    <label class="m-2">Stage Name</label>
                    <input type="text" name="stage_name" class="form-control m-2" placeholder="Stage Name" value="{{ $artist->stage_name}}">
                    <fieldset class="form-group">
                        <legend>Gender</legend>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender" id="optionsRadios1" value="option1" checked> Female
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender" id="optionsRadios2" value="option2"> Male
                            </label>
                        </div>
                    </fieldset>
                    <label class="m-2">Country</label>
                    <input type="text" name="Country" class="form-control m-2" placeholder="Country" value="{{ $artist->Country}}">
                    <label class="m-2">District</label>
                    <input type="text" name="District" class="form-control m-2" placeholder="District" value="{{ $artist->District}}">
                    <label class="m-2">Search Tags</label>
                    <input type="text" name="Search_tags" class="form-control m-2" placeholder="Search Tags" value="{{ $artist->Search_tags}}">
                    <label class="m-2">Profile Picture</label>
                    <input type="file" class="form-control m-2" name="file" onchange="previewFile(this)">
                    <img id="previewImg" alt="profile image"  src="{{asset('images')}}/{{$artist->image}}" style="max-width:130px;margin-top:20px;">
                    <label class="m-2">Biography</label>
                    <textarea name="Biography" cols="20" rows="4" class="form-control m-2" placeholder="Biography">{{ $artist->Biography}}"</textarea>

                    <button type="submit" class="btn btn-danger mt-3">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>
    @endsection
