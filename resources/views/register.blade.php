<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            border: 3px solid #f1f1f1;
            display: flex;
            width: 25%;
            flex-direction: column;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            padding-top: 16px;
            display: flex;
            justify-content: center;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <h2>Register Form</h2>

    <form action="/signups" method="POST">
        @csrf
        <div class="imgcontainer">
            <img src="img_avatar2.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="name"><b>Full Name</b></label>
            <input type="text" placeholder="Enter Full Name" name="name" required>
            @error('name')
                <span style="color:#f44336">{{ $message }}</span>
            @enderror

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
            @error('email')
                <span style="color:#f44336">{{ $message }}</span>
            @enderror

            <label for="referral"><b>Referral Code(optional)</b></label>
            <input type="text" placeholder="Enter Referral code" name="referral">

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            @error('password')
                <span style="color:#f44336">{{ $message }}</span>
            @enderror

            <button type="submit" name="submit">Sign Up</button>

        </div>

        <div class="container" style="background-color:#f1f1f1">

            <span class="psw"><a href="/signin">Already have an account?</a></span>
        </div>
    </form>
    {{-- @if (session::has('success'))
        <p style="color: #04AA6D">{{ session::get('success') }}</p>
    @endif
    @if (session::has('error'))
        <p style="color: #f44336">{{ session::get('error') }}</p>
    @endif --}}
</body>

</html>
