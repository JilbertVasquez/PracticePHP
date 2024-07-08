document.addEventListener('DOMContentLoaded', () => {
    const profileBtn = document.getElementById('profileBtn');
    const changePassBtn = document.getElementById('changePassBtn');
    const profileSection = document.getElementById('profile-section');
    const changePassSection = document.getElementById('changepass-section');

    profileBtn.addEventListener('click', () => {
        profileSection.style.display = 'block';
        changePassSection.style.display = 'none';
    });

    changePassBtn.addEventListener('click', () => {
        profileSection.style.display = 'none';
        changePassSection.style.display = 'block';
    });
});
