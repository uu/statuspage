<?php
	require_once('../includes/base.inc.php');

	$auth = new Authentication;
	$users = new Users;

	if (!isset($_SESSION['auth']['id'])) {
		header('Location: index.php');
		exit();
	}

	if (!empty($_POST)) {
		if (!empty($_POST['oldpw']) && !empty($_POST['newpw']) && !empty($_POST['newpw2'])) {
			if ($_POST['newpw'] == $_POST['newpw2']) {
				$change = $auth->changePassword($_SESSION['auth']['user'], $_POST['oldpw'], $_POST['newpw']);
				if ($change == false) {
					$smarty->assign('error', 'Не получилось сменить пароль.');
				}else{
					$smarty->assign('error', 'Пароль был успешно изменён');
				}
			}else{
				$smarty->assign('error', 'Пароли не совпадают');
			}
		}

		if (!empty($_POST['user']) && !empty($_POST['pass'])) {
			$add = $users->createUser($_POST['user'], $_POST['pass']);
			if ($add != false) header('Location: users.php');
			$smarty->assign('error', 'Не получилось создать пользователя');
		}
	}

	if (!empty($_GET['delete'])) {
		$delete = $users->deleteUser($_GET['delete']);
		if ($delete != false) header('Location: users.php');
		$smarty->assign('error', 'Не получилось удалить пользователя');
	}

	$allusers = $users->getUsers();

	$smarty->assign('users', $allusers);

	$smarty->display('_header.tpl');
	$smarty->display('users.tpl');
	$smarty->display('_footer.tpl');
