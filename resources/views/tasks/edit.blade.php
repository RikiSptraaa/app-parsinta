<x-main>
    <form action="/task/{{ $task->id }}" method="post">
        @csrf
        @method('put')
        <input type="text" name="list" id="list" value="{{ $task->list }}">
        <button type="submit">Rubah</button>
    </form>
</x-main>
