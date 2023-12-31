const form = document.getElementById('form');
const closeForm = document.getElementById('closeForm');
const formContainer = document.getElementById('formContainer');
const body = document.body;

form.addEventListener('click', function(event){
    event.preventDefault();
    formContainer.style.display = 'block';
    body.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
});

