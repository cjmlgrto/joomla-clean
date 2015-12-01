<?php

/**
  * THEME_NAME_HERE
  * Author: YOUR_NAME_HERE
  * Version: 1.0.0
  * File purpose: this is the backbone of the entire template
  *
  */

// render page if authorised, else don't
defined('_JEXEC') or die;

// include Joomla template helpers (for pagination and posts engine)
JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');
JHtml::_('behavior.caption');

?>

<section>
  <h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>

  <?php // render page description if enabled ?>
  <?php if ($this->params->get('show_description')) && $this->category->description) : ?>
    <?php echo JHtml::_('content.prepare', $this->category->description, '', 'com_content.category'); ?>
  <?php endif; ?>

  <?php // render featured posts above ordinary posts ?>
  <?php if (!empty($this->lead_items)) : ?>
    <?php foreach ($this->lead_items as &$item) : ?>
        <?php
          $this->item = &$item;
          echo $this->loadTemplate('item');
        ?>
    <?php endforeach; ?>
  <?php endif; ?>

  <?php // render the rest of the posts ?>
  <?php if (!empty($this->intro_items)) : ?>
    <?php foreach ($this->intro_items as &$item) : ?>
      <?php
        $this->item = &$item;
        echo $this->loadTemplate('item');
      ?>
    <?php endforeach; ?>
  <?php endif; ?>


  <?php // and render the pagination ?>
  <?php if (($this->params->def('show_pagination', 1) == 1 || ($this->params->get('show_pagination') == 2)) && ($this->pagination->get('pages.total') > 1)) : ?>

    <?php // render the pages counter (e.g. "page 1 of 5") if enabled ?>
    <?php if ($this->params->def('show_pagination_results', 1)) : ?>
      <?php echo $this->pagination->getPagesCounter(); ?>
    <?php endif; ?>

    <?php echo $this->pagination->getPagesLinks(); ?>
  <?php endif; ?>

</section>
