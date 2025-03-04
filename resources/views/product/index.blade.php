@extends('base')
@section('title', 'Produits de Luxe')

@section('content')
<body class="bg-gradient-to-b from-gray-900 to-black min-h-screen py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-serif text-luxury-gold text-center mb-12 tracking-wide">Notre Collection Exclusive</h2>
        
        @if($products->isEmpty())
            <div class="text-center py-16">
                <h3 class="text-2xl font-sans text-gray-300">Aucun produit disponible pour le moment</h3>
                <p class="mt-4 text-gray-400">Revenez bientôt pour découvrir notre nouvelle collection.</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                @foreach ($products as $product)
                    <div class="bg-gray-800 rounded-lg overflow-hidden shadow-2xl transform transition duration-300 hover:scale-105">
                        <div class="relative overflow-hidden group">
                            <img class="object-cover w-full h-64 transition duration-300 group-hover:scale-110"
                                 src="{{ asset('storage/' . $product->image) }}"
                                 alt="{{ $product->name }}">
                            <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-60 transition duration-300"></div>
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                <a href="{{ route('products.show', $product) }}" class="bg-luxury-gold text-black py-2 px-6 rounded-full font-bold hover:bg-white transition duration-300">
                                    Découvrir
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-serif text-luxury-gold mb-2">{{ $product->name }}</h3>
                            <p class="text-gray-400 text-sm mb-4 line-clamp-2">{{ $product->description }}</p>
                            <div class="flex items-center justify-between">
                                <span class="text-white font-bold text-lg">{{ number_format($product->price, 2) }} MAD</span>
                                <button class="bg-luxury-gold text-black py-2 px-4 rounded-full font-bold hover:bg-white transition duration-300">
                                  <a href="{{route('cart.index')}}">  Ajouter au panier</a>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-12">
                {{ $products->links() }}
            </div>
        @endif
    </div>

    <script>
        // Add smooth scrolling
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
@endsection