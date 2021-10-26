@extends('dash-layouts.main')

@section('content')

<div class="container">
    <h3>ARTISTS</h3>
    <a href="/create-artist" class="btn btn-outline-success">Add New Artist</a>
    @if(Session::has('Artist deleted'))
    <div class="alert alert-success" role="alert">
        {{Session::get('Artist deleted')}}
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Real Name</th>
                <th>Stage Name</th>
                <th>Gender</th>
                <th>Country</th>
                <th>District</th>
                <th>Cover Pic</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($artists as $artist )
            <tr>
                <th scope="row">{{ $artist->id }}</th>
                <td>{{ $artist->real_name }}</td>
                <td>{{ $artist->stage_name }}</td>
                <td>{{ $artist->gender }}</td>
                <td>{{ $artist->Country }}</td>
                <td>{{ $artist->District }}</td>
                <td><img src="{{asset('images')}}/{{$artist->image}}" class="img-responsive" style="max-height:100px; max-width:100px" alt=""></td>
                <td><a href="/edit-artist/{{ $artist->id }}" class="btn btn-outline-primary">Update</a></td>
                <td>
                    <form action="/delete-artist/{{ $artist->id }}" method="post">
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