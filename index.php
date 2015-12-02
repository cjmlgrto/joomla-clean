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

?>
<!doctype html>
<html lang="<?php echo $this->language; ?>">
<head>
  <?php // render the Joomla head scripts and meta tags ?>
  <jdoc:include type="head"/>
  <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css"/>
</head>
<body>

  <!-- site header can go here -->

  <?php // render the Joomla "menu" module, IF there is one ?>
  <?php if ($this->countModules('menu')) : ?>
    <jdoc:include type="modules" name="menu"/>
  <?php endif; ?>

  <?php // render the Joomla page content ?>
  <jdoc:include type="component"/>

  <?php // render the Joomla "sidebar" module, IF there is one ?>
  <?php if ($this->countModules('sidebar')) : ?>
    <jdoc:include type="modules" name="sidebar"/>
  <?php endif; ?>

  <!-- site footer can go here -->

</body>
