<div>
    <h1>this is login</h1>

    <form action="{{ route('admin_authenticate') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">login</button>
    </form>
</div>
