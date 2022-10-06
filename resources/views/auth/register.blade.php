<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Madhubala Hospital Bettiah - Login</title>
    <style>
        body {
            background-color: rgb(228, 229, 247);
        }

        .social-login img {
            width: 24px;
        }

        a {
            text-decoration: none;
        }

        .card {
            font-family: sans-serif;
            width: 300px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 3em;
            margin-bottom: 3em;
            border-radius: 10px;
            background-color: #ffff;
            padding: 1.8rem;
            box-shadow: 2px 5px 20px rgba(0, 0, 0, 0.1);
        }

        .title {
            text-align: center;
            font-weight: bold;
            margin: 0;
        }

        .subtitle {
            text-align: center;
            font-weight: bold;
        }

        .btn-text {
            margin: 0;
        }

        .social-login {
            display: flex;
            justify-content: center;
            gap: 5px;
        }

        .google-btn {
            background: #fff;
            border: solid 2px rgb(245 239 239);
            border-radius: 8px;
            font-weight: bold;
            display: flex;
            padding: 10px 10px;
            flex: auto;
            align-items: center;
            gap: 5px;
            justify-content: center;
        }

        .fb-btn {
            background: #fff;
            border: solid 2px rgb(69, 69, 185);
            border-radius: 8px;
            padding: 10px;
            display: flex;
            align-items: center;
        }

        .or {
            text-align: center;
            font-weight: bold;
            border-bottom: 2px solid rgb(245 239 239);
            line-height: 0.1em;
            margin: 25px 0;
        }

        .or span {
            background: #fff;
            padding: 0 10px;
        }

        .email-login {
            display: flex;
            flex-direction: column;
        }

        .email-login label {
            color: rgb(170 166 166);
        }

        .green{
          color: #45caab;
        }
        input[type="text"],
        input[type="password"] {
            padding: 15px 20px;
            margin-top: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
        }

        .cta-btn {
            background-color: #45caab;
            color: white;
            padding: 1.5rem 1rem;
            margin-top: 10px;
            font-size: 1rem !important;
            margin-bottom: 20px;
            width: 100%;
            border-radius: 30px;
            border: none;
        }

        .forget-pass {
            text-align: center;
            display: block;
        }
    </style>
</head>

<body>
    <div class="card">
        <div style="margin-left: 100px">
            <a href="/"><img src="{{ asset('assets/images/logo.png') }}" style="height: 100px; width: 100px;" class="img-fluid"
              alt="Logo"></a>
        </div>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <h2 class="title"> Register</h2>
            <p class="subtitle">Already have an account? <a class="green" href="{{ route('login') }}"> Login Now</a></p>

            <div class="email-login">
                <label for="name"> <b>Name</b></label>
                <input type="text" placeholder="Enter Your Name" name="name" required>
                <label for="email"> <b>Email</b></label>
                <input type="text" placeholder="Enter Your Email" name="email" required>
                <label for="phone"> <b>Mobile No</b></label>
                <input type="text" placeholder="Enter Your Mobile Number" name="phone" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
            </div>
            <button class="cta-btn">Register</button>
        </form>
    </div>
</body>

</html>
