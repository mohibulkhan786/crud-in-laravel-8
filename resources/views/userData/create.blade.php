@extends('userData.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('userData.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('userData.store') }}" method="POST">
    {{ csrf_field() }}
  
     <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>

            <div class="form-group">
                <strong>Email Id:</strong>
                <input type="text" class="form-control" name="email" placeholder="Email Id">
            </div>
              

              <div class="form-group">
                <strong>Mobile:</strong>
                <input type="text" name="mobile" class="form-control" placeholder="mobile">
            </div>
              

              <div class="form-group">
                <strong>Address</strong>
                <input type="text" class="form-control" name="address" placeholder="Address">
            </div>


             <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        </div>
        
        

         
          

           

       
    </div>
   
</form>
@endsection 