
<div class="d-flex justify-content-center h-100">
	<div class="card" style="height:325px;">
		<div class="card-header">
			<h3>Авторизация</h3>
			<div class="d-flex justify-content-end social_icon">
				<a href="https://www.facebook.com/manaogroup/"><span><i class="fab fa-facebook-square"></i></span></a>
				<span><i class="fab fa-google-plus-square"></i></span>
				<span><i class="fab fa-twitter-square"></i></span>
			</div>
		</div>
		<div class="card-body">
			<form id="login_form" action="<?=$fn?>?ajax=login&checked">
				<div class="input-group form-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-user"></i></span>
					</div>
					<input type="text" name="login" class="form-control" placeholder="Имя пользователя" autocomplete="username">
				</div>
				<div class="input-group form-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-key"></i></span>
					</div>
					<input type="password" name="password" class="form-control" placeholder="Пароль для входа" autocomplete="current-password">
				</div>
				<div class="row align-items-center remember">
					<input type="checkbox">Запомнить меня
				</div>
				<div class="form-group">
					<input type="submit" value="Вход" class="btn float-right login_btn">
				</div>
			</form>
		</div>
		<div class="card-footer">
			<div class="d-flex justify-content-center links">
				У вас нет аккаунта? <a href="<?=$fn?>?page=register">Регистрация</a>
			</div>
		</div>
	</div>
</div>

<script>
$(function(){
	form_submit_ajax("login_form");
});
</script>
