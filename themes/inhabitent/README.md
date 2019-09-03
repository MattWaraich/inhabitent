# RED Starter

A WordPress starter theme for RED Academy students, forked from Underscores.

## Installation

### 1. Download me (don't clone me!)

Then add me to your `wp-content` directory.

### 2. Rename the `redstarter-master` directory

Make sure that the theme directory name is project appropriate!

### 3. Install the dev dependencies

Next you'll need to run `npm install` **inside your theme directory** next to install the node modules you'll need for Gulp, etc.

### 4. Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so change `localhost[:port-here]/[your-dir-name-here]` to the appropriate localhost URL).

## TYPOGRAPHY

Base font size is 16px

The headings font-family is Silkscreen Web

Width of desktop-friendly content area is 1240px

The main background colour is #ffffff

The HEX code for the green brand colour is #248A83

The HEX code for the purple brand colour is #2f1339

The HEX code for the orange brand colour is #d99054

The HEX code for the yellow brand colour is #f0e4d1

The HEX code for the light grey brand colour is #a1a1a1

The HEX code for the medium grey brand colour is #808080

## COLOURS

The HEX code for the background is #000000 and #434343 with a linear gradient from left to right containing colours of rgb(0, 0, 0), rgb(67, 67, 67

The HEX code for the black heading text colour is #000000

## TECHNOLOGIES USED & INSTALLATION INSTRUCTIONS

HTML/PHP

CSS/SASS

JavaScript

WordPress

JQuery

### JQuery

Wraps jQuery code in document-ready

Uses variables to store references to DOM elements wrapped in the jQuery object that are accessed more than once

Use of event listeners with jQuery and respond to events appropriately in callbacks

Uses jQuery to selectively add/remove or show/hide DOM elements

### PHP

Contain syntactically-valid PHP code

Include all essential elements in the <head> of the document (e.g. doctype, title, charset, etc.)

Use semantically-appropriate PHP elements

Use an icon font

### CSS/SASS

Translate the designer’s overall vision for the website into code

Use appropriate CSS selectors (e.g. classes instead of IDs, no overly-specific selectors, etc.)

Demonstrate effective use of typographic properties and values (e.g. font-family, font-style, text-transform, etc.)

Incorporate custom fonts using @font-face

Optimize layout for all required breakpoints

Optimizing moving image features through infinite properties

### JAVASCRIPT

Define variables where needed with let and const

Use functions to effectively organize code

Use consistent, descriptive variable and function names

Check for strict equality with comparison operators

Demonstrate effective use of control flow (loops, conditionals, etc.)

Import and export of numerous JavaScript elements

Appearing and disappearing onClick function for 'search-bar'

### WORDPRESS

Use of WordPress as a content management system (CMS)

Use of a provided starter theme as the base for building a custom theme

Filled in all applicable fields in the comment block that describes a specific theme or plugin in the admin interface

Use of a WordPress menu (configured through the admin interface) for the main site navigation

Use of custom post types for additional content types where required (using a functionality plugin)

Use of custom taxonomies for additional metadata where required (using a functionality plugin)

Use of custom fields for additional metadata where required (using the Custom Field Suite plugin)

Use of Gutenberg blocks to support content layout for all post types

Included a widgetized area in the sidebar

Enqueued CSS and JS files properly in the theme’s functions.php file

Leveraged the WP template hierarchy to generate all required templates for the website

Wrapped jQuery code in an IIFE to make \$ available in no-conflict mode

Validated theme files with Theme Check

## FUNCTIONALITY

Contains a static homepage (front-page.php)

Contains a static “About” page that uses the “Inhabitent Blocks” plugin to add a custom hero header block to the page (custom page template)

Contains a static “Find Us” page with an embeded Google Map and functioning contact form (page.php)

Contains a “Journal” page assigned as the blog post index (home.php)

Contains a single blog post view with a comments form and list (single.php)

Contains a product archive called “Shop” that displays 16 posts per page in ascending order by title (archive-product.php)

Contains a product type archive that displays 16 posts per page in ascending order by title (taxononomy-product_type.php)

Contains a single product view (single-product.php)

Contains a general archive (for authors, categories, etc.) (archive.php)

Contains a search results page (search.php)

Contains a 404 page (404.php)

Includes a custom widget plugin that allows business hours to easily be edited in the sidebar

Added a toggle-able search form to the site header where the search input is automatically focused when the form is toggled open, and closed when the input is blurred if it is empty

## PERSONAL LEARNINGS

Further knowledge of PHP, CSS/SASS, JQuery, Wordpress, and JavaScript

Framework for consumer website building/design

Importance of import and export files through enquing files

Importance of Git and making commits

## STRETCH GOALS

Reverse header

Adventure section linking to own distinctive pages (coming soon)
