<x-main>
    @slot('styles')
        <style>
            li{
                list-style-type: none;
            }
          
        </style>
    @endslot
    <h1>Tasks</h1>

   
    <form action="/task" method="post">
        @csrf
        <input type="text" name="list" id="">
        <button type="submit">Tambah +</button>
    </form>

    @foreach($tasks as $index => $task)

    <ul>
        <li>{{ $index+1 }}- <a href="/task/{{ $task->id }}/edit">{{ $task->list }}</a>-</li>
        <form style="display: inline" action="/task/{{ $task->id }}" method="POST">
            @method('delete')
            @csrf
            <button type="submit" >del</button>
        </form>
    </ul>    
    @endforeach
</x-main>