// AUTH PAGE SCRIPT

function showRegister(){

    document.getElementById('loginForm')
        .classList.remove('active');

    document.getElementById('registerForm')
        .classList.add('active');

    document.getElementById('formTitle')
        .innerText = "Daftar";

    document.getElementById('formDesc')
        .innerText = "Buat akun baru";
}


function showLogin(){

    document.getElementById('registerForm')
        .classList.remove('active');

    document.getElementById('loginForm')
        .classList.add('active');

    document.getElementById('formTitle')
        .innerText = "Masuk";

    document.getElementById('formDesc')
        .innerText = "Masuk ke akun Anda";
}