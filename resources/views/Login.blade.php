<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="POST" action="{{ route('login.process') }}">
    @csrf
    <label>Email:</label><br>
    <input type="email" name="email"><br>

    <label>Password:</label><br>
    <input type="password" name="password"><br>

    <button type="submit">Login</button>
</form>

</body>
</html>