<html>
<head>
     <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


<table align="center" width="90" class="table table-condensed">
    <thead>
    <th>City</th><th>Country</th><th>Continent</th>
    </thead>

    <tr>
        <td class="active" va>Tokyo </td>
        <td class="success">Japan</td>
        <td class="warning">Asia</td>

    </tr>
    <tr>
        <td class="active">Mexico City</td>
        <td class="success">Mexico</td>
        <td class="warning">North America</td>

    </tr>
    <tr>
        <td class="active">New York City</td>
        <td class="success"> USA</td>
        <td class="warning">North America</td>
    </tr>

    <tr>
        <td class="active">Mumbai</td>
        <td class="success">India</td>
        <td class="warning">Asia</td>




        <!-- On cells (`td` or `th`) -->
    <tr>
        <td class="active">Seoul</td>
        <td class="success">Korea</td>
        <td class="warning">Asia</td>




        <!-- On cells (`td` or `th`) -->
    <tr>
        <td class="active">Shanghai</td>
        <td class="success">China</td>
        <td class="warning">Asia</td>

    </tr>
    <tr>
        <td class="active">Lagos</td>
        <td class="success">Nigeria</td>
        <td class="warning">Africa</td>

    </tr>
    <tr>
        <td class="active">Buenos Aires</td>
        <td class="success">Argentina</td>
        <td class="warning">South America</td>

    </tr>
    <tr>
        <td class="active">Cairo</td>
        <td class="success">Egypt</td>
        <td class="warning">Africa</td>

    </tr>
    <tr>
        <td class="active">London</td>
        <td class="success">UK</td>
        <td class="warning">Europe</td>

    </tr>
</table>
<hr/>
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


?>

<table align="center" width="90%" class="table table-condensed">
    <thead>
    <th>City</th><th>Country</th><th>Continent</th>
    </thead>
    <?php

    foreach ($places as $allplaces){
    ?>
    <tr>


        <td class="active"><?php echo $allplaces['City']; ?> </td>
        <td class="success"><?php echo $allplaces['Country']; ?></td>
        <td class="warning"><?php echo $allplaces['Continent']; ?></td>

    </tr>
<?php
}

?>
</table>
</body>

</html>