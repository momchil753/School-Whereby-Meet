document.getElementById('myForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const formData = new FormData(this);

  fetch('form_func.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.text())
  .then(data => {
    document.getElementById('response').innerHTML = data;
    document.getElementById('response').style.display = 'block';
  })
  .catch(error => {
    console.error('Error:', error);
    });

    document.getElementById('name').value = '';
    document.getElementById('email').value = '';
    document.getElementById('subject').value = '';
    document.getElementById('message').value = '';

    setTimeout(() => {
      document.getElementById('response').style.display = 'none';
    }, 6000);
});



