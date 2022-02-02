<main class="main">
    <span class="current-series">CURRENT SERIES</span>

   <div class="conta">
        @foreach($comics as $comic)   
            <div class="comic-sachet">
                <a href="">
                    <img class="comic-cover" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <span class="comic-title">{{$comic['title']}}</span>
                </a>
            </div>
        @endforeach
   </div>
</main>