<?php
/**
 * @package bulmawp
 * @since 0.1
 * @version 0.2.2
 */
?>
<h1>BulmaWP Settings</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
  <?php
  settings_fields( 'bulmawp-settings' );
  do_settings_sections( 'bulmawp' );
  submit_button();
  ?>
</form>
