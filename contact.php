<?php $pageTitle = "Contact"; ?>
<?php include 'header.php'; ?>

    <div class="container mx-auto px-4 py-12">
        <h1 class="text-4xl font-bold mb-12 text-center">Contact Us</h1>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Contact Information -->
            <div class="lg:col-span-1">
                <div class="space-y-6 bg-white p-8 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <i class="fas fa-envelope h-6 w-6 mr-4 text-gray-700"></i>
                        <div>
                            <h3 class="font-medium">Email</h3>
                            <p class="text-gray-600">infoheritage@photofolio.com</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-phone h-6 w-6 mr-4 text-gray-700"></i>
                        <div>
                            <h3 class="font-medium">Phone</h3>
                            <p class="text-gray-600">+071-562555</p>
                        </div>
                    </div>
                    <div class="pt-6 border-t">
                        <h3 class="font-medium mb-4">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 transition-colors" href="#">
                                <i class="fab fa-instagram text-gray-700"></i>
                            </a>
                            <a class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 transition-colors" href="#">
                                <i class="fab fa-twitter text-gray-700"></i>
                            </a>
                            <a class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 transition-colors" href="#">
                                <i class="fab fa-facebook text-gray-700"></i>
                            </a>
                            <a class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 transition-colors" href="#">
                                <i class="fab fa-linkedin text-gray-700"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="lg:col-span-2">
                <form id="contactForm" class="space-y-6 bg-white p-8 rounded-lg shadow-lg">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input id="contactName" class="w-full px-4 py-2 border rounded-lg" required type="text">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input id="contactEmail" class="w-full px-4 py-2 border rounded-lg" required type="email">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                        <textarea id="contactMessage" class="w-full px-4 py-2 border rounded-lg" required rows="6"></textarea>
                    </div>
                    <button class="w-full px-6 py-3 bg-gray-900 text-white rounded-lg hover:bg-gray-800 transition-colors" type="submit">Send Message</button>
                </form>
            </div>
        </div>
        
        <!-- Map Section -->
        <div class="mt-12">
            <h2 class="text-2xl font-semibold mb-6 text-center">Find Me Here</h2>
            <div class="w-full h-64 rounded-lg overflow-hidden shadow-lg">
                <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509374!2d144.9537363153169!3d-37.81627977975195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577d8b1f4b8b1a!2sEiffel%20Tower!5e0!3m2!1sen!2sfr!4v1633022821234!5m2!1sen!2sfr"></iframe>
            </div>
        </div>
    </div>

<!-- Add this popup container at the bottom of the content, before the script -->
<div id="successPopup" class="fixed inset-0 flex items-center justify-center p-4 z-50 opacity-0 pointer-events-none transition-opacity duration-300">
    <div class="bg-white rounded-2xl p-8 max-w-md w-full shadow-2xl transform transition-all duration-500 scale-95">
        <div class="flex flex-col items-center text-center space-y-4">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4">
                <svg class="w-8 h-8 text-green-600 animate-checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900">Message Sent!</h3>
            <p class="text-gray-600">Thank you for your inquiry. We'll respond within 24 hours.stayed tuned!!</p>
            <button onclick="hidePopup()" class="mt-4 px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                Close
            </button>
        </div>
    </div>
</div>

<script>
    document.getElementById('contactForm').addEventListener('submit', (e) => {
        e.preventDefault();
        const formData = {
            name: document.getElementById('contactName').value.trim(),
            email: document.getElementById('contactEmail').value.trim(),
            message: document.getElementById('contactMessage').value.trim(),
            timestamp: new Date().toISOString(),
            read: false
        };

        const messages = JSON.parse(localStorage.getItem('messages')) || [];
        messages.unshift(formData);
        localStorage.setItem('messages', JSON.stringify(messages));

        e.target.reset();
        showPopup();
    });

    function showPopup() {
        const popup = document.getElementById('successPopup');
        popup.classList.remove('opacity-0', 'pointer-events-none');
        popup.classList.add('opacity-100');
        popup.querySelector('.scale-95').classList.replace('scale-95', 'scale-100');
        
        setTimeout(hidePopup, 3000);
    }

    function hidePopup() {
        const popup = document.getElementById('successPopup');
        popup.classList.add('opacity-0', 'pointer-events-none');
        popup.classList.remove('opacity-100');
        popup.querySelector('.scale-100').classList.replace('scale-100', 'scale-95');
    }
</script>

<style>
    .animate-checkmark {
        animation: checkmark 0.5s cubic-bezier(0.4, 0, 0.2, 1) forwards;
    }

    @keyframes checkmark {
        0% {
            transform: scale(0);
            opacity: 0;
        }
        80% {
            transform: scale(1.2);
        }
        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    #successPopup {
        backdrop-filter: blur(4px);
        background: rgba(0, 0, 0, 0.25);
    }
</style>

<?php include 'footer.php'; ?> 