<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: '#2563eb', /* Main blue */
                            secondary: '#1e40af',
                            accent: '#f5945c',  /* Orange accent color */
                            dark: '#0f172a',
                            light: '#f8fafc',
                            'gradient-start': '#3b82f6',
                            'gradient-end': '#1d4ed8'
                        },
                        fontFamily: {
                            sans: ['Inter', 'system-ui', 'sans-serif'],
                        },
                        boxShadow: {
                            'soft': '0 4px 20px rgba(0, 0, 0, 0.05)',
                            'glow': '0 0 15px rgba(96, 165, 250, 0.5)',
                            'glow-accent': '0 5px 15px rgba(245, 148, 92, 0.3)',
                        }
                    }
                }
            }
        </script>
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="assets/plugins/fontawesome-6.1.1/css/all.css">
        <title>Adishesha Institute of Education and Research</title>
        
        <style>
            /* Modernized pill divider with blue and accent orange */
            .pill-divider {
                position: relative;
                overflow: hidden;
                height: 4px;
            }
            .pill-divider::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 85%;
                height: 100%;
                background-color: #2563eb;
            }
            .pill-divider::after {
                content: '';
                position: absolute;
                top: 0;
                right: 0;
                width: 15%;
                height: 100%;
                background-color: #f5945c;
            }
            
            .animate-marquee {
                animation: marquee 30s linear infinite;
            }
            @keyframes marquee {
                0% { transform: translateX(100%); }
                100% { transform: translateX(-100%); }
            }
        </style>
    </head>
    
    <body class="font-sans text-gray-800 bg-light">
        <!-- Top Bar with Social Icons -->
        <div class="bg-dark py-2 px-4">
            <div class="container mx-auto flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition duration-200">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-200">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-200">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-200">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <div class="flex items-center space-x-6">
                    <a href="mailto:info@sinspire.com" class="text-gray-300 hover:text-white text-sm transition duration-200">
                        <i class="fa-solid fa-envelope mr-2"></i><span class="hidden sm:inline">info@sinspire.com</span>
                    </a>
                    <a href="tel:+919876543210" class="text-gray-300 hover:text-white text-sm transition duration-200">
                        <i class="fa-solid fa-phone mr-2"></i><span class="hidden sm:inline">+91 98765 43210</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Main Header -->
        <header class="bg-white sticky top-0 z-50 shadow-md">
            <!-- Pill Divider -->
            <div class="pill-divider"></div>
            
            <div class="container mx-auto px-4">
                <div class="flex items-center justify-between">
                    <!-- Logo -->
                    <div class="py-6">
                        <a href="index.php" class="flex items-center h-4">
                            <img src="assets/images/logo2.png" class="sm:h-[60px] w-auto" alt="S Inspire Logo">
                        </a>
                    </div>
                    
                    <!-- Desktop Navigation -->
                    <div class="hidden lg:flex items-center">
                        <nav class="flex">
                            <a href="index.php" class="relative mx-2 px-3 py-6 text-gray-700 font-medium hover:text-primary group">
                                Home
                                <span class="absolute inset-x-0 bottom-0 h-1 bg-primary transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300"></span>
                            </a>
                            <a href="about.php" class="relative mx-2 px-4 py-6 text-gray-700 font-medium hover:text-primary group">
                                About
                                <span class="absolute inset-x-0 bottom-0 h-1 bg-primary transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300"></span>
                            </a>
                            <a href="services.php" class="relative mx-2 px-4 py-6 text-gray-700 font-medium hover:text-primary group">
                                Services
                                <span class="absolute inset-x-0 bottom-0 h-1 bg-primary transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300"></span>
                            </a>
                            <a href="packages.php" class="relative mx-2 px-4 py-6 text-gray-700 font-medium hover:text-primary group">
                                Packages
                                <span class="absolute inset-x-0 bottom-0 h-1 bg-primary transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300"></span>
                            </a>
                            <a href="contact.php" class="relative mx-2 px-4 py-6 text-gray-700 font-medium hover:text-primary group">
                                Contact
                                <span class="absolute inset-x-0 bottom-0 h-1 bg-primary transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300"></span>
                            </a>
                        </nav>
                        
                        <!-- CTA Button with Accent Orange -->
                        <a href="enquire.php" class="ml-6 px-6 py-3 bg-accent hover:bg-accent/90 text-white font-medium rounded-md hover:shadow-glow-accent transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fa-solid fa-paper-plane mr-2"></i> Enquire Now
                        </a>
                    </div>
                    
                    <!-- Mobile menu button -->
                    <div class="lg:hidden">
                        <button id="mobile-menu-button" type="button" class="p-2 rounded-md text-gray-500 hover:text-primary hover:bg-gray-100 focus:outline-none" aria-label="Toggle menu">
                            <i class="fa-solid fa-bars text-xl"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Announcement Banner (animated) -->
            <div class="bg-gradient-to-r from-gradient-start to-gradient-end relative overflow-hidden">
                <div class="animate-marquee whitespace-nowrap py-2">
                    <div class="flex items-center text-white mx-4 inline-block">
                        <i class="fa-solid fa-graduation-cap mr-2"></i>
                        <span>New courses starting soon! Limited seats available.</span>
                        <span class="mx-8">•</span>
                        <i class="fa-solid fa-bullhorn mr-2"></i>
                        <span>Join our special weekend workshops!</span>
                        <span class="mx-8">•</span>
                        <i class="fa-solid fa-calendar-check mr-2"></i>
                        <span>SSLC and PUC exam preparation courses now open!</span>
                        <span class="mx-8">•</span>
                    </div>
                </div>
            </div>
            
            <!-- Mobile menu (hidden by default) -->
            <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-100 py-3 shadow-md">
                <div class="container mx-auto px-4 space-y-1">
                    <a href="index.php" class="block px-4 py-3 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-primary transition-all duration-200">
                        <i class="fa-solid fa-home mr-2 text-primary opacity-70"></i> Home
                    </a>
                    <a href="about.php" class="block px-4 py-3 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-primary transition-all duration-200">
                        <i class="fa-solid fa-info-circle mr-2 text-primary opacity-70"></i> About
                    </a>
                    <a href="services.php" class="block px-4 py-3 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-primary transition-all duration-200">
                        <i class="fa-solid fa-list-check mr-2 text-primary opacity-70"></i> Services
                    </a>
                    <a href="packages.php" class="block px-4 py-3 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-primary transition-all duration-200">
                        <i class="fa-solid fa-cubes mr-2 text-primary opacity-70"></i> Packages
                    </a>
                    <a href="contact.php" class="block px-4 py-3 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-primary transition-all duration-200">
                        <i class="fa-solid fa-envelope mr-2 text-primary opacity-70"></i> Contact
                    </a>
                    <div class="px-4 py-3 mt-4">
                        <a href="enquire.php" class="block w-full text-center px-4 py-3 bg-accent text-white font-medium rounded-md hover:shadow-md transition-all duration-200">
                            <i class="fa-solid fa-paper-plane mr-2"></i> Enquire Now
                        </a>
                    </div>
                </div>
            </div>
        </header>
        
        <script>
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        </script>