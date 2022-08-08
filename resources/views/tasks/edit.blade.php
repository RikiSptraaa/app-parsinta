<x-main>
  <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Create Task
                </div>
                <div class="card-body">
                    <form action="{{ route('tasks.update', $task) }}" class="d-flex" method="post">
                        @csrf
                        @method('put')
                        @include('tasks.form_')
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</x-main>
