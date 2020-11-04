<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <style>
        .form-field {
            margin: 30px;
        }
    </style>
</head>
<body>
    
    <form action="{{route('comics.store')}}" method="POST">

        @csrf
        @method('POST')

        <div class="form-field">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" placeholder="Titolo">
            @error('name')
                <div class="alert">{{$message}} </div>
            @enderror
            <label for="publisher">Editore</label>
            <input type="text" name="publisher" id="publisher" placeholder="Editore">
        </div>

        <div class="form-field">
            <label for="year">Anno</label>
            <input type="date" name="year" id="year" placeholder="gg-mm-aaa">
            <label for="number">Numero</label>
            <input type="data" name="number" id="number" placeholder="numero albo">
        </div>

        <div class="form-field">
            <label for="pages">Pagine</label>
            <input type="data" name="pages" id="pages" placeholder="Numero pagine">
            <label for="price">Prezzo</label>
            <input type="data" name="price" id="price" placeholder="Prezzo">
        </div>

        <div class="form-field">
            <label for="img_cover">Immagine / Cover</label>
            <input type="text" name="img_cover" id="img_cover" placeholder="URL">

        </div>

        <div class="form-field">
            <input type="submit" value="Salva"> 
        </div>

    </form>

</body>
</html>