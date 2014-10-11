<?php

class Generate
{
	public static function generatePlanet()
	{
		$prefix = array('Doth','Korr', 'Ver', 'Vare', 'Varr', 'Thym', 'Grett', 'Greth', 'Sal', 'Ter', 'On', 'Ep', 'Els', 'Ol', 'Gern', 'Get', 'Geth', 'Sem', 'Sal', 'Vol', 'Kal', 'Han', 'Hor', 'Weir', 'Es', 'Pon', 'Pos', 'Lul', 'Let', 'Le', 'Gre', 'Kyr', 'Khu', 'Bae', 'Xyr', 'Zim', 'Zy', 'Zei', 'Cth', 'Vy', 'Dor');
		$suffix = array('us','vel','nyn', 'los', 'ett', 'emia', 'eria', 'erra', 'os', 'okk', 'ari', 're','ren','ros','ton','tos','tel','giv','ghev', 'gevvi', 'levvi', 'ovos', 'li', 'la', 'ten', 'tin', 'vin', 'dos', 'oki', 'orki', 'kios', 'kella', 'ella', 'rell', 'ell', 'nu', 'hlu', 'ae', 'ia', 'mae', 'nxe', 'zin', 'yne');
		return $prefix[array_rand($prefix)] . $suffix[array_rand($suffix)];
	}

	public static function generateName()
	{
		$firstName = array('Thomas','Robert', 'Patrick', 'Edward', 'Martin', 'Michael', 'Justin', 'Samuel', 'Samantha', 'Andria', 
                                'Willian', 'Rose', 'Daisy', 'Oliver', 'Olivia', 'Gretchen', 'Matilda', 'Adam', 'Chester', 'Erin', 'Eric', 'Dillan',
                                'Henry', 'Harold', 'David', 'Danielle', 'Nicholas', 'Nichole', 'Marissa', 'Taylor', 'Alex', 'Adam', 'Christopher',
                                'Ian', 'Mason', 'Amy', 'Helen', 'Linda', 'Katherin', 'Kaitlin', 'Mark', 'Douglas', 'George', 'Andrew', 'Peter', 'Luke',
                                'John', 'Sheldon', 'Gregory', 'Aaron', 'Leigh', 'Loren', 'Liam', 'Elizabeth', 'Barbos', 'Kevin', 'Jerrel');
		$surname = array('Davies','Conners','Smith', 'Carpenter', 'Lordson', 'Pond', 'Johnson', 'Scribe', 'Merchant', 'Helper', 'Elder', 'Farmers', 
                                 'Cooper', 'Coopers', 'Copper', 'Irons', 'Oldman', 'Young', 'Michaels', 'Monk', 'Jones', 'Pitcher', 'Hammerson',
                                 'Rich', 'Pauper', 'Goldson', 'Forge', 'Forger', 'Bates', 'Gatesman', 'Time', 'Server', 'Slave', 'Love', 'Bard',
                                 'Oath', 'Sin', 'Taint', 'Godson', 'Glory', 'Wild', 'Freeborn', 'Lowman', 'Landers', 'Ironfield', 'Smelter', 'Stewart',
                                 'the White', 'the Gray', 'the Nasty', 'the Great', 'the Elder', 'the Younger', 'Anderson', 'Gremel', 'Mimara');
		$suffix = array('Jr.', 'I', 'II', 'II', 'III', 'IV', 'V', 'Sr.');
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
                              'pauper', 'terribly ill person', 'necromancer', 'sorcerer', 'bandit', 'war', 'shaman', 'slaver', 'mercenary', 'bard', 'pirate', 'cocubine');
		$means  = array( 'must kill','marries', 'fights', 'dies because of', 'kills', 'dies along with', 'is', 'taxes', 'tortures', 'becomes', 'flees',
                                 'is in love with', 'bargains with', 'outwits', 'lies to', 'poisons', 'tricks', 'tracks down', 'seeks', 'burns', 'is', 'creates',
                                 'is saddened by', 'seeks refuge from', 'destroys', 'steals', 'houses', 'becomes', 'tracks down', 'possesses', 'is possessed by',
                                 'baffles', 'exorcises', 'creates', 'supplicates', 'usurps');
		$thing 	= array('a despot', 'a demon', 'a dragon', 'an army', 'a princess', 'a murderer', 'in battle', 'a king', 'a queen', 'himself', 'a wizard',
                                 'a witch', 'a mage', 'a templar', 'a village', 'a city', 'a river', 'a lake', 'a burglar', 'a relative', 'a temple', 'an ocean',
                                 'a monster', 'a weapon', 'all hope', 'a ghost', 'one last time', 'a sea', 'a ship');

		return 'A ' . $protag[array_rand($protag)] . ' ' . $means[array_rand($means)] . ' ' . $thing[array_rand($thing)] . '.';
	}
}
