<?php
// 获取描述
$desc = $_POST["desc"];
// 获取临时文件路径
$tmp = $_FILES["logfile"]["tmp_name"];
// 文件保存位置
$savePath = "upload/" . $_FILES["logfile"]["name"];
// 判断文件是否已存在
if (file_exists($savePath))
{
	// 文件已存在，删除它
	unlink($savePath);
}
// 保存文件到savePath的路径下
move_uploaded_file($tmp, $savePath);
echo "文件上传成功";
?>
