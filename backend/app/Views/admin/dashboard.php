<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Golden Crumbs</title>
    <link rel="stylesheet" href="/assets/styles.css">
    <link rel="shortcut icon" type="image/png" href="/assets/logo-favico.ico">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <?= view('components/header') ?>

    <nav class="roadmap-nav">
        <a href="/admin/dashboard">Dashboard</a>
        <a href="/admin/services">Services</a>
        <a href="/admin/accounts">Accounts</a>
        <a href="/admin/requests">Requests</a>
    </nav>

    <section class="cta-section small">
        <h1 class="cta-title">Admin Dashboard</h1>
        <p class="cta-subtitle">Welcome back, Admin! Manage everything in one place.</p>
    </section>

    <section class="admin-grid">
        <div class="admin-card">
            <h3>Total Users</h3>
            <p>128</p>
        </div>

        <div class="admin-card">
            <h3>Pending Requests</h3>
            <p>12</p>
        </div>

        <div class="admin-card">
            <h3>Available Services</h3>
            <p>6</p>
        </div>

        <div class="admin-card">
            <h3>Orders Today</h3>
            <p>23</p>
        </div>
    </section>

    <?= view('components/footer') ?>
</body>

</html>