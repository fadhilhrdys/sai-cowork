<div>
    <h1>this is register</h1>

    <form action="{{ route('admin_register_store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">name</label>
            <input type="name" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">register</button>
    </form>
</div>
