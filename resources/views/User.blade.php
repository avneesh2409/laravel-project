@extends("master")

@section('content')
<h1>Register User here</h1>
<form action='' method='POST'>
    @csrf
    <h5>Enter Name</h5><input type='text' name="name" /><hr />
    <h5>Enter Email</h5><input type='text' name="email" id="email" /><span id="email_error"></span><hr />
    <h5>Enter Mobile</h5><input type='text' name="mobile" id="mobile" /><span id="mobile_error"></span><hr />
    <button type="submit" id="user_submit">submit</button>
</form>
@if(isset($status))
<h1>{{$status}}</h1>
@endif
@endsection