<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('name'){{ config('app.name')}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Raleway:wght@300;400;600&display=swap');
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Raleway', 'sans-serif'],
                        'serif': ['"Playfair Display"', 'serif'],
                    },
                    colors: {
                        'luxury-gold': '#D4AF37',
                        'luxury-black': '#1C1C1C',
                    },
                }
            }
        }
    </script>
</head>
<body>
 <div class="container">
    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">Oops!</strong>
        <span class="block sm:inline">Veuillez corriger les erreurs suivantes :</span>
        <ul class="list-disc list-inside mt-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @yield('content')
 </div>
</body>
</html>