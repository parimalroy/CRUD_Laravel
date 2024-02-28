<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>all Employes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1>All Employes</h1>
        <form action="{{route('emp.delete')}}" method="post">
            @csrf
            <table class="table">
                <thead>
                    <tr>
                        
                        <th scope="col">Select</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Position</th>
                        <th scope="col">Address</th>
                        <th scope="col">Department</th>
                        <th scope="col">Details</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($employes as $id => $emp)
                        @if ($emp->id > 0)
                            <tr>
                                <td><input type="checkbox" name="ids[{{$emp->id}}" value="{{$emp->id}}"></td>
                                <td>{{ $emp->name }}</td>
                                <td>{{ $emp->email }}</td>
                                <td>{{ $emp->position }}</td>
                                <td>{{ $emp->address }}</td>
                                <td>{{ $emp->DeptName }}</td>
                                <td><a href="{{ route('emp.single', $emp->id) }}" class="btn btn-primary">View</a></td>
                                {{-- <td><a href="" class="btn btn-warning">Edit</a></td> --}}
                            </tr>
                        @else
                            <h2>No Data Found</h1>
                        @endif
                    @endforeach
                </tbody>
            </table>
            <a href="{{route('emp.form')}}" class="btn btn-primary">Add New Item</a>

            <input type="submit" value="Delete Select Item" class="btn btn-danger" />
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
