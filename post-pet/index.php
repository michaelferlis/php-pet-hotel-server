<?php
 $dbconn = pg_connect("host=localhost dbname=pet_hotel")
    or die('Could not connect: ' . pg_last_error());
// Performing SQL query
$query = "INSERT INTO pets(pet_name, breed, color, checked_in, pet_owner_id) VALUES ('rin tin tin','shepard', 'brown', 'true', 2)";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

?>