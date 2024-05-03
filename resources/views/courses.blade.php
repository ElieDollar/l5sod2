@foreach($courses as $course)
{{$course->id}}
@endforeach
<html>
    <body>
        
   
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>details</th>
            <th>actions</th>
        </tr>
        @foreach($courses as $course)
        <tr>
            <td>{{$course->id}}</td>
            <td>{{$course->coursename}}</td>
            <td>
                <a href="/edit?{{$course->id}}">edit</a>
                <a href="/delete?{{$course->id}}">Delete</a>
            </td>
            @endforeach
        </tr>
    </table>
    </body>
</html>
