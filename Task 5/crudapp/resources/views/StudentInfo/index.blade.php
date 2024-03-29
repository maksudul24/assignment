<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Student</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('StudentInfo.create')}}">Add a Student</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-Mail</th>
                <th>Class</th>
                <th>Marks</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($students as $student )
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->class}}</td>
                    <td>{{$student->marks}}</td>
                    <td>
                        <a href="{{route('StudentInfo.edit', ['student' => $student])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('StudentInfo.destroy', ['student' => $student])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>