document.addEventListener('alpine:init', () => {
    Alpine.store('lang', {
        language: JSON.parse(localStorage.getItem('language')) || 'en',

        storelanguage(languageselector) {
            if (['en', 'it', 'jp'].includes(languageselector)) {
                localStorage.setItem('language', JSON.stringify(languageselector));
                this.language = languageselector;

                this.updatePageContent(languageselector);
            }
        },

        updatePageContent(language) {
            this.redirectToLanguagePage(language);
        },

        redirectToLanguagePage(language) {
            let url = '';
            if (language === 'it') url = '/pages/it/productpage.php';
            if (language === 'jp') url = '/pages/jp/productpage.php';
            if (language === 'en') url = '/pages/en/productpage.php';

            if (url) window.location.href = url;
        }
    });
});
