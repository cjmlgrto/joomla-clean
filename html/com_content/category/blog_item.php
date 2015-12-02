<?php

/**
  * THEME_NAME_HERE
  * Author: YOUR_NAME_HERE
  * Version: 1.0.0
  * File purpose: template override for individual blog posts on the cateogry:blog pages
  *
  */

// render page if authorised, else don't
defined('_JEXEC') or die;
$post = $this->item;

?>

<article id="<?php echo $post->id; ?>">
  <h1>
    <a href="<?php echo $post->link; ?>">
      <?php echo $post->title; ?>
    </a>
  </h1>

  <ul>
    <li><?php echo $post->publish_up; ?></li>
    <li><?php echo $post->author; ?></li>
    <li>Hits: <?php echo $post->hits; ?></li>
  </ul>

  <?php
    $images = json_decode($post->images);
    $image_intro = htmlspecialchars($images->image_intro);
    $image_intro_alt = htmlspecialchars($images->image_intro_alt);
  ?>

  <img src="<?php echo $image_intro; ?>" alt="<?php echo $image_intro_alt; ?>"/>

  <?php echo $post->introtext; ?>

  <?php echo $post->fulltext; ?>

</article>
