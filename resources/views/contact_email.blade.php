<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MAil</title>
</head>
<body>
<h2>Hello ,</h2>
You received an email from : {{ $name }}
<br>
Here are the details:
<br>
<b>Name:</b> {{ $name }}
<br>
<b>Email:</b> {{ $email }}
<br>
<b>Subject:</b> {{ $subject }}
<br>
<b>Message:</b> {{ $user_message }}
<br>
Thank You</body>
</html>
