<?php
//$f = fopen("quest.txt", "r"); // ��������� ���� � ������ ������
//if ($f)
//{
//	while (!feof($f))
//	{
//		$mytext = fgets($f, 999);
//		echo $mytext."<br />";
//	}
//}
//else echo "������ ��� �������� �����";


$mysqli = new mysqli("localhost", "root", "", "quest");
$result_set = $mysqli->query("SELECT * FROM `quest`");
while ($row = $result_set->fetch_assoc()) {
	print_r($row);
	echo "<br />";
}

?>