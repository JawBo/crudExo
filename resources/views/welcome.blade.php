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
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <form action="/store" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group text-center container">
                <input class="form-control my-2"  name="titre" type="text" placeholder="Titre" maxlength="50" value="{{ old('titre')}}">
                <div>
                    <input class="form-control my-2" name="ann1" placeholder="Année de début" type="text" maxlength="4" value="{{ old('ann1')}}">
                    <input class="form-control my-2" name="ann2" placeholder="Année de fin" type="text" maxlength="4" value="{{ old('ann2')}}">
                </div>
                <textarea class="form-control my-2" name="description" placeholder="Description" cols="30" rows="5">{{ old('description') }}</textarea>       
                <input type="file" name="image">
                <hr>
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
                        <img class="card-img-top" src="{{url('storage/upload/$item->image') }}" alt="{{$item->image }}">
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
