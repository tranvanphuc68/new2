<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ url('login')}}">
        @csrf
        <input type="text" name='email'>
        <input type="text" name='password'>
        <button type="submit">LOGIN</button>
    </form>
    <div>
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</body>
</html>