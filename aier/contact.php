<?php 
    include 'include/header.php';
?>

<!-- Page Header Banner -->
<section class="bg-gradient-to-r from-primary to-secondary text-white py-16 relative overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -right-96 -top-24 w-[500px] h-[500px] bg-white/5 rounded-full"></div>
        <div class="absolute -left-96 -bottom-24 w-[500px] h-[500px] bg-white/5 rounded-full"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
            <p class="text-xl text-white/90">
                Reach out to us for program information, admissions, or any queries
            </p>
        </div>
    </div>
</section>

<!-- Contact Information and Form -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Information -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Get in Touch</h2>
                    <p class="text-gray-600 mb-8">
                        Have questions about our programs or want to schedule a visit? Contact us through any of the following channels or fill out the form.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-primary/10 p-3 rounded-full mr-4">
                                <i class="fas fa-map-marker-alt text-primary"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800 mb-1">Main Campus</h3>
                                <p class="text-gray-600">
                                    123 Education Lane, Knowledge Park<br>
                                    Kochi, Kerala 682021
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-primary/10 p-3 rounded-full mr-4">
                                <i class="fas fa-phone-alt text-primary"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800 mb-1">Phone</h3>
                                <p class="text-gray-600">
                                    <a href="tel:+914851234567" class="hover:text-primary">+91 485 123 4567</a><br>
                                    <a href="tel:+919876543210" class="hover:text-primary">+91 98765 43210</a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-primary/10 p-3 rounded-full mr-4">
                                <i class="fas fa-envelope text-primary"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800 mb-1">Email</h3>
                                <p class="text-gray-600">
                                    <a href="mailto:info@adisheshainstitute.edu" class="hover:text-primary">info@adisheshainstitute.edu</a><br>
                                    <a href="mailto:admissions@adisheshainstitute.edu" class="hover:text-primary">admissions@adisheshainstitute.edu</a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-primary/10 p-3 rounded-full mr-4">
                                <i class="fas fa-clock text-primary"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800 mb-1">Office Hours</h3>
                                <p class="text-gray-600">
                                    Monday - Friday: 9:00 AM - 6:00 PM<br>
                                    Saturday: 9:00 AM - 1:00 PM<br>
                                    Sunday: Closed
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Media Links -->
                    <div class="mt-8">
                        <h3 class="font-semibold text-gray-800 mb-3">Connect With Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-gray-200 hover:bg-primary hover:text-white transition-colors p-3 rounded-full">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="bg-gray-200 hover:bg-primary hover:text-white transition-colors p-3 rounded-full">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="bg-gray-200 hover:bg-primary hover:text-white transition-colors p-3 rounded-full">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="bg-gray-200 hover:bg-primary hover:text-white transition-colors p-3 rounded-full">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="bg-gray-200 hover:bg-primary hover:text-white transition-colors p-3 rounded-full">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="bg-gray-50 rounded-xl p-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Send Us a Message</h2>
                    <form action="process_contact.php" method="post" id="contactForm">
                        <div class="mb-6">
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                        </div>
                        
                        <div class="mb-6">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                        </div>
                        
                        <div class="mb-6">
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                            <input type="tel" id="phone" name="phone" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                        </div>
                        
                        <div class="mb-6">
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                            <select id="subject" name="subject" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                                <option value="General Inquiry">General Inquiry</option>
                                <option value="Program Information">Program Information</option>
                                <option value="Admission">Admission Query</option>
                                <option value="Career">Career Opportunity</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        
                        <div class="mb-6">
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary"></textarea>
                        </div>
                        
                        <div class="mb-6">
                            <div class="flex items-start">
                                <input id="privacy" name="privacy" type="checkbox" required
                                    class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                <label for="privacy" class="ml-2 block text-sm text-gray-600">
                                    I agree to the <a href="#" class="text-primary hover:underline">Privacy Policy</a> and consent to the processing of my personal data.
                                </label>
                            </div>
                        </div>
                        
                        <button type="submit" 
                            class="w-full bg-primary hover:bg-primary-dark text-white font-semibold py-3 px-6 rounded-lg transition duration-300 flex items-center justify-center">
                            Send Message
                            <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                        
                        <div id="formResponse" class="mt-4 text-center hidden"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800 mb-3">Our Location</h2>
                <div class="h-1 w-24 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Visit our campus to experience our facilities and meet our faculty in person.
                </p>
            </div>
            
            <div class="rounded-xl overflow-hidden shadow-lg">
                <!-- Replace with your Google Maps embed code -->
                <div class="aspect-w-16 aspect-h-9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d251482.45597520916!2d76.1699539869664!3d9.973818854792983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d514abec6bf%3A0xbd582caa5844192!2sKochi%2C%20Kerala%2C%20India!5e0!3m2!1sen!2sus!4v1619893447029!5m2!1sen!2sus" 
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800 mb-3">Frequently Asked Questions</h2>
                <div class="h-1 w-24 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-600">
                    Get answers to common questions about our programs and admission process
                </p>
            </div>
            
            <div class="space-y-4">
                <div class="border border-gray-200 rounded-lg">
                    <button class="faq-toggle flex justify-between items-center w-full p-5 text-left" 
                        aria-expanded="false" aria-controls="faq1">
                        <span class="font-medium text-gray-800">What is the admission process?</span>
                        <i class="fas fa-chevron-down text-primary transition-transform"></i>
                    </button>
                    <div id="faq1" class="faq-content hidden px-5 pb-5 pt-0">
                        <p class="text-gray-600">
                            Our admission process typically involves filling out an application form, submitting academic records, 
                            and attending an interview. For specialized programs, an entrance test may be required. 
                            Please contact our admissions office for program-specific requirements.
                        </p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg">
                    <button class="faq-toggle flex justify-between items-center w-full p-5 text-left" 
                        aria-expanded="false" aria-controls="faq2">
                        <span class="font-medium text-gray-800">How do I know which program is right for me?</span>
                        <i class="fas fa-chevron-down text-primary transition-transform"></i>
                    </button>
                    <div id="faq2" class="faq-content hidden px-5 pb-5 pt-0">
                        <p class="text-gray-600">
                            We offer personalized counseling sessions to help you determine the most suitable program based on your 
                            academic background, career aspirations, and learning style. Schedule a counseling session with our 
                            academic advisors who can guide you through the available options.
                        </p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg">
                    <button class="faq-toggle flex justify-between items-center w-full p-5 text-left" 
                        aria-expanded="false" aria-controls="faq3">
                        <span class="font-medium text-gray-800">Are scholarships available?</span>
                        <i class="fas fa-chevron-down text-primary transition-transform"></i>
                    </button>
                    <div id="faq3" class="faq-content hidden px-5 pb-5 pt-0">
                        <p class="text-gray-600">
                            Yes, we offer merit-based scholarships to exceptional students. Additionally, need-based financial aid is 
                            available for deserving candidates. The scholarship application process typically begins after admission. 
                            Contact our financial aid office for more details.
                        </p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg">
                    <button class="faq-toggle flex justify-between items-center w-full p-5 text-left" 
                        aria-expanded="false" aria-controls="faq4">
                        <span class="font-medium text-gray-800">What makes Adishesha Institute different from other institutions?</span>
                        <i class="fas fa-chevron-down text-primary transition-transform"></i>
                    </button>
                    <div id="faq4" class="faq-content hidden px-5 pb-5 pt-0">
                        <p class="text-gray-600">
                            Our institute stands apart through our accelerated learning methodology, experienced faculty, 
                            personalized attention, and proven track record of student success. We focus on holistic development 
                            alongside academic excellence, preparing students for real-world challenges.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const faqToggles = document.querySelectorAll('.faq-toggle');
        
        faqToggles.forEach(toggle => {
            toggle.addEventListener('click', () => {
                const expanded = toggle.getAttribute('aria-expanded') === 'true';
                const content = document.getElementById(toggle.getAttribute('aria-controls'));
                const icon = toggle.querySelector('.fas');
                
                if (expanded) {
                    toggle.setAttribute('aria-expanded', 'false');
                    content.classList.add('hidden');
                    icon.classList.remove('transform', 'rotate-180');
                } else {
                    toggle.setAttribute('aria-expanded', 'true');
                    content.classList.remove('hidden');
                    icon.classList.add('transform', 'rotate-180');
                }
            });
        });
    });
</script>

<!-- Contact Form JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const contactForm = document.getElementById('contactForm');
        const formResponse = document.getElementById('formResponse');
        
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(contactForm);
            
            // This is a simple simulation - in a real implementation, you would send this to your server
            // using fetch or XMLHttpRequest
            
            // Simulating form submission
            formResponse.innerHTML = '<p class="text-green-600">Thank you for your message! We will get back to you shortly.</p>';
            formResponse.classList.remove('hidden');
            contactForm.reset();
            
            // In a real implementation, you would use something like:
            /*
            fetch('process_contact.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    formResponse.innerHTML = '<p class="text-green-600">' + data.message + '</p>';
                } else {
                    formResponse.innerHTML = '<p class="text-red-600">' + data.message + '</p>';
                }
                formResponse.classList.remove('hidden');
            })
            .catch(error => {
                formResponse.innerHTML = '<p class="text-red-600">An error occurred. Please try again later.</p>';
                formResponse.classList.remove('hidden');
            });
            */
        });
    });
</script>

<?php 
    include 'include/footer.php';
?>