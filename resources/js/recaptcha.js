(function (grecaptcha) {

    const key = '6LfYwq8UAAAAAAW-MH32BTfFsAmaG1zV2dJNGjPk';
    const element = document.getElementById('g-recaptcha-response');

    if (grecaptcha === undefined) {
        return;
    }

    if (!element) {
        console.error('Cannot find Google ReCaptcha target element.');
        return;
    }

    grecaptcha.ready(() => {
        grecaptcha.execute(key, { action: 'homepage' }).then((token) => {
            element.value = token;
        });
    });

}(grecaptcha));
