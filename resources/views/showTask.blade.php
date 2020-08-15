@extends("master")

@section('content')
<h1>All the tasks</h1><a href="{{ url('task/download/excel')}}" id="export" class="exportSpan" >Export Tasks to Excel file</a>
<a href="{{ url('task/download/csv')}}" id="export" class="exportSpan" >Export Tasks to CSV file</a>
@if(isset($data))
    <table border="1" style="border-collapse:collapse;padding:'10px'">
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