<?php

/**
  * THEME_NAME_HERE
  * Author: YOUR_NAME_HERE
  * Version: 1.0.0
  * File purpose: template override for the featured page
  *
  */

// render page if authorised, else don't
defined('_JEXEC') or die;

// abbreviate Joomla's page object
$page = $this->params;

// abbreviate Joomla's post objects
$post_featured = $this->lead_items;
$post_regular = $this->intro_items;

?>

<section class="<?php echo $page->get('layout_type'); ?>">

  <?php // render the page heading ?>
  <h1>
    <?php echo $page->get('page_heading'); ?>
  </h1>

  <?php // render the leading (featured) posts ?>
  <?php foreach ($post_featured as &$item) : ?>
    <?php
      $this->item = &$item;
      // insert default_item.php for each post
      echo $this->loadTemplate('item');
    ?>
  <?php endforeach; ?>

  <hr/>

  <?php // render the rest of the posts ?>
  <?php foreach($post_regular as &$item) : ?>
    <?php
      $this->item = &$item;
      // insert default_item.php for each post
      echo $this->loadTemplate('item');
    ?>
  <?php endforeach; ?>

</section>
