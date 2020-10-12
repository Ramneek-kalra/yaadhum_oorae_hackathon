<?php
$host    = "103.21.58.83:3306";
$user    = "ieeeyi9s_app";
$pass    = "9f93557d309f655ff06f109a08dcf7c4";
$db_name = "ieeeyi9s_app";

//create connection
$connection = mysqli_connect($host, $user, $pass, $db_name);

//test if connection failed
if(mysqli_connect_errno()){
    die("Connection failed: " . $connection->connect_error);
}

//get results from database
$result = mysqli_query($connection,"SELECT * FROM team_master");
$all_property = array();  //declare an array for saving property

//showing property
echo '<table class="data-table" border="1">
        <tr class="data-heading">';
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';
    array_push($all_property, $property->name);
}
echo '</tr>';

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>';
    }
    echo '</tr>';
}
echo "</table>";
?>