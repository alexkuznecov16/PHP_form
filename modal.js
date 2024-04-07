document.getElementById('submitButton').addEventListener('click', () => {
	modal = document.querySelector('.modal');
	modal.style.display = 'block';
});

document.getElementById('myForm').addEventListener('input', () => {
	var submitButton = document.getElementById('submitButton');
	var inputs = document.querySelectorAll('input[required], select[required], textarea[required]');
	var emailInput = document.getElementById('email');
	var isFormValid = true;

	inputs.forEach(function (input) {
		if (!input.value.trim()) {
			isFormValid = false;
		}
	});

	if (!emailInput.value.includes('@')) {
		isFormValid = false;
	}

	submitButton.disabled = !isFormValid;
});
