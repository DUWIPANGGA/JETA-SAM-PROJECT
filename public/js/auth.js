const btnLogout = document.getElementById('btn-logout');

    if (btnLogout) {
        btnLogout.addEventListener('click', async function(event) {
            event.preventDefault();
            if(confirm('Apakah Anda yakin ingin keluar?')) {
                await prosesLogout();
            }
        });
    }
    async function prosesLogout() {
    const token = localStorage.getItem('jwt_token')
    if (token) {
        await fetch('/api/auth/logout', {
            method: 'POST',
            headers: { 'Authorization': 'Bearer ' + token }
        });
    }

    localStorage.removeItem('jwt_token');
    localStorage.removeItem('user_data')
    window.location.href = '/login';
}