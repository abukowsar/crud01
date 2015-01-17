
<?php
/* First method to associate create array. */

$places = array(

array( 
		   'City' => "Tokyo", 
		   'Country' => "Japan", 
		   "Continent" => "Asia"
		  ),

array( 
		   'City' => "Mexico City", 
		   'Country' => "Mexico", 
		   "Continent" => "North America"
		  ),

array( 
		   'City' => "New York City", 
		   'Country' => "USA", 
		   "Continent" => "North America"
		  ),
array( 
		   'City' => "Mumbai", 
		   'Country' => "India", 
		   "Continent" => "Asia"
		  ),
array( 
		   'City' => "Seoul", 
		   'Country' => "India", 
		   "Continent" => "Asia"
		  ),
array( 
		   'City' => "Shanghai", 
		   'Country' => "China", 
		   "Continent" => "Asia"
		  ),
array( 
		   'City' => "Buenos Aires", 
		   'Country' => "Argentina", 
		   "Continent" => "South America"
		  ),
array( 
		   'City' => "Cairo", 
		   'Country' => "Egypt", 
		   "Continent" => "Africa"
		  ),
array( 
		   'City' => "London", 
		   'Country' => "UK", 
		   "Continent" => "Europe"
		  ));
		  
/* $place0 = array( 
		   'City' => "Tokyo", 
		   'Country' => "Japan", 
		   "Continent" => "Asia"
		  );

$place1 = array( 
		   'City' => "Mexico City", 
		   'Country' => "Mexico", 
		   "Continent" => "North America"
		  );

$place2 = array( 
		   'City' => "New York City", 
		   'Country' => "USA", 
		   "Continent" => "North America"
		  );
$place3 = array( 
		   'City' => "Mumbai", 
		   'Country' => "India", 
		   "Continent" => "Asia"
		  );
$place4 = array( 
		   'City' => "Seoul", 
		   'Country' => "India", 
		   "Continent" => "Asia"
		  );
$place5 = array( 
		   'City' => "Shanghai", 
		   'Country' => "China", 
		   "Continent" => "Asia"
		  );
$place6 = array( 
		   'City' => "Buenos Aires", 
		   'Country' => "Argentina", 
		   "Continent" => "South America"
		  );
$place7 = array( 
		   'City' => "Cairo", 
		   'Country' => "Egypt", 
		   "Continent" => "Africa"
		  );
$place8 = array( 
		   'City' => "London", 
		   'Country' => "UK", 
		   "Continent" => "Europe"
		  ); */
print_r($places);
echo "<br/>";
echo $places[3];
echo "<br/>";
echo $places[3]['Continent'];
echo "<br/>";
echo $places[3]['City'];
echo "<br/>";
echo $places[3]['Country'];


$odd_number=array(1,3,5,7,9);
foreach ($odd_number as $allvalues){
	echo $allvalues.'<br/>';
}

$names=array('Mim','Fahad1','Fahad2', 'Arifa', 'Sayma');

foreach ($names as $allname){
	echo $allname.'<br/>';
}

foreach ($places as $allplaces){
	echo "<br/>";
	echo $allplaces['City'].'-'.$allplaces['Country'].'-'.$allplaces['Continent'];
}
