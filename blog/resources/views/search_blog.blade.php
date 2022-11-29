@extends("index")

@section("content")

<div class="container">

    <div class="card card-custom">
        <div class="card-body">
           
            <form action="{{ route('search.post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-4">
                   
                    
                    <label for="name" class="col-md-4 col-form-label text-md-right">Search Blog: </label>
                    <input type="text" id="search" class="form-control" name="search"/>
                    <button type="submit" class="form-control btn btn-primary">
                        Go!
                    </button>
                   
              
            </div>
           
            
        </div>
    </div>
    
        @foreach($blogs as $blog)
        <div class="card card-custom">
        <div class="card-header custom-header">{{$blog['title']}}</div>
        <div class="card-body">
            <p>{{$blog['created_at']}} By User {{$blog['username']}}</p>
            {{substr($blog['body'], 0, 1000)."...."}}
            <a href="{{route('blogfetch', ['blogid' => $blog['id']])}}">Read More! >> </a>
            
        </div>
    </div>


        @endforeach
    </div>
@endsection