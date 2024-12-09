document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();  

    const formData = new FormData(this);

    fetch('signin', {
        method: 'POST',
        body: formData,
    })
    .then(response => response.json())  
    .then(data => {
        console.log(data); 
        if (data.success) {
            document.getElementById('successMessage').style.display = 'block';
            document.getElementById('successMessage').textContent = data.message || 'Login successful!';
        } else {
            document.getElementById('errorMessage').style.display = 'block';
            document.getElementById('errorMessage').textContent = data.message || 'Login failed';
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
