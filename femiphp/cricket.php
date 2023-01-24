<html>
<body bgcolor="yellow">
<h1><u><center>INDIAN CRICKET TEAM</u></h1>
<?php
$name=["DHAVAN","KOHLI","JADEJA","SHAMI","PANDEY","BUMRAH","AGARWAL","SHREYAS","RAHUL","ASHWIN","UMWSH YADHAV"];
$role=["Batsman","Batsman","Allrounder","Bowler","Batsman","Bowler","Batsman","Batsman","Wicket-keeper","Bowler","Bowler"];
echo "STARTING VI";
echo "<br>
<table border='2px'>
<tr><th> sl no.</th>
<th>PLAYER</th>
<th>ROLE</th>";
 for ($i=0;$i<11;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th><th>$role[$i]</th></tr>";
}
echo "</table>"
?>
</body>
</html>

