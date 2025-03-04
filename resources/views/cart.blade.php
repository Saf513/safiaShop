<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Panier | ÉLYSÉE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=Montserrat:wght@200;300;400;500;600;700&family=Cormorant+Garamond:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'playfair': ['"Playfair Display"', 'serif'],
                        'sans': ['Montserrat', 'sans-serif'],
                        'cormorant': ['"Cormorant Garamond"', 'serif'],
                    },
                    colors: {
                        'gold': {
                            50: '#fbf8f1',
                            100: '#f7f1e3',
                            200: '#efe2c6',
                            300: '#e7d3a9',
                            400: '#dfc48c',
                            500: '#d7b56f',
                            600: '#caa65d',
                            700: '#b89651',
                            800: '#a68649',
                            900: '#94764a',
                        },
                        'dark': {
                            900: '#0f0f0f',
                            800: '#1a1a1a',
                            700: '#2c2c2c',
                            600: '#3d3d3d',
                        }
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.8s ease-in-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                    },
                }
            }
        }
    </script>
    <style>
        .gold-gradient {
            background: linear-gradient(135deg, #d7b56f 0%, #f7f1e3 50%, #d7b56f 100%);
        }
        
        .gold-border {
            border-image: linear-gradient(to right, #d7b56f, #f7f1e3, #d7b56f) 1;
        }
        
        .hover-scale {
            transition: transform 0.5s ease, box-shadow 0.5s ease;
        }
        
        .hover-scale:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .btn-hover-effect {
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn-hover-effect:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 0;
            background-color: rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            z-index: -1;
        }
        
        .btn-hover-effect:hover:after {
            height: 100%;
        }
        
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #d7b56f;
        }
        
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #b89651;
        }
        
        .quantity-input::-webkit-inner-spin-button,
        .quantity-input::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        
        .quantity-input {
            -moz-appearance: textfield;
        }
        
        .checkout-progress-bar {
            height: 2px;
            background: linear-gradient(to right, #d7b56f 50%, #e5e7eb 50%);
            background-size: 200% 100%;
            background-position: right bottom;
            transition: all 0.5s ease-out;
        }
        
        .checkout-progress-bar.step-1 {
            background-position: right bottom;
        }
        
        .checkout-progress-bar.step-2 {
            background-position: left bottom;
        }
    </style>
</head>
<body class="font-sans text-dark-800 bg-white">
    <!-- Notification Bar -->
    <div class="bg-dark-900 text-white text-center py-3 text-sm font-light tracking-wider">
        <p>Livraison express offerte pour toute commande supérieure à 500€</p>
    </div>

    <!-- Header -->
    <header class="w-full z-50 transition-all duration-500 bg-white bg-opacity-95 shadow-sm">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="flex justify-between items-center py-5">
                <!-- Logo -->
                <a href="index.html" class="flex items-center">
                    <span class="text-3xl font-playfair font-bold tracking-tighter">ÉLYSÉE</span>
                </a>
                
                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-10">
                    <a href="index.html" class="text-dark-800 hover:text-gold-600 font-medium transition-colors duration-300">Accueil</a>
                    <a href="products-list.html" class="text-dark-800 hover:text-gold-600 font-medium transition-colors duration-300">Collections</a>
                    <a href="#" class="text-dark-800 hover:text-gold-600 font-medium transition-colors duration-300">Notre Histoire</a>
                    <a href="#" class="text-dark-800 hover:text-gold-600 font-medium transition-colors duration-300">Savoir-Faire</a>
                    <a href="#" class="text-dark-800 hover:text-gold-600 font-medium transition-colors duration-300">Contact</a>
                </nav>
                
                <!-- Icons -->
                <div class="flex items-center space-x-6">
                    <a href="#" class="text-dark-800 hover:text-gold-600 transition-colors duration-300">
                        <i class="fas fa-search text-lg"></i>
                    </a>
                    <a href="#" class="text-dark-800 hover:text-gold-600 transition-colors duration-300">
                        <i class="fas fa-user text-lg"></i>
                    </a>
                    <a href="cart.html" class="text-gold-600 transition-colors duration-300 relative">
                        <i class="fas fa-shopping-bag text-lg"></i>
                        <span class="absolute -top-2 -right-2 bg-gold-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                    </a>
                    
                    <!-- Mobile Menu Button -->
                    <button class="md:hidden text-dark-800 hover:text-gold-600 transition-colors duration-300">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Checkout Progress -->
    <div class="bg-white border-b border-gray-100">
        <div class="container mx-auto px-6 lg:px-12 py-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-medium">Votre Commande</h2>
                <div class="flex items-center space-x-2 text-sm text-gray-500">
                    <span class="text-gold-600 font-medium">1. Panier</span>
                    <i class="fas fa-chevron-right text-xs"></i>
                    <span>2. Paiement</span>
                </div>
            </div>
            <div class="checkout-progress-bar step-1 w-full"></div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="py-16 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Cart Items -->
                <div class="lg:w-2/3 animate-fade-in">
                    <div class="bg-white p-8 shadow-sm mb-8 rounded-sm">
                        <h2 class="text-2xl font-playfair font-bold mb-8 pb-4 border-b border-gray-100">Votre Sélection</h2>
                        
                        <!-- Cart Item 1 -->
                        <div class="flex flex-col md:flex-row py-8 border-b border-gray-100 animate-slide-up" style="animation-delay: 0.1s;">
                            <div class="md:w-1/3 mb-6 md:mb-0 md:pr-8">
                                <div class="relative overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                                         alt="La Chronographe" 
                                         class="w-full h-auto object-cover transition-transform duration-700 hover:scale-105">
                                </div>
                            </div>
                            <div class="md:w-2/3 flex flex-col justify-between">
                                <div>
                                    <div class="flex justify-between items-start mb-2">
                                        <h3 class="text-xl font-playfair font-semibold">La Chronographe</h3>
                                        <span class="text-xl font-cormorant font-light text-gold-700">€4,950</span>
                                    </div>
                                    <p class="text-gray-500 text-sm mb-4">Réf. ELY-CHR-001</p>
                                    <div class="flex flex-wrap gap-6 mb-6">
                                        <div>
                                            <span class="text-sm text-gray-600">Couleur: </span>
                                            <span class="font-medium">Or</span>
                                        </div>
                                        <div>
                                            <span class="text-sm text-gray-600">Bracelet: </span>
                                            <span class="font-medium">Cuir d'alligator</span>
                                        </div>
                                        <div>
                                            <span class="text-sm text-gray-600">Gravure: </span>
                                            <span class="font-medium">Personnalisée</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center border border-gray-200 rounded-sm">
                                        <button class="quantity-btn px-4 py-2 text-gray-500 hover:text-gold-600 transition-colors duration-300">
                                            <i class="fas fa-minus text-xs"></i>
                                        </button>
                                        <input type="number" value="1" min="1" class="quantity-input w-12 text-center border-x border-gray-200 py-2 focus:outline-none">
                                        <button class="quantity-btn px-4 py-2 text-gray-500 hover:text-gold-600 transition-colors duration-300">
                                            <i class="fas fa-plus text-xs"></i>
                                        </button>
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <button class="text-gray-400 hover:text-gold-600 transition-colors duration-300">
                                            <i class="far fa-heart"></i>
                                        </button>
                                        <button class="text-gray-400 hover:text-red-500 transition-colors duration-300">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Cart Item 2 -->
                        <div class="flex flex-col md:flex-row py-8 border-b border-gray-100 animate-slide-up" style="animation-delay: 0.2s;">
                            <div class="md:w-1/3 mb-6 md:mb-0 md:pr-8">
                                <div class="relative overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1573408301185-9146fe634ad0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                         alt="Le Bracelet Rivière" 
                                         class="w-full h-auto object-cover transition-transform duration-700 hover:scale-105">
                                </div>
                            </div>
                            <div class="md:w-2/3 flex flex-col justify-between">
                                <div>
                                    <div class="flex justify-between items-start mb-2">
                                        <h3 class="text-xl font-playfair font-semibold">Le Bracelet Rivière</h3>
                                        <span class="text-xl font-cormorant font-light text-gold-700">€12,500</span>
                                    </div>
                                    <p class="text-gray-500 text-sm mb-4">Réf. ELY-BRC-007</p>
                                    <div class="flex flex-wrap gap-6 mb-6">
                                        <div>
                                            <span class="text-sm text-gray-600">Métal: </span>
                                            <span class="font-medium">Or Blanc 18k</span>
                                        </div>
                                        <div>
                                            <span class="text-sm text-gray-600">Pierres: </span>
                                            <span class="font-medium">Diamants (5.2 carats)</span>
                                        </div>
                                        <div>
                                            <span class="text-sm text-gray-600">Taille: </span>
                                            <span class="font-medium">Ajustable</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center border border-gray-200 rounded-sm">
                                        <button class="quantity-btn px-4 py-2 text-gray-500 hover:text-gold-600 transition-colors duration-300">
                                            <i class="fas fa-minus text-xs"></i>
                                        </button>
                                        <input type="number" value="1" min="1" class="quantity-input w-12 text-center border-x border-gray-200 py-2 focus:outline-none">
                                        <button class="quantity-btn px-4 py-2 text-gray-500 hover:text-gold-600 transition-colors duration-300">
                                            <i class="fas fa-plus text-xs"></i>
                                        </button>
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <button class="text-gray-400 hover:text-gold-600 transition-colors duration-300">
                                            <i class="far fa-heart"></i>
                                        </button>
                                        <button class="text-gray-400 hover:text-red-500 transition-colors duration-300">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Cart Item 3 -->
                        <div class="flex flex-col md:flex-row py-8 animate-slide-up" style="animation-delay: 0.3s;">
                            <div class="md:w-1/3 mb-6 md:mb-0 md:pr-8">
                                <div class="relative overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1611085583191-a3b181a88401?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                                         alt="L'Essence Mystique" 
                                         class="w-full h-auto object-cover transition-transform duration-700 hover:scale-105">
                                </div>
                            </div>
                            <div class="md:w-2/3 flex flex-col justify-between">
                                <div>
                                    <div class="flex justify-between items-start mb-2">
                                        <h3 class="text-xl font-playfair font-semibold">L'Essence Mystique</h3>
                                        <span class="text-xl font-cormorant font-light text-gold-700">€320</span>
                                    </div>
                                    <p class="text-gray-500 text-sm mb-4">Réf. ELY-PRF-003</p>
                                    <div class="flex flex-wrap gap-6 mb-6">
                                        <div>
                                            <span class="text-sm text-gray-600">Volume: </span>
                                            <span class="font-medium">100ml</span>
                                        </div>
                                        <div>
                                            <span class="text-sm text-gray-600">Concentration: </span>
                                            <span class="font-medium">Parfum</span>
                                        </div>
                                        <div>
                                            <span class="text-sm text-gray-600">Coffret: </span>
                                            <span class="font-medium">Édition Limitée</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center border border-gray-200 rounded-sm">
                                        <button class="quantity-btn px-4 py-2 text-gray-500 hover:text-gold-600 transition-colors duration-300">
                                            <i class="fas fa-minus text-xs"></i>
                                        </button>
                                        <input type="number" value="1" min="1" class="quantity-input w-12 text-center border-x border-gray-200 py-2 focus:outline-none">
                                        <button class="quantity-btn px-4 py-2 text-gray-500 hover:text-gold-600 transition-colors duration-300">
                                            <i class="fas fa-plus text-xs"></i>
                                        </button>
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <button class="text-gray-400 hover:text-gold-600 transition-colors duration-300">
                                            <i class="far fa-heart"></i>
                                        </button>
                                        <button class="text-gray-400 hover:text-red-500 transition-colors duration-300">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Gift Options -->
                    <div class="bg-white p-8 shadow-sm mb-8 rounded-sm animate-slide-up" style="animation-delay: 0.4s;">
                        <h3 class="text-xl font-playfair font-medium mb-6">Options d'Emballage</h3>
                        <div class="flex flex-col md:flex-row gap-6">
                            <div class="flex-1 border border-gray-200 p-6 rounded-sm hover-scale cursor-pointer">
                                <div class="flex items-center mb-4">
                                    <input type="radio" id="gift-standard" name="gift-option" class="mr-3 accent-gold-600" checked>
                                    <label for="gift-standard" class="font-medium">Écrin Signature</label>
                                </div>
                                <p class="text-gray-600 text-sm mb-4">Chaque création est présentée dans notre écrin signature, accompagnée d'un certificat d'authenticité.</p>
                                <p class="text-gold-700 font-medium">Inclus</p>
                            </div>
                            <div class="flex-1 border border-gray-200 p-6 rounded-sm hover-scale cursor-pointer">
                                <div class="flex items-center mb-4">
                                    <input type="radio" id="gift-premium" name="gift-option" class="mr-3 accent-gold-600">
                                    <label for="gift-premium" class="font-medium">Coffret Cadeau Premium</label>
                                </div>
                                <p class="text-gray-600 text-sm mb-4">Un coffret luxueux avec ruban de soie, carte personnalisée et bouquet de fleurs fraîches livré avec votre commande.</p>
                                <p class="text-gold-700 font-medium">+€75</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Personalization -->
                    <div class="bg-white p-8 shadow-sm rounded-sm animate-slide-up" style="animation-delay: 0.5s;">
                        <h3 class="text-xl font-playfair font-medium mb-6">Message Personnalisé</h3>
                        <textarea placeholder="Ajoutez un message qui accompagnera votre commande..." class="w-full p-4 border border-gray-200 rounded-sm focus:outline-none focus:ring-2 focus:ring-gold-500 focus:border-transparent resize-none h-32"></textarea>
                        <p class="text-gray-500 text-sm mt-2">Maximum 200 caractères</p>
                    </div>
                </div>
                
                <!-- Order Summary -->
                <div class="lg:w-1/3 animate-fade-in" style="animation-delay: 0.3s;">
                    <div class="bg-white p-8 shadow-sm rounded-sm sticky top-24">
                        <h2 class="text-2xl font-playfair font-bold mb-8 pb-4 border-b border-gray-100">Récapitulatif</h2>
                        
                        <div class="space-y-4 mb-8">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Sous-total</span>
                                <span class="font-medium">€17,770.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Livraison</span>
                                <span class="text-green-600 font-medium">Offerte</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Taxes</span>
                                <span class="font-medium">€0.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Assurance</span>
                                <span class="font-medium">Incluse</span>
                            </div>
                        </div>
                        
                        <div class="border-t border-b border-gray-100 py-4 mb-8">
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-medium">Total</span>
                                <span class="text-xl font-playfair font-semibold">€17,770.00</span>
                            </div>
                        </div>
                        
                        <!-- Promo Code -->
                        <div class="mb-8">
                            <div class="flex mb-4">
                                <input type="text" placeholder="Code promotionnel" class="flex-grow px-4 py-3 border border-gray-200 rounded-l-sm focus:outline-none focus:ring-2 focus:ring-gold-500 focus:border-transparent">
                                <button class="bg-dark-800 text-white px-6 py-3 rounded-r-sm hover:bg-dark-700 transition-colors duration-300 btn-hover-effect">
                                    Appliquer
                                </button>
                            </div>
                        </div>
                        
                        <!-- Checkout Button -->
                        <button class="w-full bg-gold-600 text-white py-4 rounded-sm hover:bg-gold-700 transition-colors duration-300 font-medium tracking-wider mb-6 btn-hover-effect">
                            Procéder au Paiement
                        </button>
                        
                        <div class="text-center">
                            <a href="products-list.html" class="text-gray-600 hover:text-gold-600 transition-colors duration-300 inline-flex items-center">
                                <i class="fas fa-arrow-left mr-2 text-sm"></i>
                                Continuer mes achats
                            </a>
                        </div>
                        
                        <!-- Security & Payment Info -->
                        <div class="mt-8 pt-6 border-t border-gray-100">
                            <div class="flex justify-center space-x-4 mb-4">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" alt="Visa" class="h-6">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" alt="Mastercard" class="h-6">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal" class="h-6">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/American_Express_logo_%282018%29.svg" alt="American Express" class="h-6">
                            </div>
                            <p class="text-gray-500 text-xs text-center">
                                Paiement 100% sécurisé. Vos informations sont protégées par un cryptage SSL.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Recommendations -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-3xl font-playfair font-bold mb-12 text-center">Vous Pourriez Aussi Aimer</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Recommendation 1 -->
                <div class="group relative overflow-hidden shadow-sm hover-scale">
                    <div class="relative overflow-hidden aspect-[3/4]">
                        <img src="https://images.unsplash.com/photo-1509941943102-10c232535736?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             alt="La Squelette" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black bg-opacity-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                            <a href="#" class="px-6 py-2 bg-white text-dark-800 font-medium hover:bg-gold-500 hover:text-white transition-colors duration-300">
                                Découvrir
                            </a>
                        </div>
                    </div>
                    <div class="p-4 bg-white">
                        <h3 class="text-lg font-playfair font-semibold mb-1">La Squelette</h3>
                        <p class="text-gray-500 text-sm mb-2">Montre Automatique</p>
                        <span class="text-lg font-medium text-gold-700">€7,200</span>
                    </div>
                </div>
                
                <!-- Recommendation 2 -->
                <div class="group relative overflow-hidden shadow-sm hover-scale">
                    <div class="relative overflow-hidden aspect-[3/4]">
                        <img src="https://images.unsplash.com/photo-1589128777073-263566ae5e4d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                             alt="Le Collier Étoilé" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black bg-opacity-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                            <a href="#" class="px-6 py-2 bg-white text-dark-800 font-medium hover:bg-gold-500 hover:text-white transition-colors duration-300">
                                Découvrir
                            </a>
                        </div>
                    </div>
                    <div class="p-4 bg-white">
                        <h3 class="text-lg font-playfair font-semibold mb-1">Le Collier Étoilé</h3>
                        <p class="text-gray-500 text-sm mb-2">Bijou en Or 18k</p>
                        <span class="text-lg font-medium text-gold-700">€7,890</span>
                    </div>
                </div>
                
                <!-- Recommendation 3 -->
                <div class="group relative overflow-hidden shadow-sm hover-scale">
                    <div class="relative overflow-hidden aspect-[3/4]">
                        <img src="https://images.unsplash.com/photo-1522312346375-d1a52e2b99b3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=694&q=80" 
                             alt="La Classique" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black bg-opacity-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                            <a href="#" class="px-6 py-2 bg-white text-dark-800 font-medium hover:bg-gold-500 hover:text-white transition-colors duration-300">
                                Découvrir
                            </a>
                        </div>
                    </div>
                    <div class="p-4 bg-white">
                        <h3 class="text-lg font-playfair font-semibold mb-1">La Classique</h3>
                        <p class="text-gray-500 text-sm mb-2">Montre Automatique</p>
                        <span class="text-lg font-medium text-gold-700">€5,100</span>
                    </div>
                </div>
                
                <!-- Recommendation 4 -->
                <div class="group relative overflow-hidden shadow-sm hover-scale">
                    <div class="relative overflow-hidden aspect-[3/4]">
                        <img src="https://images.unsplash.com/photo-1524805444758-089113d48a6d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80" 
                             alt="L'Élégante" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black bg-opacity-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                            <a href="#" class="px-6 py-2 bg-white text-dark-800 font-medium hover:bg-gold-500 hover:text-white transition-colors duration-300">
                                Découvrir
                            </a>
                        </div>
                    </div>
                    <div class="p-4 bg-white">
                        <h3 class="text-lg font-playfair font-semibold mb-1">L'Élégante</h3>
                        <p class="text-gray-500 text-sm mb-2">Montre Automatique</p>
                        <span class="text-lg font-medium text-gold-700">€3,850</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Customer Service -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-8 bg-white shadow-sm rounded-sm hover-scale">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gold-50 rounded-full mb-6">
                        <i class="fas fa-concierge-bell text-gold-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-playfair font-semibold mb-4">Service Conciergerie</h3>
                    <p class="text-gray-600">Notre équipe de conseillers personnels est à votre disposition pour toute demande spécifique.</p>
                </div>
                
                <div class="text-center p-8 bg-white shadow-sm rounded-sm hover-scale">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gold-50 rounded-full mb-6">
                        <i class="fas fa-gem text-gold-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-playfair font-semibold mb-4">Authenticité Garantie</h3>
                    <p class="text-gray-600">Chaque création est accompagnée d'un certificat d'authenticité numéroté et signé.</p>
                </div>
                
                <div class="text-center p-8 bg-white shadow-sm rounded-sm hover-scale">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gold-50 rounded-full mb-6">
                        <i class="fas fa-shipping-fast text-gold-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-playfair font-semibold mb-4">Livraison Sécurisée</h3>
                    <p class="text-gray-600">Livraison express assurée par nos transporteurs spécialisés dans le monde entier.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <div>
                    <h3 class="text-2xl font-playfair font-bold mb-8">ÉLYSÉE</h3>
                    <p class="text-gray-400 mb-8 leading-relaxed">
                        Depuis 1897, Élysée incarne l'excellence et le raffinement à la française, créant des objets d'exception qui traversent le temps.
                    </p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-medium mb-6">Collections</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">Montres</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">Bijoux</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">Parfums</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">Accessoires</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">Éditions Limitées</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-medium mb-6">Informations</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">À Propos</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">Nos Boutiques</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">Carrières</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">Presse</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-medium mb-6">Service Client</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">Livraison & Retours</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">Garantie & Réparations</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">Entretien de vos Produits</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">Politique de Confidentialité</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-500 text-sm mb-4 md:mb-0">
                        &copy; 2023 Élysée. Tous droits réservés.
                    </p>
                    <div class="flex space-x-8">
                        <a href="#" class="text-gray-500 hover:text-gold-500 transition-colors duration-300 text-sm">Conditions Générales</a>
                        <a href="#" class="text-gray-500 hover:text-gold-500 transition-colors duration-300 text-sm">Politique de Confidentialité</a>
                        <a href="#" class="text-gray-500 hover:text-gold-500 transition-colors duration-300 text-sm">Mentions Légales</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Quantity Buttons
        document.querySelectorAll('.quantity-btn').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.parentElement.querySelector('.quantity-input');
                const currentValue = parseInt(input.value);
                
                if (this.querySelector('.fa-minus') && currentValue > 1) {
                    input.value = currentValue - 1;
                } else if (this.querySelector('.fa-plus')) {
                    input.value = currentValue + 1;
                }
                
                // Update cart totals (would be implemented with actual logic)
                updateCartTotals();
            });
        });
        
        // Placeholder function for updating cart totals
        function updateCartTotals() {
            // This would be implemented with actual calculation logic
            console.log('Cart totals updated');
        }
        
        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>