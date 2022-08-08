
<input type="text" value="{{ old('list', $task->list) }}" name="list" id="" class="form-control mb-2 me-2 @error('list') is-invalid @enderror">
<button class="btn btn-primary btn-sm float-end" type="submit">{{ $submit }}</button>
@error('list')
    <small class="text-danger">{{ $message }}</small>
@enderror