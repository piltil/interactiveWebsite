
<?php
mysql_connect("localhost", "root", "");
mysql_select_db("educationtable");


if (isset($_GET["Search"]))
    $query = mysql_query("SELECT * FROM education WHERE description LIKE '%" . $_GET["Search"] . "%' OR title LIKE '%" . $_GET["Search"] . "%' OR category LIKE '%" . $_GET["Search"] . "%'
        OR author LIKE '%" . $_GET["Search"] . "%' OR student_grades LIKE '%" . $_GET["Search"] . "%' OR content_type LIKE '%" . $_GET["Search"] . "%' OR lesson_link LIKE '%" . $_GET["Search"] . "%'
        ");
else
    $query = mysql_query("SELECT * FROM education");
?>

<html>
<head>
<title>Search Results </title>
</head>
<body>
<h2><td align="right"><div id=right_navigation name=right_navigation><a href="index.php" class=a2>Home</a></div></td></h2>
<h1>Search Results </h1>
   <table border="1" cellpadding = "2" cellspaceing = "3"
     summary="Table holds the interactive lessons">
    <tr>
    <th title</th>
    <th ">description</th>    
    <th href="http://myspace.com">lesson_link</th> 
    <th>lesson_image</th>       
    <th>category</th>
    <th>student_grades</th>
    <th>author</th>
    <th>content_type</th>
   </tr>

<?php
//loop through all table rows
while($row = mysql_fetch_array($query)){
echo "<tr>";
echo "<td >" . $row['title'] . "</td>";
echo "<td >" . $row['description'] . "</td>";
echo "<td ><a href={$row['lesson_link']}>link</a></td>";
echo "<td><img src='".$row['lesson_image']."'></td>";
echo "<td >" . $row['category'] . "</td>";
echo "<td >" . $row['student_grades'] . "</td>";
echo "<td >" . $row['author'] . "</td>";
echo "<td >" . $row['content_type'] . "</td>";
}
mysql_free_result($query);
mysql_close();
?>
</table>
</body>
</html>