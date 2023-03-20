<!DOCTYPE html>
<html>

<head>
    <title>My Website</title>
</head>

<body>
    <h1>Hey {{ $data['name'] }}</h1><br>
    <span>Welcome To referral system</span><br>
    <span>Username :- {{ $data['email'] }}</span><br>
    <span>Password :- {{ $data['password'] }} </span><br>
    <span>Referral Link :- <a href="{{ url($data['url']) }}">click me</a></span>
    <h4>Thanks,</h4>
    <h4>The Jainik Website</h4>
</body>

</html>
