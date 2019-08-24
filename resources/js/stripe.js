(function (stripe) {
    if (stripe === undefined) {
        return;
    }

    stripe = stripe('pk_test_WCJgzUr95cAKQetKPojWsQJ3001MZPlMq7');

    /**
     * Settings
     */
    let student = document.getElementById('checkout-button-plan_Fd3E3WHL2lQhYl');
    let professional = document.getElementById('checkout-button-plan_Fd3Fdc2M1zaKmG');

    let checkout = function () {
        let successUrl = 'http://127.0.0.1:8000/membership/success';
        let cancelUrl = 'http://127.0.0.1:8000/membership/cancel';
        let displayError = document.getElementById('error-message');

        stripe.redirectToCheckout({
            items: [{ plan: this.plan, quantity: 1 }],
            successUrl,
            cancelUrl,
        }).then((result) => {
            if (result.error) {
                // If `redirectToCheckout` fails due to a browser or network
                // error, display the localized error message to your customer.
                displayError.textContent = result.error.message;
            }
        });
    };

    student.addEventListener('click', checkout.bind({ plan: 'plan_Fd3E3WHL2lQhYl' }));
    professional.addEventListener('click', checkout.bind({ plan: 'plan_Fd3Fdc2M1zaKmG' }));

}(Stripe));
