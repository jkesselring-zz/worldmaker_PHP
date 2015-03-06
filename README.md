worldmaker_PHP
==============

Port of a C# idea generation utility for World Building / Writing / RPGs, etc.

Use is pretty straightforward. In a PHP file include Generate.php.

eg: require_once('Generate.php');

Then simply: echo Generate::name('name-of-json-file') to generate a name, title, plot, planet, weapon, and/or armor are the current methods implemented. This expands on the categories originally implemented in the C# WorldMaker program.

Pull requests are amazing. Go for it!

TODO
=============
~~Create JSON of arrays for cross language/platform usability. Why? To keep excessive fragmentation to a minimum if other versions/implementations exist.~~

Improve documentation.

Original application created by: /u/Nextmastermind over on Reddit.
