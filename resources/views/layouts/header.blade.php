<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Montre Chronographe Élégance | Élysée</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=Montserrat:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
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
                    animation: {
                        'fade-in': 'fadeIn 1.5s ease-in-out',
                        'fade-in-up': 'fadeInUp 1.2s ease-out',
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
                    },
                }
            }
        }
    </script>
    <style>
        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .gold-gradient {
            background: linear-gradient(135deg, #d7b56f 0%, #f7f1e3 50%, #d7b56f 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
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

        .zoom-gallery img {
            transition: transform 0.3s ease;
        }
        
        .zoom-gallery img:hover {
            transform: scale(1.1);
        }

        .tab-active {
            border-bottom: 2px solid #d7b56f;
            color: #d7b56f;
        }
    </style>
</head>