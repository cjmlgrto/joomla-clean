<?php

/**
  * THEME_NAME_HERE
  * Author: YOUR_NAME_HERE
  * Version: 1.0.0
  * File purpose: the template for every blog post item (for the category pages)
  *
  */

// render page if authorised, else don't
defined('_JEXEC') or die;

// define a shorthand variable for the post's parameters
$params = $this->item->params;

// define a shorthand for the post's images
$images  = json_decode($this->item->images);

// define the post's publishing date
$date = date_create_from_format('Y-m-d H:i:s',$this->item->publish_up);
$pubDate = $date->format('F j, Y');

?>

<article>
  <h1>
    <a href="<?php echo $this->item->link; ?>">
      <?php echo $this->item->title; ?>
    </a>
  </h1>

  <ul>
    <li>Published by: <?php echo $this->item->author; ?></li>
    <li>Published on: <?php echo $pubDate; ?></li>
  </ul>

  <?php // render if intro image is set ?>
  <?php if (isset($images->image_intro) && !empty($images->image_intro)) : ?>
    <figure>
      <img src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>"/>
    </figure>
  <?php endif; ?>

  <?php // render post intro text ?>
  <?php echo $item->introtext; ?>

  <?php // render "read more" link if truncated ?>
  <?php if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) : ?>
    <?php echo '<a href="' . $item->link . '">' . $item->linkText . '</a>'; ?>
  <?php endif; ?>
</article>
