# Drupal Sass Starter

Simple starter theme using Sass, Compass and Susy

## Installation

1. Clone this repository into your sites/all/themes directory.
1. Change the name of the theme. You'll need to update/rename
   drupal_sass_starter.info and update the function names in
   template.php.
1. cd to the new theme directory.
1. Run `bundle install`.
1. Run `bundle exec guard`

## Tips

If you use a VM for development you'll need to run something like the
following on the host system to get livereload working. This assumes
that you're using Vagrant.

`ssh -L 35728:localhost:35729 -N vagrant@yourvmhostname`
