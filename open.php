<?php
$f = fopen("quest.txt", "r"); // ��������� ���� � ������ ������
if ($f)
{
	while (!feof($f))
	{
		$mytext = fgets($f, 999);
		echo $mytext."<br />";
	}
}
else echo "������ ��� �������� �����";


?>