<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Formulaire</title>
</head>

<body>
    <form action="{{route('storeAnnonce')}}" method="post">
        @csrf
        <div class="flex flex-col justify-center items-center gap-10 bg-slate-400 ">
            <h3 class="uppercase text-xl text-gray-800 font-bold">Formulaire d'enregistrement d'Annonce</h3>
            <div class="flex flex-col gap-5">
                <div >
                    <label for=""></label>
                    <span class="uppercase text-xl text-gray-800 font-bold">Titre de l'Annonce</span>
                    <input class="border w-[250px] h-[40px] bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                    type="text" placeholder="" name="id" id="">
                </div>
                <div >
                    <label for=""></label>
                    <span class="uppercase text-xl text-gray-800 font-bold">Type de l'Annonce</span>
                    <input class="border w-[250px] h-[40px] bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                    type="text" placeholder="" name="nomAnnonce" id="">
                </div>
                
                <div>
                    <label for=""></label>
                    <span class="uppercase text-xl text-gray-800 font-bold">Contenu</span>
                    <input class="border w-[250px] h-[40px] bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                    type="text" placeholder="" name="contenu" id="">
                </div>

                <div class="flex gap-20 justify-center">
                    <input class="uppercase text-xl text-gray-800 font-bold" type="submit" value="Enregistrer">
                    <input class="uppercase text-xl text-gray-800 font-bold" type="reset" value="Annuler">
                </div>

            </div>
        </div>


    </form>


</body>

</html>
