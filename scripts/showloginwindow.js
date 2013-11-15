var windowIsOpen = false;

function showLoginWindow()
{
	jQuery(function()
	{
		$.get("login_dropdown_window.php", function(json)
		{
			if (!windowIsOpen)
			{
				$("#popup").html(json);
				windowIsOpen = true;
			}
				
			else if (windowIsOpen)
			{
				$("#popup").html("");
				windowIsOpen = false;
			}
		});
	});
}