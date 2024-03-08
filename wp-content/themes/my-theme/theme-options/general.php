<?php  
  echo "<h1>Theme Option</h1>";
  bloginfo( 'name' );
  bloginfo( 'description' );
?>
  <form method="post" action="options.php">
  <?php
      settings_fields('my-theme-settings-group');
      do_settings_sections('my-theme-settings-group');
      //submit_button();
  ?>
</form>
  