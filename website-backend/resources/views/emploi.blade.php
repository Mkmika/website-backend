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
                      <a href="job-single.html" class="text-inherit ">{{$donnee['titreEmploi']}}</a>
                      <span class=" w-max p-1 text-sm  leading-none rounded bg-red-200 text-red-600">{{$donnee['categorieEmploi']}}</span>
                  </div>
                  <!-- Job Grid Heaing End-->

                  <!-- Job Grid Meta Start-->
                  <div class="flex items-center gap-3 text-gray-900 ">
                      <span class="text-gray-400 text-sm">{{$donnee['nomEntreprise']}}</span>
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
                    <span class="">{{$donnee['anneeExperience']}} years</span>
                </div>
                <div class="mt-1 flex items-center gap-2">
                    <i class="fa-solid fa-dollar-sign"></i>
                    <span class="ms-1">{{$donnee['remuneration']}}</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-location-dot"></i>
                    <span class="">{{$donnee['adresse']}}</span>
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
