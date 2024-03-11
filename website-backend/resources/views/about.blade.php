@extends('layout')

@section('title', 'A propos de nous')

@section('content')
<section class="bg-light px-[150px]" id="about">
    <div class="container">
        <div class="flex py-2 sm:py-4">
            <div class="lg:w-full flex flex-col justify-center items-center" id="hero_section">
              
                <div class=" flex flex-col text-center text-white">
                    <h3 class="font-bold text-5xl text-white ">
                      Tout savoir <span class="text-blue-400">sur OIPIC</span>
                    </h3>

                    <p class=" mx-auto text-muted w-1/2">
                      Explorez notre histoire, notre vision et notre engagement envers l'excellence. 
                    </p>
                    <div class="">
                        <i class=""></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex gap-[100px] justify-between  items-center">
            <div class="lg:w-1/2">
                <div class="about_header_main mt-3"> 
                    <h4 class="about_heading  font-bold mt-4">Qui sommes-nous ?</h4>
                    <div class="flex flex-col gap-5">
                      <p >
                          Chez OIPIC, nous sommes passionnés par la création d'un environnement où les opportunités professionnelles se transforment en réussites exceptionnelles.
                          Fondée sur le principe que chaque talent compte, notre plateforme dynamique offre bien plus que des annonces d'emploi. Nous sommes une communauté dédiée
                          à inspirer,connecter et façonner l'avenir professionnel.
                        </p>
                        <p class="text-blue-700">
                          Notre mission est de fournir une plateforme inclusive qui va au-delà des attentes, favorisant l'innovation, le développement professionnel et le réseautage.
                          Que vous soyez à la recherche de nouvelles opportunités, d'un talent exceptionnel, ou simplement à 
                          la quête d'inspiration, OIPIC est l'endroit où vous pouvez explorer, grandir et réussir.
                        </p>
                        <p>
                          Chez OIPIC, nous croyons au pouvoir de chaque individu pour apporter un changement positif dans sa carrière. 
                          Joignez-vous à nous pour créer ensemble un futur où le succès n'est pas seulement atteint, mais célébré. 
                          Bienvenue dans la communauté OIPIC, où chaque histoire professionnelle compte.
                        </p>
                    </div>
                   
                </div>
            </div>
            <div class="lg:w-1/2">
                <div class="img_about">
                    <img src="https://i.ibb.co/qpz1hvM/About-us.jpg" alt="" class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>

        <div class="flex  py-2 sm:py-10">
            <div class="lg:w-1/3">
                <div class="about_content_box_all mt-3">
                    <div class="about_detail text-center">
                          <div class="about_icon">
                              <i class="fas fa-pencil-alt"></i>
                          </div>
                          <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Recrutement Innovant</h5>
                          <p class="edu_desc mt-3 mb-0 text-muted">Facilitez vos recrutements avec notre plateforme. 
                              Publiez des postes, découvrez des talents exceptionnels et optimisez votre processus de sélection.
                          </p>
                    </div>
                </div>
            </div>

            <div class="lg:w-1/3">
                <div class="about_content_box_all mt-3">
                    <div class="about_detail text-center">
                          <div class="about_icon">
                              <i class="fab fa-angellist"></i>
                          </div>
                          <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Formation Continue</h5>
                          <p class="edu_desc mb-0 mt-3 text-muted">Investissez dans le développement de vos compétences.
                              Découvrez des programmes de formation continue adaptés à vos besoins professionnels.
                          </p>
                    </div>
                </div>
            </div>

            <div class="lg:w-1/3">
                <div class="about_content_box_all mt-3">
                    <div class="about_detail text-center">
                          <div class="about_icon">
                           <i class="fas fa-paper-plane"></i>
                          </div>
                          <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Réseautage Professionnel   </h5>
                          <p class="edu_desc mb-0 mt-3 text-muted">Connectez-vous avec des professionnels de votre secteur. 
                           Élargissez votre réseau et découvrez des opportunités de collaboration. 
                          </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection