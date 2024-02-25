@php 

$dcComic = [
        [
            'link' => 'Characters',
        ],
        [
            'link' => 'Comics',
        ],
        [
            'link' => 'Movies',
        ],
        [
            'link' => 'Tv',
        ],
        [
            'link' => 'Games',
        ],
        [
            'link' => 'Videos',
        ],
        [
            'link' => 'News',
        ]
    ];


    $shop = [
        [
            'link' => 'Shop DC',
        ],
        [
            'link' => 'Shop DC Collectibles',
        ]
    ];

$dc = [
        [
            'link' => 'Terms of Use',
        ],
        [
            'link' => 'Privacy policy',
        ],
        [
            'link' => 'Add choices',
        ],
        [
            'link' => 'Advertising',
        ],
        [
            'link' => 'Jobs',
        ],
        [
            'link' => 'Subscriptions',
        ],
        [
            'link' => 'Talent Workshops',
        ],
        [
            'link' => 'CPSC Certificates',
        ],
        [
            'link' => 'Ratings',
        ],
        [
            'link' => 'Shop Help',
        ],
        [
            'link' => 'Contact us',
        ]
    ];

$site = [
        [
            'link' => 'DC',
        ],
        [
            'link' => 'MAD Magazine',
        ],
        [
            'link' => 'DC Kids',
        ],
        [
            'link' => 'DC Universe',
        ],
        [
            'link' => 'DC Power Visa',
        ]
    ];

@endphp

<footer>
    <div class="d-flex justify-content-center">
      <div class="h-100 container-footer">
        <div class="h-100 d-flex">
          <div>
            <div>DC COMICS</div>
            <ul class="list-unstyled p-0">
            @foreach ($dcComic as $dcComics)
                <li>
                    <a class="text-decoration-none color-text-footer" href="">{{$dcComics['link']}}</a>
                </li>
            @endforeach
            </ul>
            <div class="mb-8">SHOP</div>
            <ul class="list-unstyled  p-0">
              @foreach ($shop as $shops)
                <li>
                    <a class="text-decoration-none color-text-footer" href="">{{$shops['link']}}</a>
                </li>
            @endforeach
            </ul>
          </div>
          <div class="col-footer-width">
            <div class="mb-8">DC</div>
            <ul class="list-unstyled  p-0">
              @foreach ($dc as $dcs)
                <li>
                    <a class="text-decoration-none color-text-footer" href="">{{$dcs['link']}}</a>
                </li>
            @endforeach
            </ul>
          </div>
          <div class="col-footer-width">
            <div>SITES</div>
            <ul class="list-unstyled p-0">
              @foreach ($site as $sites)
                <li>
                    <a class="text-decoration-none color-text-footer" href="">{{$sites['link']}}</a>
                </li>
            @endforeach
            </ul>
          </div>
          <div class="grow-footer logo-background-footer"></div>
        </div>
    </div>

    </div>
</footer>
