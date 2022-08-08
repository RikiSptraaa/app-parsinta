<x-main>
  <div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('tasks.update', $task->id) }}" method="post">
                @csrf
                @method('put')
                <input type="text" class="form-control d-flex mb-2" name="list" id="list" value="{{ $task->list }}">
                <button type="submit" class="btn btn-primary">Rubah</button>
            </form>
        </div>
    </div>
  </div>
</x-main>
