@extends('dash-layouts.main')

@section('content')

<div class="container">
    <h3>All Lyrics</h3>
    <a href="/create-article" class="btn btn-outline-success">Add New Lyrics</a>
    @if(Session::has('Article deleted'))
    <div class="alert alert-success" role="alert">
        {{Session::get('Article deleted')}}
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Date</th>
                <th>Month</th>
                <th>Author</th>
                <th>Profile Image</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($articles as $article )
            <tr>
                <th scope="row">{{ $article->id }}</th>
                <td>{{ $article->title }}</td>
                <td>{{ $article->date }}</td>
                <td>{{ $article->month }}</td>
                <td>{{ $article->author }}</td>
                <td><img src="{{asset('images')}}/{{$article->profileimage}}" class="img-responsive" style="max-height:100px; max-width:100px" alt=""></td>
                <td><a href="/edit-news/{{ $article->id }}" class="btn btn-outline-primary">Update</a></td>
                <td>
                    <form action="/delete-news/{{ $article->id }}" method="post">
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