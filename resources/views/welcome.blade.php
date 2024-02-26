<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Message Box</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            line-height: 1.5;
            color: #1A202C;
            background-color: #F9FAFB;
        }

        a {
            color: #2B6CB0;
            text-decoration: none;
        }

        a:hover {
            color: #1A365D;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .nav {
            display: flex;
        }

        .nav a {
            margin-right: 1.5rem;
        }

        .hero {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60vh;
            background-image: url("your-background-image.jpg");
            background-size: cover;
            background-position: center;
            color: #FFFFFF;
            text-align: center;
        }

        .hero h1 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.25rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .feature {
            background-color: #FFFFFF;
            border: 1px solid #E5E7EB;
            border-radius: 0.5rem;
            padding: 1.5rem;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .feature:hover {
            transform: scale(1.05);
        }

        .feature h2 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #2B6CB0;
        }

        .feature p {
            font-size: 1rem;
            color: #4B5563;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">Message Box</div>
            <div class="nav">
                @auth
                    <a href="{{ url('/messages') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        </div>

        <div class="hero">
            <div>
                <h1 style="color: #2B6CB0">Join Us!</h1>
                <p style="color: #2B6CB0">We invite you to join our Message Box ! Register yourself.</p>
            </div>
        </div>

    </div>
</body>

</html>
