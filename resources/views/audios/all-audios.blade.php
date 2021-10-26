@extends('dash-layouts.main')

@section('content')

<div class="container">
    <h3>All Audios List</h3>
    <a href="/create-audio" class="btn btn-outline-success">Add New Audio</a>
    @if(Session::has('Audio deleted'))
    <div class="alert alert-success" role="alert">
        {{Session::get('Audio deleted')}}
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Audio</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($audios as $audio )
            <tr>
                <th scope="row">{{ $audio->id }}</th>
                <td>{{ $audio->title }}</td>
                <td><img src="{{asset('audios')}}/{{$audio->audio}}" class="img-responsive" style="max-height:100px; max-width:100px" alt=""></td>
                <td><a href="/edit-audio/{{ $audio->id }}" class="btn btn-outline-primary">Update</a></td>
                <td>
                    <form action="/delete-audio/{{ $audio->id }}" method="post">
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