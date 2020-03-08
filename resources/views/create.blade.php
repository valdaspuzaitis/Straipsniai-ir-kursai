@extends ('welcome')

@section ('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Naujas įrašas') }}</div>
                <div class="card-body">
                    <form method="POST" action="/articles" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Antraštė') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title"required autofocus 
                                oninvalid="this.setCustomValidity('Įveskite antraštę')" 
                                oninput="setCustomValidity('')"
                                value="{{ old('title') }}"
                                >                                   
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="author" class="col-md-4 col-form-label text-md-right">{{ __('Autorius') }}</label>

                            <div class="col-md-6">
                                <input type="author" class="form-control" name="author" required 
                                oninvalid="this.setCustomValidity('Įveskite autorių')" 
                                oninput="setCustomValidity('')"
                                value="{{ old('author') }}">                                   
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="picture" class="col-md-4 col-form-label text-md-right">{{ __('Įkeliama nuotrauka') }}</label>

                            <div class="col-md-6">
                                <input type="file" name="picture">                                   
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="body" class="col-md-4 col-form-label text-md-right">{{ __('Tekstas') }}</label>

                            <div class="col-md-6">
                                <textarea  type="text" name="body" class="form-control tekst-area" name="body" required 
                                oninvalid="this.setCustomValidity('Parašykite tekstą')" 
                            oninput="setCustomValidity('')">{{old('body')}}</textarea>                     
                            </div>
                        </div>  
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Siųsti</button>
                                </div>                                    
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection