
# Joomla Object Glossary
documented by CJ Melegrito

## Objects Guide

The following pages require the corresponding objects below:
- com_content/article/default.php --> POST, PAGE
- com_content/category/blog_item.php --> POST
- com_content/category/blog.php --> PAGE, CATEGORY


## POST Object
--------------------
$post = $this->item;

### Get Method:
$post->parameter_name_here

### Available Parameters:
id
title
alias
introtext
fulltext
created
modified
modified_by_name
publish_up
publish_down
images
urls
attribs
metadata
hits
featured
category_title
category_route
author
author_email
published
params
tags
text
link





## PAGE Object
--------------------
$page = $this->params;

### Get Method:
$page->get('parameter_name_here');

### Available Parameters:
#### Booleans:
show_title
show_intro
show_category
show_parent_category
show_author
show_create_date
show_modify_date
show_publish_date
show_readmore
show_readmore_title
show_icons
show_print_icon
show_email_icon
show_hits
show_category_title
show_description
show_description_image
show_empty_categories
show_no_articles
show_subcat_desc
show_cat_num_articles
show_pagination
show_pagination_results
show_feed_link
#### Strings:
float_intro
float_fulltext
feed_summary
layout_type
page_title
page_description
page_rights
page_heading
page_subheading





## CATEGORY Object
--------------------
$category = $this->category;

### Get Method:
$category->getParams()->get('parameter_name_here');
$category->get('parameter_name_here');

### Available Parameters:
#### getParams():
image
image_alt
#### get():
description



# Joomla Snippets

## Render Featured Posts (for com_content/category/blog.php)
$post_featured = $this->lead_items;

foreach ($post_featured as &$item) :
  $this->item = &$item;
  echo $this->loadTemplate('item');
endforeach;

## Render Regular Posts (for com_content/category/blog.php)
$post_regular = $this->intro_items;

foreach ($post_regular as &$item) :
  $this->item = &$item;
  echo $this->loadTemplate('item');
endforeach;

## Display Pagination (for com_content/category/blog.php)
$number_of_pages = $this->pagination->get('pages.total');

if ($number_of_pages > 1) :
  echo $this->pagination->getPagesCounter();
  echo $this->pagination->getPagesLinks();
endif;
