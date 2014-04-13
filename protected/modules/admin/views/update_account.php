<?php include '_head.php'; ?>
<div class="box span12 row-fluid">
	<div class="box-header well" data-original-title>
		<h2><i class="icon-user"></i>账户管理</h2>
	</div>
	
	<div class="box-content" style="margin-top:15px">
		<form class="form-horizontal" name="form" id="form" onsubmit="return submitForm()" action="servlet/UpdateAccountServlet" method="post">
			<div class="control-group">
				<label class="control-label" for="fileInput">新用户名</label>
				<div class="controls">
				  	<input class="uniform_on" style="height:30px" id="username" name="username" type="text" value="<%=userName%>"/>
				  	<span id="username_tips" class="help-inline" style="visibility:hidden;color:#E32C3B;"></span>
				</div>
			</div> 
			
			<div class="control-group" style="margin-top:20px;">
				<label class="control-label" for="fileInput">原密码</label>
				<div class="controls">
				  	<input class="uniform_on" style="height:30px" id="old_password" name="old_password" onfocus="this.type='password'" onblur="onBlurOldPassword()"/>
				  	<span id="old_password_tips" class="help-inline" style="visibility:hidden;color:#E32C3B;"></span>
				</div>
			</div>
			
			<div class="control-group" style="margin-top:20px;">
				<label class="control-label" for="fileInput">新密码</label>
				<div class="controls">
				  	<input class="uniform_on" style="height:30px" id="new_password" name="new_password" onfocus="this.type='password'"/>
				  	<span id="new_password_tips" class="help-inline" style="visibility:hidden;color:#E32C3B;"></span>
				</div>
			</div> 
			
			<div class="control-group" style="margin-top:20px;">
				<label class="control-label" for="fileInput">确认新密码</label>
				<div class="controls">
				  	<input class="uniform_on" style="height:30px" id="confirm_new_password" name="confirm_new_password" onfocus="this.type='password'"/>
				  	<span id="confirm_new_password_tips" class="help-inline" style="visibility:hidden;color:#E32C3B;"></span>
				</div>
			</div>
			
			<p class="span5" style="margin-left:160px;margin-top:10px;margin-bottom:20px">
			  	<button type="submit" class="btn btn-primary" style="width:200px">更新</button>
			</p>
		</form>  
	</div>
</div>
</div>
</div>
</div>
 <jsp:include page="footer.jsp" />

<script type="text/javascript">
window.load = function(){ 
	document.getElementById('old_password').value=''; 
	document.getElementById('new_password').value=''; 
	document.getElementById('confirm_new_password').value=''; 
}; 

function onBlurOldPassword() {
	var oldPassword = document.getElementById("old_password").value;  
	if (oldPassword) {
		document.getElementById('old_password_tips').style.visibility = "hidden";
	}
}

function submitForm() {
	var oldPassword = document.getElementById("old_password").value; 
	if (!oldPassword) {
		document.getElementById('old_password_tips').style.visibility = "visible";
		document.getElementById('old_password_tips').innerHTML = "请输入原密码"; 
		return false;
	}
	
	var newPassword = document.getElementById("new_password").value; 
	var confirmNewPassword = document.getElementById("confirm_new_password").value; 
	if (newPassword != confirmNewPassword) {
		document.getElementById('confirm_new_password_tips').style.visibility = "visible";
		document.getElementById('confirm_new_password_tips').innerHTML = "两次输入新密码不一致"; 
		return false;
	}
	
	return true;
}
</script>
