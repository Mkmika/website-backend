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
