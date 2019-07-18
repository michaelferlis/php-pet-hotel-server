<?php
 $dbconn = pg_connect("host=localhost dbname=pet_hotel")
    or die('Could not connect: ' . pg_last_error());
// Performing SQL query
$query = "INSERT INTO owners(owner_name, number_of_pets) VALUES ('todd',2)";
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