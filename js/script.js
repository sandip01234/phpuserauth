document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.querySelector('#login-form');
    if (loginForm) {
        loginForm.addEventListener('submit', (e) => {
            if (!confirm('Are you sure you want to login?')) {
                e.preventDefault();
            }
        });
    }
});