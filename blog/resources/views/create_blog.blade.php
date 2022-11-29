@extends("index")

@section("content")

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Blog: </div>
                    <div class="card-body">
    
                        <form action="{{ route('post-blog') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                
                                    <li class="form-control custom-li">Please insert the fields before posting.</li>
                            
                                <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>
                                <div class="col-md-6">
                                    <input type="text" id="title" class="form-control" name="title"/>
                                    
                                    
                                </div>
                            </div>

                            
                                <label for="body" class="col-md-4 col-form-label text-md-right">Content: </label><br/>
                                <div class="form-group row">
         
                                    <textarea class="form-control textarea custom-textarea" id="body" class="form-control" name="body"></textarea>
                                    
                                </div>
                                </div>
                            
    
                            
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-custom">
                                    Post >>
                                </button>
                            </div>
                        </form>
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
  </main>

@endsection