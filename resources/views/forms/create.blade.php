<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>Product Form</title>
</head>
<body>
<h1>Ajout d'un produit</h1>

<form method="POST" action="/create">

    {{ csrf_field() }}

    <div>
        <input type="text" name="name" placeholder="Nom produit" >
    </div>

    <div>
        <input type="number" name="price" placeholder="Prix">
    </div>

    <div>
        <textarea type="text" name="description" placeholder="Description"></textarea>
    </div>
    <div>
        <textarea type="text" name="feature" placeholder="Caractéristiques"></textarea>
    </div>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Ajouter une image</span>
        </div>
        <div class="custom-file">
            <input type="file" name="image01" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01"></label>
        </div>
    </div>
    <div>
        <button type="submit">Ajouter</button>
    </div>

</form>
</body>
</html>
