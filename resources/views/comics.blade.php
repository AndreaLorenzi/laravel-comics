<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        {{-- header --}}
        <header>
            <div>
                <img class="size-img"  src="{{ Vite::asset('../resources/images/dc-logo.png') }}" alt="">
            </div>
            <div class="nav-bar">
                <ul>
                    <li>CHARACTERS</li>
                    <li>COMICS</li>
                    <li>MOVIES</li>
                    <li>TV</li>
                    <li>GAMES</li>
                    <li>COLLECTIBLES</li>
                    <li>VIDEOS</li>
                    <li>FANS</li>
                    <li>NEWS</li>
                    <li>SHOP</li>
                </ul>
            </div>
        </header>


        {{-- main --}}
        <div class="background">
            <div class="jumbotron-bg"></div>
            <div class="container">
                <div class="conteiner-comic d-flex flex-wrap">
                        @foreach ($arrComics as $card)
                        <div class="comic">
                            <img src="{{ Vite::asset('../resources/images/dc-comics-detective.jpg')}}" alt="">
                            <p>{{$card['series']}}</p>
                            <p>{{$card['price']}}</p>
                        </div>
                    @endforeach
                </div>
                       
              <button class="current-series">CURRENT SERIES</button>
              <button class="load-more">LOAD MORE</button>
            </div>
          </div>
        {{-- footer --}}
        <footer>
            <div class="background-store">
                <div class="container-header">
                  <div class="digital-comics">
                    <img class="size-img"  src="{{ Vite::asset('../resources/images/buy-comics-digital-comics.png') }}" alt="">
                    <span>DIGITAL COMICS</span>
                  </div>
                  <div class="dc-merchandise">
                    <img class="size-img"  src="{{ Vite::asset('../resources/images/buy-comics-merchandise.png') }}" alt="">
                    <span>DC MERCHANDISES</span>
                  </div>
                  <div class="dc-subscription">
                    <img class="size-img"  src="{{ Vite::asset('../resources/images/buy-comics-subscriptions.png') }}" alt="">
                    
                    <span>SUBSCRIPTION</span>
                  </div>
                  <div class="comic-shop-locator">
                    <img class="size-img"  src="{{ Vite::asset('../resources/images/buy-comics-shop-locator.png') }}" alt="">
                    <span>COMIC SHOP LOCATOR</span>
                  </div>
                  <div class="dc-power-visa">
                    <img class="size-img"  src="{{ Vite::asset('../resources/images/buy-dc-power-visa.svg') }}" alt="">
                    
                    <span>DC POWER VISA</span>
                  </div>
                </div>
              </div>
              <div class="background-img">
                <div class="container-body">
                  <div>
                    <ul class="dc-comics">
                      <li>
                        <h2>DC COMICS</h2>
                      </li>
                      <li class="little moar opacity-50">Characters</li>
                      <li class="little opacity-50">Comics</li>
                      <li class="little opacity-50">Movies</li>
                      <li class="little opacity-50">TV</li>
                      <li class="little opacity-50">Games</li>
                      <li class="little opacity-50">Videos</li>
                      <li class="little opacity-50">News</li>
                    </ul>
                    <ul class="shop">
                      <li class="moar">
                        <h2>SHOP</h2>
                      </li>
                      <li class="little moar opacity-50">Shop DC</li>
                      <li class="little opacity-50">Shop DC Collectibles</li>
                    </ul>
                  </div>
                  <div>
                    <ul class="dc">
                      <li>
                        <h2>DC</h2>
                      </li>
                      <li class="little moar opacity-50">Terms Of Use</li>
                      <li class="little opacity-50">Privacy policy (New)</li>
                      <li class="little opacity-50">Ad choices</li>
                      <li class="little opacity-50">Advertising</li>
                      <li class="little opacity-50">Jobs</li>
                      <li class="little opacity-50">Subscriptions</li>
                      <li class="little opacity-50">Talent Workshops</li>
                      <li class="little opacity-50">CPSC Certificates</li>
                      <li class="little opacity-50">Ratings</li>
                      <li class="little opacity-50">Shop Help</li>
                      <li class="little opacity-50">Contact Us</li>
                    </ul>
                  </div>
            
                  <div>
                    <ul class="sites">
                      <li>
                        <h2>SITES</h2>
                      </li>
                      <li class="little moar opacity-50">DC</li>
                      <li class="little opacity-50">MAD Magazine</li>
                      <li class="little opacity-50">DC Kids</li>
                      <li class="little opacity-50">DC Universe</li>
                      <li class="little opacity-50">DC Power Visa</li>
                    </ul>
                  </div>
            
                  <div class="background-dc">
                    <img class="size-img"  src="{{ Vite::asset('../resources/images/dc-logo-bg.png') }}" alt="">
                    
                  </div>
                </div>
              </div>
              <div class="background-gray">
                <div class="container-footer">
                  <button>SIGN-UP NOW!</button>
                  <div class="follow-us">
                    <span>FOLLOW US</span>
                    <img class="size-img"  src="{{ Vite::asset('../resources/images/footer-facebook.png') }}" alt="">
                    
                    <img class="size-img"  src="{{ Vite::asset('../resources/images/footer-twitter.png') }}" alt="">
                    
                    <img class="size-img"  src="{{ Vite::asset('../resources/images/footer-youtube.png') }}" alt="">
                    
                    <img class="size-img"  src="{{ Vite::asset('../resources/images/footer-pinterest.png') }}" alt="">
                    
                    <img class="size-img"  src="{{ Vite::asset('../resources/images/footer-periscope.png') }}" alt="">
                  </div>
                </div>
              </div>
        </footer>
    </body>
</html>

