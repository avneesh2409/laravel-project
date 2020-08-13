@extends("master")

@section('content')
<h1>Assign the task to the users</h1>
<form action='' method='POST'>
    @csrf
<h5>Select User </h5><select name="userid">
    <option value="0">select users</option>
    @if(isset($users))
        @foreach($users as $user)
        <option value={{$user->id}}>{{$user->name}}</option> ------>
        @endforeach
    @endif
    
</select><hr />
    <h5>Task Name</h5><input type='text' name="name" /><hr />
    <h5>Task Type</h5><select name="type">
        <option>select type</option>
        <option value="Pending">Pending</option>
        <option value="Done">Done</option>
    </select><hr />
    <button type="submit" >submit</button>
</form>

@endsection