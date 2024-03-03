<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>create Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="pb-5">Create Employes</h1>
        <form action="{{route('emp.create')}}" method="post">
            @csrf
            <div class="row pb-4 ">
                <div class="col">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" name="name" placeholder="Name"
                        aria-label="First name">
                        @error('name')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                </div>
                <div class="col">
                    <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" name="email" placeholder="Email"
                        aria-label="Last name">
                        @error('email')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                </div>

            </div>
            <div class="row pb-4">
                <div class="col">
                    <input type="text" class="form-control @error('position') is-invalid @enderror" value="{{old('position')}}" name="position" placeholder="Position"
                        aria-label="First name">
                        @error('position')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                </div>
                <div class="col">
                    <select class="form-select @error('department') is-invalid @enderror" aria-label="Default select example" name="department">
                    @error('department')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    @foreach ($department as $id=>$dept )
                        
                       <option name="{{$dept->DeptName}}" value="{{$dept->id}}">{{$dept->DeptName}}</option>
                    @endforeach
                    </select>
                </div>

            </div>
            <div class="row pb-4">
                <div class="col">
                    <input type="text" class="form-control @error('address') is-invalid @enderror" value="{{old('address')}}" name="address" placeholder="address"
                        aria-label="First name">
                        @error('address')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                </div>
                <div class="col">
                <div class="form-check form-check-inline">
               <b> Select Gender:</b>
                </div>
                    <div class="form-check form-check-inline @error('gender') is-invalid @enderror">
                    
                        <input class="form-check-input " type="radio" name="gender" id="inlineRadio1"
                            value="Male">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2"
                            value="Female">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio3"
                            value="Others" >
                        <label class="form-check-label" for="inlineRadio3">Others</label>
                    </div>
                    @error('gender')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                </div>

            </div>



            <div class="row pb-5">
                <div class="col">
                  <b> Select you are Intersted</b> 
                </div>
                <div class="col">
                    <input type="checkbox" name="hobby[]" value="Music" /> Music
                    <input type="checkbox" name="hobby[]" value="Dance" /> Dance
                    <input type="checkbox" name="hobby[]" value="Play" /> Play
                    <input type="checkbox" name="hobby[]" value="Music" /> Reading
                    <input type="checkbox" name="hobby[]" value="Programming" /> Programming
                    <input type="checkbox" name="hobby[]" value="Gardening" /> Gardening
                    <input type="checkbox" name="hobby[]" value="Others" /> Others


                    </select>
                </div>

            </div>
            <div class="row">
                <input type="submit" class="btn btn-primary" value="Submit" />
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
