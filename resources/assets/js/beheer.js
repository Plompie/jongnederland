const adminSlideoutButton = document.getElementById('admin-slideout-button')

adminSlideoutButton.onclick = function () {
    this.classList.toggle('is-active');
    document.getElementById('admin-side-menu').classList.toggle('is-active')
}