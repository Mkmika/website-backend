
@extends('layout')

@section('title', 'Accueil')

@section('content')
<div class="bg-white font-sans">
  <!-- HeroSection -->
  <div class="sm:flex-row sm:justify-between flex flex-col justify-between sm:py-[20px] py-[10px] sm:px-[150px] px-[70px] sm:my-[20px] my-[10px]">
    <div class="flex flex-col gap-6 w-[50%]">
      <div class="flex items-center">
      </div>
      <div>
        <p class="text-xl sm:text-[2.8rem] leading-[56px] font-bold w-75%text-blue-700 uppercase font-open-sans">
        Un Univers <span class="text-blue-700">d'Opportunités</span> à votre portée
        </p>
      </div>
      <div class="text-slate-700 text-sm">
        <p class="font-roboto">
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
  <div class="flex flex-wrap sm:px-[150px] px-[70px] sm:py-[60px] py-[10px]" id="emplois">
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
          <a href="">
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
  
          </a>
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

          <a href="{{ route('formationContinue') }}"
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
          </a>

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

          <a href="{{ route('evenements') }}">
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
          </a>
        </div>
    </div>
    <div class="sm:flex-row flex flex-col sm:justify-center sm:items-center justify-center items-center">
      <a href="{{ route('contact') }}" class="bg-blue-500 transition-all duration-300 hover:bg-blue-700 rounded-full px-10 py-3 text-white">
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
        <a href="{{ route('a_propos') }}" class="bg-blue-500 transition-all duration-300 hover:bg-blue-700 rounded-full px-10 py-3 text-white">
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

{{-- Annonces --}}
<div class="sm:px-[150px] my-8" id="annonces">
  @include('newsletter')
</div>

{{-- Temoignage --}}
@include('testimonial')
@endsection
