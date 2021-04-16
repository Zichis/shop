require('./bootstrap');

require('alpinejs');

var userMenuButton = document.getElementById('userMenuButton');
var userMenu = document.getElementById('userMenu');

userMenuButton.addEventListener('click', () => {
    userMenu.classList.toggle('hidden');
});
