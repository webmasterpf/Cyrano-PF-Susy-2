<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 * 
 * Pour utiliser Masonry avec une vue sortie Non mise en forme, ajout des classes utiles
 * Source : http://codepen.io/ganlub/pen/pJEWVR
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
  <div class="wrap">
  <div class="articles">
  <div class="articles__gutter"></div>
    <div class="articles__column"></div>
<?php foreach ($rows as $id => $row): ?>
  <div class="<?php print $classes[$id]; ?> articles__item">
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
</div>
      </div>