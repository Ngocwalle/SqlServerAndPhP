<script>

function thongtin(){
	var check=true;
	for(var i=0;i<document.forms[0].elements.length-1;i++){
		if(document.forms[0].elements[i].value==''){
			alert("Thông tin các ô chưa được điền đủ!");
			check=false;
			break;
		}else{
			if(document.forms[0].elements[i].name=="phone"){
				var phone = document.forms[0].elements[i].value;
				//Nếu password nhỏ hơn 8 kí tự hoặc nhiều hơn 16 kí tự thì báo lổi
				if(phone.length<10 || phone.length>11){
					alert("Số điện thoại hợp lệ phải 10 hay 11 số!");
					check=false;
					break;
				}
			}
			if(document.forms[0].elements[i].name=="email"){
				var email = document.forms[0].elements[i].value;
				if(email.indexOf("@")==-1 || email.indexOf(".")==-1 || email.indexOf("@")>email.indexOf(".")){
					alert("Địa chỉ email không hợp lệ!");
					check=false;
					break;
					
				}
			}
		}
	}
	if(check==true){
		document.forms[0].submit();
	}
}
</script></head>
<body>
<h2>Thông tin khách hàng</h2>
<form action="modules/right/kh.php" method="post" accept-charset="utf-8">
		<table>
			<tr>
				<td>Họ tên khách hàng:</td>
				<td><input type="text" id="username" name="username"></td>
			</tr>
			<tr>
				<td>Số điện thoại:</td>
				<td><input type="number" id="phone" name="phone"></td>
			</tr>
			<tr>
				<td>Địa chỉ:</td>
				<td><input type="text" id="diachi" name="diachi"></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input type="text" id="email" name="email"></td>
			</tr>
            <td colspan="2" align="right"><input type="button" value="Đặt Món" onClick="thongtin()" name="thongtinkh"></td>
		</table>	
	</form>
</body>
</html>