	<div class="wrapper">
		<div id="content">
			<form action="" method="post" id="login">
				<fieldset>
					<legend>Вход</legend>

					{if $error}<p class="error">{$error}</p>{/if}

					<p>
						<label for="username">Логин:</label>
						<input type="text" name="username" id="username" />
					</p>
					<p>
						<label for="password">Пароль:</label>
						<input type="password" name="password" id="password" />
					</p>
					<p>
						<input type="submit" value="Войти" />
					</p>
				</fieldset>
			</form>
		</div>
	</div>
