<html>
<body bgcolor="plum">
<h4>Players Name:VIRAT KOHLI,ROHITH SHARMA,K L RAHUL,HARDHIK PANDYA,SACHIN</h4>
<?php
$name=["VIRAT KOHLI","ROHITH SHARMA","K L RAHUL","HARDHIK PANDYA","SACHIN"];
echo "Player Program";
echo "<br>
<table border='2px'>
<tr><th> SI NO</th>
<th>Players</th>";
for ($i=0;$i<5;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th></tr>";
}
echo "</table>"
?>
</body>
</html>

