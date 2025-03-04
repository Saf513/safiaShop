<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Élysée | Maison de Luxe</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=Montserrat:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'playfair': ['"Playfair Display"', 'serif'],
                        'sans': ['Montserrat', 'sans-serif'],
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
                    height: {
                        '128': '32rem',
                    },
                    animation: {
                        'fade-in': 'fadeIn 1.5s ease-in-out',
                        'fade-in-up': 'fadeInUp 1.2s ease-out',
                        'fade-in-down': 'fadeInDown 1.2s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        fadeInDown: {
                            '0%': { opacity: '0', transform: 'translateY(-20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                    },
                }
            }
        }
    </script>
    <style>
        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .bg-blur {
            backdrop-filter: blur(8px);
        }
        
        .gold-gradient {
            background: linear-gradient(135deg, #d7b56f 0%, #f7f1e3 50%, #d7b56f 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .hover-scale {
            transition: transform 0.5s ease;
        }
        
        .hover-scale:hover {
            transform: scale(1.03);
        }
        
        .product-card:hover .product-overlay {
            opacity: 1;
        }
        
        .product-card:hover img {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="font-sans text-dark-800 bg-white">
    <!-- Notification Bar -->
    <div class="bg-gold-600 text-white text-center py-2 text-sm">
        <p>Livraison gratuite dans le monde entier pour toutes les commandes supérieures à 500€</p>
    </div>

    <!-- Header -->
    <header class="fixed w-full z-50 transition-all duration-300" id="header">
        <div class="bg-white bg-opacity-95 shadow-md">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-4">
                    <!-- Logo -->
                    <a href="#" class="flex items-center">
                        <span class="text-3xl font-playfair font-bold tracking-tighter">ÉLYSÉE</span>
                    </a>
                    
                    <!-- Desktop Navigation -->
                    <nav class="hidden md:flex space-x-8">
                        <a href="#accueil" class="text-dark-800 hover:text-gold-600 font-medium transition-colors duration-300">Accueil</a>
                        <a href="{{route('products.index')}}" class="text-dark-800 hover:text-gold-600 font-medium transition-colors duration-300">Collections</a>
                        <a href="#histoire" class="text-dark-800 hover:text-gold-600 font-medium transition-colors duration-300">Notre Histoire</a>
                        <a href="#savoir-faire" class="text-dark-800 hover:text-gold-600 font-medium transition-colors duration-300">Savoir-Faire</a>
                        <a href="#contact" class="text-dark-800 hover:text-gold-600 font-medium transition-colors duration-300">Contact</a>
                    </nav>
                    
                    <!-- Icons -->
                    <div class="flex items-center space-x-4">
                        <a href="#" class="text-dark-800 hover:text-gold-600 transition-colors duration-300">
                            <i class="fas fa-search text-lg"></i>
                        </a>

                        @guest
                            <a href="{{ route('login') }}" class="text-dark-800 hover:text-gold-600 transition-colors duration-300">
                                Se connecter
                            </a>
                            <a href="{{ route('register') }}" class="text-dark-800 hover:text-gold-600 transition-colors duration-300">
                                S'inscrire
                            </a>
                        @else
                            <a href="#" class="text-dark-800 hover:text-gold-600 transition-colors duration-300">
                                <i class="fas fa-user text-lg"></i>
                            </a>
                            <a href="#" class="text-dark-800 hover:text-gold-600 transition-colors duration-300">
                                <i class="fas fa-shopping-bag text-lg"></i>
                            </a>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="text-dark-800 hover:text-gold-600 transition-colors duration-300">
                                    <i class="fas fa-sign-out-alt text-lg"></i>
                                </button>
                            </form>
                        @endguest
                        
                        <!-- Mobile Menu Button -->
                        <button class="md:hidden text-dark-800 hover:text-gold-600 transition-colors duration-300">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="accueil" class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <video autoplay muted loop class="object-cover w-full h-full">
                <source src="https://assets.mixkit.co/videos/preview/mixkit-gold-colored-liquid-poured-on-a-black-background-42593-large.mp4" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-5xl md:text-7xl font-playfair font-bold text-white mb-6 animate-fade-in-down text-shadow">
                L'Art de l'Excellence
            </h1>
            <p class="text-xl md:text-2xl text-white mb-10 max-w-3xl mx-auto animate-fade-in opacity-90">
                Découvrez notre collection exclusive de créations intemporelles, façonnées avec passion et précision.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 animate-fade-in-up">
                <a href="#collections" class="px-8 py-3 bg-gold-600 text-white font-medium rounded-sm hover:bg-gold-700 transition-colors duration-300 shadow-lg">
                    Découvrir la Collection
                </a>
                <a href="#histoire" class="px-8 py-3 bg-transparent border border-white text-white font-medium rounded-sm hover:bg-white hover:text-dark-800 transition-colors duration-300">
                    Notre Histoire
                </a>
            </div>
        </div>
        
        <div class="absolute bottom-10 left-0 right-0 flex justify-center animate-bounce">
            <a href="#collections" class="text-white">
                <i class="fas fa-chevron-down text-2xl"></i>
            </a>
        </div>
    </section>

    <!-- Featured Collection -->
    <section id="collections" class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="inline-block text-3xl md:text-4xl font-playfair font-bold mb-4 relative">
                    Collections Exclusives
                    <span class="block h-1 w-24 bg-gold-500 mx-auto mt-2"></span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Chaque pièce raconte une histoire d'excellence et d'artisanat, créée pour ceux qui apprécient la beauté intemporelle.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div class="product-card group relative overflow-hidden shadow-lg hover-scale">
                    <div class="relative overflow-hidden aspect-[3/4]">
                        <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                             alt="Montre de luxe" 
                             class="w-full h-full object-cover transition-transform duration-700">
                        <div class="product-overlay absolute inset-0 bg-black bg-opacity-20 opacity-0 transition-opacity duration-500 flex items-center justify-center">
                            <a href="#" class="px-6 py-2 bg-white text-dark-800 font-medium hover:bg-gold-500 hover:text-white transition-colors duration-300">
                                Découvrir
                            </a>
                        </div>
                    </div>
                    <div class="p-6 bg-white">
                        <h3 class="text-xl font-playfair font-semibold mb-2">La Chronographe</h3>
                        <p class="text-gray-600 mb-4">Une montre d'exception, alliant tradition horlogère et design contemporain.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-medium text-gold-700">€4,950</span>
                            <a href="#" class="text-dark-800 hover:text-gold-600 transition-colors duration-300">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="product-card group relative overflow-hidden shadow-lg hover-scale">
                    <div class="relative overflow-hidden aspect-[3/4]">
                        <img src="https://images.unsplash.com/photo-1611085583191-a3b181a88401?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                             alt="Parfum de luxe" 
                             class="w-full h-full object-cover transition-transform duration-700">
                        <div class="product-overlay absolute inset-0 bg-black bg-opacity-20 opacity-0 transition-opacity duration-500 flex items-center justify-center">
                            <a href="#" class="px-6 py-2 bg-white text-dark-800 font-medium hover:bg-gold-500 hover:text-white transition-colors duration-300">
                                Découvrir
                            </a>
                        </div>
                    </div>
                    <div class="p-6 bg-white">
                        <h3 class="text-xl font-playfair font-semibold mb-2">L'Essence Mystique</h3>
                        <p class="text-gray-600 mb-4">Un parfum envoûtant aux notes boisées et florales, pour une présence inoubliable.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-medium text-gold-700">€320</span>
                            <a href="#" class="text-dark-800 hover:text-gold-600 transition-colors duration-300">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="product-card group relative overflow-hidden shadow-lg hover-scale">
                    <div class="relative overflow-hidden aspect-[3/4]">
                        <img src="https://images.unsplash.com/photo-1589128777073-263566ae5e4d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                             alt="Bijou de luxe" 
                             class="w-full h-full object-cover transition-transform duration-700">
                        <div class="product-overlay absolute inset-0 bg-black bg-opacity-20 opacity-0 transition-opacity duration-500 flex items-center justify-center">
                            <a href="#" class="px-6 py-2 bg-white text-dark-800 font-medium hover:bg-gold-500 hover:text-white transition-colors duration-300">
                                Découvrir
                            </a>
                        </div>
                    </div>
                    <div class="p-6 bg-white">
                        <h3 class="text-xl font-playfair font-semibold mb-2">Le Collier Étoilé</h3>
                        <p class="text-gray-600 mb-4">Un bijou d'exception serti de diamants, pour illuminer chaque instant.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-medium text-gold-700">€7,890</span>
                            <a href="#" class="text-dark-800 hover:text-gold-600 transition-colors duration-300">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="{{route('products.index')}}" class="inline-block px-8 py-3 border-2 border-gold-600 text-gold-600 font-medium hover:bg-gold-600 hover:text-white transition-colors duration-300">
                    Voir Toutes les Collections
                </a>
            </div>
        </div>
    </section>

    <!-- Craftsmanship Section -->
    <section id="savoir-faire" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <h2 class="text-3xl md:text-4xl font-playfair font-bold mb-6">
                        L'Art du Savoir-Faire
                    </h2>
                    <div class="h-1 w-24 bg-gold-500 mb-8"></div>
                    <p class="text-lg text-gray-600 mb-6">
                        Depuis plus d'un siècle, nos artisans perpétuent un savoir-faire d'exception, transmis de génération en génération. Chaque création est le fruit d'un travail minutieux, où la précision du geste se mêle à la passion de l'excellence.
                    </p>
                    <p class="text-lg text-gray-600 mb-8">
                        Nos ateliers parisiens sont le cœur battant de notre maison, où tradition et innovation se rencontrent pour donner naissance à des pièces uniques, témoins de notre engagement envers la qualité sans compromis.
                    </p>
                    <a href="#" class="inline-block px-8 py-3 bg-gold-600 text-white font-medium rounded-sm hover:bg-gold-700 transition-colors duration-300 shadow-md">
                        Découvrir Notre Atelier
                    </a>
                </div>
                <div class="order-1 lg:order-2 grid grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             alt="Artisan au travail" 
                             class="w-full h-auto rounded-sm shadow-lg hover-scale">
                        <img src="https://images.unsplash.com/photo-1617038220319-276d3cfab638?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             alt="Détail d'une création" 
                             class="w-full h-auto rounded-sm shadow-lg hover-scale">
                    </div>
                    <div class="pt-8">
                        <img src="https://images.unsplash.com/photo-1594534475808-b18fc33b045e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             alt="Atelier de création" 
                             class="w-full h-auto rounded-sm shadow-lg hover-scale">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="inline-block text-3xl md:text-4xl font-playfair font-bold mb-4 relative">
                    Témoignages
                    <span class="block h-1 w-24 bg-gold-500 mx-auto mt-2"></span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Découvrez ce que nos clients disent de leur expérience avec Élysée.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 p-8 rounded-sm shadow-md hover-scale">
                    <div class="flex items-center mb-4">
                        <div class="text-gold-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 italic mb-6">
                        "La montre que j'ai achetée chez Élysée est bien plus qu'un simple accessoire. C'est un chef-d'œuvre d'horlogerie qui m'accompagne chaque jour avec élégance et précision."
                    </p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/23.jpg" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-medium">Sophie Laurent</h4>
                            <p class="text-sm text-gray-500">Paris, France</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-gray-50 p-8 rounded-sm shadow-md hover-scale">
                    <div class="flex items-center mb-4">
                        <div class="text-gold-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 italic mb-6">
                        "Le service client d'Élysée est à l'image de leurs produits : exceptionnel. Chaque interaction reflète leur engagement envers l'excellence et le souci du détail."
                    </p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-medium">Jean-Philippe Dubois</h4>
                            <p class="text-sm text-gray-500">Lyon, France</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-gray-50 p-8 rounded-sm shadow-md hover-scale">
                    <div class="flex items-center mb-4">
                        <div class="text-gold-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 italic mb-6">
                        "Les bijoux Élysée ont cette qualité rare de traverser le temps sans jamais perdre de leur éclat. Un investissement dans la beauté qui se transmet de génération en génération."
                    </p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-medium">Marie Lefèvre</h4>
                            <p class="text-sm text-gray-500">Genève, Suisse</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- History Section -->
    <section id="histoire" class="py-20 bg-dark-900 text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="inline-block text-3xl md:text-4xl font-playfair font-bold mb-4 relative">
                    Notre Histoire
                    <span class="block h-1 w-24 bg-gold-500 mx-auto mt-2"></span>
                </h2>
                <p class="text-lg text-gray-300 max-w-3xl mx-auto">
                    Depuis 1897, Élysée incarne l'excellence et le raffinement à la française.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                             alt="Fondateur d'Élysée" 
                             class="w-full h-auto rounded-sm shadow-lg">
                        <div class="absolute -bottom-6 -right-6 bg-gold-600 p-4 rounded-sm shadow-lg">
                            <p class="font-playfair text-2xl">1897</p>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-playfair font-semibold mb-6">Les Origines</h3>
                    <p class="text-gray-300 mb-6">
                        Fondée en 1897 par Alexandre Élysée, notre maison est née d'une vision : créer des objets d'exception qui transcendent leur fonction pour devenir des œuvres d'art. Dans son petit atelier parisien, il façonnait chaque pièce avec une précision et un dévouement qui allaient définir l'identité de notre maison.
                    </p>
                    <p class="text-gray-300 mb-6">
                        Au fil des décennies, Élysée s'est imposée comme une référence incontournable dans l'univers du luxe, tout en préservant l'esprit artisanal et l'exigence de qualité qui ont fait sa renommée.
                    </p>
                    <a href="#" class="inline-block px-8 py-3 border border-gold-500 text-gold-500 font-medium hover:bg-gold-500 hover:text-white transition-colors duration-300">
                        Découvrir Notre Héritage
                    </a>
                </div>
            </div>
            
            <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6 border border-gold-700 rounded-sm hover-scale">
                    <div class="text-gold-500 text-4xl mb-4">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3 class="text-xl font-playfair font-semibold mb-3">Excellence</h3>
                    <p class="text-gray-300">
                        Nous nous engageons à maintenir les plus hauts standards de qualité dans chaque création.
                    </p>
                </div>
                <div class="text-center p-6 border border-gold-700 rounded-sm hover-scale">
                    <div class="text-gold-500 text-4xl mb-4">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3 class="text-xl font-playfair font-semibold mb-3">Créativité</h3>
                    <p class="text-gray-300">
                        L'innovation et l'audace créative sont au cœur de notre philosophie depuis notre fondation.
                    </p>
                </div>
                <div class="text-center p-6 border border-gold-700 rounded-sm hover-scale">
                    <div class="text-gold-500 text-4xl mb-4">
                        <i class="fas fa-history"></i>
                    </div>
                    <h3 class="text-xl font-playfair font-semibold mb-3">Héritage</h3>
                    <p class="text-gray-300">
                        Nous honorons notre riche histoire tout en regardant vers l'avenir avec passion et détermination.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-20 bg-gold-100">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-playfair font-bold mb-6">
                    Restez Informé
                </h2>
                <p class="text-lg text-gray-600 mb-8">
                    Inscrivez-vous à notre newsletter pour découvrir en avant-première nos nouvelles collections et événements exclusifs.
                </p>
                <form class="flex flex-col sm:flex-row gap-4 justify-center">
                    <input type="email" placeholder="Votre adresse email" class="px-4 py-3 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gold-500 focus:border-transparent rounded-sm flex-grow max-w-md">
                    <button type="submit" class="px-6 py-3 bg-gold-600 text-white font-medium rounded-sm hover:bg-gold-700 transition-colors duration-300 shadow-md">
                        S'inscrire
                    </button>
                </form>
                <p class="text-sm text-gray-500 mt-4">
                    En vous inscrivant, vous acceptez notre politique de confidentialité. Vous pouvez vous désinscrire à tout moment.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="inline-block text-3xl md:text-4xl font-playfair font-bold mb-4 relative">
                    Contactez-Nous
                    <span class="block h-1 w-24 bg-gold-500 mx-auto mt-2"></span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Notre équipe est à votre disposition pour répondre à toutes vos questions et vous accompagner dans votre expérience Élysée.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gold-500 focus:border-transparent rounded-sm">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gold-500 focus:border-transparent rounded-sm">
                            </div>
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Sujet</label>
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-3 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gold-500 focus:border-transparent rounded-sm">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gold-500 focus:border-transparent rounded-sm resize-none"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full px-6 py-3 bg-gold-600 text-white font-medium rounded-sm hover:bg-gold-700 transition-colors duration-300 shadow-md">
                                Envoyer
                            </button>
                        </div>
                    </form>
                </div>
                <div class="space-y-8">
                    <div>
                        <h3 class="text-xl font-playfair font-semibold mb-4">Boutique Principale</h3>
                        <p class="text-gray-600 mb-2">
                            <i class="fas fa-map-marker-alt text-gold-500 mr-2"></i> 25 Avenue Montaigne, 75008 Paris, France
                        </p>
                        <p class="text-gray-600 mb-2">
                            <i class="fas fa-phone text-gold-500 mr-2"></i> +33 1 42 68 42 68
                        </p>
                        <p class="text-gray-600 mb-2">
                            <i class="fas fa-envelope text-gold-500 mr-2"></i> contact@elysee-luxe.com
                        </p>
                        <p class="text-gray-600">
                            <i class="fas fa-clock text-gold-500 mr-2"></i> Lun - Sam: 10h00 - 19h00
                        </p>
                    </div>
                    <div class="h-64 rounded-sm overflow-hidden shadow-lg">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.2698463377166!2d2.3003956156744847!3d48.86603687928841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fc4f8f3049b%3A0xcacf8c03de883989!2sAv.%20Montaigne%2C%2075008%20Paris%2C%20France!5e0!3m2!1sen!2sus!4v1630000000000!5m2!1sen!2sus" 
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gold-600 text-white flex items-center justify-center hover:bg-gold-700 transition-colors duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gold-600 text-white flex items-center justify-center hover:bg-gold-700 transition-colors duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gold-600 text-white flex items-center justify-center hover:bg-gold-700 transition-colors duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gold-600 text-white flex items-center justify-center hover:bg-gold-700 transition-colors duration-300">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <div>
                    <h3 class="text-2xl font-playfair font-bold mb-6">ÉLYSÉE</h3>
                    <p class="text-gray-400 mb-6">
                        Depuis 1897, Élysée incarne l'excellence et le raffinement à la française, créant des objets d'exception qui traversent le temps.
                    </p>
                    <div class="flex space-x-4">
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
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">Montres</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">Bijoux</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">Parfums</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">Accessoires</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">Éditions Limitées</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-medium mb-6">Informations</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">À Propos</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">Nos Boutiques</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">Carrières</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">Presse</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold-500 transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-medium mb-6">Service Client</h4>
                    <ul class="space-y-3">
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
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-500 hover:text-gold-500 transition-colors duration-300 text-sm">Conditions Générales</a>
                        <a href="#" class="text-gray-500 hover:text-gold-500 transition-colors duration-300 text-sm">Politique de Confidentialité</a>
                        <a href="#" class="text-gray-500 hover:text-gold-500 transition-colors duration-300 text-sm">Mentions Légales</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
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
    </script>
</body>
</html>