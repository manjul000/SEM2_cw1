function toggleTheme() {
    
    document.body.classList.toggle('dark-theme');
    /*
    if (document.body.classList.contains("dark-theme") == true) {
        document.body.classList.remove("dark-theme");
    }
    else {
        document.body.classList.add("dark-theme");
    }
    */
}

function mobilemenu() {
    const pcMenu = document.querySelector('.pc-menu');
    pcMenu.classList.toggle('nav-active');
}