**worldmaker_PHP**
==============
Port of a C# idea generation utility for World Building / Writing / RPGs, etc.

**Simple**

Use is pretty straightforward. Simply clone into a directory and serve with a web server.

* Users may append ?max=n to the url. Where n is equal to the number of items per category to generate.

*ex* /worldmaker/index.php?max=5 -> Generates 5 item within each category.

**Advanced**

For more indepth uses you'll need to include the file within /includes/ that you wish to utilize. If I want to generate armor, for instance, then I would include /includes/armor.php. This will give you the means to generate new armor pieces.

```php
<?php
  require_once 'includes/armor.php';

  $armor = new Armor();

  echo $armor->generate(); //Chainmail Gauntlets
  echo $armor->generate(); //Oak Pauldrons
?>
```

This expands on the categories originally implemented in the C# WorldMaker program.

Pull requests are amazing. Go for it!

TODO
=============
~~Create JSON of arrays for cross language/platform usability. Why? To keep excessive fragmentation to a minimum if other versions/implementations exist.~~

Make less bad.

Improve documentation.

Credits
===
Original application created by: /u/Nextmastermind over on Reddit.

Refresh icon used in index.php was created by [Gregor Cresnar](http://www.flaticon.com/authors/gregor-cresnar) and retreived via [flaticon](http://flaticon.com).