<?php
// $Id: galleria.tpl.php,v 1.1.2.4 2009/06/08 08:52:17 marktheunissen Exp $

/**
 * @file
 * Default output for a galleria node.
 */
?>

<?php if ($image_count > 0): ?>
  <div id="galleria-content">
    <?php if ($image_count > 1): ?>
      <a id="galleria-nav-prev" class="galleria-nav-button" onclick="$.galleria.prev(); return false;" href="#"></a>
    <?php endif; ?>
    <div id="main-image"></div>
    <?php if ($image_count > 1): ?>
      <a id="galleria-nav-next" class="galleria-nav-button" onclick="$.galleria.next(); return false;" href="#"></a>
    <?php endif; ?>
        
    <?php print $thumbnails; ?>
    
    <script type="text/javascript">
      <!--//--><![CDATA[//><!--
      //Hide images while Galleria is loading
      $('ul.gallery img').css('display', 'none');
      //--><!]]>
    </script>

  </div>
<?php endif; ?>
