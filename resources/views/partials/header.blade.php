@php 

$HeaderNav = [
    [
        'url' => '/',
        'label' => 'CHARACTERS',
    ],
    [
        'url' => '/',
        'label' => 'COMICS',
    ],
    [
        'url' => '/',
        'label' => 'MOVIES',
    ],
    [
        'url' => '/',
        'label' => 'TV',
    ],
    [
        'url' => '/',
        'label' => 'GAMES',
    ],
    [
        'url' => '/',
        'label' => 'COLLECTIBLES',
    ],
    [
        'url' => '/',
        'label' => 'VIDEOS',
    ],
    [
        'url' => '/',
        'label' => 'FANS',
    ],
    [
        'url' => '/',
        'label' => 'NEWS',
    ],
    [
        'url' => '/',
        'label' => 'SHOP',
    ],
];



@endphp

<header>
    <div class="container-header">
        <div class="row d-flex line-height-header">
            <div class="col-1">
                <div>
                    <img class="logo-header" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
            </div>
            <div class="col-10">
                <ul class="d-flex justify-content-center list-unstyled">
                    @foreach($HeaderNav as $HeaderNavs)
                    <li>
                        <a class="text-decoration-none text-black" href="">{{$HeaderNavs['label']}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-1">
                <div>
                    <input type="text" placeholder="Search..."> 
                </div>
            </div>
        </div>
    </div>


</header>

