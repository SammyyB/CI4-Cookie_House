<?php
// Data contract for CTA fragment:
// $title: string
// $subtitle: string (can include HTML)
// $primaryLink: string
// $primaryLabel: string
// $secondaryLink: string
// $secondaryLabel: string
?>

<section class="hero" style="background:#F9E8C9;padding:80px 20px;text-align:center;color:#4A2E05;">
    <h1 style="font-family:'Pacifico',cursive;font-size:3rem;margin-bottom:10px;">
        <?= esc($title) ?>
    </h1>
    <p style="font-family:'Montserrat',sans-serif;font-size:1.2rem;margin-bottom:25px;max-width:600px;margin-left:auto;margin-right:auto;">
        <?= $subtitle ?>
    </p>
    <div style="display:flex;justify-content:center;gap:15px;flex-wrap:wrap;">
        <a href="<?= esc($primaryLink) ?>" class="btn"
            style="background:#6B4226;color:white;padding:12px 25px;border-radius:30px;text-decoration:none;font-family:'Montserrat',sans-serif;">
            <?= esc($primaryLabel) ?>
        </a>
        <a href="<?= esc($secondaryLink) ?>" class="btn"
            style="background:#E9C46A;color:#4A2E05;padding:12px 25px;border-radius:30px;text-decoration:none;font-family:'Montserrat',sans-serif;">
            <?= esc($secondaryLabel) ?>
        </a>
    </div>
</section>