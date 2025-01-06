<header>
    <h1>Cursos App </h1>
    <ul>
        <li>
            <a 
                href="{{route('home')}}" 
                class="{{(request()->routeIs('home')) ? 'active' : ''}}"
            >
                Inicio
            </a>
            {{-- @dump(request()->routeIs('about')); --}}
        </li>

        <li>
            <a 
                href={{route('cursos.index')}}
                class="{{(request()->routeIs('cursos.*')) ? 'active' : ''}}"
            >
                Cursos
            </a>
        </li>

        <li>
            <a 
                href="{{route('about')}}"
                class="{{(request()->routeIs('about')) ? 'active' : ''}}"
            >
                Nosotros
            </a>
        </li>
    </ul>
</header>