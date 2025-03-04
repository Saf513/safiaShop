<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement avec Stripe</title>
    <script src="https://js.stripe.com/v3/"></script>
    @vite('resources/css/app.css') 
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">

    <div class="bg-white p-6 rounded-lg shadow-md w-96">
        <h2 class="text-xl font-semibold mb-4">Paiement sécurisé</h2>
        <form id="payment-form">
            <div id="card-element" class="p-3 border rounded-lg"></div>
            <button id="pay-button" class="mt-4 w-full bg-blue-600 text-white py-2 rounded-lg">Payer</button>
            <p id="payment-message" class="text-red-500 mt-2 hidden"></p>
        </form>
    </div>

    <script>
        const stripe = Stripe("{{ env('STRIPE_PUBLIC_KEY') }}");
        const elements = stripe.elements();
        const cardElement = elements.create("card");
        cardElement.mount("#card-element");

        document.getElementById("payment-form").addEventListener("submit", async (e) => {
            e.preventDefault();
            const { clientSecret } = await fetch("{{ route('payment.intent') }}", { method: "POST" }).then(res => res.json());

            const { error, paymentIntent } = await stripe.confirmCardPayment(clientSecret, {
                payment_method: { card: cardElement }
            });

            if (error) {
                document.getElementById("payment-message").textContent = error.message;
                document.getElementById("payment-message").classList.remove("hidden");
            } else {
                alert("Paiement réussi ! 🎉");
            }
        });
    </script>

</body>
</html>
