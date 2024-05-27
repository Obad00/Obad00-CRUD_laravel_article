<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD_ARTICLE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    

      <div class="container text-center">
        <h1>Tous les differents articles </h1>
        <hr>
         <a href="/ajouter" class="btn btn-primary">Ajouter un article</a>
        <hr>

        <div class="row">
            @foreach($articles as $article)
            <div class="col-md-4">
                <div class="card" style="width: 18rem; margin-bottom: 20px;">
                    <img src="https://st2.depositphotos.com/2026267/5233/i/950/depositphotos_52334423-stock-photo-news-article-on-digital-tablet.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->nom }}</h5>
                        <p class="card-text">{{ $article->description }}</p>
                        <p class="card-text">{{ $article->auteur }}</p>
                        <p class="card-text">{{ $article->a_la_une}}</p>
                        <p class="card-text">{{ $article->categorie}}</p>
                        <p class="card-text">{{ $article->date_de_creation }}</p>
                        <a href="{{ url('/modifier-article', $article->id) }}" class="btn btn-primary">Modifier</a>
                        <a href="{{ url('/supprimer-article', $article->id) }}" class="btn btn-danger">Supprimer</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

     

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>