<div>
    <div class="flex flex-col sm:flex sm:flex-col gap-0">
      <!-- NavBar -->
      <div class="sticky top-0 flex justify-between items-center px-6 gap-[100px] py-2 sm:flex sm:justify-between sm:items-center sm:px-[150px] sm:py-4  bg-white  sm:shadow">
        <div class="">
          <img
            class="sm:w-[60px] w-[60px] sm:h-[40px] h-[20px]"
            src="images/logo.jpeg"
            alt=""
          />
        </div>

        <div class="hidden sm:flex gap-2 sm:gap-10 items-center" id="menu">
          <a href="" class="text-blue-500 text-xs sm:text-sm">
            Accueil
          </a>
          <a href="#a_propos" class="text-xs hover:text-blue-600 transition-all duration-300 sm:text-sm">
            A propos de nous
          </a>
          <a href="#emplois" class="text-xs hover:text-blue-600 transition-all duration-300 sm:text-sm">
            Emplois
          </a>
          <a href="contact.html" class="text-xs hover:text-blue-600 transition-all duration-300 sm:text-sm">
            Contactez-nous
          </a>
        </div>
          <!-- responsivite _mobile -->
        <div class="hidden sm:hidden absolute right-0 bottom-0 top-0 bg-white w-full h-full" id="mobile_menu">

          <div class="flex flex-col gap-2 relative h-screen bg-white">
            <div class="right-0 absolute" onclick="close_mobile_menu()" id="close">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>
            </div>
            <a href="" class="text-blue-500 text-3xl sm:text-sm">
              Accueil
            </a>
            <a href="" class="text-3xl hover:text-blue-600 transition-all duration-300 sm:text-sm">
              A propos de nous
            </a>
            <a href="" class="text-3xl hover:text-blue-600 transition-all duration-300 sm:text-sm">
              Services
            </a>
            <a href="" class="text-3xl hover:text-blue-600 transition-all duration-300 sm:text-sm">
              Contactez-nous
            </a>

          </div>

        </div>

        <div class="flex sm:hidden">
          <img type="button" id="hamburger" onclick="open_mobile_menu()" class="w-[50px] h-[50px]" src="images/hamburger.png" alt="">
        </div>
      </div>

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

        <!-- Emplois -->
        <div class="flex sm:px-[150px] px-[70px] sm:py-[60px] py-[10px] gap-10" id="emplois">
          <a href="emploi.html">
            <div class="flex justify-center items-center ">
              <div class="border w-[27rem] h-[21rem] p-6 rounded-md flex flex-col gap-4 ">
                <div class="">
                  <!-- Img -->
                  <img src="images/job-list-logo-1.svg"class="icon-shape border rounded-full">
                </div>
              <!-- text -->
              <div class="">
                  <div class="flex justify-between ">

                      <div>
                          <div class=" ">
                            <div class="flex flex-col">
                                <a href="job-single.html" class="text-inherit ">Software Engineer (Web3/Crypto)</a>
                                <span class=" w-max p-1 text-sm  leading-none rounded bg-red-200 text-red-600">Featured Job</span>
                            </div>  <tr>
                                <th>Titre de l'annonce</th>
                                <th>Type de l'annonce</th>
                                <th>Contenu</th>
                                <th>Actions</th>
                            </tr>
                            <!-- Job Grid Heaing End-->

                            <!-- Job Grid Meta Start-->
                            <div class="flex items-center gap-3 text-gray-900 ">
                                <span class="text-gray-400 text-sm">at HelpDesk</span>
                                <span class="flex items-center text-sm font-medium">

                                  4.5
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-star-fill text-yellow-500 align-baseline" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                </span>
                                <span class="text-gray-400 text-sm">(131 Reviews)</span>
                            </div>
                        </div>
                      </div>

                      <!-- Job Bookmark Start -->
                      <div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark bookmark" viewBox="0 0 16 16">
                              <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
                          </svg>
                      </div>
                      <!-- Job Bookmark End -->
                  </div>
              </div>
              <!-- Job Listing Meta Start-->
              <div class="flex flex-col gap-4 text-slate-400">
                  <div class="">
                      <div class="flex flex-col gap-1 ">
                          <div class=" flex items-center gap-2">
                            <i class="fa-solid fa-briefcase"></i>
                              <span class="">1 - 5 years</span>
                          </div>
                          <div class="mt-1 flex items-center gap-2">
                              <i class="fa-solid fa-dollar-sign"></i>
                              <span class="ms-1">12k - 18k</span>
                          </div>
                          <div class="flex items-center gap-2">
                              <i class="fa-solid fa-location-dot"></i>
                              <span class="">Ahmedabad, Gujarat</span>
                          </div>
                      </div>
                  </div>
                  <div class="flex items-center gap-2">
                      <i class="fa-regular fa-clock"></i>
                      <span class="">21 hours ago</span>
                  </div>
              </div>
              <!-- Job Listing Meta End-->
            </div>
            </div>
          </a>

          <div class="flex justify-center items-center ">
            <div class="border w-[27rem] h-[21rem] p-6 rounded-md flex flex-col gap-4 ">
              <div class="">
                <!-- Img -->
                <img src="images/job-list-logo-1.svg"class="icon-shape border rounded-full">
              </div>
            <!-- text -->
            <div class="">
                <div class="flex justify-between ">

                    <div>
                        <div class=" ">
                          <div class="flex flex-col">
                              <a href="job-single.html" class="text-inherit ">Software Engineer (Web3/Crypto)</a>
                              <span class=" w-max p-1 text-sm  leading-none rounded bg-red-200 text-red-600">Featured Job</span>
                          </div>
                          <!-- Job Grid Heaing End-->

                          <!-- Job Grid Meta Start-->
                          <div class="flex items-center gap-3 text-gray-900 ">
                              <span class="text-gray-400 text-sm">at HelpDesk</span>
                              <span class="flex items-center text-sm font-medium">

                                4.5
                                  <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-star-fill text-yellow-500 align-baseline" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                  </svg>
                              </span>
                              <span class="text-gray-400 text-sm">(131 Reviews)</span>
                          </div>
                      </div>
                    </div>

                    <!-- Job Bookmark Start -->
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark bookmark" viewBox="0 0 16 16">
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
                        </svg>
                    </div>
                    <!-- Job Bookmark End -->
                </div>
            </div>
            <!-- Job Listing Meta Start-->
            <div class="flex flex-col gap-4 text-slate-400">
                <div class="">
                    <div class="flex flex-col gap-1 ">
                        <div class=" flex items-center gap-2">
                          <i class="fa-solid fa-briefcase"></i>
                            <span class="">1 - 5 years</span>
                        </div>
                        <div class="mt-1 flex items-center gap-2">
                            <i class="fa-solid fa-dollar-sign"></i>
                            <span class="ms-1">12k - 18k</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-location-dot"></i>
                            <span class="">Ahmedabad, Gujarat</span>
                        </div>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fa-regular fa-clock"></i>
                    <span class="">21 hours ago</span>
                </div>
            </div>
            <!-- Job Listing Meta End-->
          </div>
          </div>

          <div class="flex justify-center items-center ">
            <div class="border w-[27rem] h-[21rem] p-6 rounded-md flex flex-col gap-4 ">
              <div class="">
                <!-- Img -->
                <img src="images/job-list-logo-1.svg"class="icon-shape border rounded-full">
              </div>
            <!-- text -->
            <div class="">
                <div class="flex justify-between ">

                    <div>
                        <div class=" ">
                          <div class="flex flex-col">
                              <a href="job-single.html" class="text-inherit ">Software Engineer (Web3/Crypto)</a>
                              <span class=" w-max p-1 text-sm  leading-none rounded bg-red-200 text-red-600">Featured Job</span>
                          </div>
                          <!-- Job Grid Heaing End-->

                          <!-- Job Grid Meta Start-->
                          <div class="flex items-center gap-3 text-gray-900 ">
                              <span class="text-gray-400 text-sm">at HelpDesk</span>
                              <span class="flex items-center text-sm font-medium">

                                4.5
                                  <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-star-fill text-yellow-500 align-baseline" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                  </svg>
                              </span>
                              <span class="text-gray-400 text-sm">(131 Reviews)</span>
                          </div>
                      </div>
                    </div>

                    <!-- Job Bookmark Start -->
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark bookmark" viewBox="0 0 16 16">
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
                        </svg>
                    </div>
                    <!-- Job Bookmark End -->
                </div>
            </div>
            <!-- Job Listing Meta Start-->
            <div class="flex flex-col gap-4 text-slate-400">
                <div class="">
                    <div class="flex flex-col gap-1 ">
                        <div class=" flex items-center gap-2">
                          <i class="fa-solid fa-briefcase"></i>
                            <span class="">1 - 5 years</span>
                        </div>
                        <div class="mt-1 flex items-center gap-2">
                            <i class="fa-solid fa-dollar-sign"></i>
                            <span class="ms-1">12k - 18k</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-location-dot"></i>
                            <span class="">Ahmedabad, Gujarat</span>
                        </div>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fa-regular fa-clock"></i>
                    <span class="">21 hours ago</span>
                </div>
            </div>
            <!-- Job Listing Meta End-->
          </div>
          </div>

        </div>

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

      <!-- Annonces -->
      <div id="nos_annonces" class="flex flex-col justify-center items-center sm:px-[150px] px-[70px] sm:py-[60px] py-[10px] ">
          <div class="">
              <div class="flex flex-col justify-center items-center">
                  <div class="">
                      <div class="bg-blue-600  px-[70px] py-[50px] rounded-3xl">
                          <div class="flex ">
                              <div class="">
                                  <div class="flex flex-col justify-center gap-5">
                                      <div class="text-4xl text-white font-medium w-1/2 ">
                                        Nos dernieres offres
                                      </div>
                                      <p class=" text-md font-thin text-gray-300 w-1/2">
                                        Découvrez l'exclusivité de nos dernières offres et laissez-vous séduire par des opportunités exceptionnelles qui répondent à toutes vos attentes.
                                      </p>
                                      <button class=" w-[150px] p-2 rounded-xl bg-gray-900 text-white hover:bg-gray-800">Parcourir</button>
                                  </div>
                              </div>
                              <div class="">
                                  <div class="text-center hidden md:block">
                                      <img src="images/job-hero-section.png"  class="h-[250px] w-[300px]">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
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
