worldmaker_PHP
==============

Port of a C# idea generation utility for World Building / Writing / RPGs, etc.

Use is pretty straightforward. In a new PHP file include Generate.php.

eg: require_once('Generate.php');

Then simply: echo Generate::generateName() to generate a name. generateTitle, generateName, generatePlot, generatePlanet are the current four methods contained within which encompass the four categories originally implemented in the C# WorldMaker program.


Pull requests are amazing. Go for it!

TODO
=============
Create JSON of arrays for cross language/platform usability. Why? To keep excessive fragmentation to a minimum if other versions/implementations exist.

Original application created by: /u/Nextmastermind over on Reddit.
