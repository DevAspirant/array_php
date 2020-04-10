<?php 

/*  المصفوفات المفهرسة  */
$index_array = ["ammar","AMMAR","Abulhalem"];

echo $index_array[1];

// ترتيب المصفوفات
print_r(sort($index_array));



// تتميز بالمرونة والقدرة على التكوين الإضافي assositate arrat 
$assosicate_array = ["Name"=>["Ammar","ammar"]];

print_r($assosicate_array["Name"]);

?>
