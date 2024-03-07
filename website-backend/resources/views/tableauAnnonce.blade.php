<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,tr,th{
            border: 1px solid;
            border-collapse: collapse;
        }
    </style>
</head>

<body>

    <h2> Annonces en cours </h2><br><br>
    <table class="bg-red-200">
        <tr>
            <th>Titre de l'annonce</th>
            <th>Type de l'annonce</th>
            <th>Contenu</th>
            <th>Actions</th>
        </tr>
        @foreach($annonces as $annonce)
        <tr>
            <td>{{$annonce->nomAnnonce}}</td>
            <td>{{$annonce->typeAnnoce}}</td>
            <td>{{$annonce->contenu}}</td>

            <td>
                <!-- Code pour modifier  -->
                <a href="{{route('editAnnonce',['id'=> $annonce->id])}}">Modifier</a>
                <!-- Code pour supprimer -->
                <form action="{{route('deleteAnnonce',['id'=> $annonce->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Supprimer</button>
                </form>

            </td>
        </tr>

        @endforeach
    </table>
    {{ $annonces->links() }}



</body>

</html>
