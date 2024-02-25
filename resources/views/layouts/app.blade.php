@php 

$card = [
    [
        'titleFoto' => 'resources/img/adv.jpg',
        'titleCard' => 'Action Comics',
    ],
    [
        'titleFoto' => 'resources/img/adv.jpg',
        'titleCard' => 'Action Comics',
    ],
    [
        'titleFoto' => 'resources/img/adv.jpg',
        'titleCard' => 'Action Comics',
    ],
    [
        'titleFoto' => 'resources/img/adv.jpg',
        'titleCard' => 'Action Comics',
    ],
    [
        'titleFoto' => 'resources/img/adv.jpg',
        'titleCard' => 'Action Comics',
    ],
    [
        'titleFoto' => 'resources/img/adv.jpg',
        'titleCard' => 'Action Comics',
    ],
    [
        'titleFoto' => 'resources/img/adv.jpg',
        'titleCard' => 'Action Comics',
    ],
    [
        'titleFoto' => 'resources/img/adv.jpg',
        'titleCard' => 'Action Comics',
    ],
    [
        'titleFoto' => 'resources/img/adv.jpg',
        'titleCard' => 'Action Comics',
    ],
    [
        'titleFoto' => 'resources/img/adv.jpg',
        'titleCard' => 'Action Comics',
    ],
];

$comic = [
    [
        'cardFoto' => 'resources/img/buy-comics-digital-comics.png',
        'cardTitle' => 'DIGITAL COMICS',
    ],
    [
        'cardFoto' => 'resources/img/buy-comics-merchandise.png',
        'cardTitle' => 'DS MERCHANDISE',
    ],
    [
        'cardFoto' => 'resources/img/buy-comics-subscriptions.png',
        'cardTitle' => 'SUBSCRIPTION',
    ],
    [
        'cardFoto' => 'resources/img/buy-comics-shop-locator.png',
        'cardTitle' => 'COMIC SHOP LOCATOR',
    ],
    [
        'cardFoto' => 'resources/img/buy-dc-power-visa.svg',
        'cardTitle' => 'DC POWER VISA',
    ],
];

// var_dump($configArrayDC);
@endphp



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>@yield('page-title') | Laravel Start 1</title>

        {{-- Stili nell'head --}}
        <link rel="stylesheet" href="css/style.css">

        {{-- <!-- Includiamo gli assets con la direttiva @vite --> --}}
        @vite('resources/js/app.js')

        @yield('head-imports')
    </head>
    <body>

        @include('partials.header')

        <main>
            <section id="main-section-1">
            </section>


            <section id="main-section-2">
                <div class="setting-card-section-2">
                    @foreach($configArrayDC as $item)
                <div class="card me-2 mt-5 " style="width: 18rem;">
                    <img src="{{$item['thumb']}}" class="card-img-top" alt="">
                <div class="card-body mt-4 ">
                    <h5 class="card-title ">{{$item['title']}} </h5>
                </div>
                </div> 
                @endforeach
                </div> 

                <div class="text-center mt-4 mb-3">
                    <button type="button" class="btn btn-primary">LOAD MORE</button>
                </div>
            </section>


            <section id="main-section-3">
                @foreach($comic as $comics)
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <img class="width-image-section-3" src="{{Vite::asset($comics['cardFoto'])}}" alt="">
                                <div class="margine">
                                {{$comics['cardTitle']}}
                                </div>
                        </div>
                    </div>
                    @endforeach
            </section>


        </main>

        @include('partials.footer')

        {{-- JS da importare nel body --}}
        @yield('body-imports')
    </body>
</html>
