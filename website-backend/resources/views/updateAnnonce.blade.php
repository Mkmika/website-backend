<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Formulaire</title>
</head>

<body>
    <form action="{{route('updateAnnonce',['id'=> $annonces->id])}}" method="post">
        @csrf
        <h3>Formulaire d'enregistrement d'Annonce</h3>
        <div>
            <div>
                <label for=""></label>
                <span class="uppercase text-sm text-gray-600 font-bold">Titre de l'Annonce</span>
                <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                type="text" placeholder="" name="nomAnnonce" id="" value="{{$annonces->nomAnnonce}}" >
            </div>
            <div>
                <label for=""></label>
                <span class="uppercase text-sm text-gray-600 font-bold">Type de l'Annonce</span>
                <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                type="text" placeholder="" name="typeAnnonce" id="" value="{{$annonces->typeAnnonce}}" >
            </div>
            <div>
                <label for=""></label>
                <span class="uppercase text-sm text-gray-600 font-bold">Contenu</span>
                <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                type="text" placeholder="" name="contenu" id="" value="{{$annonces->contenu}}" >
            </div>

            <div>
                <input type="submit" value="Enregistrer">
                <input type="reset" value="Annuler">
            </div>

        </div>

    </form>


</body>

</html>
