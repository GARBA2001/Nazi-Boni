<x-app-layout>

    <div class="vf"><br>
        <div> <img src="{{ asset('image/logo.png')}}" class="jus" width="200px" height="200px" alt=""> </div><br>

        <form method="POST" action="{{ route('inscrire.submit') }}" enctype="multipart/form-data">
            @csrf
            <section class="form">
                <h1 class="inscrire">Inscrire un étudiant</h1>

                <div class="form-container">
                    <div class="inp-box aris"> <span class="span">Nom </span> <input type="text" required
                            placeholder="Nom" class="box" name="nom"> </div>
                    <div class="inp-box aris"> <span class="span">Prénom </span> <input type="text" required
                            placeholder="Prénom" class="box" name="prenom"> </div>
                </div>

                <div class="form-container">
                    <div class="inp-box aris"> <span class="spane">Date de Naissance </span> <input type="date"
                            required placeholder="Date de Naissance" class="box" name="date_naissance"> </div>
                    <div class="inp-box aris">
                        <span class="span">Cycle </span>
                        <select required class="box put" name="cycle">
                            <option value="" disabled selected class="select">Choisissez un cycle</option>
                            <option value="cycle1">Licence</option>
                            <option value="cycle2">Master</option>
                            <option value="cycle3">Doctorat</option>
                            <!-- Ajoutez d'autres options si nécessaire -->
                        </select>
                    </div>
                </div>

                <div class="form-container">
                    <div class="inp-box aris">
                        <span class="spane1">Niveau d'étude </span>
                        <select required class="box put" name="niveau_etude">
                            <option value="" disabled selected>Choisissez un niveau d'étude</option>
                            <option value="licence">Licence 1</option>
                            <option value="master">Licence 2</option>
                            <option value="doctorat">Licence 3</option>
                            <!-- Ajoutez d'autres options si nécessaire -->
                        </select>
                    </div>
                    <div class="inp-box aris">
                        <span class="spane2">Année Académique </span>
                        <select required class="box put" name="annee_academique">
                            <option value="" disabled selected>Choisissez une année académique</option>
                            <option value="2023-2024">2023-2024</option>
                            <option value="2024-2025">2024-2025</option>
                            <option value="2025-2026">2025-2026</option>
                            <!-- Ajoutez d'autres options si nécessaire -->
                        </select>
                    </div>
                </div>
                <br>
                <div class="">
                    <label for="imageUpload" class="span3">Sélectionner une photo </label> <br>
                    <input class="put fri" type="file" id="imageUpload" name="photo" accept="image/*" required>
                </div>
                <div>

                </div>
                <br>
                <input type="submit" value="S'inscrire" class="btn" name="submit">
            </section>
        </form>
    </div>

</x-app-layout>
