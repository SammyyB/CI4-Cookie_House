<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Crumbs Cookie House | Road Map</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="shortcut icon" type="image/png" href="assets/logo-favico.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body.roadmap-page {
            background: linear-gradient(to bottom right, #fff8f0, #f4e1d2);
            color: #4A2E05;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .roadmap-main {
            flex: 1;
            padding: 60px 20px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .roadmap-main h1 {
            text-align: center;
            font-family: 'Pacifico', cursive;
            color: #5c3d2e;
            margin-bottom: 40px;
            font-size: 2rem;
        }

        .roadmap-container {
            display: grid;
            gap: 25px;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }

        .roadmap-card {
            background: #fffefb;
            border: 1px solid #f5e3c8;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 4px 10px rgba(76, 52, 35, 0.15);
            transition: all 0.3s ease;
        }

        .roadmap-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(76, 52, 35, 0.25);
        }

        .roadmap-card h2 {
            font-size: 1.3rem;
            color: #4A2E05;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .roadmap-card p {
            color: #5c3d2e;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .status {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            color: white;
            text-transform: uppercase;
            margin-bottom: 10px;
            min-width: 90px;
            text-align: center;
        }

        .bg-green {
            background: #81c784;
        }

        .bg-orange {
            background: #ffb74d;
        }

        .bg-blue {
            background: #64b5f6;
        }

        .bg-purple {
            background: #73397e;
        }

        .priority {
            font-size: 0.85rem;
            color: #8B7E74;
            font-weight: 500;
        }

        .flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>

<body class="roadmap-page">

    <?= view('components/header') ?>

    <nav class="roadmap-nav">
        <a href="/">Home</a>
        <a href="/login">Login</a>
        <a href="/signup">Sign Up</a>
        <a href="/moodboard">Mood Board</a>
        <a href="/roadmap">Road Map</a>
    </nav>

    <main class="roadmap-main">
        <h1>System Road Map</h1>

        <?php
        $roadmapItems = [
            [
                "title" => "User Management",
                "description" => "Handles customer sign-ups, employee registration by admins, and secure access for both staff and customers. Includes profile viewing and account editing features.",
                "status" => "Completed",
                "priority" => "High",
                "statusClass" => "bg-green"
            ],
            [
                "title" => "Service Management",
                "description" => "Enables the admin to add, update, or remove cookie flavors and combo sets. Keeps the online menu updated with new products, stock levels, and prices.",
                "status" => "In Progress",
                "priority" => "High",
                "statusClass" => "bg-orange"
            ],
            [
                "title" => "Order & Tracking System",
                "description" => "Lets customers place cookie orders and track them in real-time through stages: Pending, Baking, Ready, and Completed. Admins can update progress and handle cancellations.",
                "status" => "In Progress",
                "priority" => "High",
                "statusClass" => "bg-orange"
            ],
            [
                "title" => "Account Control & Deactivation",
                "description" => "Allows both users and admins to update or deactivate accounts securely to ensure safe and managed user data handling.",
                "status" => "Planned",
                "priority" => "Medium",
                "statusClass" => "bg-blue"
            ],
            [
                "title" => "Cookie Tracking Analytics",
                "description" => "Tracks and visualizes completed and ongoing cookie orders to help monitor workflow efficiency and popular cookie flavors.",
                "status" => "Planned",
                "priority" => "Medium",
                "statusClass" => "bg-blue"
            ],
            [
                "title" => "Feedback & Review Feature",
                "description" => "Lets customers leave ratings and comments after receiving their cookies, giving admins insights for product improvements.",
                "status" => "Backlog",
                "priority" => "Low",
                "statusClass" => "bg-purple"
            ],
        ];
        ?>

        <div class="roadmap-container">
            <?php foreach ($roadmapItems as $item): ?>
                <div class="roadmap-card">
                    <div class="flex">
                        <h2><?= htmlspecialchars($item['title']) ?></h2>
                        <span class="status <?= htmlspecialchars($item['statusClass']) ?>">
                            <?= htmlspecialchars($item['status']) ?>
                        </span>
                    </div>
                    <p><?= htmlspecialchars($item['description']) ?></p>
                    <p class="priority">Priority: <?= htmlspecialchars($item['priority']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>

    </main>

    <?= view('components/footer') ?>
</body>

</html>