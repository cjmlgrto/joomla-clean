<?php

/**
  * THEME_NAME_HERE
  * Author: YOUR_NAME_HERE
  * Version: 1.0.0
  * File purpose: template override for individual blog post pages
  *
  */

// render page if authorised, else don't
defined('_JEXEC') or die;

// abbreviate Joomla's page object
$page = $this->params;

// abbreviate Joomla's article object
$post = $this->item;

?>

<article>

  <?php // render the article title ?>
  <h1>
    <?php echo $post->title; ?>
  </h1>

  <?php // render the article's metadata ?>
  <ul>
    <li><?php echo $post->publish_up; ?></li>
    <li><?php echo $post->author; ?></li>
    <li>Hits: <?php echo $post->hits; ?></li>
  </ul>

  <?php
    // render the article's feature image
    $images = json_decode($post->images);
    $image_fulltext = htmlspecialchars($images->image_fulltext);
    $image_fulltext_alt = htmlspecialchars($images->image_fulltext_alt);
    $image_fulltext_caption = htmlspecialchars($images->image_fulltext_caption);
    $image_float = htmlspecialchars($images->float_fulltext);
  ?>
  <figure class="<?php echo $image_float; ?>">
    <img src="<?php echo $image_fulltext; ?>" alt="<?php echo $image_fulltext_alt; ?>" />
    <figcaption>
      <?php echo $image_fulltext_caption; ?>
    </figcaption>
  </figure>

  <?php // render article text ?>
  <?php echo $post->text; ?>

  <?php // render article pagination ?>
  <?php echo $post->pagination; ?>
