<x-app-layout>



<div class="container">
    <div class="card">



<div class="title">
<h2>CARTE ETUDIANT</h2>
<p>Ecole superieur d'Informatique</p>
</div>


<div class="image">


    <div class="outer">
      
    <div class="inner">
        @if($etudiant->photo)
                        <img src="{{ asset('photos/'.$etudiant->photo) }}" alt="Photo de l'étudiant" >
                    @else
                        Aucune photo
                    @endif
        </div>

    </div>

    
</div>
<div class="name">
 {{ $etudiant->nom }}  {{ $etudiant->prenom }}
</div>
<div class="details">
    
<div class="col">
  <ul type=none>
    <li> Née : {{ $etudiant->date_naissance }}</li>
    <li>Matricule :</li>
    <li>Niveau : {{ $etudiant->niveau_etude }}</li>
    <li>Cycle : {{ $etudiant->cycle }}</li>
    <li>Annee Academique : {{ $etudiant->annee_academique }}</li>
    <li></li>
  </ul>
</div>

<div class="col">
<img src="{{ asset('image/logob.jpg')}}" class="coli" width="90px" height="70px" alt="">
</div>



<div>
<div>
    

</div>
</div>

</x-app-layout>