@extends('base')
@section('title', 'Edit Product')
@section('content')
    
<div class="h-full font-sans bg-gradient-to-br from-gray-100 to-gray-200">
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl w-full space-y-8 bg-white p-10 rounded-xl shadow-2xl">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-luxury-black font-serif">
                    Modifier le Produit
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Modifiez les détails du produit de luxe
                </p>
            </div>
            <form class="mt-8 space-y-6" action="{{ route('products.update', ['product' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <div class="rounded-md shadow-sm -space-y-px">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="name" class="sr-only">Nom du produit</label>
                            <input id="name" name="name" 
                                value="{{ old('name', $product->name) }}" 
                                type="text" required 
                                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-luxury-gold focus:border-luxury-gold focus:z-10 sm:text-sm" 
                                placeholder="Nom du produit">
                        </div>
                        <div>
                            <label for="price" class="sr-only">Prix</label>
                            <input id="price" name="price" 
                                value="{{ old('price', $product->price) }}"
                                type="number" step="0.01" required 
                                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-luxury-gold focus:border-luxury-gold focus:z-10 sm:text-sm" 
                                placeholder="Prix">
                        </div>
                        <div>
                            <label for="category_id" class="sr-only">Catégorie</label>
                            <select id="category_id" name="category_id" required class="mt-1 appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-luxury-gold focus:border-luxury-gold focus:z-10 sm:text-sm">
                                <option value="0">Sélectionnez une catégorie</option>
                                <option value="2">Bijoux</option>
                                <option value="3">Montres</option>
                                <option value="4">Maroquinerie</option>
                                <option value="4">Prêt-à-porter</option>
                                <option value="6">Accessoires</option>
                            </select>
                        </div>
                        <div>
                            <label for="quantity" class="sr-only">Quantité</label>
                            <input id="quantity" name="quantity" 
                                value="{{ old('quantity', $product->quantity) }}"
                                type="number" required 
                                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-luxury-gold focus:border-luxury-gold focus:z-10 sm:text-sm" 
                                placeholder="Quantité">
                        </div>
                    </div>
                    
                    <div>
                        <label for="description" class="sr-only">Description</label>
                        <textarea id="description" name="description" rows="3" required 
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-luxury-gold focus:border-luxury-gold focus:z-10 sm:text-sm" 
                            placeholder="Description du produit">{{ old('description', $product->description) }}</textarea>
                    </div>
            
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" name="image" id="image" class="mt-1 block w-full">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="Image actuelle" class="mt-2 h-24">
                        @endif
                    </div>
                </div>
            
                <div>
                    <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-luxury-gold hover:bg-luxury-gold-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-luxury-gold">
                        Mettre à jour le produit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

