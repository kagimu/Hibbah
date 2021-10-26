@extends('layouts.master')

@section('content')
<section class="blog-area section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 pd-r45">

                @foreach ($dats as $dat )
    
                <div class="container">
                    <h2>{{ $dat->title }}</h2>
                    <p>{{ $dat->desc }}</p>
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="{{ $dat->file }}"></iframe>
                    </div>
                  </div><br><br>
                @endforeach

                
                

            
        </div>
    </div>
</section>
@endsection