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
        <h1>Ajout d'un Etudiant</h1>
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
        <form action="ajouter/traitement" method="POST" class="form-group">
            @csrf 
            <div class="form-group">
                <label for="Nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="Nom" name="nom">
            </div>
            <div class="form-group">
                <label for="Prénom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="Prénom" name="prenom">
            </div>
            <div class="form-group">
                <label for="Filière" class="form-label">Filère</label>
                <input type="text" class="form-control" id="Filère" name="filiere">
            </div>
           <br>
            <button type="submit" class="btn btn-success">Submit</button>

            <br> <br>
            <a href="/etudiant" class="btn btn-info">Back to list</a>
        </form>

    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>