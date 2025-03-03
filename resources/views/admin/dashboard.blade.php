<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Luxe</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white p-6">
            <h1 class="text-2xl font-bold mb-8">LuxeBoutique</h1>
            <nav>
                <a href="#"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-800 hover:text-gold-500">
                    Tableau de bord
                </a>
                <a href="#"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-800 hover:text-gold-500">
                    Produits
                </a>
                <a href="#"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-800 hover:text-gold-500">
                    Clients
                </a>
                <a href="#"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-800 hover:text-gold-500">
                    Commandes
                </a>
                <a href="#"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-800 hover:text-gold-500">
                    Rapports
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8 overflow-y-auto">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-4xl font-bold text-gray-800">Tableau de Bord</h1>
                <a href="{{ route('products.create') }}" 
                   class="bg-gold-500 hover:bg-gold-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    Ajouter un Produit
                </a>
            </div>

            <!-- Stats Overview -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-gold-500">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Ventes Totales</h3>
                    <p class="text-3xl font-bold text-gold-600">€45,289</p>
                    <p class="text-sm text-gray-500 mt-2">+12% par rapport au mois dernier</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-gold-500">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Nouveaux Clients</h3>
                    <p class="text-3xl font-bold text-gold-600">128</p>
                    <p class="text-sm text-gray-500 mt-2">+5% par rapport au mois dernier</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-gold-500">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Commandes en Attente</h3>
                    <p class="text-3xl font-bold text-gold-600">23</p>
                    <p class="text-sm text-gray-500 mt-2">-2% par rapport à hier</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-gold-500">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Taux de Conversion</h3>
                    <p class="text-3xl font-bold text-gold-600">3.6%</p>
                    <p class="text-sm text-gray-500 mt-2">+0.8% par rapport à la semaine dernière</p>
                </div>
            </div>

            <!-- Sales Chart -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Aperçu des Ventes</h2>
                <canvas id="salesChart" width="400" height="200"></canvas>
            </div>

            <!-- Tabs for Products and Customers -->
            <div x-data="{ activeTab: 'products' }" class="bg-white rounded-lg shadow-md mb-8">
                <div class="border-b border-gray-200">
                    <nav class="-mb-px flex">
                        <button @click="activeTab = 'products'"
                            :class="{ 'border-gold-500 text-gold-600': activeTab === 'products' }"
                            class="w-1/2 py-4 px-1 text-center border-b-2 font-medium text-sm">
                            Produits
                        </button>
                        <button @click="activeTab = 'customers'"
                            :class="{ 'border-gold-500 text-gold-600': activeTab === 'customers' }"
                            class="w-1/2 py-4 px-1 text-center border-b-2 font-medium text-sm">
                            Clients
                        </button>
                    </nav>
                </div>
                <div class="p-6">
                    <!-- Products Table -->
                    <div x-show="activeTab === 'products'">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Produits Récents</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Nom</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Catégorie</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Prix</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Stock</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($products as $product)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full object-cover"
                                                        src="{{ asset('storage/' . $product->image) }}" alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $product->name }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{ $product->category }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">
                                                    €{{ number_format($product->price, 2) }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $product->stock > 10 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                    {{ $product->stock }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <form action="{{ route('products.edit', $product) }}" method="POST"
                                                onsubmit="return confirm('Voulez-vous vraiment modifier ce produit ?')">
                                                @csrf
                                                <button class="text-indigo-600 hover:text-indigo-900 mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path
                                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                                    </svg>
                                                </button>
                                            </form>
                                                <form action="{{ route('products.destroy', $product) }}" method="POST"
                                                    onsubmit="return confirm('Voulez-vous vraiment supprimer ce produit ?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="text-red-600 hover:text-red-900 inline-flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                clip-rule="evenodd" />
                                                        </svg>

                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Customers Table -->
                    {{-- <div x-show="activeTab === 'customers'">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Clients Récents</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Commandes</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Dépensé</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($customers as $customer)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full object-cover" src="{{ $customer->avatar }}" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $customer->name }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $customer->email }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $customer->orders_count }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            €{{ number_format($customer->total_spent, 2) }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <button class="text-indigo-600 hover:text-indigo-900 mr-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                                </svg>
                                  />
                                                </svg>
                                            </button>
                                            <button class="text-red-600 hover:text-red-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> --}}
                </div>
            </div>
    </div>
    </main>
    </div>

    <script>
        // Sales Chart
        var ctx = document.getElementById('salesChart').getContext('2d');
        var salesChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin'],
                datasets: [{
                    label: 'Ventes mensuelles',
                    data: [12000, 19000, 15000, 25000, 22000, 30000],
                    backgroundColor: 'rgba(218, 165, 32, 0.2)',
                    borderColor: 'rgba(218, 165, 32, 1)',
                    borderWidth: 2,
                    pointBackgroundColor: 'rgba(218, 165, 32, 1)',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 5,
                    pointHoverRadius: 7
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value, index, values) {
                                return '€' + value.toLocaleString();
                            }
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>
</body>

</html>
