@extends('base')
<!-- Breadcrumbs -->
@section('container')
    <div class="pt-24 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex items-center text-sm text-gray-500">
                <a href="index.html" class="hover:text-gold-600 transition-colors duration-300">Accueil</a>
                <span class="mx-2">/</span>
                <a href="product-list.html" class="hover:text-gold-600 transition-colors duration-300">Montres</a>
                <span class="mx-2">/</span>
                <span class="text-dark-800">Montre Chronographe Élégance</span>
            </div>
        </div>
    </div>

    <!-- Product Detail Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Product Images -->
                <div class="space-y-4">
                    <div class="relative overflow-hidden aspect-square">
                        <img id="mainImage" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                            class="w-full h-full object-cover">
                    </div>

                </div>

                <!-- Product Info -->
                <div class="space-y-8">
                    <div>
                        <h1 class="text-3xl md:text-4xl font-playfair font-bold mb-2">{{ $product->name }}</h1>
                        <p class="text-2xl text-gold-700 font-light">{{ $product->price }}</p>
                    </div>

                    <div class="space-y-4 text-gray-600">
                        <p>{{ $product->description }}</p>
                    </div>

                    <!-- Color Selection -->
                    <div class="space-y-3">
                        <h3 class="text-sm uppercase tracking-wider font-medium">Couleur: <span id="selectedColor">Or
                                Rose</span></h3>
                        <div class="flex space-x-4">
                            <button class="w-10 h-10 rounded-full bg-yellow-300 border-2 border-gold-500 focus:outline-none"
                                onclick="selectColor('Or Jaune')"></button>
                            <button
                                class="w-10 h-10 rounded-full bg-gray-300 border border-gray-300 hover:border-gold-500 focus:outline-none"
                                onclick="selectColor('Or Blanc')"></button>
                            <button
                                class="w-10 h-10 rounded-full bg-pink-200 border border-gray-300 hover:border-gold-500 focus:outline-none"
                                onclick="selectColor('Or Rose')"></button>
                        </div>
                    </div>

                    <!-- Bracelet Selection -->
                    <div class="space-y-3">
                        <h3 class="text-sm uppercase tracking-wider font-medium">Bracelet: <span
                                id="selectedBracelet">Alligator Noir</span></h3>
                        <div class="flex flex-wrap gap-3">
                            <button class="px-4 py-2 border-2 border-gold-500 text-sm bg-white focus:outline-none"
                                onclick="selectBracelet('Alligator Noir')">Alligator Noir</button>
                            <button
                                class="px-4 py-2 border border-gray-300 text-sm hover:border-gold-500 transition-colors focus:outline-none"
                                onclick="selectBracelet('Alligator Marron')">Alligator Marron</button>
                            <button
                                class="px-4 py-2 border border-gray-300 text-sm hover:border-gold-500 transition-colors focus:outline-none"
                                onclick="selectBracelet('Acier')">Acier</button>
                        </div>
                    </div>

                    <!-- Quantity -->
                    <div class="space-y-3">
                        <h3 class="text-sm uppercase tracking-wider font-medium">Quantité</h3>
                        <div class="flex items-center border border-gray-300 w-32">
                            <button id="decreaseQuantity" class="px-3 py-2 hover:bg-gray-100 transition-colors">
                                <i class="fas fa-minus text-xs"></i>
                            </button>
                            <input type="number" id="quantity" value="1" min="1"
                                class="w-full text-center border-x border-gray-300 py-2 focus:outline-none">
                            <button id="increaseQuantity" class="px-3 py-2 hover:bg-gray-100 transition-colors">
                                <i class="fas fa-plus text-xs"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Add to Cart -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button id="addToCart"
                            class="flex-1 bg-gold-600 text-white px-8 py-3 uppercase tracking-wider text-sm hover:bg-gold-700 transition-colors duration-300 flex items-center justify-center">
                            <i class="fas fa-shopping-bag mr-2"></i> Ajouter au panier
                        </button>
                        <button
                            class="w-12 h-12 border border-gray-300 flex items-center justify-center hover:border-gold-500 hover:text-gold-500 transition-colors duration-300">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>

                    <!-- Product Features -->
                    <div class="pt-6 border-t border-gray-200 space-y-4">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-check text-gold-600"></i>
                            <span>Mouvement automatique suisse</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-check text-gold-600"></i>
                            <span>Boîtier en or 18 carats</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-check text-gold-600"></i>
                            <span>Verre saphir antireflet</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-check text-gold-600"></i>
                            <span>Étanche jusqu'à 50 mètres</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-check text-gold-600"></i>
                            <span>Garantie internationale de 5 ans</span>
                        </div>
                    </div>

                    <!-- Shipping Info -->
                    <div class="pt-6 border-t border-gray-200 space-y-4">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-shipping-fast text-gold-600"></i>
                            <span>Livraison express offerte</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-box text-gold-600"></i>
                            <span>Emballage cadeau luxueux inclus</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-undo text-gold-600"></i>
                            <span>Retours gratuits sous 30 jours</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Details Tabs -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <!-- Tabs Navigation -->
                <div class="flex border-b border-gray-300 mb-8">
                    <button class="tab-btn px-6 py-3 text-sm uppercase tracking-wider font-medium tab-active"
                        data-tab="description">Description</button>
                    <button class="tab-btn px-6 py-3 text-sm uppercase tracking-wider font-medium"
                        data-tab="specifications">Caractéristiques</button>
                    <button class="tab-btn px-6 py-3 text-sm uppercase tracking-wider font-medium" data-tab="reviews">Avis
                        (12)</button>
                </div>

                <!-- Tab Content -->
                <div class="tab-content" id="description">
                    <div class="prose max-w-none">
                        <p class="mb-4">La Montre Chronographe Élégance est l'expression ultime de notre savoir-faire
                            horloger. Conçue et assemblée dans nos ateliers suisses, elle incarne l'équilibre parfait entre
                            tradition et innovation.</p>

                        <p class="mb-4">Son boîtier en or 18 carats, disponible en trois teintes distinctes, abrite un
                            mouvement chronographe automatique de haute précision, développé exclusivement pour Élysée.
                            Chaque composant est minutieusement fini à la main par nos maîtres horlogers, garantissant une
                            fiabilité et une précision exceptionnelles.</p>

                        <p class="mb-4">Le cadran guilloché à la main présente une finition soleil subtile qui joue avec
                            la lumière, révélant des reflets changeants selon l'angle d'observation. Les index appliqués et
                            les aiguilles facettées sont réalisés dans le même métal que le boîtier, assurant une harmonie
                            visuelle parfaite.</p>

                        <p class="mb-4">Le bracelet en alligator véritable est tanné selon des méthodes traditionnelles et
                            cousu à la main. Sa doublure en cuir de veau assure un confort optimal au porter. La boucle
                            déployante, gravée du logo Élysée, complète cette création d'exception.</p>

                        <p>Chaque Montre Chronographe Élégance est livrée dans un écrin en bois précieux, accompagnée d'un
                            certificat d'authenticité numéroté et signé par notre maître horloger.</p>
                    </div>
                </div>

                <div class="tab-content hidden" id="specifications">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-lg font-playfair font-semibold mb-4">Mouvement</h3>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex justify-between">
                                    <span>Type</span>
                                    <span class="font-medium">Automatique chronographe</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Calibre</span>
                                    <span class="font-medium">Élysée E-2150</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Réserve de marche</span>
                                    <span class="font-medium">72 heures</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Fréquence</span>
                                    <span class="font-medium">28'800 alt/h (4 Hz)</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Rubis</span>
                                    <span class="font-medium">35</span>
                                </li>
                            </ul>

                            <h3 class="text-lg font-playfair font-semibold mt-8 mb-4">Boîtier</h3>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex justify-between">
                                    <span>Matériau</span>
                                    <span class="font-medium">Or 18 carats</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Diamètre</span>
                                    <span class="font-medium">40 mm</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Épaisseur</span>
                                    <span class="font-medium">12.5 mm</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Verre</span>
                                    <span class="font-medium">Saphir bombé antireflet</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Fond</span>
                                    <span class="font-medium">Transparent en saphir</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Étanchéité</span>
                                    <span class="font-medium">5 ATM (50 mètres)</span>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-lg font-playfair font-semibold mb-4">Cadran</h3>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex justify-between">
                                    <span>Couleur</span>
                                    <span class="font-medium">Argenté</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Finition</span>
                                    <span class="font-medium">Guilloché main</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Index</span>
                                    <span class="font-medium">Appliqués, or 18 carats</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Aiguilles</span>
                                    <span class="font-medium">Facettées, or 18 carats</span>
                                </li>
                            </ul>

                            <h3 class="text-lg font-playfair font-semibold mt-8 mb-4">Bracelet</h3>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex justify-between">
                                    <span>Matériau</span>
                                    <span class="font-medium">Alligator véritable</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Couleur</span>
                                    <span class="font-medium">Noir ou marron</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Boucle</span>
                                    <span class="font-medium">Déployante, or 18 carats</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Largeur</span>
                                    <span class="font-medium">20 mm</span>
                                </li>
                            </ul>

                            <h3 class="text-lg font-playfair font-semibold mt-8 mb-4">Fonctions</h3>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex justify-between">
                                    <span>Heures, minutes, secondes</span>
                                    <span class="font-medium">Oui</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Chronographe</span>
                                    <span class="font-medium">Oui</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Date</span>
                                    <span class="font-medium">À 6 heures</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Tachymètre</span>
                                    <span class="font-medium">Sur le rehaut</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="tab-content hidden" id="reviews">
                    <div class="space-y-8">
                        <!-- Review Summary -->
                        <div class="flex items-center justify-between bg-white p-6 rounded-sm shadow-sm">
                            <div>
                                <div class="flex items-center mb-2">
                                    <div class="text-gold-500 flex">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="ml-2 font-medium">4.8/5</span>
                                </div>
                                <p class="text-gray-600">Basé sur 12 avis</p>
                            </div>
                            <button
                                class="px-6 py-2 bg-gold-600 text-white text-sm uppercase tracking-wider hover:bg-gold-700 transition-colors duration-300">
                                Écrire un avis
                            </button>
                        </div>

                        <!-- Individual Reviews -->
                        <div class="space-y-6">
                            <!-- Review 1 -->
                            <div class="bg-white p-6 rounded-sm shadow-sm">
                                <div class="flex justify-between mb-4">
                                    <div>
                                        <h4 class="font-medium">Jean-Philippe Dubois</h4>
                                        <p class="text-sm text-gray-500">Il y a 2 mois</p>
                                    </div>
                                    <div class="text-gold-500 flex">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <h5 class="font-medium mb-2">Un chef-d'œuvre horloger</h5>
                                <p class="text-gray-600">Cette montre est tout simplement exceptionnelle. La finition est
                                    impeccable, le mouvement d'une précision remarquable, et l'esthétique intemporelle.
                                    C'est un investissement que je ne regrette absolument pas.</p>
                            </div>

                            <!-- Review 2 -->
                            <div class="bg-white p-6 rounded-sm shadow-sm">
                                <div class="flex justify-between mb-4">
                                    <div>
                                        <h4 class="font-medium">Sophie Laurent</h4>
                                        <p class="text-sm text-gray-500">Il y a 3 mois</p>
                                    </div>
                                    <div class="text-gold-500 flex">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <h5 class="font-medium mb-2">Élégance et précision</h5>
                                <p class="text-gray-600">J'ai offert cette montre à mon mari pour notre anniversaire de
                                    mariage. Il est absolument ravi. Le service client a été exemplaire, avec une
                                    présentation personnalisée et des conseils avisés. Une expérience d'achat à la hauteur
                                    du produit.</p>
                            </div>

                            <!-- Review 3 -->
                            <div class="bg-white p-6 rounded-sm shadow-sm">
                                <div class="flex justify-between mb-4">
                                    <div>
                                        <h4 class="font-medium">Pierre Moreau</h4>
                                        <p class="text-sm text-gray-500">Il y a 5 mois</p>
                                    </div>
                                    <div class="text-gold-500 flex">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <h5 class="font-medium mb-2">Presque parfaite</h5>
                                <p class="text-gray-600">La montre est magnifique et le mouvement très précis. Seul petit
                                    bémol, le bracelet qui nécessite un temps d'adaptation. Cela dit, le service après-vente
                                    a été très réactif et m'a proposé une solution adaptée. Je recommande vivement.</p>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <div class="flex justify-center mt-8">
                            <a href="#"
                                class="w-10 h-10 flex items-center justify-center border border-gold-500 text-gold-500 mx-1">1</a>
                            <a href="#"
                                class="w-10 h-10 flex items-center justify-center border border-gray-300 hover:border-gold-500 hover:text-gold-500 transition-colors duration-300 mx-1">2</a>
                            <a href="#"
                                class="w-10 h-10 flex items-center justify-center border border-gray-300 hover:border-gold-500 hover:text-gold-500 transition-colors duration-300 mx-1">3</a>
                            <span class="w-10 h-10 flex items-center justify-center mx-1">...</span>
                            <a href="#"
                                class="w-10 h-10 flex items-center justify-center border border-gray-300 hover:border-gold-500 hover:text-gold-500 transition-colors duration-300 mx-1">
                                <i class="fas fa-chevron-right text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-playfair font-bold mb-12 text-center">
                Vous aimerez aussi
                <span class="block h-1 w-24 bg-gold-500 mx-auto mt-4"></span>
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Product 1 -->
                <div class="product-card group relative overflow-hidden shadow-lg hover-scale">
                    <div class="relative overflow-hidden aspect-square">
                        <img src="https://images.unsplash.com/photo-1548171915-e5507eba1bc6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"
                            alt="Montre Classique" class="w-full h-full object-cover transition-transform duration-700">
                        <div
                            class="product-overlay absolute inset-0 bg-black bg-opacity-20 opacity-0 transition-opacity duration-500 flex items-center justify-center">
                            <a href="#"
                                class="px-6 py-2 bg-white text-dark-800 font-medium hover:bg-gold-500 hover:text-white transition-colors duration-300">
                                Découvrir
                            </a>
                        </div>
                    </div>
                    <div class="p-4 bg-white">
                        <h3 class="text-lg font-playfair font-semibold mb-1">Montre Classique</h3>
                        <p class="text-gray-600 mb-2 text-sm">Or blanc, bracelet cuir</p>
                        <div class="flex justify-between items-center">
                            <span class="text-gold-700 font-medium">€3,850</span>
                            <a href="#" class="text-dark-800 hover:text-gold-600 transition-colors duration-300">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card group relative overflow-hidden shadow-lg hover-scale">
                    <div class="relative overflow-hidden aspect-square">
                        <img src="https://images.unsplash.com/photo-1612817159949-195b6eb9e31a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"
                            alt="Montre Squelette" class="w-full h-full object-cover transition-transform duration-700">
                        <div
                            class="product-overlay absolute inset-0 bg-black bg-opacity-20 opacity-0 transition-opacity duration-500 flex items-center justify-center">
                            <a href="#"
                                class="px-6 py-2 bg-white text-dark-800 font-medium hover:bg-gold-500 hover:text-white transition-colors duration-300">
                                Découvrir
                            </a>
                        </div>
                    </div>
                    <div class="p-4 bg-white">
                        <h3 class="text-lg font-playfair font-semibold mb-1">Montre Squelette</h3>
                        <p class="text-gray-600 mb-2 text-sm">Or rose, bracelet alligator</p>
                        <div class="flex justify-between items-center">
                            <span class="text-gold-700 font-medium">€6,750</span>
                            <a href="#" class="text-dark-800 hover:text-gold-600 transition-colors duration-300">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card group relative overflow-hidden shadow-lg hover-scale">
                    <div class="relative overflow-hidden aspect-square">
                        <img src="https://images.unsplash.com/photo-1614164185128-e4ec99c436d7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"
                            alt="Montre Sportive" class="w-full h-full object-cover transition-transform duration-700">
                        <div
                            class="product-overlay absolute inset-0 bg-black bg-opacity-20 opacity-0 transition-opacity duration-500 flex items-center justify-center">
                            <a href="#"
                                class="px-6 py-2 bg-white text-dark-800 font-medium hover:bg-gold-500 hover:text-white transition-colors duration-300">
                                Découvrir
                            </a>
                        </div>
                    </div>
                    <div class="p-4 bg-white">
                        <h3 class="text-lg font-playfair font-semibold mb-1">Montre Sportive</h3>
                        <p class="text-gray-600 mb-2 text-sm">Acier, bracelet caoutchouc</p>
                        <div class="flex justify-between items-center">
                            <span class="text-gold-700 font-medium">€4,250</span>
                            <a href="#" class="text-dark-800 hover:text-gold-600 transition-colors duration-300">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="product-card group relative overflow-hidden shadow-lg hover-scale">
                    <div class="relative overflow-hidden aspect-square">
                        <img src="https://images.unsplash.com/photo-1619946794135-5bc917a27793?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"
                            alt="Montre Tourbillon" class="w-full h-full object-cover transition-transform duration-700">
                        <div
                            class="product-overlay absolute inset-0 bg-black bg-opacity-20 opacity-0 transition-opacity duration-500 flex items-center justify-center">
                            <a href="#"
                                class="px-6 py-2 bg-white text-dark-800 font-medium hover:bg-gold-500 hover:text-white transition-colors duration-300">
                                Découvrir
                            </a>
                        </div>
                    </div>
                    <div class="p-4 bg-white">
                        <h3 class="text-lg font-playfair font-semibold mb-1">Montre Tourbillon</h3>
                        <p class="text-gray-600 mb-2 text-sm">Platine, bracelet alligator</p>
                        <div class="flex justify-between items-center">
                            <span class="text-gold-700 font-medium">€12,500</span>
                            <a href="#" class="text-dark-800 hover:text-gold-600 transition-colors duration-300">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@section('container')

    <script>
        // Image Gallery
        function changeImage(src) {
            document.getElementById('mainImage').src = src;

            // Update thumbnails border
            const thumbnails = document.querySelectorAll('.zoom-gallery > div');
            thumbnails.forEach(thumb => {
                if (thumb.querySelector('img').src === src) {
                    thumb.classList.add('border-2', 'border-gold-500');
                    thumb.classList.remove('border', 'border-gray-200', 'hover:border-gold-500');
                } else {
                    thumb.classList.remove('border-2', 'border-gold-500');
                    thumb.classList.add('border', 'border-gray-200', 'hover:border-gold-500');
                }
            });
        }

        // Color Selection
        function selectColor(color) {
            document.getElementById('selectedColor').textContent = color;

            // Update buttons
            const colorButtons = document.querySelectorAll('[onclick^="selectColor"]');
            colorButtons.forEach(btn => {
                if (btn.getAttribute('onclick').includes(color)) {
                    btn.classList.add('border-2', 'border-gold-500');
                    btn.classList.remove('border', 'border-gray-300', 'hover:border-gold-500');
                } else {
                    btn.classList.remove('border-2', 'border-gold-500');
                    btn.classList.add('border', 'border-gray-300', 'hover:border-gold-500');
                }
            });
        }

        // Bracelet Selection
        function selectBracelet(bracelet) {
            document.getElementById('selectedBracelet').textContent = bracelet;

            // Update buttons
            const braceletButtons = document.querySelectorAll('[onclick^="selectBracelet"]');
            braceletButtons.forEach(btn => {
                if (btn.getAttribute('onclick').includes(bracelet)) {
                    btn.classList.add('border-2', 'border-gold-500');
                    btn.classList.remove('border', 'border-gray-300', 'hover:border-gold-500');
                } else {
                    btn.classList.remove('border-2', 'border-gold-500');
                    btn.classList.add('border', 'border-gray-300', 'hover:border-gold-500');
                }
            });
        }

        // Quantity Selector
        document.getElementById('decreaseQuantity').addEventListener('click', function() {
            const quantityInput = document.getElementById('quantity');
            const currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        });

        document.getElementById('increaseQuantity').addEventListener('click', function() {
            const quantityInput = document.getElementById('quantity');
            const currentValue = parseInt(quantityInput.value);
            quantityInput.value = currentValue + 1;
        });

        // Tabs
        document.querySelectorAll('.tab-btn').forEach(button => {
            button.addEventListener('click', () => {
                const tabId = button.getAttribute('data-tab');

                // Hide all tab contents
                document.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.add('hidden');
                });

                // Show selected tab content
                document.getElementById(tabId).classList.remove('hidden');

                // Update active tab
                document.querySelectorAll('.tab-btn').forEach(btn => {
                    btn.classList.remove('tab-active');
                });
                button.classList.add('tab-active');
            });
        });

        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('shadow-md');
            } else {
                header.classList.remove('shadow-md');
            }
        });

        // Add to Cart Animation
        document.getElementById('addToCart').addEventListener('click', function() {
            this.innerHTML = '<i class="fas fa-check mr-2"></i> Ajouté au panier';
            this.classList.remove('bg-gold-600', 'hover:bg-gold-700');
            this.classList.add('bg-green-600', 'hover:bg-green-700');

            setTimeout(() => {
                this.innerHTML = '<i class="fas fa-shopping-bag mr-2"></i> Ajouter au panier';
                this.classList.remove('bg-green-600', 'hover:bg-green-700');
                this.classList.add('bg-gold-600', 'hover:bg-gold-700');
            }, 2000);
        });
    </script>
    </body>

    </html>
