@extends('layouts.main')

@section('content')
    <h4>List of Users</h4>
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
              <form method="GET" action="{{route('users.index')}}">
                <div class="form-row align-items-center">
                 
                  <div class="col-auto">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                      </div>
                      <input type="search" name="search" class="form-control" id="inlineFormInputGroup" placeholder="Username or Email">
                    </div>
                  </div>
                 
                  <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                  </div>
                </div>
              </form> 
            </div>
            <div class="col-md-2">
              <a href="{{route ('users.create') }}" class="btn btn-primary mb-2">Create</a>

            </div>
          </div>
          

        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Edit Action</th>
                    <th scope="col">Delete Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($allusers as $one_user)
                  <tr>
                    <th scope="row">{{$one_user->id}}</th>
                    <td>{{$one_user->username}}</td>
                    <td>{{$one_user->email}}</td>
                    <td>
                      <a href="{{ route ('users.edit',$one_user->id) }}" class="btn btn-success">Edit</a>
                    </td>

                    <td>
                      <form method="POST" action="{{ route('users.destroy',$one_user->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" >Delete {{$one_user->username}}</button>
                    </form>
                                      </td>
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
        </div>
    </div>
@endsection