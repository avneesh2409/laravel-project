@extends("master")

@section('content')
<h1>All the tasks</h1>
@if(isset($data))
    <table border="1" style="border-collapse:collapse">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>type</th>
            <th>user_id</th>
            <th>created_at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
        <tr>
        <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->type}}</td>
            <td>{{$item->user_id}}</td>
            <td>{{$item->created_at}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @endif
@endsection