<script>
    let localstorage = window.localStorage;
    window.onload = function () {
        let platform = window.navigator.platform,
            windowsPlatforms = ['Win32', 'Win64', 'Windows', 'WinCE'];
        
        if (windowsPlatforms.indexOf(platform) !== -1){
            document.body.classList.toggle('scale-80');
        }
        
        let cookieConsent = document.getElementById('cookie-consent');
        if (localstorage.getItem('cookies-access') !== 'true') {
            let footer = document.getElementsByTagName('footer');
            footer.style = 'margin-bottom: 4rem';
        }
    }
</script>
