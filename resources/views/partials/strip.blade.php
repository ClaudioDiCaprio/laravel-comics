<section class="link-strip">
    <ul>
        @foreach($links as $link)
            <li >
                <a href="">
                    <img src="{{$link['img']}}" alt="{{$link['text']}}">
                    {{$link['text']}}
                </a>
            </li>
        @endforeach
    </ul>
</section>