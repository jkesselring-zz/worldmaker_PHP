<?php

class Generate
{

	public static function generateTitle()
	{
		$start = array("Battle", "Day", "Quest", "Time", "Lord", "Death", "Love", "Life", "Age", "Conquest", "Siege", "Mourning", "Wife", "King",
                              "Queen", "Epic", "Tale", "Story", "Ballad", "Rise", "Fall", "Adventure", "Adventures", "Conspiracy", "Danger", "Chaos",
                                 "Help", "Tragedy", "Mark", "Sign", "Road", "Path", "Question", "Knowledge", "Time");
		$middle = array("of", "for", "in", "during", "on", "about", "for the", "near", "of the", "and");
		$end = array("Ages", "Glory", "Danger", "Matrimony", "Harmony", "Chaos", "Prophecy", "Prophecies", "Freedom", "Tyranny","Justice", 'Serenity', 'Eden', 'Apocalypse', 'Destruction', 'Creation');
		
		return $start[array_rand($start)] . " " . $middle[array_rand($middle)] . " " . $end[array_rand($end)];
	}

	public static function generatePlanet()
	{
		$prefix = array('Doth','Korr', 'Ver', 'Vare', 'Varr', 'Thym', 'Grett', 'Greth', 'Sal', 'Ter', 'On', 'Ep', 'Els', 'Ol', 'Gern', 'Get', 'Geth', 'Sem', 'Sal', 'Vol', 'Kal', 'Han', 'Hor', 'Weir', 'Es', 'Pon', 'Pos', 'Lul', 'Let', 'Le', 'Gre', 'Kyr', 'Khu', 'Bae', 'Xyr', 'Zim', 'Zy', 'Zei', 'Cth', 'Vy', 'Dor', 'Bal', 'Qu', 'Kn', 'Gn', 'Plu', 'Ju', 'Ch', 'Sem', 'Kv', 'Los', 'Mos', 'Yir', 'Yv', 'Ji');
		
		$suffix = array('us','vel','nyn', 'los', 'ett', 'emia', 'eria', 'erra', 'os', 'okk', 'ari', 're','ren','ros','ton','tos','tel','giv','ghev', 'gevvi', 'levvi', 'ovos', 'li', 'la', 'ten', 'tin', 'vin', 'dos', 'oki', 'orki', 'kios', 'kella', 'ella', 'rell', 'ell', 'nu', 'hlu', 'ae', 'ia', 'mae', 'nxe', 'zin', 'yne', 'ter', 'lind', 'lott', 'ring', 'own', 'vis', 'vas', 'vos', 'ae', 'rus');

		$designations = array('Prime', 'Beta', 'Gamma', 'Delta', 'Varus', 'Mivar');

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

	public static function generateName()
	{
		$firstName = array('Thomas','Robert', 'Patrick', 'Edward', 'Martin', 'Michael', 'Justin', 'Samuel', 'Samantha', 'Andria', 
                                'Willian', 'Rose', 'Daisy', 'Oliver', 'Olivia', 'Gretchen', 'Matilda', 'Adam', 'Chester', 'Erin', 'Eric', 'Dillan',
                                'Henry', 'Harold', 'David', 'Danielle', 'Nicholas', 'Nichole', 'Marissa', 'Taylor', 'Alex', 'Adam', 'Christopher',
                                'Ian', 'Mason', 'Amy', 'Helen', 'Linda', 'Katherin', 'Kaitlin', 'Mark', 'Douglas', 'George', 'Andrew', 'Peter', 'Luke',
                                'John', 'Sheldon', 'Gregory', 'Aaron', 'Leigh', 'Loren', 'Liam', 'Elizabeth', 'Barbos', 'Kevin', 'Jerrel', 'Johan',
                                'Arwyn', 'Leo', 'Leon', 'Lyra', 'Grey', 'Jane', 'Walter', 'Barry', 'Alfonse', 'Roy', 'Timothy', 'Ivan', 'Alexander',
                                'Alexis', 'Alexa', 'Alysa', 'Chelsea', 'Sheena', 'Shawna', 'Sadi', 'Audrey', 'Audbrey', 'Phillip', 'Jennifer', 
                                'Paul', 'Anthony', 'Sarah', 'Sera', 'Gina', 'Geoff', 'Jeffery', 'Mary');

		$surname = array('Davies','Conners','Smith', 'Carpenter', 'Lordson', 'Pond', 'Johnson', 'Scribe', 'Merchant', 'Helper', 'Elder', 'Farmers', 
                                 'Cooper', 'Coopers', 'Copper', 'Irons', 'Oldman', 'Young', 'Michaels', 'Monk', 'Jones', 'Pitcher', 'Hammerson',
                                 'Rich', 'Pauper', 'Goldson', 'Forge', 'Forger', 'Bates', 'Gatesman', 'Time', 'Server', 'Slave', 'Love', 'Bard',
                                 'Oath', 'Sin', 'Taint', 'Godson', 'Glory', 'Wild', 'Freeborn', 'Lowman', 'Landers', 'Ironfield', 'Smelter', 'Stewart',
                                 'the White', 'the Gray', 'the Nasty', 'the Elder', 'the Younger', 'Anderson', 'Gremel', 'Mimara',
                                 'Achamian', 'Grahm', 'Navulou', 'Baere', 'Greyson', 'Law', 'Lamport', 'Leport', 'Larinson', 'Ytherral');
		
		$suffix = array('Jr.', 'I', 'II', 'II', 'III', 'IV', 'V', 'Sr.', 'The Terrible', 'The Great', 'The Pure', 'The Vile', 'The Destroyer', 'The Conqurer');
		
		$name = $firstName[array_rand($firstName)] . ' ' . $surname[array_rand($surname)];
		
		//Randomly spice the name up with a suffix. Woo!
		if(mt_rand(0, 100) > 75)
			$name .= ', ' . $suffix[array_rand($suffix)];
		return $name;
	}

	public static function generatePlot()
	{
		$protag = array('man', 'woman', 'knight','king','queen','dragon', 'lord', 'baron', 'lion', 'horse', 'God', 'distaster', 'prostitute', 'mage',
                              'wizard', 'witch', 'templar', 'priest', 'scribe', 'scribe', 'group of rebels', 'ship', 'lady', 'prince', 'princess', 
                              'pauper', 'terribly ill person', 'necromancer', 'sorcerer', 'bandit', 'war', 'shaman', 'slaver', 'mercenary', 'bard', 'pirate',
                              'cocubine', 'cannibal', 'sprite', 'fae', 'corpse', 'elemental', 'wyvern', 'owlbear', 'manticore', 'hero', 'slime', 'wildfire',
                              'warlord', 'explorer', 'swashbuckler'
                              );

		$means  = array( 'must kill','marries', 'fights', 'dies because of', 'kills', 'dies along with', 'is', 'taxes', 'tortures', 'becomes', 'flees',
                                 'is in love with', 'bargains with', 'outwits', 'lies to', 'poisons', 'tricks', 'tracks down', 'seeks', 'burns', 'creates',
                                 'is saddened by', 'seeks refuge from', 'destroys', 'steals', 'houses', 'becomes', 'tracks down', 'possesses', 'is possessed by',
                                 'baffles', 'exorcises', 'creates', 'supplicates', 'usurps', 'saves', 'blames', 'places a bounty on', 'condems', 'marks',
                                 'identifies', 'discovers');

		$thing 	= array('a despot', 'a demon', 'a dragon', 'an army', 'a princess', 'a murderer', 'in battle', 'a king', 'a queen', 'himself', 'a wizard',
                                 'a witch', 'a mage', 'a templar', 'a village', 'a city', 'a river', 'a lake', 'a burglar', 'a relative', 'a temple', 'an ocean',
                                 'a monster', 'a weapon', 'all hope', 'a ghost', 'one last time', 'a sea', 'a ship', 'a plane', 'the elements', 'the elves', 'the dwarves',
                                 'kobolds', 'the undead', 'ghouls', 'a priest', 'a warlock', 'an assassin', 'a witch doctor', 'a noble', 'an imp');

		return 'A ' . $protag[array_rand($protag)] . ' ' . $means[array_rand($means)] . ' ' . $thing[array_rand($thing)] . '.';
	}

	public static function weapon()
	{
		$make = array('Iron', 'Steel', 'Ironwood', 'Ebon', 'Bronze', 'Silver', 'Oak', 'Rusted');
		$type = array('Warhammer', 'Mace', 'Club', 'Short Sword', 'Long Sword', 'Bastard Sword', 'Long Bow', 'Short Bow', 'Crossbow', 'Javelin', 'Spear', 'Dagger', 'War Axe', 'Scythe');
		$element = array('Ice', 'Frost', 'Fire', 'Flame', 'Water', 'Sea', 'Blood', 'Life', 'Death', 'Chaos', 'Law', 'Fear', 'Poison', 'Shadow', 'Night', 'Day');
		$modifier = mt_rand(1, 3);
		$chance = mt_rand(0, 100);
		$weapon = $make[array_rand($make)] . ' ' . $type[array_rand($type)]; 
		if($chance > 98)
			$weapon .= ' of ' . $element[array_rand($element)];
		if ($chance > 85)
			$weapon .= ' + ' . $modifier;
		return $weapon;		
	}		

	public static function armor()
	{
		$make = array('Iron', 'Steel', 'Ironwood', 'Ebon', 'Bronze', 'Silver', 'Oak', 'Rusted', 'Leather', 'Scale', 'Chainmail');
		$type = array('Helmet', 'Gauntlets', 'Greaves', 'Boots', 'Breastplate', 'Pauldrons', 'Belt');
		$element = array('Ice', 'Frost', 'Fire', 'Flame', 'Water', 'Sea', 'Blood', 'Life', 'Death', 'Chaos', 'Law', 'Fear', 'Poison', 'Shadow', 'Night', 'Day');
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