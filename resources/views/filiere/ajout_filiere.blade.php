@include('layouts.app')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion Etudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
  <div class="row">
    <div class="col">
        <h1>Ajout d'une Filière</h1>
        <br> 
        <br>
            @if (session('status'))
                <div class="alert alert-success">
                    {{(session('status'))}}
                </div>
            @endif

            <ul>
                @foreach($errors->all() as $error)
                    <li class="alert alert-danger">{{$error}}</li>
                @endforeach

            </ul>

        <br> 
        <br>
        <form action="ajout_filiere/traitement" method="POST" class="form-group">
            @csrf 
            <div class="form-group">
                <label for="Nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="Nom" name="nom">
            </div>
            <div class="form-group">
                <label for="Description" class="form-label">Description</label>
                <input type="textarea" class="form-control" id="Description" name="description">
           <br>
            <button type="submit" class="btn btn-success">Submit</button>

            <br> <br>
            <a href="/filiere" class="btn btn-info">Back to list</a>
        </form>

    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>