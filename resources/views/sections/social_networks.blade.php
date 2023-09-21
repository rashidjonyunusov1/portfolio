<div class="social-links mt-3 text-center">
    @foreach ($social_network as $item)
          <a href="{{ $item->url }}" class="twitter"><i class="{{ $item->icon }}"></i></a>
    @endforeach
        </div>


        {{-- <a href="https://github.com/rashidjonyunusov1" class="twitter"><i class="bx bxl-github"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100081171065154" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/rashidjon0103?r=nametag" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://youtube.com/channel/UCWMInajdAuaJMVrR4tHkqXw" class="google-plus"><i class="bx bxl-youtube"></i></a>
        <a href="https://t.me/SuNiY_InTeLeKtT" class="linkedin"><i class="bx bxl-telegram"></i></a> --}}