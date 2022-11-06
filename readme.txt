Contributors: nicomollet
Tested up to: 6.0
Requires at least: 6.0
Requires PHP: 8.0
Version: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Copyright: nicomollet

=== Folder structure ===

- Assets. Images, JavaScript, and CSS files.
- Inc. Filters, fonts, block variations, registered block styles.
- Parts. HTML template parts.
- Patterns. Block pattern examples.
- Styles. Global style variations.
- Templates. HTML block templates.

functions.php -Used to enqueue styles and add theme support.
index.php     -Required to activate the theme.
style.css     -Required to activate the theme.
theme.json    -Settings and default styles.
license.txt   -GPL v2
readme.txt    -Information about the theme.
screenshot.png


=== Installation ===
1. Install packages: `npm install`
2. Start gulp watching for sass:`gulp watch`

=== Templates Parts ===
- Header is created with site logo and navigation(select the main navigation)
- Footer is created

=== Blocks How-to ===
1. There is block pattern for the "hero" section, it is "locked", only content is editable
2. There is block pattern for the "4 columns" section, it is "locked", only content is editable

=== Styles How-to ===
- Main styles are created inside the theme.json (color palette, fonts, font sizes)
- Other styles are created in /css/sass/*.scss files. Gulp generates the /css/app.css
