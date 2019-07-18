<?php
 $dbconn = pg_connect("host=localhost dbname=pet_hotel")
    or die('Could not connect: ' . pg_last_error());
    $ownerArray = array(
        "pet_id" => 1
    );
// Performing SQL query
$res = pg_delete($dbconn, "pets", $ownerArray);
if ($res) {
    echo "POST data is deleted: $res\n";
} else {
    echo "User must have sent wrong inputs\n";
}
?> 

