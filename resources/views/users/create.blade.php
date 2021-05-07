<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ url("/users") }}">
@csrf
<div><input type="text" name="id">id</div>
<div><input type="text" name="name">name</div>
<div><input type="text" name="gender">gender</div>
<div><input type="date" name="dob">dob</div>
<div><input type="text" name="hometown">hometown</div>
<div><input type="text" name="id_card">CCCD</div>
<div><input type="text" name="academic_level">academic_level</div>
<div><input type="text" name="accomplishment">accomplishment</div>
<div><input type="text" name="account">account</div>
<div><input type="text" name="phone">phone</div>

<div><input type="text" name="email">email</div>
<div><input type="text" name="password">password</div>

<input type="radio" name="role" value="Admin">Admin
<input type="radio" name="role" value="Teacher">Teacher
<input type="radio" name="role" value="Student">Student
<button type="submit">OK</button>
</form>
</body>
</html>