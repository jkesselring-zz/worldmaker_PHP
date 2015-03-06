<?php

class Generate
{
	/**
	 * Creates the name of a title.  
	 * @param  stdClass $title
	 * @return string          
	 */
	public static function title(stdClass $title)
	{
		$start = $title->start;
		$middle = $title->middle;
		$end = $title->end;
		
		return $start[array_rand($start)] . " " . $middle[array_rand($middle)] . " " . $end[array_rand($end)];
	}

	/**
	 * Creates the name of a planet with the chance of a designation.  
	 * @param  stdClass $planet
	 * @return string          
	 */
	public static function planet(stdClass $planet)
	{
		$prefix = $planet->prefix;
		$suffix = $planet->suffix;
		$designations = $planet->designations;

		$chance = mt_rand(0, 100);
		if($chance < 70)
			return $prefix[array_rand($prefix)] . $suffix[array_rand($suffix)];
		elseif($chance >= 70 && $chance < 94)
		{
			return $prefix[array_rand($prefix)] . $suffix[array_rand($suffix)] . $suffix[array_rand($suffix)];
		}
		else
		{
			return $prefix[array_rand($prefix)] . $suffix[array_rand($suffix)] . $suffix[array_rand($suffix)] . " " .$designations[array_rand($designations)];	
		}
	}

	/**
	 * Creates the name of a person with the chance of a suffix.  
	 * @param  stdClass $name
	 * @return string          
	 */
	public static function name(stdClass $name)
	{
		$firstName = $name->firstName;
		$surname = $name->surname;
		$suffix = $name->suffix;
		
		$name = $firstName[array_rand($firstName)] . ' ' . $surname[array_rand($surname)];
		
		//Randomly spice the name up with a suffix. Woo!
		if(mt_rand(0, 100) > 75)
			$name .= ', ' . $suffix[array_rand($suffix)];
		return $name;
	}
	/**
	 * Creates a plot.
	 * @param  stdClass $plot
	 * @return string
	 */
	public static function plot(stdClass $plot)
	{
		$protag = $plot->protag;
		$means  = $plot->means;
		$thing 	= $plot->thing;

		return 'A ' . $protag[array_rand($protag)] . ' ' . $means[array_rand($means)] . ' ' . $thing[array_rand($thing)] . '.';
	}

	/**
	 * Creates a piece of weapon, with a random modifier and element chance.
	 * @param  stdClass $weapon
	 * @return string
	 */
	public static function weapon(stdClass $weapon)
	{
		$make = $weapon->make;
		$type = $weapon->type;
		$element = $weapon->element;
		$modifier = mt_rand(1, 3);
		$chance = mt_rand(0, 100);
		$weapon = $make[array_rand($make)] . ' ' . $type[array_rand($type)]; 
		if($chance > 98)
			$weapon .= ' of ' . $element[array_rand($element)];
		if ($chance > 85)
			$weapon .= ' + ' . $modifier;
		return $weapon;		
	}		

	/**
	 * Creates a piece of Armor, with a random modifier and element chance.
	 * @param  stdClass $armor
	 * @return string
	 */
	public static function armor(stdClass $armor)
	{
		$make = $armor->make;
		$type = $armor->type;
		$element = $armor->element;
		$modifier = mt_rand(1, 3);
		$chance = mt_rand(0, 100);
		$armor = $make[array_rand($make)] . ' ' . $type[array_rand($type)]; 
		if($chance > 98)
			$armor .= ' of ' . $element[array_rand($element)];
		if ($chance > 85)
			$armor .= ' + ' . $modifier;
		return $armor;		
	}

}