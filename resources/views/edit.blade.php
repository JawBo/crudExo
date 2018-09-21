<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <title>Document</title>
    
</head>

<body>





    <form action="/update/{{$item->id}}" method="post">
        @csrf
        <div class="container my-5">
            <div >
                <input name="leTitre" class="form-control my-2" type="text" value="{{$item->titre}}"  id="">
            </div>

            <div >
                <textarea name="laDescription" id="" class="form-control my-2" cols="30" rows="10">{{$item->description}}</textarea>
            </div>
 
            <div class="">
                <button class="btn btn-primary form-control my-2"  type="submit">Sauvegarder</button>
            </div>            
        </div>
    </form>

</body>

</html>
