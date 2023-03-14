<div class="container my-5">
    <form class="m-auto" method="post" action="/login">
        @csrf
        <div class="row mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" autocomplete="off" placeholder="email@example.com">
        </div>
        <div class="row mb-3">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <button type="submit">Login</button>
    </form>
</div>
