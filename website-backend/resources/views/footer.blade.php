<footer class="relative bg-blue-400 pt-8 pb-6 px-6 sm:px-[50px]">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap text-left lg:text-left">
        <div class="w-full lg:w-6/12 px-4 ">
            <div class="mb-6 ">
                <img
                    class="sm:w-[60px] w-[60px] sm:h-[40px] h-[20px]"
                    src="{{ url('/images/logo.jpeg') }}"
                    alt=""
                />
            </div>
          <h4 class="text-3xl fonat-semibold text-blueGray-700">Gardons le contact</h4>
          <h5 class="text-lg mt-0 mb-2 text-blueGray-600">
            Retrouvez nous sur les différents réseaux sociaux
          </h5>
          <div class="mt-6 lg:mb-0 mb-6">
            <button class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
              <i class="fab fa-twitter"></i></button><button class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
              <i class="fab fa-facebook-square"></i></button><button class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
              <i class="fab fa-instagram"></i></button>
            </button>
          </div>
        </div>
        <div class="w-full lg:w-6/12 px-4">
          <div class="flex flex-wrap items-top mb-6">
            <div class="w-full lg:w-4/12 px-4 ml-auto">
              <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Useful Links</span>
              <ul class="list-unstyled">
                <li>
                    <a href="/" class="text-blue-500 text-xs sm:text-sm">
                        Accueil
                    </a>
                </li>
                <li>
                    <a href="{{ route('a_propos') }}" class="text-xs hover:text-blue-600 transition-all duration-300 sm:text-sm">
                        A propos de nous
                    </a>
                </li>
                <li>
                    <a href="{{ route('emplois') }}" class="text-xs hover:text-blue-600 transition-all duration-300 sm:text-sm">
                        Emplois
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="text-xs hover:text-blue-600 transition-all duration-300 sm:text-sm">
                        Contactez-nous
                    </a>
                </li>
              </ul>
            </div>
            <div class="w-full lg:w-4/12 px-4">
              <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Autres Resources</span>
              <ul class="list-unstyled">
                <li>
                  <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="#">Termes &amp; Conditions</a>
                </li>
                <li>
                  <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="#">Politique de confidentialité</a>
                </li>
                <li>
                  <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="{{ route('contact') }}">Nous contacter</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <hr class="my-6 border-blueGray-300">
      <div class="flex flex-wrap items-center md:justify-between justify-center">
        <div class="w-full md:w-4/12 px-4 mx-auto text-center">
          <div class="text-sm text-blueGray-500 font-semibold py-1">
            Copyright © <span id="get-current-year">2024</span><a href="https://www.creative-tim.com/product/notus-js" class="text-blueGray-500 hover:text-gray-800" target="_blank"> Conçu par
            <a href="#" class="text-blueGray-500 hover:text-blueGray-800">Mika HNK</a>.
          </div>
        </div>
      </div>
    </div>
  </footer>
