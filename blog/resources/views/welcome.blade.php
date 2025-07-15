<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Muqtarah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f8fa;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            color: #333;
        }
        .container {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px 20px;
        }
        .logo {
            width: 120px;
            height: 120px;
            object-fit: contain;
            margin-bottom: 20px;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #2c3e50;
        }
        p {
            font-size: 18px;
            max-width: 600px;
            margin-bottom: 30px;
            color: #555;
        }
        .btn {
            padding: 12px 24px;
            background-color: #3490dc;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #2779bd;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #eaeaea;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="container">
        {{-- Logo Placeholder --}}
<img src="{{ asset('image/Nuwab.png') }}" alt="Muqtarah Logo" class="logo">


        <h1>Welcome to Muqtarah</h1>

        <p>
            Muqtarah is an innovative platform that allows citizens to submit their ideas, concerns, and proposals directly to their MPs — easily and securely.
        </p>

        <a href="{{ url('/login') }}" class="btn">Let’s Get Started</a>
    </div>

    <footer>
        &copy; {{ date('Y') }} Muqtarah. All rights reserved.
    </footer>

</body>
</html>
