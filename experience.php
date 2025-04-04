<?php $pageTitle = "Experience"; ?>
<?php include 'header.php'; ?>

<div class="max-w-7xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold mb-12 text-center bg-gradient-to-r from-indigo-600 to-blue-500 bg-clip-text text-transparent">
        Professional Journey
    </h1>
    
    <!-- Main Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Left Column -->
        <div class="lg:col-span-2 space-y-8">
            <!-- Awards & Recognition -->
            <div class="bg-white p-8 rounded-2xl shadow-xl border border-indigo-50 transform transition-all duration-300 hover:shadow-2xl">
                <h2 class="text-3xl font-bold mb-6 text-indigo-600 flex items-center gap-3">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-trophy text-indigo-600 text-xl"></i>
                    </div>
                    Awards & Recognition
                </h2>
                <div class="space-y-6 relative pl-4 border-l-2 border-indigo-100" data-awards>
                    <!-- Awards content will be dynamically populated -->
                </div>
            </div>

            <!-- Exhibition Timeline -->
            <div class="bg-white p-8 rounded-2xl shadow-xl border border-indigo-50 transform transition-all duration-300 hover:shadow-2xl">
                <h2 class="text-3xl font-bold mb-6 text-indigo-600 flex items-center gap-3">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-calendar-alt text-indigo-600 text-xl"></i>
                    </div>
                    Exhibition Timeline
                </h2>
                <div class="space-y-6 relative" data-exhibitions>
                    <!-- Exhibitions content will be dynamically populated -->
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="space-y-8">
            <!-- Skills Matrix -->
            <div class="bg-white p-8 rounded-2xl shadow-xl border border-indigo-50 transform transition-all duration-300 hover:shadow-2xl">
                <h2 class="text-3xl font-bold mb-6 text-indigo-600 flex items-center gap-3">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-chart-line text-indigo-600 text-xl"></i>
                    </div>
                    Technical Expertise
                </h2>
                <div class="space-y-4" data-skills>
                    <!-- Skills content will be dynamically populated -->
                </div>
            </div>

            <!-- Software Proficiency -->
            <div class="bg-white p-8 rounded-2xl shadow-xl border border-indigo-50 transform transition-all duration-300 hover:shadow-2xl">
                <h2 class="text-3xl font-bold mb-6 text-indigo-600 flex items-center gap-3">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-laptop-code text-indigo-600 text-xl"></i>
                    </div>
                    Software Mastery
                </h2>
                <div class="grid grid-cols-2 gap-4">
                    <!-- Software items with hover effects -->
                    <div class="flex items-center gap-3 p-3 bg-indigo-50 rounded-lg transition-all duration-300 hover:bg-indigo-100 hover:-translate-y-1">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/20/Photoshop_CC_icon.png" 
                             class="w-8 h-8 transition-transform duration-300 hover:scale-110" alt="Photoshop">
                        <span class="font-medium">Photoshop</span>
                    </div>
                    <!-- Repeat for other software items -->
                </div>
            </div>

            <!-- Languages -->
            <div class="bg-white p-8 rounded-2xl shadow-xl border border-indigo-50 transform transition-all duration-300 hover:shadow-2xl">
                <h2 class="text-3xl font-bold mb-6 text-indigo-600 flex items-center gap-3">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-globe-asia text-indigo-600 text-xl"></i>
                    </div>
                    Language Proficiency
                </h2>
                <div class="space-y-4">
                    <!-- Animated progress bars -->
                    <div class="flex items-center gap-3 group">
                        <span class="w-20 text-gray-700 font-medium">Nepali</span>
                        <div class="flex-1 h-2 bg-gray-200 rounded-full overflow-hidden">
                            <div class="h-2 bg-gradient-to-r from-indigo-500 to-blue-400 rounded-full w-full 
                                    transition-all duration-1000 ease-out" style="width: 100%"></div>
                        </div>
                    </div>
                    <!-- Repeat for other languages -->
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Add entrance animations */
    [data-awards], [data-exhibitions], [data-skills] {
        animation: fadeInUp 0.8s ease-out forwards;
        opacity: 0;
        transform: translateY(20px);
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Timeline styling */
    [data-exhibitions]::before {
        content: '';
        position: absolute;
        left: -1px;
        top: 0;
        height: 100%;
        width: 2px;
        background: linear-gradient(to bottom, #4f46e5 0%, #6366f1 50%, #818cf8 100%);
    }

    [data-awards] > div,
    [data-exhibitions] > div {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    [data-exhibitions]::before {
        content: '';
        position: absolute;
        left: -1px;
        top: 0;
        height: 100%;
        width: 2px;
        background: linear-gradient(to bottom, 
            rgba(79, 70, 229, 0.2) 0%,
            rgba(99, 102, 241, 0.6) 50%,
            rgba(129, 140, 248, 0.2) 100%
        );
    }

    .award-badge {
        box-shadow: 0 4px 6px -1px rgba(79, 70, 229, 0.1), 0 2px 4px -1px rgba(79, 70, 229, 0.06);
    }

    .skill-card {
        padding: 1rem;
        border-radius: 0.75rem;
        border: 1px solid #e0e7ff;
        transition: all 0.3s;
    }
    
    .skill-progress {
        height: 0.75rem;
        border-radius: 9999px;
        background-color: #e5e7eb;
        overflow: hidden;
    }
    
    .skill-progress-bar {
        background: linear-gradient(90deg, #4f46e5 0%, #6366f1 50%, #818cf8 100%);
        transition: width 1s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .skill-progress-bar::after {
        content: '';
        position: absolute;
        right: 0;
        top: 0;
        bottom: 0;
        width: 2px;
        background: white;
        opacity: 0.5;
    }
    
    .skill-percentage {
        font-size: 0.875rem;
        font-weight: 500;
        color: #4f46e5;
        padding: 0.25rem 0.5rem;
        border-radius: 9999px;
        background-color: #eef2ff;
    }
    
    .skill-sparkle {
        position: absolute;
        right: 0.5rem;
        top: -0.5rem;
        color: #eab308;  /* yellow-500 */
        opacity: 0;
        filter: drop-shadow(0 2px 4px rgba(252, 211, 77, 0.3));
        transition: all 0.3s ease;
    }
    
    .skill-card:hover .skill-sparkle {
        opacity: 1;
        transform: translateY(0) rotate(10deg);
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const experienceData = JSON.parse(localStorage.getItem('experience')) || {};

    // Enhanced Awards Rendering
    const awardsContainer = document.querySelector('[data-awards]');
    if (awardsContainer && experienceData.awards) {
        awardsContainer.innerHTML = experienceData.awards.map((award, index) => `
            <div class="group relative pl-8 pb-6 border-b border-indigo-50 last:border-0">
                <div class="absolute -left-[17px] top-0 w-8 h-8 bg-indigo-100 rounded-full flex items-center justify-center">
                    <span class="text-indigo-600 font-bold">${index + 1}</span>
                </div>
                <h3 class="text-xl font-semibold mb-2 group-hover:text-indigo-600 transition-colors">
                    ${award.title}
                </h3>
                <div class="flex items-center gap-2 mb-2">
                    <span class="px-2 py-1 bg-indigo-50 text-indigo-600 text-sm rounded-full">${award.year}</span>
                    ${award.organization ? `<span class="text-sm text-gray-500">${award.organization}</span>` : ''}
                </div>
                <p class="text-gray-600">${award.description}</p>
            </div>
        `).join('');
    }

    // Enhanced Exhibitions Rendering
    const exhibitionsContainer = document.querySelector('[data-exhibitions]');
    if (exhibitionsContainer && experienceData.exhibitions) {
        exhibitionsContainer.innerHTML = experienceData.exhibitions.map(exhibition => `
            <div class="group relative pl-8 pb-6 border-b border-indigo-50 last:border-0">
                <div class="absolute -left-[17px] top-0 w-8 h-8 bg-indigo-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-map-marker-alt text-indigo-600 text-sm"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2 group-hover:text-indigo-600 transition-colors">
                    ${exhibition.title}
                </h3>
                <div class="flex items-center gap-2 mb-2">
                    <span class="px-2 py-1 bg-indigo-50 text-indigo-600 text-sm rounded-full">${exhibition.year}</span>
                    ${exhibition.location ? `<span class="text-sm text-gray-500">${exhibition.location}</span>` : ''}
                </div>
                <p class="text-gray-600">${exhibition.description}</p>
                ${exhibition.link ? `
                    <a href="${exhibition.link}" target="_blank" class="inline-block mt-2 text-indigo-600 hover:text-indigo-700">
                        View Exhibition <i class="fas fa-external-link-alt ml-1 text-sm"></i>
                    </a>
                ` : ''}
            </div>
        `).join('');
    }

    // Add hover effects
    document.querySelectorAll('[data-awards] > div, [data-exhibitions] > div').forEach(item => {
        item.addEventListener('mouseenter', () => {
            item.style.transform = 'translateX(10px)';
        });
        item.addEventListener('mouseleave', () => {
            item.style.transform = 'translateX(0)';
        });
    });

    // Add animation delays
    document.querySelectorAll('[data-awards], [data-exhibitions], [data-skills]').forEach((el, index) => {
        el.style.animationDelay = `${index * 0.2}s`;
    });

    // Animate progress bars on scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                entry.target.querySelectorAll('.bg-gradient-to-r').forEach(bar => {
                    bar.style.transition = 'width 1.5s cubic-bezier(0.4, 0, 0.2, 1)';
                });
            }
        });
    }, { threshold: 0.5 });

    observer.observe(document.querySelector('[data-skills]'));

    // Update Skills Section
    const skillsContainer = document.querySelector('[data-skills]');
    if (skillsContainer && experienceData.skills) {
        skillsContainer.innerHTML = Object.entries(experienceData.skills).map(([skill, value]) => `
            <div class="skill-card group relative">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 bg-indigo-100 rounded-lg flex items-center justify-center">
                            ${getSkillIcon(skill)}
                        </div>
                        <span class="font-medium text-gray-700">
                            ${skill.replace(/([A-Z])/g, ' $1').trim()}
                        </span>
                    </div>
                    <span class="skill-percentage">${value}%</span>
                </div>
                <div class="skill-progress">
                    <div class="skill-progress-bar" style="width: ${value}%"></div>
                </div>
                <i class="fas fa-sparkle skill-sparkle"></i>
            </div>
        `).join('');
    }

    function getSkillIcon(skill) {
        const icons = {
            portrait: 'fas fa-portrait',
            landscape: 'fas fa-mountain-sun',
            editing: 'fas fa-sliders',
            lighting: 'fas fa-lightbulb',
            composition: 'fas fa-crop-simple'
        };
        return `<i class="${icons[skill.toLowerCase()] || 'fas fa-star'} text-indigo-600"></i>`;
    }

    // Add intersection observer for skill animations
    const skillObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                entry.querySelectorAll('.skill-progress-bar').forEach(bar => {
                    bar.style.transition = 'width 1.5s cubic-bezier(0.4, 0, 0.2, 1)';
                });
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('.skill-card').forEach(card => {
        skillObserver.observe(card);
    });
});
</script>

<?php include 'footer.php'; ?> 