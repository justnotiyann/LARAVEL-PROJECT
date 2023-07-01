<ul class="list-group list-group-flush">
    <li class="list-group-item">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                value="{{ old('email')}}" required placeholder="Email...">
            @error('email')
            <small class="text-danger mt-2">{{ $message }}</small>
            @enderror
        </div>
    </li>
    <li class="list-group-item">
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                name="password" value="{{ old('password') }}" required placeholder="Password...">
            @error('password')
            <small class="text-danger mt-2">{{ $message }}</small>
            @enderror
        </div>
    </li>
    <li class="list-group-item">
        <button type="submit" class="btn btn-primary w-100">
            Login
        </button>
    </li>
</ul>
