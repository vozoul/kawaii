@foreach($product as $products)
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>Modify Product Form</title>
</head>
<body>
<h1>Modifier les données du produit</h1>

<form method="POST" action="/modify">

 {{ csrf_field() }}

    <input type="hidden" name="id" value="{{$products->id}}">

    <div>
        <input type="text" name="name" value="{{$products->name}}" placeholder="Nom produit" >
    </div>

    <div>
        <input type="number" name="price" value="{{$products->price}}" placeholder="Prix">
    </div>

    <div>
        <textarea type="text" name="description" placeholder="Description">{{$products->description}}</textarea>
    </div>
    <div>
        <textarea type="text" name="feature" placeholder="Caractéristiques">{{$products->feature}}</textarea>
    </div>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Ajouter une image</span>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01"></label>
        </div>
    </div>
    <div>
        <button type=submit>Modifier</button>
    </div>

</form>
</body>
</html>
@endforeach