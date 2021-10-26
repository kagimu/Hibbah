@extends('dash-layouts.main')

@section('content')

<div class="container">
    <h3>All Videos List</h3>
    <a href="/create-sermon" class="btn btn-outline-success">Add New Video</a>
    @if(Session::has('Video deleted'))
    <div class="alert alert-success" role="alert">
        {{Session::get('Video deleted')}}
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Video</th>
                <th>Cover Image</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($dats as $dat )
            <tr>
                <th scope="row">{{ $dat->id }}</th>
                <td>{{ $dat->title }}</td>
                <td><iframe src="{{asset('videos')}}/{{$dat->file}}" class="img-responsive" style="max-height:100px; max-width:100px" alt=""></iframe></td>
                <td><img src="{{asset('images')}}/{{$dat->coverpic}}" class="img-responsive" style="max-height:100px; max-width:100px" alt=""></td>
                <td><a href="/edit-sermon/{{ $dat->id }}" class="btn btn-outline-primary">Update</a></td>
                <td>
                    <form action="/delete-sermon/{{ $dat->id }}" method="post">
                        <button class="btn btn-outline-danger" onclick="return confirm('Are You Sure?');" type="submit">Delete</button>
                        @csrf
                        @method('delete')
                    </form>
                </td>
            </tr>
            @endforeach
            

        </tbody>

    </table>
</div>

@endsection