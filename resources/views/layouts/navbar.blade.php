<div>
    <ul class="navbar">
        {{-- <li><a href="/">Home</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/posts">Posts</a></li>--}}
        @foreach ($navigations as $item => $url)
        <li><a href="{{ $url }}">{{ $item }}</a></li>
        @endforeach
    </ul> 

</div>