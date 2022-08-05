<x-main>
        @slot('styles')
            <style>
                body{
                    background-color: indigo;
                }
            </style>
        @endslot

        <form action="/contact" method="post">
            @csrf
            <input type="text" name="name">
            <button type="submit">Send</button>
        </form>
</x-main>