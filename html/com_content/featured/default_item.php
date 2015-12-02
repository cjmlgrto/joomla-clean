<?php

/**
  * THEME_NAME_HERE
  * Author: YOUR_NAME_HERE
  * Version: 1.0.0
  * File purpose: template override for the featured blog posts on the featured page
  *
  */

// render page if authorised, else don't
defined('_JEXEC') or die;

// abbreviate Joomla's post object
$post = $this->item;

// abbreviate Joomla's post link
$post_link = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language));

?>

<article id="<?php echo $post->id; ?>">

    <?php // render the post title ?>
    <h1>
      <a href="<?php echo $post_link; ?>">
        <?php echo $post->title; ?>
      </a>
    </h1>

    <?php // render the post metadata ?>
    <ul>
      <li><?php echo $post->publish_up; ?></li>
      <li><?php echo $post->author; ?></li>
      <li>Hits: <?php echo $post->hits; ?></li>
    </ul>

    <?php
      // decode post object's images JSON content
      $images = json_decode($post->images);
      $image_intro = htmlspecialchars($images->image_intro);
      $image_intro_alt = htmlspecialchars($images->image_intro_alt);
    ?>

    <?php // render the post's intro image ?>
    <img src="<?php echo $image_intro; ?>" alt="<?php echo $image_intro_alt; ?>"/>

    <?php // render the post's intro text ?>
    <?php echo $post->introtext; ?>

    <?php // render the post's full text (after the intro) ?>
    <?php echo $post->fulltext; ?>

</article>
