-
    <!-- Login Modal -->
    <div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg p-8 max-w-sm w-full">
            <h2 class="text-2xl font-bold mb-6">Admin Panel Login</h2>
            <form id="loginForm">
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="username">Username</label>
                    <input class="w-full px-3 py-2 border rounded-lg" id="username" name="username" type="text" required>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 mb-2" for="password">Password</label>
                    <input class="w-full px-3 py-2 border rounded-lg" id="password" name="password" type="password" required>
                </div>
                <div class="flex justify-between items-center">
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-colors" type="submit">Login</button>
                    <button class="text-gray-700 hover:text-indigo-600 transition-colors" id="closeModal" type="button">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        // Login functionality
        const loginModal = document.getElementById('loginModal');
        const closeModal = document.getElementById('closeModal');
        const loginForm = document.getElementById('loginForm');

        // Toggle modal
        document.getElementById('loginButton').addEventListener('click', () => {
            loginModal.classList.remove('hidden');
        });

        closeModal.addEventListener('click', () => {
            loginModal.classList.add('hidden');
        });

        // Handle form submission
        loginForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            try {
                const response = await fetch('auth.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ username, password })
                });

                const data = await response.json();
                
                if(data.success) {
                    localStorage.setItem('loggedIn', 'true');
                    window.location.href = 'admin.php';
                } else {
                    showErrorModal('Invalid credentials! Please try again.');
                }
            } catch (error) {
                showErrorModal('Connection error. Please try again later.');
            }
        });

        // Ensure modal is accessible
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize modal state
            const loginModal = document.getElementById('loginModal');
            
            // Close modal on outside click
            loginModal.addEventListener('click', (e) => {
                if(e.target === loginModal) {
                    loginModal.classList.add('hidden');
                }
            });

            // Clear form on close
            document.getElementById('closeModal').addEventListener('click', () => {
                document.getElementById('loginForm').reset();
            });
        });

        function showErrorModal(message) {
            const errorModal = document.createElement('div');
            errorModal.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center';
            errorModal.innerHTML = `
                <div class="bg-white rounded-lg p-6 max-w-xs text-center">
                    <div class="text-red-500 text-4xl mb-4">
                        <i class="fas fa-exclamation-circle"></i>
                    </div>
                    <p class="text-gray-700 mb-4">${message}</p>
                    <button onclick="this.parentElement.parentElement.remove()" 
                            class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                        OK
                    </button>
                </div>
            `;
            document.body.appendChild(errorModal);
        }

        // Enhanced image refresh
        function refreshImages() {
            document.querySelectorAll('img').forEach(img => {
                const src = img.src.split('?')[0];
                img.src = src + `?force=${Date.now()}`;
            });
        }
        
        // Cross-tab category sync
        window.addEventListener('storage', (e) => {
            if (e.key === 'galleryUpdate') {
                renderGallery();
                refreshImages();
            }
        });

        // Global update trigger
        function forceImageRefresh() {
            document.querySelectorAll('img').forEach(img => {
                img.src = img.src.split('?')[0] + '?force=' + Date.now();
            });
        }

        // Cross-page refresh coordinator
        function coordinateUpdate() {
            if (window.location.pathname.includes('admin.php')) {
                localStorage.setItem('lastAdminUpdate', Date.now());
            } else {
                const lastUpdate = localStorage.getItem('lastAdminUpdate') || 0;
                if (Date.now() - lastUpdate < 1000) {
                    window.dispatchEvent(new Event('galleryUpdate'));
                }
            }
        }
        setInterval(coordinateUpdate, 500);
    </script>
</body>
</html> 