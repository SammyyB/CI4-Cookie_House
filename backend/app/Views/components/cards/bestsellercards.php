<?php
// Data contract for Best Seller Cards:
// $products: array of arrays with keys: title, description, price, image
?>

<section style="background:white;padding:60px 20px;text-align:center;color:#4A2E05;">
    <h2 style="font-family:'Pacifico',cursive;font-size:2.5rem;margin-bottom:40px;">Our Best Sellers</h2>
    <div style="display:flex;justify-content:center;gap:25px;flex-wrap:wrap;">
        <?php foreach ($products as $product): ?>
            <div style="background:#FFF9F3;border:1px solid #E9C46A;border-radius:15px;padding:20px;width:280px;box-shadow:0 3px 8px rgba(0,0,0,0.1);">
                <img src="<?= esc($product['image']) ?>" alt="<?= esc($product['title']) ?>"
                    style="width:100%;height:200px;object-fit:cover;border-radius:10px;margin-bottom:15px;">
                <h3 style="font-family:'Montserrat',sans-serif;font-size:1.4rem;margin-bottom:10px;">
                    <?= esc($product['title']) ?>
                </h3>
                <p style="font-family:'Montserrat',sans-serif;font-size:0.95rem;margin-bottom:10px;">
                    <?= esc($product['description']) ?>
                </p>
                <strong style="font-family:'Montserrat',sans-serif;font-size:1rem;display:block;margin-bottom:10px;">
                    ₱<?= esc($product['price']) ?>
                </strong>
            </div>
        <?php endforeach; ?>
    </div>
</section>