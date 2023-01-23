<?php 
$about_me = [
  "name" => "Aisle Nevertell",
  "birth_year" => 1902,
  "favorite_food" => "pizza"
];

function calculateAge ($person_arr){
  $current_year = date("Y");
  $age = $current_year - $person_arr["birth_year"];
  return $age;
}
?>
<h1>Welcome!</h1>
<h2>About me:</h2>
<?php
  echo "<h3>Name: {$about_me['name']}</h3>";
  echo "<p>" . "Age: " . calculateAge($about_me) . "</p>";
  echo "<div>Favorite food: " . $about_me['favorite_food'] . "</div>"; 

?>

<h2>Now tell me a little about you.</h2>
