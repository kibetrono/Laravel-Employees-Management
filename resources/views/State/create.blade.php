@extends('layouts.main')

@section('content')
<h4>States</h4>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Country') }}</div>
                <a href="{{route('states.index')}}" class="float-right" >Go Back</a>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('states.store') }}">
                        @csrf
                            {{-- code --}}
                        <div class="row mb-3">

                            <label for="country_code" class="col-md-4 col-form-label text-md-end">{{ __('Country') }}</label>
                            <div class="col-md-6">
        
                <select name = "country_id" class="form-control">
                <option disabled selected>Open the select menu</option>
        
                @foreach ($countries as $country)

                <option value = "{{$country->id}}" >{{$country->name}} </option>

                    
                @endforeach
             
                 </select>

                            </div>
               
                                @error('country_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      
                        </div>
                        {{-- firstname --}}
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Country Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                   
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create State') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
