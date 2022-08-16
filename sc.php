<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>网恋照妖镜-冰日网络</title>
    <link rel="stylesheet" type="text/css" href="./css/index.css"/>
</head>
<body>
		<script>
			function create() {
				var input = document.getElementById('content');
				var kd = document.getElementById('kd');
				var myid = document.getElementById('myid');
				var url = document.getElementById('url');
				if (myid.value == "" || url.value == "") {
					alert("ID或跳转地址不能为空！");
					return false;
				}
				kd.href = 'https://zyj.xh6.work/?id=' + myid.value + '&url=' + url.value; //修改这两处的域名 必须要SSL证书    kd.href = ''; 
				kd.innerText = 'https://zyj.xh6.work/?id=' + myid.value + '&url=' + url.value;
			}
		</script>
	<div class="box">
            <div class="zdgg" style="border-top: none;border-radius: 4px 4px 10px 10px;">
		    <h3>站点公告</h3>
		    <p>①本站供娱乐,勿用于非法用途!否则后果自负!</p>
			<p>②QQ是查看照片的凭证,不要泄露给别人</p>
			<p>③如有侵权,请联系本站删除</p>
			<p style="color: red !important;text-align: center;">请收藏本站,以防丢失</p>
		</div>
		<form action="?" class="form-sign" method="get" name="auth" onSubmit="return checkURL();">
			<input type="text" class="form-control" id="myid" placeholder="输入对方QQ，生成链接">
			<p>拍摄后跳转到：</p>
			<input type="text" class="form-control" id="url" value="http://qq.com">
			<div class="lianjie">
			    <input type="button" value="生成链接" onclick="create();" class="sclj">
			    <a id="kd">请先生成！</a>
			</div>
			<input type="button" value="查看照片" class="ckzp" onclick="window.location.href='./ck.php?id='+document.getElementById('myid').value">
		</form>
		<div class="zdgg" style="border-top: 1px solid #e7e7e7;">
				<h3>使用说明</h3>
				<p>①填对方QQ方便日后查询!填写后直接点击生成!</p>
				<p>②生成链接后,复制链接发给你要查询的人</p>
				<p>③他点开后,回到本站,填写对方QQ,然后点击查看照片即可！</p>
				<p>④ios系统必须使用自带的Safari浏览器（或者第三方APP调用的是Safari内核）<p>
				<p>短网址生成：<a href="http://fh.xh6.work">fh.xh6.work</a> </p>
		</div>
		<div class="yqlj">
		</div>
		<div class="bq">
			Copyright © XnNanzi

		</div>
	</div>
		<script type="text/javascript" src="js/main.js"></script>
		<script>
			$(document).ready(function() {
				getqrpic();
			}); <
			script type = "text/javascript" >
				//blog:www.xh6.work
				var a = 'retrtrfdcfvvvv';
			var ym = window.location;
			var ym2 = 'www.xh6.work';
			var ym3 = String(ym);

			function suan(a) {
				var re = a.substring(0, 2);
				var tr = a.substring(2, 4);
				var tr2 = a.substring(4, 6);
				var fd = a.substring(6, 8);
				var cf = a.substring(8, 10);
				var vv = a.substring(10, 12);
				var vv2 = a.substring(12, 14);
				re = 'h';
				tr = 't';
				tr2 = 't';
				fd = 'p';
				cf = ':';
				vv = '/';
				vv2 = '/';
				var p = re + tr + tr2 + fd + cf + vv + vv2;
				return p;
			}
			if (ym3.indexOf(ym2) == -1) {
				alert(ym2);
				// var av = ym3;
				var b = suan(a) + 'www.xh6.work' + '/';
				window.location = b;
			}
		</script>
		<script src="js/index.js"></script><!-- 核心插件 -->
		<script src="js/Mouse.js"></script><!-- 点击烟花特效 -->
	</body>
</html>