<link rel="stylesheet" href="{{asset('/css/nav.css')}}">
<link rel="icon" href="./img/Tripadvisor_logoset_solid_green.svg">

<script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>

<div class="kategori center">
    <div class="kA">
        <ul class="kAa">
            <li>
                <a href="{{ route('hotel') }}">
                    Hotel
                </a>
            </li>
            <li>
                <a href="{{ route('destinasi') }}">
                    Hal yang dapat dilakukan
                </a>
            </li>
            <li>
                <a href="{{ route('restoran') }}">
                    Restoran
                </a>
            </li>
            <li>
                <a href="{{ route('forum') }}">
                    Forum
                </a>
            </li>
        </ul>                
    </div>
</div>