<x-main>
    @slot('styles')
        <style>
            li{
                list-style-type: none;
            }
          
        </style>
    @endslot

  <div class="container">
    <div class="row">
        <div class="col-md-6 p-0 m-auto">
            <div class="card">
                <div class="card-header">
                    Create Task
                </div>
                <div class="card-body">
                    <form action="{{ route('tasks.store') }}" class="" method="post">
                        @csrf
                      @include('tasks.form_')
                    </form>
                </div> 
            </div>
        </div>
    </div>
  </div>
   
   

  <div class="container mt-4">
      <div class="row">
    @foreach($tasks as $index => $task)
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $index+1 }}. {{ $task->list }}
                 <div class="d-flex">
                     <a class="btn btn-primary me-2" href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                     <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                         @csrf
                         @method('delete')
     
                         <button class="btn btn-danger">Delete</button>
                     </form>
                 </div>
                </li>
            </ul>
            @endforeach
        </div>
    </div>
</x-main>