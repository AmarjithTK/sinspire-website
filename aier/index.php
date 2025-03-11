<?php 
    include 'include/header.php';
?>

<!-- Hero Section with Background Image and Full Viewport Height -->
<section class="relative h-screen flex items-center bg-gradient-to-r from-primary to-secondary text-white">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="assets/images/web/education-hero.jpg" alt="Education Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/90 to-secondary/90"></div>
    </div>
    
    <!-- Hero Content -->
    <div class="container mx-auto max-w-6xl px-4 relative z-10">
        <div class="md:max-w-3xl">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                Welcome to <br> Adishesha Institute of Education & Research
            </h1>
            <p class="text-xl md:text-2xl opacity-90 mb-10">
                Improve your educational skills and achieve your goal.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="contact.php" class="inline-block bg-accent text-white font-medium py-3 px-8 rounded-lg shadow-lg hover:bg-accent/90 hover:shadow-glow-accent transition duration-300">
                    Get Started
                </a>
                <a href="#learn-more" class="inline-flex items-center bg-white/20 backdrop-blur-sm text-white font-medium py-3 px-8 rounded-lg border border-white/30 hover:bg-white/30 transition duration-300">
                    Learn More <i class="fas fa-arrow-down ml-2"></i>
                </a>
            </div>
        </div>
    </div>
    
    <!-- Scroll Down Indicator -->
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce">
        <a href="#learn-more" class="text-white/80 hover:text-white">
            <i class="fas fa-chevron-down text-2xl"></i>
        </a>
    </div>
</section>

<!-- About Us Section - Card-Based Layout -->
<section id="learn-more" class="py-16 px-4 bg-white">
    <div class="container mx-auto max-w-6xl">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-3">Who We Are</h2>
            <div class="h-1 w-24 bg-primary mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Dedicated to fostering a love for learning and enabling individuals to reach their full potential.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
            <!-- Image Card with Educational Philosophy -->
            <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                <div class="relative">
                    <img src="assets/images/web/section_background.png" alt="Adishesha Institute" class="w-full h-80 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                        <div class="p-6 text-white w-full">
                            <h3 class="text-2xl font-bold mb-2">Adishesha Institute</h3>
                            <p class="text-white/80 mb-4">Education & Research Center</p>
                        </div>
                    </div>
                </div>
                
                <!-- Content Below the Image -->
                <div class="p-6 bg-gray-50 border-t border-gray-100">
                    <h4 class="text-lg font-semibold text-primary mb-4">Our Educational Philosophy</h4>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-primary/10 p-2 rounded-full mt-1 mr-4">
                                <i class="fas fa-lightbulb text-primary"></i>
                            </div>
                            <div>
                                <h5 class="font-medium text-gray-800">Experiential Learning</h5>
                                <p class="text-sm text-gray-600">We believe in learning by doing, where students engage actively with concepts through practical applications.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-accent/10 p-2 rounded-full mt-1 mr-4">
                                <i class="fas fa-users text-accent"></i>
                            </div>
                            <div>
                                <h5 class="font-medium text-gray-800">Collaborative Environment</h5>
                                <p class="text-sm text-gray-600">Our institutes foster teamwork and peer learning, preparing students for real-world collaborative settings.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-primary/10 p-2 rounded-full mt-1 mr-4">
                                <i class="fas fa-brain text-primary"></i>
                            </div>
                            <div>
                                <h5 class="font-medium text-gray-800">Critical Thinking Focus</h5>
                                <p class="text-sm text-gray-600">We encourage questioning, analysis, and independent thought rather than rote memorization.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Key Statistics in Horizontal Layout -->
                    <div class="mt-6 pt-6 border-t border-gray-200 grid grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary">5000+</div>
                            <div class="text-sm text-gray-500">Students Mentored</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent">50+</div>
                            <div class="text-sm text-gray-500">Expert Educators</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary">95%</div>
                            <div class="text-sm text-gray-500">Success Rate</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent">20+</div>
                            <div class="text-sm text-gray-500">Programs Offered</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Mission & Vision Card -->
            <div class="grid grid-cols-1 gap-8">
                <!-- About Card -->
                <div class="bg-gray-50 p-8 rounded-lg shadow-md border-l-4 border-primary">
                    <div class="flex items-start mb-4">
                        <div class="bg-primary/10 p-3 rounded-full mr-4">
                            <i class="fa-solid fa-graduation-cap text-2xl text-primary"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-gray-800">Our Approach</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        Welcome to Adishesha Institute, where we believe in igniting the spark of inspiration in every learner! Our passion for education and commitment to excellence drive us to create a dynamic and empowering learning environment for students from SSLC and beyond.
                    </p>
                </div>
                
                <!-- Vision Card -->
                <div class="bg-gray-50 p-8 rounded-lg shadow-md border-l-4 border-accent">
                    <div class="flex items-start mb-4">
                        <div class="bg-accent/10 p-3 rounded-full mr-4">
                            <i class="fa-solid fa-eye text-2xl text-accent"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-gray-800">Our Vision</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        Our vision is to make education engaging, accessible, and transformative. We aim to unlock the inherent curiosity and creativity within each learner, empowering them to become confident, critical thinkers and lifelong learners.
                    </p>
                </div>
                
                <!-- Mission Card -->
                <div class="bg-gray-50 p-8 rounded-lg shadow-md border-l-4 border-primary">
                    <div class="flex items-start mb-4">
                        <div class="bg-primary/10 p-3 rounded-full mr-4">
                            <i class="fa-solid fa-bullseye text-2xl text-primary"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-gray-800">Our Mission</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        Our mission is to provide exceptional educational experiences that equip students with the knowledge, skills, and character necessary to succeed in an ever-evolving world. We strive to make a positive impact on learners' lives.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Rest of the sections remain unchanged -->
