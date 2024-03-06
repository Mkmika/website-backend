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

    <!-- Footer -->
    <footer class=" px-6 sm:px-[150px] py-2 sm:py-4 footer bg-blue-400">
        <div class="container lg:mt-2">
            <div class="flex gap-10">
                <div class="lg:w-1/3 md:w-1/2 w-full">
                    <!-- about company -->
                    <div class="mb-4">
                        <div>
                            <img class="w-[60px] h-[40px]"src="images/logo.jpeg"alt=""/>
                        </div>
                        <div class=" text-gray-100 flex flex-col gap-8">
                            <p class="py-5">Chez OIPIC, notre stratégie est ancrée dans la mission de faciliter l'épanouissement professionnel de chaque membre de notre communauté. 
                            Nous mettons en œuvre une approche holistique pour créer une plateforme dynamique qui va au-delà des simples annonces d'emploi.
                            </p>
                            <!-- social media -->
                            <div class="flex gap-5">
                                <!--Facebook-->
                                <a href="#" class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                    </svg>
                                </a>
                                <!--Twitter-->
                                <a href="#" class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                    </svg>
                                </a>
    
                                <!--Instagram-->
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-1 lg:w-1/6 md:w-1/4 w-1/2">
                    <div class="flex flex-col gap-8">
                    <div class="text-xl font-bold text-gray-100">
                        <p>Liens</p>
                    </div>
                    <div class="flex flex-col text-gray-100 gap-3">
                        <a class="transition-all duration-300 hover:text-blue-600" href="">Accueil</a>
                        <a class="transition-all duration-300 hover:text-blue-600" href="#a_propos">A propos de nous</a>
                        <a class="transition-all duration-300 hover:text-blue-600" href="">Emplois</a>
                        <a class="transition-all duration-300 hover:text-blue-600" href="contact.html">Contactez-nous</a>
                    </div>
                    </div>
                </div>
                <div class="lg:w-1/6 md:w-1/4 w-1/2">
                    <div class="flex flex-col gap-8">
                        <!-- list -->
                        <div class="text-xl font-bold text-gray-100">
                        <p>Support</p>
                        </div>
                        <div class="flex flex-col text-gray-100 gap-3">
                            <a class="transition-all duration-300 hover:text-blue-600" href="#">Help and Support</a>
                            <a class="transition-all duration-300 hover:text-blue-600" href="#">Become Instructor</a>
                            <a class="transition-all duration-300 hover:text-blue-600" href="#">Get the app</a>
                            <a class="transition-all duration-300 hover:text-blue-600" href="#">Tutorial</a>
                        </div>
                        
                    </div>
                </div>
                <div class="lg:w-1/4 w-full">
                    <!-- contact info -->
                    <div class="flex flex-col gap-8">
                        <div class="text-xl font-bold text-gray-100">
                        <p>Contactez-nous</p>
                        </div>
                        <div class="flex flex-col text-gray-100 gap-3">
                        <div class="flex gap-2 items-center">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Ste Rita Cotonou, Benin </p>
                            </div>
                            <div class="flex gap-2 items-center">
                            <i class="fa-solid fa-envelope"></i>
                            <p>oipic@gmail.com</p>
                            </div>
                            <div class="flex gap-2 items-center">
                            <i class="fa-solid fa-phone"></i>
                            <p>
                                <span class="text-dark font-semibold">(+229) 96 06 62 34</span>  
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-0 border-t py-2 mt-6">
                <!-- Desc -->
                <div class="lg:w-1/3 md:w-5/12 w-full text-slate-500">
                    <span>
                        ©
                        <span id="copyright2">
                            <script>
                                document.getElementById("copyright2").appendChild(document.createTextNode(new Date().getFullYear()));
                            </script>
                        </span>
                        OIPIC, Inc. All Rights Reserved
                    </span>
                </div>
    
                <!-- Links -->
                <div class="w-full md:w-7/12 lg:w-8/12 md:flex justify-content-end text-gray-500">
                    <nav class="nav nav-footer">
                        <a class="nav-link ps-0" href="#">Privacy Policy</a>
                        <a class="nav-link px-2 px-md-3" href="#">Cookie Notice</a>
    
                        <a class="nav-link" href="#">Terms of Use</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

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