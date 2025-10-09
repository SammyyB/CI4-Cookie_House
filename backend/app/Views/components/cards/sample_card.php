<?php
// Component: components/cards/sample_card.php
// Data contract:
// $title: string|null
// $description: string|null
?>

<div class="card">
    <?php if (!empty($title)) : ?>
        <h3><?= esc($title) ?></h3>
    <?php endif; ?>

    <?php if (!empty($description)) : ?>
        <p><?= esc($description) ?></p>
    <?php endif; ?>
</div>