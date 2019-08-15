(function (grecaptcha) {

    var key = '6LfYwq8UAAAAAAW-MH32BTfFsAmaG1zV2dJNGjPk';
    var element = document.getElementById('g-recaptcha-response');

    if (!element || typeof grecaptcha === 'undefined') {
        console.error('Cannot find Google ReCaptcha API or Element.');
        return;
    }

    grecaptcha.ready(() => {
        grecaptcha.execute(key, { action: 'homepage' }).then((token) => {
            element.value = token;
        });
    });

}(grecaptcha));
