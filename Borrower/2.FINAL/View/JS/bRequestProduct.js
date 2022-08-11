const form = document.getElementById('form');
const uname = document.getElementById('uname');
const pname = document.getElementById('pname');
const category = document.getElementById('category');
const budget = document.getElementById('budget');

form.addEventListener('submit', e => {
	e.preventDefault();
	
	validate();
});

function validate() {
	const unameValue = uname.value.trim();
	const pnameValue = pname.value.trim();
	const categoryValue = category.value.trim();
	const budgetValue = budget.value.trim();
	
	
	if(pnameValue === '') {
		setErrorFor(pname, 'Product name cannot be empty');
	} else {
		setSuccessFor(pname);
	}
	
	if(budgetValue === '') {
		setErrorFor(budget, 'Budget cannot be empty');
	} else{
		setSuccessFor(budget);
	}
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
	$('form').unbind('submit').submit();
	//window.location.href = "../Controller/RequestProductCheck.php";
}
	