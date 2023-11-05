$(document).ready(function ()
{
	$('#login-form').on('submit', function (e)
	{
		e.preventDefault();
		var username = $('#username').val();
		var password = $('#password').val();
		if (username === 'Desmon' && password === 'LPU2023')
		{
			window.location.href = 'admin.php';
		}
		else
		{
			window.location.href = 'login.php';
		}
	});
});