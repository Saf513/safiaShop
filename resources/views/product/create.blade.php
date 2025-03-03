@extends('base')
@section('title', 'create Product')
@section('content')
    
<div class="h-full font-sans bg-gradient-to-br from-gray-100 to-gray-200">
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl w-full space-y-8 bg-white p-10 rounded-xl shadow-2xl">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-luxury-black font-serif">
                    Ajouter un Nouveau Produit
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Créez un nouveau produit de luxe pour votre collection
                </p>
            </div>
            <form class="mt-8 space-y-6" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="rounded-md shadow-sm -space-y-px">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="name" class="sr-only">Nom du produit</label>
                            <input id="name" name="name" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-luxury-gold focus:border-luxury-gold focus:z-10 sm:text-sm" placeholder="Nom du produit">
                        </div>
                        <div>
                            <label for="price" class="sr-only">Prix</label>
                            <input id="price" name="price" type="number" step="0.01" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-luxury-gold focus:border-luxury-gold focus:z-10 sm:text-sm" placeholder="Prix">
                        </div>
                    </div>
                    <div>
                        <label for="category" class="sr-only">Catégorie</label>
                        <select id="category" name="category" required class="mt-1 appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-luxury-gold focus:border-luxury-gold focus:z-10 sm:text-sm">
                            <option value="">Sélectionnez une catégorie</option>
                            <option value="bijoux">Bijoux</option>
                            <option value="montres">Montres</option>
                            <option value="maroquinerie">Maroquinerie</option>
                            <option value="pret-a-porter">Prêt-à-porter</option>
                            <option value="accessoires">Accessoires</option>
                        </select>
                    </div>
                    <div>
                        <label for="product-description" class="sr-only">Description</label>
                        <textarea id="description" name="description" rows="3" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-luxury-gold focus:border-luxury-gold focus:z-10 sm:text-sm" placeholder="Description du produit"></textarea>
                    </div>
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="product-sku" class="sr-only">SKU</label>
                            <input id="product-sku" name="product-sku" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-luxury-gold focus:border-luxury-gold focus:z-10 sm:text-sm" placeholder="SKU">
                        </div>
                        <div>
                            <label for="quantity" class="sr-only">Stock</label>
                            <input id="quantity" name="quantity" type="number" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-luxury-gold focus:border-luxury-gold focus:z-10 sm:text-sm" placeholder="Stock">
                        </div>
                    </div>
                </div>

                <div>
                    <label for="product-image" class="block text-sm font-medium text-gray-700">
                        Image du produit
                    </label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-gray-600">
                                <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-luxury-gold hover:text-luxury-gold focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-luxury-gold">
                                    <span>Télécharger un fichier</span>
                                    <input id="image" name="image" type="file" class="sr-only">
                                </label>
                                <p class="pl-1">ou glisser-déposer</p>
                            </div>
                            <p class="text-xs text-gray-500">
                                PNG, JPG, GIF jusqu'à 10MB
                            </p>
                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-luxury-gold hover:bg-luxury-gold focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-luxury-gold transition duration-150 ease-in-out">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-luxury-gold group-hover:text-luxury-gold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        Ajouter le produit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

