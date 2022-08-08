<x-main>
    <div class="container">
        @foreach ($users as $user)
            <li><a href="/users/{{ $user->id }}">{{ $user->name }}</a></li>
        @endforeach
    </div>
</x-main>