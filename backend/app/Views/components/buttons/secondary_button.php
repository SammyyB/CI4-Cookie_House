<?php
// Component: components/buttons/secondary_button.php
// Data contract:
// $label: string|null
// $disable: boolean|null
?>

<?php if ($disable ?? false) : ?>
    <button class="disabled" disabled><?= esc($label ?? 'Secondary') ?></button>
<?php else : ?>
    <button class="secondary"><?= esc($label ?? 'Secondary') ?></button>
<?php endif; ?>