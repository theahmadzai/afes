console.log('Stripe');
(function (stripe) {
    var key = 'pk_test_WCJgzUr95cAKQetKPojWsQJ3001MZPlMq7';
    var checkoutButton = document.getElementById('checkout-button-plan_FcykeBCl5kHM5g');

    if (typeof stripe === 'undefined') {
        console.error('Cannot find Stripe API.');
        return;
    }
    console.log('Clicked');

    stripe = stripe(key);

    checkoutButton.addEventListener('click', function () {

        stripe.redirectToCheckout({
            items: [{ plan: 'plan_FcykeBCl5kHM5g', quantity: 1 }],

            // Do not rely on the redirect to the successUrl for fulfilling
            // purchases, customers may not always reach the success_url after
            // a successful payment.
            // Instead use one of the strategies described in
            // https://stripe.com/docs/payments/checkout/fulfillment
            successUrl: 'http://127.0.0.1:8000/membership/success',
            cancelUrl: 'http://127.0.0.1:8000/membership/cancel',
        }).then(function (result) {
            if (result.error) {
                // If `redirectToCheckout` fails due to a browser or network
                // error, display the localized error message to your customer.
                var displayError = document.getElementById('error-message');
                displayError.textContent = result.error.message;
            }
        });

    });
}(Stripe));
