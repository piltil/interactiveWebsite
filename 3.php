<?php
mysql_connect("localhost", "root", "");
mysql_select_db("educationtable");
$result = mysql_query("SELECT * FROM education 
WHERE student_grades LIKE '%3%'");
?>
<html>
<head>
<title>Education website</title>
</head>
<body>
<h2><td align="right"><div id=right_navigation name=right_navigation><a href="index.php" class=a2>Home</a></div></td></h2>
<h1>Education website</h1>
   <table border="1" cellpadding = "2" cellspaceing = "3"
     summary="Table holds the interactive lessons">
    <tr>
    <th>id</th>
    <th>title</th>
    <th>description</th>    
    <th href="http://myspace.com">lesson_link</th>        
    <th>lesson_image</th>
    <th>category</th>
    <th>student_grades</th>
    <th>author</th>
    <th>content_type</th>
    <th>time_scraped</th>
   </tr>

<?php
//loop through all table rows
while($row = mysql_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['title'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "<td><a href={$row['lesson_link']}>link</a></td>";
echo "<td><img src='".$row['lesson_image']."'></td>";
echo "<td>" . $row['category'] . "</td>";
echo "<td>" . $row['student_grades'] . "</td>";
echo "<td>" . $row['author'] . "</td>";
echo "<td>" . $row['content_type'] . "</td>";
echo "<td>" . $row['time_scraped'] . "</td>";
}
mysql_free_result($result);
mysql_close();
?>
</table>
</body>
</html>

