<?php
// Component: components/cards/roadmap_card.php
// Data contract:
// $title: string
// $description: string
// $status: string
// $priority: string
// $statusClass: string (bg-green, bg-orange, bg-blue, bg-purple)
?>

<div class="roadmap-cards">
    <div class="flex">
        <?php if (!empty($title)) : ?>
            <h2><?= htmlspecialchars($title) ?></h2>
        <?php endif; ?>

        <?php if (!empty($status)) : ?>
            <span class="status <?= htmlspecialchars($statusClass) ?>">
                <?= htmlspecialchars($status) ?>
            </span>
        <?php endif; ?>
    </div>

    <?php if (!empty($description)) : ?>
        <p><?= htmlspecialchars($description) ?></p>
    <?php endif; ?>

    <?php if (!empty($priority)) : ?>
        <p class="priority">Priority: <?= htmlspecialchars($priority) ?></p>
    <?php endif; ?>
</div>