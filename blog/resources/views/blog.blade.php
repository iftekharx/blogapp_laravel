@extends("index")

@section("content")

@isset($error)
<div class="container">

    <h1>Blog does not exist!</h1>
</div>
@endisset

@isset($blog)

    <div class="card card-custom">
    <div class="card-header custom-header">{{$blog['title']}}</div>
    <div class="card-body">
        <p>{{$blog['created_at']}} By User {{$blog['username']}}</p>
        {{$blog['body']}}
        <br/><br/>
        <a href="{{route('blogfeed')}}">Go Back</a>
        
        
    </div>

@endisset
@endsection