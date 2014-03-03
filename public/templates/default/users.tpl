	<div class="wrapper">
		<div id="content" class="users">
			{if $error}<p class="error">{$error}</p>{/if}

			<h2>Сменить пароль</h2>
			<form action="" method="post" id="changepwform">
				<fieldset>
					<label for="oldpw">Текущий пароль:</label>
					<input type="password" name="oldpw" id="oldpw" />
					<label for="newpw">Новый пароль:</label>
					<input type="password" name="newpw" id="newpw" />
					<label for="newpw2">Новый пароль (подтверджение):</label>
					<input type="password" name="newpw2" id="newpw2" />
					<input type="submit" id="changepw" value="Сменить пароль" />
				</fieldset>
			</form>

			<h2>Добавить пользователя</h2>
			<form action="" method="post" id="newuserform">
				<fieldset>
					<label for="user">Логин:</label>
					<input type="text" name="user" id="user" />
					<label for="pass">Пароль:</label>
					<input type="password" name="pass" id="pass" />
					<input type="submit" id="newuser" value="Add User" />
				</fieldset>
			</form>

			<h2>Все пользователи</h2>
			<ul>
				{foreach from=$users item=user}<li>{$user.username} {if $user.id neq $smarty.session.auth.id}[<a href="?delete={$user.id}">delete</a>]{/if}</li>{/foreach}
			</ul>
		</div>
	</div>
