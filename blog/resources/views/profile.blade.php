@extends("index")

@section("content")

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profile Details</div>
                    <div class="card-body">

                       <h1>Profile Picture:</h1> <br/><img width="300px" height="250px" src="{{asset(auth()->user()->image)}}"/> <br/><h1>Name: {{auth()->user()->name}}</h1>
                        <h1>Email: {{auth()->user()->email}}</h1>

                        <br/>
                        <br/>

                        <a href="{{route("index")}}">Go Back</a>
                        
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  </main>

@endsection