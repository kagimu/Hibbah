@extends('dash-layouts.main')

@section('content')

<div class="container">
    <h3>All News List</h3>
    <a href="/create-news" class="btn btn-outline-success">Add News Bulletin</a>
    @if(Session::has('News deleted'))
    <div class="alert alert-success" role="alert">
        {{Session::get('News deleted')}}
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Categories</th>
                <th>Date</th>
                <th>Status</th>
                <th>Profile Image</th>
                <th>Body Image 1</th>
                <th>Body Image 2</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($news as $new )
            <tr>
                <th scope="row">{{ $new->id }}</th>
                <td>{{ $new->title }}</td>
                <td>{{ $new->categories }}</td>
                <td>{{ $new->date }}</td>
                <td>{{ $new->status }}</td>
                <td><img src="{{asset('images')}}/{{$new->profileimage}}" class="img-responsive" style="max-height:100px; max-width:100px" alt=""></td>
                <td><img src="{{asset('images')}}/{{$new->bodyimage1}}" class="img-responsive" style="max-height:100px; max-width:100px" alt=""></td>
                <td><img src="{{asset('images')}}/{{$new->bodyimage2}}" class="img-responsive" style="max-height:100px; max-width:100px" alt=""></td>
                <td><a href="/edit-news/{{ $new->id }}" class="btn btn-outline-primary">Update</a></td>
                <td>
                    <form action="/delete-news/{{ $new->id }}" method="post">
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