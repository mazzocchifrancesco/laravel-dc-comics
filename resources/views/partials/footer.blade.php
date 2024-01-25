<footer>

    {{-- Bluebar --}}
    
        <div id="bluebar">
            <div class="container d-flex justify-content-between">
                @foreach ($bluebarLinks as $item)
                <div class="d-flex align-items-center linkCard">
                    <img class="blueIcon" src='/Assets/images/{{$item['img']}}' alt="">
                    <a href=" #" class="text-white fw-semibold text-uppercase ms-3 text-decoration-none">{{ $item['title'] }}</a>
                </div>
                @endforeach
            </div>
        </div>
    
        {{-- MAIN footer --}}
    
        <div id="footerMain">
    
            <div class="container d-flex justify-content-between">
                <div id="linkContainer" class=" d-flex flex-wrap flex-column gap-5">
                    @foreach ($footerLinks as $block)
                        
                    <div class="d-flex flex-column">
                        <h3 class="text-uppercase text-white">{{ $block['title'] }}</h3>
                        @foreach ($block['links'] as $link)
                            
                        <a href="#" class="text-capitalize text-decoration-none text-secondary">  {{ $link }}</a>
                            @endforeach
                    </div>
                    @endforeach
                </div>
                <div id="bgLogo"></div>
            </div>
        </div>
    
    {{-- socials link  --}}
    
    <div id="footerSocials" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between">
            <div id="signUp" class="text-uppercase text-white p-2 d-inline-block fw-semibold">
                sign-up now!
            </div>
            <div class="d-flex gap-3 align-items-center">
                <div class="text-uppercase fw-bold text-primary">follow us</div>
                <i class="socialIcon fa-brands fa-facebook-f rounded-circle"></i>
                <i class="socialIcon fa-brands fa-twitter rounded-circle"></i>
                <i class="socialIcon fa-brands fa-youtube rounded-circle"></i>
                <i class="socialIcon fa-brands fa-pinterest-p rounded-circle"></i>
                <i class="socialIcon fa-solid fa-location-dot rounded-circle"></i>
    
            </div>
        </div>
    </div>
    
    </footer>