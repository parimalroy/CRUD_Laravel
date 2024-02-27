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
        @foreach ($employes as $emp)
            <form action="" method="post">
                @csrf
                @foreach ($employes as $id => $emp)
                    <div class="row pb-4 ">
                        <div class="col">
                            <input type="text" class="form-control" name="name" value="{{ $emp->name }}"
                                aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="email" value={{ $emp->email }}
                                aria-label="Last name">
                        </div>

                    </div>
                    <div class="row pb-4">
                        <div class="col">
                            <input type="text" class="form-control" name="position" value={{ $emp->position }}
                                aria-label="First name">
                        </div>
                        <div class="col">
                            {{-- <select class="form-select" aria-label="Default select example" name="department">
                    @foreach ($department as $id => $dept)
                        
                        <option name="{{$dept->DeptName}}" value="{{$dept->id}}">{{$dept->DeptName}}</option>
                    @endforeach --}}
                            </select>
                        </div>

                    </div>
                    <div class="row pb-4">
                        <div class="col">
                            <input type="text" class="form-control" name="address" value="{{ $emp->address }}"
                                aria-label="First name">
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <b> Select Gender:</b>
                            </div>
                            <div class="form-check form-check-inline">
                                @if ($emp->gender == 'Male')
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                                        value="Male" checked>
                                @else
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                                        @endif
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                @if ($emp->gender == 'Female')
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2"
                                        value="Female" checked>
                                @else
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2"
                                        @endif
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                            @if ($emp->gender == 'Other')
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio3"
                                    value="Others" checked>
                                    @else
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3"
                                    value="Others" >
                                    @endif
                                <label class="form-check-label" for="inlineRadio3">Others</label>
                            </div>
                        </div>

                    </div>



                    <div class="row pb-5">
                        <div class="col">
                            <b> Select you are Intersted</b>
                        </div>
                        <div class="col">
                            <p>
                                @php
                                    $hobbys = json_decode($emp->hobby);
                                @endphp
                                @if (!empty($hobbys))
                                    @foreach ($hobbys as $hobby)
                                        @if (count($hobbys) > 1)
                                            {{ $hobby }}/
                                        @else
                                            {{ $hobby }}
                                        @endif
                                    @endforeach
                                @else
                                    No Hobby Found
                                @endif
                            </p>
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
                @endforeach
            </form>
        @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
