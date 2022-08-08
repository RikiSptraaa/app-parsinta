<x-main>
    <div class="container">
        <div class="row">
            <div class="col-md-5 m-auto">
                <div class="card">
                    <div class="card-header">Create New Account</div>
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input value="{{ old('email') }}" type="email" name="email" id="email" class="@error('email') is-invalid  @enderror form-control">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="name" class="form-label">Name</label>
                                <input value="{{ old('name') }}" type="text" name="name" id="name" class="@error('name') is-invalid  @enderror form-control">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="username" class="form-label">Username</label>
                                <input value="{{ old('username') }}" type="text" name="username" id="username" class="@error('username') is-invalid  @enderror form-control">
                                @error('username')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="@error('password') is-invalid  @enderror form-control">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label   for="confirm_password" class="form-label">Confirm Password</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="@error('confirm_password') is-invalid  @enderror form-control">
                                @error('confirm_password')
                                 <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>    
                            <div class="mb-4">
                                <button type="submit" class="btn btn-primary mt-2">Submit</button>
                            </div>    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main>