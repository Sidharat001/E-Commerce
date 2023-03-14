<div class="container my-5">
    <form class="m-auto" method="post" action="/login">
        @csrf
        <div class="row mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" autocomplete="off" placeholder="email@example.com">
            <span class="text-danger p-0">
                @error('email')
                    {{ $message }}*
                @enderror
            </span>
        </div>
        <div class="row mb-3">
            <label for="password">Password</label>
            <input type="password" name="password">
            <span class="text-danger p-0">
                @error('password')
                    {{ $message }}*
                @enderror
            </span>
        </div>
        <button type="submit">Login</button>
    </form>
</div>
