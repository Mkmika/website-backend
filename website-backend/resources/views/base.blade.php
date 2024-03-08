<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- choose one -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body>
    <!-- Navbar -->
    @include('header')

    <div class="bg-white">
        <!-- HeroSection -->
        <div class="sm:flex-row sm:justify-between flex flex-col justify-between sm:py-[20px] py-[10px] sm:px-[150px] px-[70px] sm:my-[20px] my-[10px]">
          <div class="flex flex-col gap-6 w-[50%]">
            <div class="flex items-center">
             <!--  <p class="bg-blue-300 sm:px-7 px-4 rounded-3xl">
                Bienvenue sur OIPIC - Où les Opportunités prennent Vie
              </p> -->
            </div>
            <div>
              <p class="text-xl sm:text-[2.8rem] leading-[56px] font-bold w-75%text-blue-700 uppercase">
              Un Univers <span class="text-blue-700">d'Opportunités</span> à votre portée
              </p>
            </div>
            <div class="text-slate-700 text-sm">
              <p>
              Notre plateforme dédiée vous
                <span class="text-blue-700">offre un espace dynamique</span>
                  pour partager des annonces percutantes et explorer des opportunités
                  professionnelles exceptionnelles.


              </p>
            </div>
            <div class="sm:flex-row flex flex-col gap-5 ">

              <a href="#nos_offres"class="bg-blue-500 transition-all duration-300 hover:bg-blue-700 px-[20px] py-[10px] rounded-full text-slate-100 text-sm font-bold flex justify-center items-center">
                Nos Offres
              </a>

              <a href="#annonces"class="flex gap-2 px-[40px] py-[10px]" >
                <img class="w-5 h-5" src="images/pause_button.jpeg" alt="" />
                Nos Annonces
              </a>
            </div>
          </div>
          <div class="w-[50% flex]">
            <img
              class="w-[400px] h-[360px]"
              src="images/hero_section.jpg"
              alt=""
            />
        </div>
    </div>
    {{-- Emploi --}}
        <div class="flex sm:px-[150px] px-[70px] sm:py-[60px] py-[10px] gap-10" id="emplois">
            @foreach ($emplois as $emploi)
                @include('emploi', ['donnee' => $emploi ])
            @endforeach
        </div>
    <div class="sm:py-[100px]">
        <!-- Services -->
        <div class="flex flex-col gap-7">
          <div class="flex flex-col gap-7" id="nos_offres">
            <div class="sm:flex-row sm:justify-center sm:items-center flex flex-col justify-center items-center ">
              <p class="text-5xl text-blue-700 font-semibold">
                Découvrir <span class="text-slate-700">nos</span> <span class="text-black">Offres</span>
              </p>
            </div>

              <div class="sm:flex-row flex flex-col sm:justify-between justify-center items-center sm:px-[150px] px-[70px] sm:gap-8 gap-8 ">
                <div class="flex flex-col border shadow p-8 rounded-lg gap-3">
                  <img
                    class="w-[60px] h-[60px]"
                    src="images/crm.jpeg"
                    alt=""
                  />
                  <p class="text-xl font-semibold">Annonces d'Opportunités</p>
                  <p class="text-sm text-gray-400 w-[258px] h-[100px]">
                    Explorez des opportunités professionnelles passionnantes.
                    Des offres d'emploi aux projets indépendants,trouvez la
                    meilleure opportunité pour votre carrière.
                  </p>
                  <div>

                  </div>
                </div>

                <div class="flex flex-col border shadow p-8 rounded-lg gap-3">
                  <img
                    class="w-[60px] h-[60px]"
                    src="images/cloud.jpeg"
                    alt=""
                  />
                  <p class="text-xl font-semibold">Recrutement Innovant</p>
                  <p class="text-sm text-gray-400 w-[258px] h-[100px]">
                    Facilitez vos recrutements avec notre plateforme.
                    Publiez des postes, découvrez des talents exceptionnels
                    et optimisez votre processus de sélection.
                  </p>
                  <div>

                  </div>
                </div>

                <div class="flex flex-col border shadow p-8 rounded-lg gap-3">
                  <img
                    class="w-[60px] h-[60px]"
                    src="images/communities.jpeg"
                    alt=""
                  />
                  <p class="text-xl font-semibold">Formation Continue</p>
                  <p class="text-sm text-gray-400 w-[258px] h-[100px]">
                    Investissez dans le développement de vos compétences.
                    Découvrez des programmes de formation continue adaptés
                    à vos besoins professionnels.
                  </p>
                  <div>

                  </div>
                </div>
              </div>

              <div class="sm:flex-row flex flex-col sm:justify-between justify-center items-center sm:px-[150px] px-[70px] sm:gap-8 gap-8 ">

                <div class="flex flex-col border shadow p-8 rounded-lg gap-3">
                  <img class="w-[60px] h-[60px]" src="images/process.jpeg" alt=""/>
                  <p class="text-xl font-semibold">Projets Collaboratifs</p>
                  <p class="text-sm text-gray-400 w-[258px] h-[100px]">
                    Trouvez des partenaires et collaborez sur des projets stimulants.
                    De la conception à la réalisation,découvrez des opportunités de
                    collaboration fructueuses pour votre carrière.
                  </p>
                  <div>

                  </div>
                </div>

                <div class="flex flex-col border shadow p-8 rounded-lg gap-3">
                  <img class="w-[60px] h-[60px]" src="images/data_analytics.jpeg" alt=""/>
                  <p class="text-xl font-semibold">Conseils en Carrière</p>
                  <p class="text-sm text-gray-400 w-[258px] h-[100px]">
                    Recevez des conseils personnalisés
                    pour faire évoluer votre carrière.
                    Des experts vous guideront pour
                    prendre des décisions éclairées.
                  </p>
                  <div>

                  </div>
                </div>

                <div class="flex flex-col border shadow p-8 rounded-lg gap-3">
                  <img class="w-[60px] h-[60px]" src="images/Erp.jpeg" alt=""/>
                  <p class="text-xl font-semibold">Événements Professionnels</p>
                  <p class="text-sm text-gray-400 w-[258px] h-[75px]">
                    Participez à des événements exclusifs et restez
                    informé des dernières tendances de l'industrie.
                  </p>
                  <div>

                  </div>
                </div>
              </div>
          </div>
          <div class="sm:flex-row flex flex-col sm:justify-center sm:items-center justify-center items-center">
            <a href="contact.html" class="bg-blue-500 transition-all duration-300 hover:bg-blue-700 rounded-full px-10 py-3 text-white">
              Contactez-nous
            </a>
          </div>
        </div>
      </div>

    <!-- A propos de nous -->
      <div class="bg-white " id="a_propos">

        <div class=" flex flex-col  justify-center items-center">
          <p class="text-5xl text-blue-700 font-semibold">
           <span class="text-black">Pourquoi nous </span>  choisir ?
          </p>
        </div>
        <div class=" sm:flex-row flex flex-col sm:py-[60px] py-[10px] sm:px-[150px] px-[70px] sm:justify-between justify-center items-center sm:mb-[50px] mb-[30px] sm:gap-0 gap-8">
          <div class=" w-[50%]">
            <img
              class="w-[350px] h-[350px]"
              src="images/img5.jpg"
              alt=""
            />
          </div>
          <div class="flex flex-col gap-5 w-[50%]">
            <div>
              <p class="text-2xl  font-semibold">
                A propos de nous
              </p>
            </div>
            <div>
              <p class="text-sm text-gray-400  ">

                Chez OIPIC, notre passion est de créer un espace où les opportunités professionnelles prennent vie.
                Fondée sur la conviction que chaque individu a le pouvoir de façonner son avenir,
                notre plateforme offre bien plus que des annonces d'emploi.
                Nous sommes une communauté dynamique, déterminée à inspirer,
                connecter et encourager la croissance professionnelle.
                Notre mission est de fournir une plateforme inclusive, propice à l'innovation et au développement.
                Que vous soyez à la recherche d'opportunités, de talents exceptionnels, ou simplement d'inspiration,
                OIPIC est l'endroit où vous pouvez explorer, évoluer et réussir.
                Rejoignez-nous dans cette aventure où chaque histoire professionnelle est unique et significative.
                Bienvenue chez OIPIC, où l'avenir professionnel se dessine avec passion et engagement.

              </p>
            </div>
            <div class="sm:flex-row sm:justify-center sm:items-center flex flex-col justify-center items-center">
              <a href="a_propos.html" class="bg-blue-500 transition-all duration-300 hover:bg-blue-700 rounded-full px-10 py-3 text-white">
                En Savoir plus
              </a>
            </div>
          </div>
        </div>

      </div>
      <!-- listes icone -->
      <div class="sm:flex-row flex flex-col sm:px-[150px] px-[70px] sm:py-[20px] py-[10px] sm:justify-between justify-center items-center sm:my-[20px] my-[20px] sm:gap-0 gap-10">
        <div class="flex">
          <img class="w-[40px] h-[40px]" src="images/list.jpeg" alt="" />
          <div class="flex flex-col">
            <p class="text-xs">Employee</p>
            <p class="text-sm font-semibold">3,500+</p>
          </div>
        </div>

        <div class="flex">
          <img class="w-[40px] h-[40px]" src="images/headset.jpeg" alt="" />
          <div class="flex flex-col">
            <p class="text-xs">Clients</p>
            <p class="text-sm font-semibold">78,000+</p>
          </div>
        </div>

        <div class="flex">
          <img class="w-[40px] h-[40px]" src="images/hand.jpeg" alt="" />
          <div class="flex flex-col">
            <p class="text-xs">Professionnels</p>
            <p class="text-sm font-semibold">25,000+</p>
          </div>
        </div>

        <div class="flex">
          <img class="w-[40px] h-[40px]" src="images/user.jpeg" alt="" />
          <div class="flex flex-col">
            <p class="text-xs">Utilisateurs</p>
            <p class="text-sm font-semibold">50,000+</p>
          </div>
        </div>
      </div>
     {{--  Annonce --}}
     <div id="annonces" class="flex flex-col justify-center items-center sm:px-[150px] px-[70px] sm:py-[60px] py-[10px] ">
        @foreach ($annonces as $annonce)
            @include('annonce', ['donnee' => $annonce ])
        @endforeach
    </div>


    <!-- testimonies -->
    <div class="flex flex-col gap-10 my-[20px] sm:py-[100px] py-[10px]">
        <div class="tayc flex flex-col  justify-center items-center">
          <p class="text-5xl text-blue-700 font-semibold">
           <span>Témoignages</span> <span class="text-black">Clients</span>
          </p>
        </div>
        <div class="sm:flex-row flex flex-col sm:justify-center sm:items-center justify-center items-center sm:gap-20 gap-10 sm:px-[150px] px-[70px]">
          <div class="w-[50%]">
            <img class="w-[350px] h-[350px] " src="images/img6.jpg" alt=""/>
          </div>
          <div class="flex flex-col w-[50%]">
            <p class="text-sm text-gray-400  ">
              Découvrez les histoires inspirantes de membres OIPIC
              qui ont trouvé des opportunités exceptionnelles et ont
              façonné leur avenir professionnel.
              Leurs témoignages réels reflètent l'impact positif de notre plateforme.
              Rejoignez-nous pour faire partie de cette
              communauté dynamique où chaque succès compte.
              En tant que responsable du recrutement, OIPIC a considérablement
              amélioré notre processus. La qualité des candidats que nous avons
              découverts grâce à la plateforme a été exceptionnelle.
              Les fonctionnalités intuitives ont simplifié chaque étape,
              de la publication des postes à la sélection des meilleurs talents.
              Rejoignez OIPIC aujourd'hui et faites partie de cette communauté
              où chaque histoire professionnelle compte. Les opportunités vous attendent !
            </p> <br>
            <p class="text-sm text-blue-700 font-semibold">Ronny Abel</p>
            <p class="text-xs text-gray-400"> CEO OIPIC</p>
          </div>
        </div>
      </div>



    <!-- Footer -->
    @include('footer')
    <script>
        var mobile_menu = document.getElementById("mobile_menu");
        var close = document.getElementById("close");
        var menu = document.getElementById("mobile_menu");


        function open_mobile_menu()
        {
          menu.classList.remove("hidden")

        }

        function close_mobile_menu()
        {
          menu.classList.add("hidden")

        }


      </script>


</body>
</html>
