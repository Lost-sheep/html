<?php
/*�������ݿ�*/
$conn=@mysql_connect("qdm162333298.my3w.com","qdm162333298","maixinke") or die("���ݿ�����ʧ��!");
mysql_select_db("qdm162333298_db",$conn);
mysql_query("set names 'uft-8'");
/*��ʽ��html����*/
function htmlocode($content)
{
	$content=str_replace("\n","<br>",str_replace(" ","$nbsp",$content));
	return $content;
	# code...
}
$name =$_POST['name'];
$message = $_POST['message'];
if ($_POST['submit'])
{	
	
	$sql="insert into family (id,name,content,date) values ('','$name','$message',now())";
	mysql_query($sql);
	 // �ر�����
    mysql_close($conn);  
/*//�ض�������� */
header("Location: /index.html");
/*//ȷ���ض���󣬺������벻�ᱻִ�� */
exit;

	# code...
}else{
echo "����д�������������ύ��";
 // �ر�����
    mysql_close($conn);  
}
?>

