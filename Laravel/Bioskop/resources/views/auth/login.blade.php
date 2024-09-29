<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Login - KENBI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #3a6d8c;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .kotak-login {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .kotak-login h2 {
            margin-bottom: 20px;
        }
        .kotak-login input {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid blue;
            border-radius: 3px;
        }
        .kotak-login button {
            width: 45%;
            padding: 5px;
            background-color: purple;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .kotak-login button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="kotak-login">
    <h2>Login Bioskop</h2>
    <form action="{{route('login-post')}}"method="POST">
        @csrf
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
