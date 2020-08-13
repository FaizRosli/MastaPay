@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">List customer | <a href="{{ url('/home') }}"> back</a></div>
                
 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                        
                         <form action ="/Admin/Customer/{{$data_customer->id}}/Update" method = "post" >
                           {{csrf_field()}}


                           <div class="form-group">
                                <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="id"value="{{$data_customer->id}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email"value="{{$data_customer->email}}">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your full name" name="full_name"value="{{$data_customer->full_name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="{{$data_customer->password}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your phone number" name="phone"value="{{$data_customer->phone}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1" >Gender</label>
                                <select class="form-control" id="exampleFormControlSelect1"name="gender"value="{{$data_customer->gender}}">
                                <option value ="Male">Male</option>
                                <option value ="Female">Female</option>
                                <option value ="Other">Other</option>
                                </select>
                            </div>
                            
                        
                        <div class="modal-footer">
                            
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                  
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
