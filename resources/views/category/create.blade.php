@extends('base')

@section('title', 'Ajouter une catégorie')

@section('content')
<div class="h-full font-sans bg-gradient-to-br from-gray-100 to-gray-200">
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl w-full space-y-8 bg-white p-10 rounded-xl shadow-2xl">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-luxury-black font-serif">
                    Ajouter une catégorie
                </h2>
            </div>
            <form class="mt-8 space-y-6" action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label for="name" class="sr-only">Nom de la catégorie</label>
                        <input id="name" name="name" type="text" required
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-luxury-gold focus:border-luxury-gold focus:z-10 sm:text-sm"
                            placeholder="Nom de la catégorie">
                    </div>
                    <div>
                        <label for="description" class="sr-only">Description</label>
                        <textarea id="description" name="description" rows="3"
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-luxury-gold focus:border-luxury-gold focus:z-10 sm:text-sm"
                            placeholder="Description de la catégorie (facultatif)"></textarea>
                    </div>
                </div>
                <div>
                    <button type="submit"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-luxury-gold hover:bg-luxury-gold-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-luxury-gold">
                        Ajouter la catégorie
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection