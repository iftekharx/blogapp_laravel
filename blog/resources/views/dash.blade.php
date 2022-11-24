@extends("index")

@section("content")

<div class="container">
    
        @foreach($blogs as $blog)
        <div class="card card-custom">
        <div class="card-header custom-header">{{$blog['title']}}</div>
        <div class="card-body">
            <p>{{$blog['created_at']}} By User {{$blog['username']}}</p>
            {{substr($blog['body'], 0, 1000)."...."}}
            <button>Read More! >> </button>
            
        </div>
    </div>


        @endforeach
    </div>
@endsection