<main>
    <section class="py-lg-8 py-7">
        <div class="container my-lg-8">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 col-md-12">
                    <div class="d-xl-flex">
                        <div class="mb-3 mb-md-0">
                            <!-- Img -->

                            <img src="./Job Single _ Geeks - Bootstrap 5 Template_files/job-list-logo-1.svg" alt="logo" class="icon-shape border rounded-circle">
                        </div>
                        <!-- text -->
                        <div class="ms-xl-3 w-100 mt-3 mt-xl-0">
                            <div class="d-flex justify-content-between mb-5">
                                <div>
                                    <h1 class="mb-1 h2">{{$donnee['titreEmploi']}}</h1>
                                    <div>
                                        <span>{{$donnee['categorieEmploi']}}</span>
                                        <!-- star -->
                                        <span class="text-dark ms-2 fw-medium">
                                            4.5
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-star-fill text-warning align-baseline" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                            </svg>
                                            <!-- text -->
                                        </span>
                                        <span class="ms-0">(131 Reviews)</span>
                                    </div>
                                </div>
                                <div>
                                    <!-- bookmark -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark bookmark" viewBox="0 0 16 16">
                                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <!-- year -->
                                <div class="d-md-flex justify-content-between">
                                    <div class="mb-2 mb-md-0">
                                        <span class="me-2">
                                            <i class="fe fe-briefcase"></i>
                                            <span class="ms-1">{{$donnee['anneeExperience']}} years</span>
                                        </span>
                                        <!-- text -->
                                        <span class="me-2">
                                            <i class="fe fe-dollar-sign"></i>
                                            <span class="ms-1">{{$donnee['remuneration']}}</span>
                                        </span>
                                        <!-- location -->
                                        <span class="me-2">
                                            <i class="fe fe-map-pin"></i>
                                            <span class="ms-1">{{$donnee['adresse']}}</span>
                                        </span>
                                    </div>
                                    <div>
                                        <!-- time -->
                                        <i class="fe fe-clock"></i>
                                        <span>21 hours ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4">
                    <!-- text -->
                    <div>
                        <p>
                            <span>
                                Job Applicants:
                                <span class="text-dark">306</span>
                            </span>
                        </p>
                    </div>
                    <div class="mt-6">
                        <h2 class="mb-3 fs-3">Description</h2>
                        <p>{{$donnee['description']}}</p>
                    </div>

                    <!-- button -->
                    <div class="mt-5 d-grid">
                        <a href="https://geeksui.codescandy.com/geeks/pages/jobs/job-single.html#" class="btn btn-primary">Apply for this Job</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
