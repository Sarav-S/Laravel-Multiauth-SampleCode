<form method="POST" action="{{ action("Auth\AdminController@getLogin") }}">
    {!! csrf_field() !!}
 
    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>
 
    <div>
        Password
        <input type="password" name="password" id="password">
    </div>
 
    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>
 
    <div>
        <button type="submit">Login</button>
        <a href="{{ action("Auth\AdminPasswordController@getEmail") }}">Forgot Password</a>
    </div>
</form>