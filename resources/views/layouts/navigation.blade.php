<div>
<nav x-data="{ open: false }" >
    <!-- Primary Navigation Menu -->
    <div >
        <div>



        <!-- Logo et Menu -->
            <div class="ty" >
                <!-- Logo -->
                
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('image/logob.jpg')}}"  width="90px" height="70px" alt="">
                    </a>
            

                <!-- Navigation Links -->
                <ul class="ul"> 
                    <li class="li"><x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="aa">
                        {{ __('Accueil') }}
                    </x-nav-link></li>
                    

                    <li class="li"><x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="aa">
                        {{ __('Ajouter un étudiant') }}
                    </x-nav-link></li>

                    <li class="li"><x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="aa">
                        {{ __('Voir la liste') }}
                    </x-nav-link></li>

               </ul>

          <!-- Fin de Logo et Menu -->



          <!-- Partie Profile -->
            <!-- Settings Dropdown -->
            <div>
                <x-dropdown >
                    <x-slot name="trigger">
                        <button class="naf" onclick="toggleMenu()" >
                        <img src="{{ asset('image/garba.jpg')}}" class="profile"  width="50px" height="40px" alt="">
                            <div class="nom">{{ Auth::user()->name }}</div>
                            
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>

                    </x-slot>
                </x-dropdown>
            </div>

        <!--Fin de la Partie Profile -->


                <!-- les Paramétres  -->

               
                <div class="sous-m1" id="sousMenu">
                <div class="sous-m2">
                <div class="sous-m3">
                <x-dropdown >
                <x-slot name="trigger">
                        <button class="naf" >
                        <img src="{{ asset('image/garba.jpg')}}" class="profile" onclick="toggleMenu()"  width="50px" height="40px" alt="">
                            <div class="nom">{{ Auth::user()->name }}</div>
                        </button>  <hr>
                    </x-slot>
                    
                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form> <br>

                    </x-slot>
                </x-dropdown>

            <div Class="toi" >
                <x-responsive-nav-link class="update" :href="route('profile.edit')">
                <img src="{{ asset('image/logout.png')}}" alt="">
                    <h4>{{ __('Profile') }}</h4>
                    <span></span>
                </x-responsive-nav-link>
                 <br>
                
                 <x-responsive-nav-link class="update" :href="route('profile.edit')">
                 <img src="{{ asset('image/logout.png')}}" alt="">
                    <h4>{{ __('Ajouter un compte') }}</h4>
                    <span></span>
                </x-responsive-nav-link>
                 <br>

                 <x-responsive-nav-link class="update" :href="route('profile.edit')">
                 <img src="{{ asset('image/logout.png')}}" alt="">
                    <h4>{{ __('Parametre') }}</h4>
                    <span></span>
                </x-responsive-nav-link>
                 <br>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link class="update" :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                      <img src="{{ asset('image/logout.png')}}" alt="">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
            </div>
            </div>
            </div>
         <!--Fin de la partie les Paramétres  -->

        </div>
    </div>
</nav>
</div>