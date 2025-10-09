<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Crumbs Cookie House | Login</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="shortcut icon" type="image/png" href="assets/logo-favico.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* --- Login Page Styles --- */
        body.login-page {
            background: #fff8f0;
            color: #333;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header */
        body.login-page header {
            background: #5c3d2e;
            color: white;
            padding: 15px;
            text-align: center;
        }

        body.login-page header img {
            height: 60px;
            width: 60px;
            border-radius: 50%;
            margin-right: 10px;
            vertical-align: middle;
        }

        body.login-page header span {
            font-family: 'Pacifico', cursive;
            font-size: 1.8rem;
            vertical-align: middle;
        }

        /* Dedicated login wrapper to isolate from .container */
        body.login-page .login-wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        /* Form Container */
        body.login-page .form-container {
            width: 100%;
            max-width: 400px;
            padding: 25px;
            background: #f4e1d2;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        body.login-page .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #5c3d2e;
        }

        body.login-page .form-container form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        body.login-page .form-container input {
            width: 95%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        body.login-page .form-container button {
            width: 95%;
            padding: 10px;
            background: #5c3d2e;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 10px;
            transition: background 0.3s ease;
        }

        body.login-page .form-container button:hover {
            background: #7a5543;
        }

        /* Footer */
        body.login-page footer {
            background: #5c3d2e;
            color: white;
            padding: 15px;
            text-align: center;
            margin-top: auto;
        }

        body.login-page footer img {
            height: 40px;
            width: 40px;
            border-radius: 50%;
            margin-right: 8px;
            vertical-align: middle;
        }
    </style>

</head>

<body class="login-page">
    <?= view('components/header') ?>

    <nav>
        <a href="/">Home</a>
        <a href="/login">Login</a>
        <a href="/signup">Sign Up</a>
        <a href="/moodboard">Mood Board</a>
        <a href="/roadmap">Road Map</a>
    </nav>

    <!-- isolated login section -->
    <div class="login-wrapper">
        <div class="form-container">
            <h2>Login</h2>
            <form>
                <input type="text" placeholder="Username or Email" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
            <p style="margin-top:15px; font-size:0.9rem; color:#5c3d2e;">
                Don't have an account?
                <a href="/signup" style="color:#E9C46A; text-decoration:none; font-weight:bold;">Sign Up</a>
            </p>
        </div>
    </div>


    <?= view('components/footer') ?>

</body>

</html>