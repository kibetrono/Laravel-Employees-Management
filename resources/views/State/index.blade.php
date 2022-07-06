@extends('layouts.main')

@section('content')
    <h4>List of states</h4>
    <div class="card">
      <div class="col-md-12">

        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>{{ $message }}</strong> 
    </div>


        @elseif($message = Session::get('danger'))

    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>{{ $message }}</strong>
    </div>
      
    @endif
    
        </div> 

        @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
        <div class="card-header">
          <div class="row">
            <div class="col-md-10">
              <form method="GET" action="{{route('states.index')}}">
                <div class="form-row align-items-center">
                 
                  <div class="col-auto">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                      </div>
                      <input type="search" name="search" class="form-control" id="inlineFormInputGroup" placeholder="Country Name">
                    </div>
                  </div>
                 
                  <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                  </div>
                </div>
              </form> 
            </div>
            <div class="col-md-2">
              <a href="{{route ('states.create') }}" class="btn btn-primary mb-2">Create</a>

            </div>
          </div>
          

        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Country Code</th>
                    <th scope="col">State Name</th>
                    <th scope="col">Edit Action</th>
                    <th scope="col">Delete Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($states as $state)
                  <tr>
                    <th scope="row">{{$state->id}}</th>
                    <td>{{$state->country->country_code}}</td>
                    <td>{{$state->name}}</td>
                    <td>
                      <a href="{{ route ('states.edit',$state->id) }}" class="btn btn-success">Edit</a>
                    </td>

                    <td>
                      <form method="POST" action="{{ route('states.destroy',$state->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" >Delete {{$state->name}}</button>
                    </form>
                      {{-- <a href="{{ route ('states.destroy',$country->id) }}" class="btn btn-danger">Delete</a> --}}
                    </td>
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
        </div>
    </div>
@endsection