<table border="1px bold solid">
    <thead>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>age</td>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{$student['id']}}</td>
        <td>{{$student['name']}}</td>
        <td>{{$student['age']}}</td>
    </tr>
    @endforeach
    </thead>
</table>
