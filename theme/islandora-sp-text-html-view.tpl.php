<?php
/**
 * @file
 * This is the template file for the object page for Text/HTML objects
 *
 */
?>
<?php if (!empty($islandora_content)): ?>
    <div class="islandora-sp-text-html islandora" vocab="http://schema.org/" prefix="dcterms: http://purl.org/dc/terms/" typeof="TEXTHTMLOBJECT">
        <?php echo $islandora_content; ?>
    </div>
<?php else: ?>
    <p>This file is not accessible to you.</p>
<?php endif; ?>