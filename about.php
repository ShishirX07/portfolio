<?php $pageTitle = "About Us"; ?>
<?php include 'header.php'; ?>

    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900" id="aboutTitle">About Us</h1>
                <p class="text-xl text-gray-600 mt-4" id="aboutSubtitle">Learn more about our journey and what drives us</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="flex justify-center">
                    <div class="relative group">
                        <img alt="Photographer in Nepal" 
                             class="w-64 h-64 object-cover rounded-full shadow-xl transform transition-all duration-300 group-hover:scale-105"
                             src="<?php 
                                 $about = json_decode(file_get_contents('about.json'), true);
                                 echo $about['images']['main'] ?? 'https://storage.googleapis.com/a1aa/image/azeT88lrWzebPMKu2QosBeMC8kiPAy8Dq-wM2zbD4Jo.jpg';
                             ?>">
                        <div class="absolute inset-0 rounded-full border-4 border-white/20 group-hover:border-indigo-100 transition-all duration-300"></div>
                    </div>
                </div>
                <div class="flex flex-col justify-center">
                    <p class="text-gray-700 mb-4" id="aboutContent1"></p>
                    <p class="text-gray-700" id="aboutContent2"></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900">Meet the Team</h2>
                <p class="text-xl text-gray-600 mt-4">Our talented and dedicated team members.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12" id="teamContainer">
                <!-- Dynamic content -->
            </div>
        </div>
    </section>

<script>
    // Load about content
    function loadAboutContent() {
        const about = JSON.parse(localStorage.getItem('about')) || {};
        
        // Update main content
        document.getElementById('aboutTitle').textContent = about.title || 'About Us';
        document.getElementById('aboutSubtitle').textContent = about.subtitle || 'Learn more...';
        document.getElementById('aboutContent1').textContent = about.content1 || 'Default content...';
        document.getElementById('aboutContent2').textContent = about.content2 || 'Default content...';
        
        // Update images
        const mainImg = document.querySelector('[alt="Photographer in Nepal"]');
        mainImg.src = `${about.images?.main || mainImg.src}?ts=${Date.now()}`;
        
        // Team images
        if(about.images?.team) {
            about.images.team.forEach((member, index) => {
                const img = document.querySelector(`[alt="${member.name}"]`);
                if(img) img.src = `${member.url}?ts=${Date.now()}`;
            });
        }
        loadTeam();
    }

    // Listen for updates
    window.addEventListener('storage', (e) => {
        if (e.key === 'aboutUpdate' || e.key === 'teamUpdate') {
            loadAboutContent();
        }
    });

    // Initial load
    loadAboutContent();

    // Add to the existing script
    function loadTeam() {
        const team = JSON.parse(localStorage.getItem('team')) || [];
        const container = document.getElementById('teamContainer');
        
        container.innerHTML = team.map(member => `
            <div class="text-center">
                <img alt="${member.name}" 
                     class="w-48 h-48 object-cover rounded-full mx-auto mb-4"
                     src="${member.image}?ts=${Date.now()}">
                <h3 class="text-2xl font-semibold text-gray-900">${member.name}</h3>
                <p class="text-gray-600 mb-4">${member.position}</p>
                <div class="text-gray-700 max-w-xs mx-auto text-sm">
                    ${member.bio || 'No biography available yet'}
                </div>
            </div>
        `).join('');
    }
</script>

<?php include 'footer.php'; ?> 