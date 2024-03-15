@extends('layout')

@section('title', 'Emploi')

@section('content')
<section class="py-16">
    <div class="container mx-auto my-16">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-2/3 mx-auto md:w-full">
                <div class="flex flex-col xl:flex-row">
                    <div class="mb-3 md:mb-0">
                    </div>
                    <div class="ml-0 xl:ml-3 w-full mt-3 xl:mt-0">
                        <div class="flex justify-between mb-5">
                            <div>
                                <h1 class="mb-1 text-2xl font-bold">{{ $emploi['titreEmploi'] }}</h1>
                                <div>
                                    <span>{{ $emploi['nomEntreprise'] }}</span>
                                    <span class="text-dark ml-2 font-medium">
                                        4.5
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-star-fill text-yellow-400 align-baseline inline" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                        </svg>
                                    </span>
                                    <span class="ml-0">(131 Reviews)</span>
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark bookmark" viewBox="0 0 16 16">
                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row justify-between">
                            <div class="mb-2 md:mb-0">
                                <span class="mr-2">
                                    <i class="fe fe-briefcase"></i>
                                    <span class="ml-1">{{ $emploi['anneeExperience'] }} years </span>
                                </span>
                                <span class="mr-2">
                                    <i class="fe fe-dollar-sign"></i>
                                    <span class="ml-1">{{ $emploi['remuneration'] }}/mois</span>
                                </span>
                                <span class="mr-2">
                                    <i class="fe fe-map-pin"></i>
                                    <span class="ml-1">{{ $emploi['adresse'] }}</span>
                                </span>
                            </div>
                            <div>
                                <i class="fe fe-clock"></i>
                                <span>21 hours ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <div>
                    <p>
                        <span>
                            Job Applicants:
                            <span class="text-dark">306</span>
                        </span>
                    </p>
                </div>
                <div class="mt-6">
                    <h2 class="mb-3 text-xl font-semibold">Job description</h2>
                    <p>{{ $emploi['description'] }}</p>
                </div>
                <div class="mt-6">
                    <h2 class="mb-3 text-xl font-semibold">Role</h2>
                    <p>
                        {{ $emploi['role'] }}
                    </p>
                </div>
                <div class="mt-6">
                    <h2 class="mb-3 text-xl font-semibold">Responsibilities</h2>
                    <ul class="list-disc pl-5">
                        {{ $emploi['responsabilite'] }}
                    </ul>
                </div>
                <div class="mt-6">
                    <h2 class="mb-3 text-xl font-semibold">Desired Candidate Profile</h2>
                    <ul class="list-disc pl-5">
                        {{ $emploi['profil'] }}
                    </ul>
                </div>

                <div class="mt-5 flex ">
                    <a href="" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Apply for this Job</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
