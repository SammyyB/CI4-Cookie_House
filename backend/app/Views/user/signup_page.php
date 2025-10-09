<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Crumbs Cookie House | Sign Up</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

    <style>
        /* --- Signup Page Styles --- */
        body.signup-page {
            background: #fff8f0;
            color: #333;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            flex-direction: columan;
            min-height: 100vh;
        }

        /* Header */
        body.signup-page header {
            background: #5c3d2e;
            color: white;
            padding: 15px;
            text-align: center;
        }

        body.signup-page header img {
            height: 60px;
            width: 60px;
            border-radius: 50%;
            margin-right: 10px;
            vertical-align: middle;
        }

        body.signup-page header span {
            font-family: 'Pacifico', cursive;
            font-size: 1.8rem;
            vertical-align: middle;
        }

        /* Signup Wrapper */
        body.signup-page .signup-wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        /* Form Container */
        body.signup-page .form-container {
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

        body.signup-page .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #5c3d2e;
        }

        body.signup-page .form-container form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Input styling */
        body.signup-page .form-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        /* Name group (side-by-side fix) */
        body.signup-page .name-group {
            display: flex;
            gap: 10px;
            width: 100%;
        }

        body.signup-page .name-group input {
            flex: 1;
            width: 100%;
            margin: 10px 0;
        }

        /* Centered Button */
        body.signup-page .form-container button {
            width: 100%;
            padding: 10px;
            background: #5c3d2e;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 10px;
            transition: background 0.3s ease;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        body.signup-page .form-container button:hover {
            background: #7a5543;
        }

        /* Footer */
        body.signup-page footer {
            background: #5c3d2e;
            color: white;
            padding: 15px;
            text-align: center;
            margin-top: auto;
        }

        body.signup-page footer img {
            height: 40px;
            width: 40px;
            border-radius: 50%;
            margin-right: 8px;
            vertical-align: middle;
        }
    </style>

</head>

<body class="signup-page">

    <?= view('components/header') ?>
    <nav>
        <a href="/">Home</a>
        <a href="/login">Login</a>
        <a href="/signup">Sign Up</a>
        <a href="/moodboard">Mood Board</a>
        <a href="/roadmap">Road Map</a>
    </nav>

    <div class="signup-wrapper">
        <div class="form-container">
            <h2>Create Account</h2>
            <form>
                <div class="name-group">
                    <input type="text" placeholder="First Name" required>
                    <input type="text" placeholder="Last Name" required>
                </div>
                <input type="email" placeholder="Email Address" required>
                <input type="password" placeholder="Password" required>
                <input type="password" placeholder="Confirm Password" required>
                <button type="submit">Sign Up</button>
            </form>
            <p style="margin-top:15px; font-size:0.9rem; color:#5c3d2e;">
                Already have an account?
                <a href="/login" style="color:#E9C46A; text-decoration:none; font-weight:bold;">Login</a>
            </p>
        </div>
    </div>


    <?= view('components/footer') ?>

</body>

</html>