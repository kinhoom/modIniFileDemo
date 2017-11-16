<?php
header("content-type:text/html;charset=utf-8");
$content=$_POST[inicontent];
if(!parse_ini_string($content)){
	echo "ini格式有误!!!";
	echo "<a href='index.php'>click here</a>";
?>
<div id="d1"></div>
<script>
    var i=4
    d1.innerHTML=i+1;
    j=setInterval(a,1000);
    function a(){
	d1.innerHTML=i;
	i--;
	if(i==0) {
	    window.location.href="index.php";
	    clearInterval(j);
 	}
    }
</script>
<?php
      exit;
}
if(file_put_contents('a.ini', $content)){
	echo  "<script>alert('修改成功！！');window.location.href='index.php'</script>";
}
?>
