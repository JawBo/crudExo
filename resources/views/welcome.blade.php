<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{url('css/app.css')}}">
    </head>
    <body>      

        <form action="/create" method="get">
        @csrf
            <div class="form-group text-center container">
                <input class="form-control my-2"  name="leTitre" type="text" placeholder="Titre">
                <input class="form-control my-2" name="ann1" placeholder="Année de début" type="text">
                <input class="form-control my-2" name="ann2" placeholder="Année de fin" type="text">
                <textarea class="form-control my-2" name="laDescription" placeholder="Description" cols="30" rows="5"></textarea>       
                <button type="submit" class="btn btn-primary my-2 ">Add</button>
            </div>
        </form>
    <section class="row">
    @foreach($contenuExos as $key => $item)
        <div class="col-3">
            <form action="/delete/{{$item->id}}" method="post">
                @csrf
                <div class="card" style="width: 19rem;">
                    <h3 class="my-2 mx-3 text-center">{{$item->titre}}</h3>
                        <img class="card-img-top" src="{{url('images/w3.jpg')}}" alt="Card image">
                    <div class="card-body">
                        <span>Année de début et de fin :</span> {{$item->year1}} - {{$item->year2}} 
                        <p class="card-text">{{$item->description}}</p>
                        <div class="text-center">
                            <a href="/edit/{{$item->id}}" class="btn btn-warning">Edit</a>
                            <button type="submit" class="btn btn-danger"> Delete</button>      
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endforeach
    </section>
    </body>
</html>
