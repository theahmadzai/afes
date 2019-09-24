(function (stripe) {
    if (stripe === undefined) {
        return;
    }

    stripe = stripe('pk_test_WCJgzUr95cAKQetKPojWsQJ3001MZPlMq7');

    /**
     * Settings
     */
    // let student = document.getElementById('checkout-button-plan_Fd3E3WHL2lQhYl');
    // let professional = document.getElementById('checkout-button-plan_Fd3Fdc2M1zaKmG');

    // let checkout = function () {
    //     let successUrl = 'http://localhost:8000/membership/success';
    //     let cancelUrl = 'http://localhost:8000/membership/cancel';
    //     let displayError = document.getElementById('error-message');

    //     stripe.redirectToCheckout({
    //         items: [{ plan: this.plan, quantity: 1 }],
    //         successUrl,
    //         cancelUrl,
    //     }).then((result) => {
    //         if (result.error) {
    //             // If `redirectToCheckout` fails due to a browser or network
    //             // error, display the localized error message to your customer.
    //             displayError.textContent = result.error.message;
    //         }
    //     });
    // };

    // student.addEventListener('click', checkout.bind({ plan: 'plan_Fd3E3WHL2lQhYl' }));
    // professional.addEventListener('click', checkout.bind({ plan: 'plan_Fd3Fdc2M1zaKmG' }));

    //--------
    const card = stripe.elements().create('card', {
        style: {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        }
    });
    card.mount('#card-element');

    const cardHolderName = document.getElementById('card-holder-name');
    const buttonElement = document.getElementById('card-button');
    const errorElement = document.getElementById('card-errors');
    const formElement = document.getElementById('payment-form');
    const paymentMethodElement = document.getElementById('payment-method');
    const paymentNameElement = document.getElementById('payment-name');

    const clientSecret = buttonElement.dataset.secret;

    card.addEventListener('change', (event) => {
        errorElement.textContent = event.error ? event.error.message : '';
    });

    formElement.addEventListener('submit', async (event) => {
        event.preventDefault();

        const { setupIntent, error } = await stripe.handleCardSetup(clientSecret, card, {
            payment_method_data: {
                billing_details: { name: paymentNameElement.value }
            }
        });

        if (error) {
            errorElement.textContent = error.message;
        } else {
            paymentMethodElement.setAttribute('value', setupIntent.payment_method);
            formElement.submit();
        }
    });

}(Stripe));
