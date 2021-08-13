<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @include('components.navbar')
    <div class="row">
        <div class="col d-flex justify-content-center">
            <form action="{{route('course')}}" method="POST">
                <div class="form-group">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label>Nombre del curso</label>
                    <input class="form-control @error('name') is-invalid @enderror" id="name" name ="name">
                </div>
                <div class="form-group">
                    <label>Nombre de la asignatura</label>
                    <select class="form-select form-control" aria-label="Default select example" id="id_subject" name="id_subject">
                        @foreach($subject as $sub)
                            <option value="{{$sub->id}}">{{$sub->name}}</option>
                        @endforeach
                      </select>
                </div>
                
                <button type="submit">Prueba</button>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
</body>
</html>