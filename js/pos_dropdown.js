$(document).ready(function ()
{
	$('#productType').change(function ()
		{
			var productType = $(this).val();
			window.location.href = productType + ".php";
		} //This is connected to the dropdown contents to have the 5 websites connected to each other
	);
});

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl)
{
	return new bootstrap.Tooltip(tooltipTriggerEl) //this modifies the tooltip to have the <br> enabled inside
})

document.querySelectorAll('.product-image').forEach(function (image)
{
	image.addEventListener('click', function ()
	{
		var element = document.getElementById('ItemName');
		element.scrollIntoView();
	});
});