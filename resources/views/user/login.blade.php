<form method="POST" action="{{ action("Auth\AuthController@getLogin") }}">
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
        <a href="{{ action("Auth\PasswordController@getEmail") }}">Forgot Password</a>
        <a href="{{ action("Auth\AuthController@getRegister") }}">Register</a>
    </div>
</form>