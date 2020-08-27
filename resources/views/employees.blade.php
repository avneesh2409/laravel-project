@extends("master")

@section('content')
<h1>we are in Employee page</h1>
@if(isset($data))
    @foreach ($data as $user)
        <table class="employeeTable">
        <thead>
            <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Contact</th>    
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->address}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->contact}}</td>
            </tr>
            </tbody>
        </table>
    @endforeach
@endif

@endsection