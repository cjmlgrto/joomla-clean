<?php

/**
  * THEME_NAME_HERE
  * Author: YOUR_NAME_HERE
  * Version: 1.0.0
  * File purpose: template override for the cateogry:blog pages
  *
  */

// render page if authorised, else don't
defined('_JEXEC') or die;

// abbreviate Joomla's page object
$page = $this->params;

// abbreviate Joomla's category object
$category = $this->category;

// abbreviate Joomla's post objects
$post_featured = $this->lead_items;
$post_regular = $this->intro_items;

?>

<section class="<?php echo $page->get('layout_type'); ?>">

  <?php // render the page heading ?>
  <h1>
    <?php echo $page->get('page_heading'); ?>
  </h1>

  <?php // render the page subheading and page category ?>
  <h2>
    <?php echo $page->get('page_subheading'); ?>
    <?php echo $category->get('title'); ?>
  </h2>

  <?php
    // render the page description image
    $category_description_image = htmlspecialchars($category->getParams()->get('image'));
    $category_description_image_alt = htmlspecialchars($category->getParams()->get('image_alt'));
  ?>
  <img src="<?php echo $category_description_image; ?>" alt="<?php echo $category_description_image_alt; ?>"/>

  <?php // render the page description ?>
  <p>
    <?php echo $category->get('description'); ?>
  </p>

  <?php // render the leading (featured) posts ?>
  <?php foreach ($post_featured as &$item) : ?>
    <?php
      $this->item = &$item;
      // insert blog_item.php for each post
      echo $this->loadTemplate('item');
    ?>
  <?php endforeach; ?>

  <?php // render the rest of the posts ?>
  <?php foreach($post_regular as &$item) : ?>
    <?php
      $this->item = &$item;
      // insert blog_item.php for each post
      echo $this->loadTemplate('item');
    ?>
  <?php endforeach; ?>

  <?php // render subcategories ?>
  <h2>Subcategories</h2>
  <?php echo $this->loadTemplate('children'); ?>

  <?php // render pagination ?>
  <?php echo $this->pagination->getPagesCounter(); ?>
  <?php echo $this->pagination->getPagesLinks(); ?>

</section>
