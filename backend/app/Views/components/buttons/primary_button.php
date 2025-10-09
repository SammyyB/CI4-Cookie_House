<?php
// Component: components/buttons/primary_button.php
// Data contract:
// $label: string|null
// $disable: boolean|null
?>

<?php if ($disable ?? false) : ?>
    <button class="disabled" disabled><?= esc($label ?? 'Primary') ?></button>
<?php else : ?>
    <button class="primary"><?= esc($label ?? 'Primary') ?></button>
<?php endif; ?>