const deleteForms = document.querySelectorAll('.delete-form');
deleteForms.forEach(form => {
form.addEventListener('submit', e => {
e.preventDefault();

const hasConfirmed = confirm('Are you sure to delete this Project?');
console.log('Il file delete-confirmation.js è stato caricato correttamente.');

if (hasConfirmed) form.submit();
});
})