<!-- What Sets Us Apart Section -->
<section class="py-16 px-4 bg-gray-50">
    <div class="container mx-auto max-w-6xl">
        <h2 class="text-3xl font-bold text-gray-800 mb-4 text-center">
            What Sets Us Apart
        </h2>
        <div class="h-1 w-24 bg-primary mx-auto mb-6"></div>
        
        <p class="text-gray-600 mb-8 text-center max-w-4xl mx-auto">
            At Adishesha, we take pride in our innovative approach to education. Here are some key factors that set us apart:
        </p>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">
            <!-- Feature 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <div class="text-primary mb-4">
                    <i class="fa-solid fa-user-graduate text-3xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Personalized Learning</h3>
                <p class="text-gray-600">
                    We understand that each student is unique, as are their learning styles and preferences. Our personalized learning approach tailors the curriculum to meet individual needs.
                </p>
            </div>
            
            <!-- Feature 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <div class="text-accent mb-4">
                    <i class="fa-solid fa-chalkboard-teacher text-3xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Passionate Educators</h3>
                <p class="text-gray-600">
                    Our dedicated team members are not just teachers; they are mentors and guides passionate about nurturing young minds and fostering a love for learning.
                </p>
            </div>
            
            <!-- Feature 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <div class="text-primary mb-4">
                    <i class="fa-solid fa-laptop-code text-3xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Cutting-Edge Technology</h3>
                <p class="text-gray-600">
                    We leverage the latest educational technologies to enhance the learning experience, incorporating interactive elements that make learning fun and engaging.
                </p>
            </div>
            
            <!-- Feature 4 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <div class="text-accent mb-4">
                    <i class="fa-solid fa-brain text-3xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Holistic Development</h3>
                <p class="text-gray-600">
                    Beyond academics, we focus on the overall development of our students, nurturing creativity, critical thinking, and character building.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Programs Section -->
<section class="py-16 px-4 bg-white">
    <div class="container mx-auto max-w-6xl">
        <h2 class="text-3xl font-bold text-gray-800 mb-4 text-center">
            Our Programs
        </h2>
        <div class="h-1 w-24 bg-primary mx-auto mb-6"></div>
        
        <p class="text-gray-600 mb-8 text-center max-w-4xl mx-auto">
            Adishesha offers a comprehensive range of programs designed to support students at every stage of their learning journey, from early education to advanced academic support.
        </p>
        
        <div class="grid md:grid-cols-3 gap-8 mt-12">
            <!-- Program 1 -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
                <div class="bg-primary h-2"></div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Early Learning Adventures</h3>
                    <p class="text-gray-600">
                        Foundation programs for young learners to develop essential cognitive and social skills.
                    </p>
                </div>
            </div>
            
            <!-- Program 2 -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
                <div class="bg-accent h-2"></div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Secondary School and Beyond</h3>
                    <p class="text-gray-600">
                        Comprehensive support for middle and high school curricula across various subjects.
                    </p>
                </div>
            </div>
            
            <!-- Program 3 -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
                <div class="bg-primary h-2"></div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Test Preparation</h3>
                    <p class="text-gray-600">
                        Specialized coaching for standardized tests and competitive exams.
                    </p>
                </div>
            </div>
            
            <!-- Program 4 -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
                <div class="bg-accent h-2"></div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Specialized Skill Development</h3>
                    <p class="text-gray-600">
                        Programs focused on developing specific skills like coding, public speaking, and critical thinking.
                    </p>
                </div>
            </div>
            
            <!-- Program 5 -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
                <div class="bg-primary h-2"></div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Enrichment Workshops</h3>
                    <p class="text-gray-600">
                        Interactive workshops that enhance learning beyond traditional academics.
                    </p>
                </div>
            </div>
            
            <!-- CTA Card -->
            <div class="bg-gradient-to-r from-primary to-secondary text-white rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
                <div class="p-6 flex flex-col h-full justify-center items-center text-center">
                    <h3 class="text-xl font-semibold mb-3">Ready to Join?</h3>
                    <p class="mb-6">Discover the perfect program for your educational journey.</p>
                    <a href="packages.php" class="inline-block bg-accent text-white font-medium py-2 px-6 rounded-lg hover:bg-accent/90 transition duration-300">
                        View All Programs
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Join Our Community Section -->
<section class="py-16 px-4 bg-gray-50">
    <div class="container mx-auto max-w-4xl text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">
            Join our Community
        </h2>
        <div class="h-1 w-24 bg-primary mx-auto mb-6"></div>
        
        <p class="text-gray-600 mb-10 leading-relaxed">
            We invite you to join the Adishesha community and embark on an educational journey like no other. 
            Together, let's cultivate a love for learning, embrace curiosity, and inspire tomorrow's leaders.
            <br><br>
            At Adishesha, we believe that education is not just about acquiring knowledge; it's about transforming lives. 
            Join us in shaping a brighter future, one learner at a time.
        </p>
        
        <h3 class="text-2xl font-bold text-primary mb-8">
            <span class="text-accent">Inspire.</span> Learn. <span class="text-accent">Succeed.</span>
        </h3>
        
        <a href="contact.php" class="inline-block bg-primary hover:bg-primary/90 text-white font-medium py-3 px-8 rounded-lg shadow-lg hover:shadow-glow transition duration-300">
            Contact Us Today
        </a>
    </div>
</section>

<?php 
    include 'include/footer.php';
?>