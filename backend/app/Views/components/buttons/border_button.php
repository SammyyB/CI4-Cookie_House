<?php
// Component: components/buttons/border_button.php
// Data contract:
// $label: string|null
// $disable: boolean|null
?>

<?php if ($disable ?? false) : ?>
    <button class="disabled" disabled><?= esc($label ?? 'Bordered') ?></button>
<?php else : ?>
    <button class="bordered"><?= esc($label ?? 'Bordered') ?></button>
<?php endif; ?>