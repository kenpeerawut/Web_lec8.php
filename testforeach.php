<?php
$person = array("fullname"=>"John","height"=>"173","age"=>"43");

foreach ($person as $key => $value)
{
    echo $key." = ".$value . "<br>";
}

print_r($person);

echo "<pre>";
print_r($person);
echo "</pre>";
?>