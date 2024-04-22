@extends('layout')

@section('title', 'FormationContinue')

@section('content')
<div>
    <div class="text-black">
        {{-- FormationPratiques --}}

        <div class=" sm:flex-row flex flex-col sm:py-[60px] py-[10px] sm:px-[150px] px-[70px] sm:justify-between justify-center items-center sm:mb-[50px] mb-[30px] sm:gap-10 gap-8">
            <div class=" w-[50%]">
                <img src="images/company.jpg" alt="">
            </div>
            <div class="flex flex-col gap-5 w-[50%]">
              <div class="text-gray-400 text-lg font-semibold">
                <p>
                   <span class="text-black">À OIPIC,</span>  nous offrons une gamme diversifiée de formations, comprenant des formations pratiques, des formations professionnelles et des formations para-universitaires, afin de répondre aux besoins variés de nos apprenants.
                </p>
                <p>
                    Nos formations pratiques offrent une expérience concrète qui permet aux participants d'acquérir des compétences directement applicables dans leur domaine. Grâce à des exercices pratiques et des mises en situation réelles, les apprenants développent leur savoir-faire et leur confiance en leur capacité à relever des défis professionnels.
                </p>
              </div>
              </div>
            </div>
          </div>

        <div class="flex flex-col gap-10">
            <div class="flex flex-col  justify-center items-center">
                <p class="text-5xl text-blue-700 font-semibold">
                    Listes de <span class="text-slate-700"> quelques-unes de</span> nos <span class="text-black">formations</span>
                </p>
            </div>
            <div class="flex flex-wrap gap-3  justify-center items-center">
                <a href="">
                    <div class="flex flex-col border shadow p-8 rounded-lg gap- justify-center items-center">
                        <img class="w-[80px] h-[80px]" src="images/topographie.png" alt=""/>
                        <p class="text-gray-400 w-[300px] h-[100px] text-xl font-semibold flex flex-col  items-center justify-center">
                            Topographie
                        </p>
                    </div>
                </a>
                <a href="">
                    <div class="flex flex-col border shadow p-8 rounded-lg gap-3 justify-center items-center">
                        <img class="w-[80px] h-[80px]" src="images/mecanique.png" alt=""/>
                        <p class="text-gray-400 w-[300px] h-[100px] text-xl font-semibold flex items-center justify-center">
                            Mécanique
                        </p>
                    </div>
                </a>
                <a href="">
                    <div class="flex flex-col border shadow p-8 rounded-lg gap-3 justify-center items-center">
                        <img class="w-[80px] h-[80px]" src="images/charpenterie.png" alt=""/>
                        <p class="text-gray-400 w-[300px] h-[100px] text-xl font-semibold flex items-center justify-center">
                            Charpenterie                        
                        </p>
                    </div>
                </a>
                <a href="">
                    <div class="flex flex-col border shadow p-8 rounded-lg gap-3 justify-center items-center">
                        <img class="w-[80px] h-[80px]" src="images/soudure.png" alt=""/>
                        <p class="text-gray-400 w-[300px] h-[100px] text-xl font-semibold flex items-center justify-center">
                            Soudure                        
                        </p>
                    </div>
                </a>
                <a href="">
                    <div class="flex flex-col border shadow p-8 rounded-lg gap-3 justify-center items-center">
                        <img class="w-[80px] h-[80px]" src="images/couture.png" alt=""/>
                        <p class="text-gray-400 w-[300px] h-[100px] text-xl font-semibold flex items-center justify-center">
                            Couture
                        </p>
                    </div>
                </a>
                <a href="">
                    <div class="flex flex-col border shadow p-8 rounded-lg gap-3 justify-center items-center">
                        <img class="w-[80px] h-[80px]" src="images/peinture.png" alt=""/>
                        <p class="text-gray-400 w-[300px] h-[100px] text-xl font-semibold flex items-center justify-center">
                            Peinture
                        </p>
                    </div>
                </a>
                <a href="">
                    <div class="flex flex-col border shadow p-8 rounded-lg gap-3 justify-center items-center">
                        <img class="w-[80px] h-[80px]" src="images/mecaniqaAlu.jpg" alt=""/>
                        <p class="text-gray-400 w-[300px] h-[100px] text-xl font-semibold flex items-center justify-center">
                            Menuiserie aluminium
                        </p>
                    </div>
                </a>
                <a href="">
                    <div class="flex flex-col border shadow p-8 rounded-lg gap-3 justify-center items-center">
                        <img class="w-[80px] h-[80px]" src="images/imprimerie.png" alt=""/>
                        <p class="text-gray-400 w-[300px] h-[100px] text-xl font-semibold flex items-center justify-center">
                            L'imprimerie
                        </p>
                    </div>
                </a>
                <var><a href="">
                    <div class="flex flex-col border shadow p-8 rounded-lg gap-3 justify-center items-center">
                        <img class="w-[80px] h-[80px]" src="images/serigraphie.png" alt=""/>
                        <p class="text-gray-400 w-[300px] h-[100px] text-xl font-semibold flex items-center justify-center">
                            Sérigraphie
                        </p>
                    </div>
                </a>
               {{--  <a href="">
                    <div class="flex flex-col border shadow p-8 rounded-lg gap-3 justify-center items-center">
                        <img class="w-[80px] h-[80px]" src="images/topographie.png" alt=""/>
                        <p class="text-gray-400 w-[300px] h-[100px] text-xl font-semibold flex items-center justify-center">
                            
                        </p>
                    </div>
                </a> --}}
                

            </div>
        </div>
    </div>

    
    <div class="flex flex-col justify-center items-center gap-4 sm:py-[60px] py-[10px]">
        <p class="text-5xl text-blue-700 font-semibold">
            Découvrir <span class="text-slate-700">nos formations</span> <span class="text-black">para-universitaires</span>
        </p>
        <p class="text-sm text-gray-400">Conçues pour vous offrir une expertise progressive et personnalisée à travers trois niveaux distincts</p>
    </div>

    
    <div class=" sm:flex-row flex flex-col  sm:px-[150px] px-[70px] sm:justify-between justify-center items-center     sm:gap-10 gap-8">
         {{--  Formations professionnelles --}}
        <div class=" w-[50%]">
            <img src="images/about1.jpg" class="w-[500px] h-[300px]" alt="">
        </div>
        <div class="flex flex-col gap-5">
            <p class="text-black-400 text-xl font-semibold">À OIPIC,</p>
            <p class="w-[500px] text-gray-400 text-xl font-semibold">

                Nos formations professionnelles sont conçues pour répondre aux besoins spécifiques du marché de l'emploi actuel. Elles offrent un apprentissage pratique et des compétences spécialisées afin de préparer les apprenants à réussir dans leur domaine professionnel. Grâce à nos programmes de formation, les participants peuvent acquérir les connaissances et les compétences nécessaires pour atteindre leurs objectifs professionnels.
            </p>
        </div>
        
      </div>

    <div>
        
        <div class="flex justify-between sm:px-[90px] px-[70px] sm:py-[40px] py-[10px] sm:gap-10 gap-8">
            <a href="">
                <div class="flex flex-col border shadow p-8 rounded-lg gap-3">
                    <img class="w-[400px] h-[250px]" src="images/consultantGeneral.jpg" alt=""/>
                    <p class="text-gray-400 w-[300px] h-[100px] text-xl font-semibold">
                        Consultant Généraliste
                    </p>
                </div>
            </a>
            <a href="">
                <div class="flex flex-col border shadow p-8 rounded-lg gap-3">
                    <img class="w-[400px] h-[250px]" src="images/consultantJunior.jpg" alt=""/>
                    <p class="text-gray-400 w-[300px] h-[100px] text-xl font-semibold">
                        Consultant Junior
                    </p>
                </div>
            </a>
            <a href="">
                <div class="flex flex-col border shadow p-8 rounded-lg gap-3">
                    <img class="w-[400px] h-[250px]" src="images/consultantSenior.jpg" alt=""/>
                    <p class="text-gray-400 w-[300px] h-[100px] text-xl font-semibold">
                        Consultant Sénior
                    </p>
                </div>
            </a>
        </div>

        <div class=" sm:flex-row flex flex-col sm:py-[60px] py-[10px] sm:px-[150px] px-[70px] sm:justify-between justify-center items-center sm:mb-[50px] mb-[30px] sm:gap-10 gap-8">
            <div class=" w-[50%]">
                <img src="images/same.jpg" alt="">
            </div>
            <div class="flex flex-col gap-5 w-[50%]">
              <div class="text-gray-400 text-lg font-semibold flex flex-col gap-2">
                <p>
                    Au premier niveau, plongez dans l'univers du consulting en tant que Consultant Généraliste. Cette étape initiatique vous permettra d'explorer diverses facettes du monde professionnel, vous dotant ainsi d'une compréhension globale des différentes fonctions au sein d'une entreprise. À l'issue de cette formation enrichissante, vous obtiendrez un certificat international, gage de votre compétence et de votre polyvalence.
                </p>
                <p>
                    Passant au niveau suivant, le niveau II, vous aurez l'opportunité de choisir la voie qui vous inspire le plus. Que ce soit la finance, les ressources humaines, le marketing la communication,la comptabilité ou tout autre domaine de votre choix, notre programme vous fournira une formation spécialisée dans la fonction de votre choix. À la clé, une certification de Consultant Junior, attestant de votre maîtrise des fondamentaux et de votre capacité à relever les défis professionnels avec brio.
                </p>
               
                <p>
                    Mais votre parcours ne s'arrête pas là. Vous aspirez à devenir un expert reconnu dans votre domaine ? Notre niveau Consultant Sénior vous offre cette possibilité. Que vous souhaitiez approfondir vos connaissances ou vous spécialiser davantage, notre programme flexible vous permettra d'acquérir les compétences nécessaires pour exceller en tant que Consultant Sénior. Que ce soit en ligne ou en présentiel, progressez à votre rythme et obtenez la certification qui fera de vous un véritable leader dans votre secteur d'activité.
                </p>
              </div>
              </div>
            </div>
          </div>

        
        
        <p>

        </p>
    </div>
</div>
@endsection