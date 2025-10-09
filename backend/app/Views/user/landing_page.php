<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Crumbs Cookie House | Home</title>
    <link rel="stylesheet" href="/assets/styles.css">
    <link rel="shortcut icon" type="image/png" href="assets/logo-favico.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <?= view('components/header') ?>

    <!-- Navbar -->
    <nav class="roadmap-nav">
        <a href="/">Home</a>
        <a href="/login">Login</a>
        <a href="/signup">Sign Up</a>
        <a href="/moodboard">Mood Board</a>
        <a href="/roadmap">Road Map</a>
    </nav>

    <!-- CTA Section (Fragmented) -->
    <?= view('components/cta', [
        'title' => 'Freshly Baked Happiness',
        'subtitle' => 'Welcome to <b>Golden Crumbs Cookie House</b> — your cozy destination for warm, gooey cookies made with love.',
        'primaryLink' => '/login',
        'primaryLabel' => 'Login',
        'secondaryLink' => '/signup',
        'secondaryLabel' => 'Sign Up'
    ]) ?>

    <!-- Best Seller Cards -->
    <?php
    $products = [
        [
            "title" => "Chocolate Chip Cookie",
            "description" => "A timeless favorite — golden, chewy, and packed with rich chocolate chunks that melt in your mouth.",
            "price" => 129,
            "image" => "assets/choco-chip.png"
        ],
        [
            "title" => "Oatmeal Raisin Cookie",
            "description" => "Soft, spiced, and filled with plump raisins and hearty oats — the perfect cozy comfort treat.",
            "price" => 119,
            "image" => "assets/oatmeal.jpg"
        ],
        [
            "title" => "Double Fudge Cookie",
            "description" => "For the true chocolate lover — deeply rich, gooey, and irresistibly indulgent.",
            "price" => 139,
            "image" => "assets/fudge.png"
        ]
    ];
    ?>

    <?= view('components/cards/bestsellercards', ['products' => $products]) ?>

    <?= view('components/footer') ?>
</body>

</html>