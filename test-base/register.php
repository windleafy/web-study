<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<body>
<form action="regcheck.php" method="post">  
    用户名：<input type="text" name="username"/>  
    <br/>  
    密　码:<input type="password" name="password"/>  
    <br/>  
    确认密码：<input type="password" name="confirm"/>  
    <br/>  
    
	<input type="hidden" id="uuid" name="uuid" value="">    
    
    <input type="Submit" name="Submit" value="注册"/>  
</form>
</body>
</html>


<script type="text/javascript">
document.getElementById("uuid").value= uuid(8,16);
function uuid(len, radix) {
    var chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.split('');
    var uuid = [], i;
    radix = radix || chars.length;
 
    if (len) {
      // Compact form
      for (i = 0; i < len; i++) uuid[i] = chars[0 | Math.random()*radix];
    } else {
      // rfc4122, version 4 form
      var r;
 
      // rfc4122 requires these characters
      uuid[8] = uuid[13] = uuid[18] = uuid[23] = '-';
      uuid[14] = '4';
 
      // Fill in random data.  At i==19 set the high bits of clock sequence as
      // per rfc4122, sec. 4.1.5
      for (i = 0; i < 36; i++) {
        if (!uuid[i]) {
          r = 0 | Math.random()*16;
          uuid[i] = chars[(i == 19) ? (r & 0x3) | 0x8 : r];
        }
      }
    }
 
    return uuid.join('');
}
</script>