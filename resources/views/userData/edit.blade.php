  @extends('userData.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit User</h2>
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
  
    <form action="{{ route('userData.update',$userData->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
   
         <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $userData->name }}" class="form-control" placeholder="Name">
                </div>
           
           
                <div class="form-group">
                    <strong>Email ID:</strong>
                    <input type="text" class="form-control" name="email" value ="{{ $userData->email }}" placeholder="Email ID">
                </div>


                 <div class="form-group">
                <strong>Mobile:</strong>
                <input type="number" name="mobile" class="form-control" value="{{ $userData->mobile }}" >
            </div>
              

              <div class="form-group">
                <strong>Address</strong>
                <input type="text" class="form-control" name="address" value="{{ $userData->address }}">
            </div>

            
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </div>
   
    </form>
@endsection 