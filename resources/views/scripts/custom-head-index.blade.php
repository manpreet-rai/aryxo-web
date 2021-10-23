<script>
    let localstorage = window.localStorage;
    window.onload = function () {
        let cookieConsent = document.getElementById('cookie-consent');
        if (localstorage.getItem('cookies-access') !== 'true') {
            let footer = document.getElementsByTagName('footer');
            footer.style = 'margin-bottom: 4rem';
        }
    }
</script>
