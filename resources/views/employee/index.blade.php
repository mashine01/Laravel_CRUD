<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/index.css">
    <title>Employee Table</title>
</head>
<body>
    <div class="header">
        <h2>Manage Employees</h2>
        <div class="buttonsContainer">
                <a href="{{route('employee.create')}}">
                    <button>Create a New Employee</button>
                </a>
        </div>
    </div>
    <div>
        <table class="crud" border="1">
            <tr>
                <th>Employee ID</th>
                <th>Name</th>
                <th>E-Mail</th>
                <th>Phone</th>
                <th>Created At</th>
                <th>Updated On</th>
                <th>Actions</th>
            </tr>
            @foreach($employees as $employee)
            <tr>
                <td>{{$employee->id}}</td>
                <td>{{$employee->fullname}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->phone}}</td>
                <td>{{$employee->created_at}}</td>
                <td>{{$employee->updated_at}}</td>
                <td>
                    {{-- <a href="{{route('employee.edit', ['employee' => $employee])}}">Edit</a> --}}
                    <form method="GET" action="{{ route('employee.edit', ['employee' => $employee]) }}">
                        @csrf
                        @method("GET")
                        <button type="submit">Edit</button>
                    </form>
                    <form method="POST" action ="{{route('employee.destroy', ['employee'=>$employee])}}">
                        @csrf
                        @method("DELETE")
                        <button type="submit">Delete</button>
                    </form>
                    
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>