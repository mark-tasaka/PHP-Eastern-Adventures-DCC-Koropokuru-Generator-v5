<?php
//Koropokuru

function getOccupation()
{
	
	$a10 = array("Koropokuru acupuncturist", "Koropokuru", "Club", "1d4", "Pouch of acupuncture needles");
	$a11 = array("Koropokuru calligrapher", "Koropokuru", "Sling", "1d4", "A set of calligraphy brushes");
	$a12 = array("Koropokuru fishmonger", "Koropokuru", "Mallet (as Club)", "1d4", "Salted fish");
	$a13 = array("Koropokuru flutist", "Koropokuru", "Walking stick (as staff)", "1d4", "Shakuhachi flute");
	$a14 = array("Koropokuru herbalist", "Koropokuru", "Knife (as dagger)", "1d4", "Herbs, 2 lbs");
	$a15 = array("Koropokuru Noh performer", "Koropokuru", "Club", "1d4", "Make-up set");
	$a16 = array("Koropokuru sushi chef", "Koropokuru", "Knife (as dagger)", "1d4", "Raw fish");
	$a17 = array("Koropokuru taiko drummer", "Koropokuru", "Drumstick (as club)", "1d4", "Taiko drum");
	$a18 = array("Koropokuru tattooist", "Koropokuru", "Needle (as dart)", "1d4", "Vial of ink");
	$a19 = array("Koropokuru woodcarver", "Koropokuru", "Carving knife (as dagger)", "1d4", "Block of wood");


        $array1 = array($a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19);

        shuffle($array1);
        
        return $array1[0];
        
}

function tradeGoodsAddition($occupation, $weapon)
{
	if($weapon === "Pitchfork (as Spear)")
	{
		$animalArray = array(" (sheep)", " (goat)", " (cow)", " (duck)", " (goose)", " (mule)");
		shuffle($animalArray);
		return $animalArray[0];
	}
	else if($occupation === "Wainwright")
	{
		$cartArray = array(" containing tomatoes", " containing nothing", " containing straw", " containing your dead", " containing dirt", " containing rocks");
		shuffle($cartArray);
		return $cartArray[0];
	}
	else if($occupation === "Mercenary")
	{
		return "Hide Armour";
	}
	else if($occupation === "Outlaw")
	{
		return "Leather Armour";
	}
	else if($occupation === "Soldier")
	{
		return "Shield";
	}
	else
	{
		return "";
	}


}


?>