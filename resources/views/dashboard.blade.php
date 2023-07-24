<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Accueil') }}
        </h2>
    </x-slot>


    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> -->

<div>
    <div class="dis">
         <div> <img src="{{ asset('image/ijk.gif')}}" width="650px" height="400px" alt="" > </div> 
        <!-- <div> <img src="{{ asset('image/inf.jpg')}}"alt="" > </div> -->
        <div> 
            <h1>Ecole Superieur d'Informatique</h1>
            <p>“L'informatique, ça fait gagner beaucoup de temps... à condition d'en avoir beaucoup 
                devant soi !” “La révolution informatique fait gagner un temps fou aux hommes, mais 
                ils le passent avec leur ordinateur !” “Entre le bit, unité de mesure informatique, 
                et les queues de sondage, le circuit imprimé est un peu sexiste.”</p>
                <button><a href="">Liste des etudiants </a></button>
                <button><a href="">Ajouter un etudiant</a></button>
        </div>
    </div>
</div>










</x-app-layout>
