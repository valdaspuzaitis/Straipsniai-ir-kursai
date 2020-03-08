@extends ('welcome')

@section ('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{$article->title}}</div>
                <div class="card-body">
                    <form method="POST" action="/articles" enctype="multipart/form-data">
                        @csrf                        
                        <div class="flex-center">                           
                            {{$article->author}}                                   
                        </div>
                        <div class="flex-center">
                            {{$article->created_at}}                                  
                        </div>
                        

                            @if (file_exists(public_path('/images/'.$article->picture)))
                            <div class="flex-center">
                                <img src="{{asset('/images/'.$article->picture)}}" alt=""> 
                            </div>  
                            @else 
                            <div class="flex-center image-process">Paveikslėlis apdorojamas</div>
                                
                            @endif

                        </div>
                        <div class="flex-center">
                            {{$article->body}}
                        </div>                              
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection