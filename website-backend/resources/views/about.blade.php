@extends('layout')

@section('title', 'A propos de nous')

@section('custom_header')
<style>
    h1, h2, h3, h4, h5, h6 {
    color: #2c3145;
}
a, a:hover, a:focus, a:active {
    text-decoration: none;
    outline: none;
}
ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.section-title {
    font-weight: 700;
    text-transform: capitalize;
    letter-spacing: 1px;
}

.section-subtitle {
    letter-spacing: 0.4px;
    line-height: 28px;
    max-width: 550px;
}

.section-title-border {
    background-color: #000;
    height: 13px;
    width: 44px;
}

.section-title-border-white {
    background-color: #fff;
    height: 2px;
    width: 100px;
}
.text_custom {
    color: #00bd2a;
}

.about_icon i {
    font-size: 22px;
    height: 65px;
    width: 65px;
    line-height: 65px;
    display: inline-block;
    background: #fff;
    border-radius: 35px;
    color:blue;
    box-shadow: 0 8px 20px -2px rgba(158, 152, 153, 0.5);
}

.about_header_main .about_heading {
    max-width: 450px;
    font-size: 24px;
}

.about_icon span {
    position: relative;
    top: -10px;
}

.about_content_box_all {
    padding: 28px;
}

.heading {
    text-align: center;
    color: #454343;
    font-size: 30px;
    font-weight: 700;
    position: relative;
    margin-bottom: 70px;
    text-transform: uppercase;
}
.white-heading{
    color: #ffffff;
}
.heading:after {
    content: ' ';
    position: absolute;
    top: 100%;
    left: 50%;
    height: 40px;
    width: 180px;
    border-radius: 4px;
    transform: translateX(-50%);
    background: url(img/heading-line.png);
    background-repeat: no-repeat;
    background-position: center;
}
.white-heading:after {
    background: url(https://i.ibb.co/d7tSD1R/heading-line-white.png);
    background-repeat: no-repeat;
    background-position: center;
}

.heading span {
    font-size: 18px;
    display: block;
    font-weight: 500;
}
.white-heading span {
    color: #ffffff;
}

#hero_section{
    background:url(images/about.jpeg);
    background-repeat: no-repeat;
    width: 200rem;
    height: 30rem;
    box-shadow: inset 0 0 0 2000px rgba(0, 0, 255, 0.3);
}
</style>
@endsection

@section('content')
<section class="bg-light" id="about">
    <div class="container">
        <div class="flex">
            <div class="lg:w-full flex flex-col justify-center items-center" id="hero_section">
              
                <div class=" flex flex-col text-center">
                    <h3 class="font-bold text-7xl text-white mb-4">
                      Tout savoir <span class="text-blue-400">sur OIPIC</span>
                    </h3>

                    <p class=" mx-auto text-muted w-1/2 text-white">
                        Chez OIPIC, nous croyons au pouvoir de chaque individu pour apporter un changement positif dans sa carrière. 
                    </p>
                </div>
            </div>
        </div>

        <div class="px-[150px] py-16 flex gap-[100px] justify-between  items-center">
            <div class="lg:w-1/2">
                <div class="about_header_main mt-3"> 
                    <h4 class="about_heading text-4xl font-bold mt-4">Qui sommes-nous ?</h4>
                    <div class="flex flex-col gap-5">
                      <p >
                          Chez OIPIC, nous sommes passionnés par la création d'un environnement où les opportunités professionnelles se transforment en réussites exceptionnelles.
                          Fondée sur le principe que chaque talent compte, notre plateforme dynamique offre bien plus que des annonces d'emploi. Notre mission consiste a faire de la formation Technique et Professionnelle le levier de notre developpement communautaire.

                    </div>
                   
                </div>
            </div>
            <div class="lg:w-1/2">
                <div class="img_about">
                    <img src="https://i.ibb.co/qpz1hvM/About-us.jpg" alt="" class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>

        <div class="px-[150px] py-16 flex gap-[100px] justify-between  items-center">
            <div class="lg:w-1/2">
                <div class="img_about">
                    <img src="https://i.ibb.co/qpz1hvM/About-us.jpg" alt="" class="img-fluid mx-auto d-block">
                </div>
            </div>

            <div class="lg:w-1/2">
                <div class="about_header_main mt-3"> 
                    <h4 class="about_heading text-4xl font-bold mt-4">Notre mission</h4>
                    <div class="flex flex-col gap-5">

                        <p>
                          Notre mission est de permettre a chaque citoyen descolarise et defavorise d'apprendre des metiers d'avenir dans les conditions optimales et de les exercer dans un environnement favorable afin de nourrir convenablement son homme.
                        </p>

                    </div>
                   
                </div>
            </div>

        </div>

        <div class="px-[150px] flex py-2 sm:py-10 gap-4">
            
            <div class="lg:w-1/3 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-center items-center text-2xl text-blue-500 mb-4">
                    <i class="fas fa-pencil-alt"></i>
                </div>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Recrutement Innovant</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Facilitez vos recrutements avec notre plateforme. Publiez des postes, découvrez des talents exceptionnels et optimisez votre processus de sélection.</p>
                
            </div>

            <div class="lg:w-1/3 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-center items-center text-2xl text-blue-500 mb-4">
                    <i class="fab fa-angellist"></i>
                </div>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Formation Continue</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Investissez dans le développement de vos compétences. Découvrez des programmes de formation continue adaptés à vos besoins professionnels.</p>
            </div>

            <div class="lg:w-1/3 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-center items-center text-2xl text-blue-500 mb-4">
                    <i class="fab fa-angellist"></i>
                </div>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Réseautage Professionnel</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Connectez-vous avec des professionnels de votre secteur. Élargissez votre réseau et découvrez des opportunités de collaboration.</p>
                
            </div>

        </div>
    </div>
  </section>
@endsection