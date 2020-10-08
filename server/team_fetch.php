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
$result = mysqli_query($connection,"SELECT * FROM products");
$all_property = array();  //declare an array for saving property

//showing property
echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";
?>