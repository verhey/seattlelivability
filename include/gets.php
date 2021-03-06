<?php
//data retrieval functions
//Returns traffic
function fGetTraffic ($link, $preference) {
$sql = "SELECT t.neighborhoodID, n.neighborhoodName, incidentCount
FROM tblTraffic t
INNER JOIN tblNeighborhood n
ON n.neighborhoodID = t.neighborhoodID ";

if($preference == "high") $sql .= "ORDER BY worstToBestRank ASC LIMIT 5";
else $sql .= "ORDER BY worstToBestRank DESC LIMIT 5";

$result = mysqli_query($link, $sql)
or die('SQL Syntax Error ' . mysqli_error($link));

while($array = mysqli_fetch_array($result)) {
$neighborhoodID = $array['neighborhoodID'];
$name = $array['neighborhoodName'];
$incidents = $array['incidentCount'];
echo "<tr>";
    echo "<td>$name</td>";
    echo "<td class='text-center'>$incidents</td>";
    echo "<td class='text-center'><a class='btn btn-default btn-sm' target='_blank' href='viz_traffic.php?neighborhood=$neighborhoodID'>Go</a></td>";
    echo "</tr>";
}
}

//Returns housing
function fGetHousing ($link, $preference) {
$sql = "SELECT h.neighborhoodID, neighborhoodName, ZHVI, zhviRank
FROM tblHousing h
INNER JOIN tblNeighborhood n
ON n.neighborhoodID = h.neighborhoodID ";

if($preference == "high") $sql .= "ORDER BY zhviRank ASC LIMIT 5";
else $sql .= "ORDER BY zhviRank DESC LIMIT 5";

$result = mysqli_query($link, $sql)
or die('SQL Syntax Error ' . mysqli_error($link));

while($array = mysqli_fetch_array($result)) {
$neighborhoodID = $array['neighborhoodID'];
$name = $array['neighborhoodName'];
$zhvi = $array['ZHVI'];
$zhviRank = $array['zhviRank'];
echo "<tr>";
    echo "<td>$name</td>";
    echo "<td class='text-center'>". fAsDollars($zhvi) . "</td>";
    echo "<td class='text-center'>$zhviRank</td>";
    echo "<td class='text-center'><a class='btn btn-default btn-sm' target='_blank' href='viz_housing.php?neighborhood=$neighborhoodID'>Go</a></td>";
    echo "</tr>";
}
}

//Returns walkscore
function fgetWalkability ($link, $preference) {
$sql = "SELECT ws.neighborhoodID, n.neighborhoodName, walkScore, restaurantCount
FROM tblWalkScore ws
INNER JOIN tblNeighborhood n
ON n.neighborhoodID = ws.neighborhoodID ";

if($preference == "high") $sql .= "ORDER BY walkScore DESC LIMIT 5";
else $sql .= "ORDER BY walkScore ASC LIMIT 5";

$result = mysqli_query($link, $sql)
or die('SQL Syntax Error ' . mysqli_error($link));

while($array = mysqli_fetch_array($result)) {
$neighborhoodID = $array['neighborhoodID'];
$name = $array['neighborhoodName'];
$walkScore = $array['walkScore'];
$restaurants = $array['restaurantCount'];
echo "<tr>";
    echo "<td>$name</td>";
    echo "<td class='text-center'>$walkScore</td>";
    echo "<td class='text-center'>$restaurants</td>";
    echo "<td class='text-center'><a class='btn btn-default btn-sm' target='_blank' href='viz_walkscore.php?neighborhood=$neighborhoodID'>Go</a></td>";
    echo "</tr>";
}
}

//Returns nonviolent crime
function fgetNVCrime ($link, $preference) {
$sql = "SELECT nv.neighborhoodID, n.neighborhoodName, incidentCount
FROM tblNonViolentCrime nv
INNER JOIN tblNeighborhood n
ON n.neighborhoodID = nv.neighborhoodID ";

if($preference == "high") $sql .= "ORDER BY worstToBestRank ASC LIMIT 5";
else $sql .= "ORDER BY worstToBestRank DESC LIMIT 5";

$result = mysqli_query($link, $sql)
or die('SQL Syntax Error ' . mysqli_error($link));

while($array = mysqli_fetch_array($result)) {
$neighborhoodID = $array['neighborhoodID'];
$name = $array['neighborhoodName'];
$incidents = $array['incidentCount'];
echo "<tr>";
    echo "<td>$name</td>";
    echo "<td class='text-center'>$incidents</td>";
    echo "<td class='text-center'><a class='btn btn-default btn-sm' target='_blank' href='viz_nvcrime.php?neighborhood=$neighborhoodID'>Go</a></td>";
    echo "</tr>";
}
}

//Returns rent
function fgetRent ($link, $preference) {
$sql = "SELECT h.neighborhoodID, neighborhoodName, ZRI, zriRank
FROM tblHousing h
INNER JOIN tblNeighborhood n
ON n.neighborhoodID = h.neighborhoodID ";

if($preference == "high") $sql .= "ORDER BY zriRank DESC LIMIT 5";
else $sql .= "ORDER BY zriRank ASC LIMIT 5";

$result = mysqli_query($link, $sql)
or die('SQL Syntax Error ' . mysqli_error($link));

while($array = mysqli_fetch_array($result)) {
$neighborhoodID = $array['neighborhoodID'];
$name = $array['neighborhoodName'];
$zri = $array['ZRI'];
$zriRank = $array['zriRank'];
echo "<tr>";
    echo "<td>$name</td>";
    echo "<td class='text-center'>". fAsDollars($zri) . "</td>";
    echo "<td class='text-center'>$zriRank</td>";
    echo "<td class='text-center'><a class='btn btn-default btn-sm' target='_blank' href='viz_rent.php?neighborhood=$neighborhoodID'>Go</a></td>";
    echo "</tr>";        }
}

//Returns violent crime
function fgetVCrime ($link, $preference)
{
$sql = "SELECT v.neighborhoodID, n.neighborhoodName, incidentCount
FROM tblViolentCrime v
INNER JOIN tblNeighborhood n
ON n.neighborhoodID = v.neighborhoodID ";

if ($preference == "high") $sql .= "ORDER BY worstToBestRank ASC LIMIT 5";
else $sql .= "ORDER BY worstToBestRank DESC LIMIT 5";

$result = mysqli_query($link, $sql)
or die('SQL Syntax Error ' . mysqli_error($link));

while ($array = mysqli_fetch_array($result)) {
$neighborhoodID = $array['neighborhoodID'];
$name = $array['neighborhoodName'];
$incidents = $array['incidentCount'];
echo "<tr>";
    echo "<td>$name</td>";
    echo "<td class='text-center'>$incidents</td>";
    echo "<td class='text-center'><a class='btn btn-default btn-sm' target='_blank' href='viz_vcrime.php?neighborhood=$neighborhoodID'>Go</a></td>";
    echo "</tr>";
}
}
?>