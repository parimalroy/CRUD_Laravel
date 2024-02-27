<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>all students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        {{-- <h1>Employe Details</h1> --}}
        <table class="table">
            {{-- <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">City</th>
               </tr>
            </thead> --}}
            <tbody>
                @foreach ($employes as $id => $emp)
                <h1 class="text-primary">{{$emp->name}} -Details</h1>
                    <tr>
                        <th>Name :</th>
                        <td>{{ $emp->name }}</td>
                    </tr>
                    <tr>
                        <th>Email :</th>P
                        <td>{{ $emp->email }}</td>
                    </tr>
                    <tr>
                        <th>Position:</th>
                        <td>{{ $emp->position }}</td>
                    </tr>
                    <tr>
                        <th>Gender:</th>
                        <td>{{ $emp->gender }}</td>
                    </tr>
                    <tr>
                        <th>Address:</th>
                        <td>{{ $emp->address }}</td>
                    </tr>
                    <tr>
                        <th>Hobby:</th>
                        <td>
                        @php
                        $hobbys = json_decode($emp->hobby)
                        @endphp
                        @if(!empty($hobbys))
                        @foreach ($hobbys as $hobby )
                            @if(count($hobbys)>1)
                            {{$hobby}}/
                            @else
                            {{$hobby}}
                            @endif
                        @endforeach
                        @else
                        No Hobby Found
                        @endif
                        </td>
                    </tr>


                    <tr>
                    <td></td>
                    <td><a href="{{route('emp.edit',$emp->id)}}" class="btn btn-warning">Edit-{{$emp->name}} profile</a> 
                    {{-- <a href="{{route('delete.student',$students->id)}}" class="btn btn-danger">Delete</a></td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
