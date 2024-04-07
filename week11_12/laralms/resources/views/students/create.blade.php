<h1>Create</h1>

@extends('layouts.admin')
@section('content')
  <div class="row">
     <div class="col">
        <h1 class="display-2">
            Create A Student Profile
        </h1>
     </div>
  </div>

  <div class="row">
    <div class="col">
        <form action="{{ route('students.store') }}" method="POST">

            @if ($errors -> any())
              <div class="alert alert-danger">
                <ul>
                    @foreach ($errors -> all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
              </div>
                
            @endif


            {{ csrf_field() }}
            <div class="form-group">
              <label for="fname">Email address</label>
              <input type="text" class="form-control" id="fname" name="fname" aria-describedby="fname" placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="lname">Email address</label>
                <input type="text" class="form-control" id="lname" name="lname"  aria-describedby="lname" placeholder="Last Name">
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="text" class="form-control" id="email" name="email"  aria-describedby="email" placeholder="Email">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
     </div>
   </div>
    
@endsection