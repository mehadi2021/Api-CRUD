@extends('admin.master')


@section('content')

<form action="{{ route('admin.registration.create') }}" method="post">
@csrf
<div class="form-group">
    <label for="exampleInputEmail1" >User Name</label>
    <input type="string" class="form-control" id="exampleInputEmail1" aria-describedby="" name="name" placeholder="Enter Your Name">
   </div>
   <div class="form-group">
   <label for="exampleInputEmail1">Choose a Gender:</label>
 <select class="form-select" aria-label="Default select example" aria-describedby="" name="gender">
  <option>Choose Your Option</option>
  <option value="male">Male</option>
  <option value="female">Female</option>
  <option value="other">Other</option>

</select>
   </div>
  <div class="form-group">
    <label for="exampleInputEmail1" >Email address</label>
    <input type="string" class="form-control" id="exampleInputEmail1" aria-describedby="" name="email" placeholder="Enter Your email Address">
   </div>
  <div class="form-group">
    <label for="exampleInputPassword1" >Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="email" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" >User Phone Number</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="" name="phone" placeholder="Enter Your Phone Number">
   </div>
   <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
