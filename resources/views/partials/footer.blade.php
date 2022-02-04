{{-- 
<footer class="footer">
 <nav>
    <div class="containero">
        <div class="link-cont">
            <div>
                <ul>
                    <h3>DC COMICS</h3>
                    @foreach($combo as $comb)
                        <li>
                            <a href="{{$comb["url"]}}">{{$comb["text"]}}</a>
                        </li>
                    @endforeach
                </ul>
                <ul>
                    <h3>SHOP</h3>
                    @foreach($shopo as $shop)
                        <li>
                            <a href="{{$shop["url"]}}">{{$shop["text"]}}</a>
                        </li>
                    @endforeach
                </ul>
                <ul>
                    <h3>DC</h3>
                    @foreach($dichos as $dicho)
                        <li>
                            <a href="{{$dicho["url"]}}">{{$dicho["text"]}}</a>
                        </li>
                    @endforeach
                </ul>
                
            </div>
        </div>
    </div>
</nav> 
<div class="bg-container">
    <div class="link-cont">
        <a class="sign-btn" href="">SIGN-UP NOW!</a>
        <div>
            <a href="">FOLLOW US</a>
            <ul>
                @foreach ($socials as $social)
                <li >
                    <a href="{{$social["url"]}}">
                        <img src="{{$social["img"]}}" alt="{{$social["alt"]}}">
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div> 
</footer> --}}