<link rel="stylesheet" href="{{asset('/css/nav.css')}}">
<link rel="icon" href="{{asset('img/Tripadvisor_logoset_solid_green.svg')}}">

<script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>
    
<div class="nav center">
    <div class="nA">

        <div class="nAa">
            <a href="/">
                <img width="190px" height="54px" src="{{asset('/img/Logo.svg')}}" alt="">
            </a>

            <form action="{{route('search-result')}}" class="center" method="GET">
                @csrf
                <input type="text" name="query">
                <button type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>

        <div class="nAb center">
            @php
                $user = Auth::user();
            @endphp
            <a href="{{ url('/ulas', ['id' => $user->id] ) }}">
                <div class="ulas center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                        <path d="M13.5 6.5l4 4"></path>
                    </svg>
                    <p class="bold">Ulas</p>
                </div>
            </a>
            
            <a href="{{route('trip', ['id' => $user->id, 'type' => 'all'])}}">
                <div class="trip center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                    </svg>
                    <p class="bold">Trip</p>
                </div>
            </a>
            
            @if (Route::has('login'))
            <div class="center login">
                @auth
                    @if (Auth::user()->user_role == 'admin')
                        <div class="trip center">
                            <a href="{{route('admin')}}" style="display: flex;" class="center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-dashboard" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4 4h6v8h-6z"></path>
                                    <path d="M4 16h6v4h-6z"></path>
                                    <path d="M14 12h6v8h-6z"></path>
                                    <path d="M14 4h6v4h-6z"></path>
                                 </svg>
                                <p class="bold" style="margin-left: 3px">Admin</p>
                            </a>
                        </div>
                    @else
                    <a href="{{ url('/profile-detail', ['id' => $user->id] ) }}">
                        <div class="profileImage">
                            @if (Auth::check())
                                @if (Auth::user()->profile_photo) 
                                    <img src="{{ asset('img/profile_photo/' . Auth::user()->profile_photo) }}">
                                @else 
                                    <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/f6/ea/2e/default-avatar-2020-67.jpg" alt="">
                                @endif
                            @endif
                        </div>
                    </a>
                    @endif
                @else
                    <div class="masuk center">
                        <a href="{{ route('login')}}" class="bold">
                            Masuk
                        </a>
                    </div>
                @endauth
            </div>
            @endif
            
        </div>

    </div>
</div>