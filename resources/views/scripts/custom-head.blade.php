<script>
    let localstorage = window.localStorage;
    window.onload = function () {
        let platform = window.navigator.platform,
            windowsPlatforms = ['Win32', 'Win64', 'Windows', 'WinCE'];
        
        if (windowsPlatforms.indexOf(platform) !== -1){
            document.body.classList.toggle('scale-80');
        }

        let themeButton = document.getElementById('themeButton');
        let themeButtonMobile = document.getElementById('themeButtonMobile');
        let prismJS = document.getElementById('prism');
        if (localstorage.getItem('theme') === 'dark') {
            document.documentElement.className = "dark"
            themeButton.children[0].classList.remove('hidden');
            themeButtonMobile.children[0].classList.remove('hidden');
        } else {
            document.documentElement.className = "light"
            themeButton.children[1].classList.remove('hidden');
            themeButtonMobile.children[1].classList.remove('hidden');
            prismJS.href = '/css/prism.css';
        }
    }

    function toggleTheme() {
        let themeButton = document.getElementById('themeButton');
        let themeButtonMobile = document.getElementById('themeButtonMobile');
        let prismJS = document.getElementById('prism');
        if (localstorage.getItem('theme') === 'dark') {
            document.documentElement.className = "light"
            themeButton.children[0].classList.add('hidden');
            themeButtonMobile.children[0].classList.add('hidden');
            themeButton.children[1].classList.remove('hidden');
            themeButtonMobile.children[1].classList.remove('hidden');
            prismJS.href = '/css/prism.css';
            localstorage.setItem('theme', 'light');
        } else {
            document.documentElement.className = "dark"
            themeButton.children[0].classList.remove('hidden');
            themeButtonMobile.children[0].classList.remove('hidden');
            themeButton.children[1].classList.add('hidden');
            themeButtonMobile.children[1].classList.add('hidden');
            prismJS.href = '/css/prism-dark.css';
            localstorage.setItem('theme', 'dark');
        }
    }
</script>
