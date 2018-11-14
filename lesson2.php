<?php
$x = 10000;
$y = 993939;
$city = "Nairobi";
$school = "eMobilis";

echo "$x <br>";


echo "$city<br>";

echo $school;

echo "<br>$x $y <br> $city $school";

$radius = 16;
$height = 40;
$volume = 22 / 7 * $radius * $radius * $height;
echo "<br>Volume is  $volume";

//sa
//volume sphere
//area of equilateral triangle
//volume pyramid

//calculation of the surface area of a cylinder
$cylinder_surface_area = (2 * 22 / 7 * $radius * $height) + (2 * 22 / 7 * $radius * $radius);
echo "<br> The surface area of a cylinder with radius $radius and height $height is $cylinder_surface_area.";

//calculation of the volume of a sphere below
$sphere_volume = 22 / 7 * $radius * $radius * $radius * 4 / 3;
echo "<br> The volume of a sphere is $sphere_volume";

//calculation of the area of an equilateral triangle
$side_length = 39;
$equilateral_area = (sqrt(3) / 4) * $side_length * $side_length;
echo "<br> The area of an equilateral triangle is $equilateral_area";

//calculation of the volume of a pyramid
$pyramid_length = 47;
$pyramid_width = 93;
$pyramid_height = 67;
$pyramid_volume = 1 / 3 * $pyramid_length * $pyramid_width * $pyramid_height;
echo "<br> The volume of pyramid whose length is $pyramid_length, width is $pyramid_width, and height is $pyramid_height is $pyramid_volume";
