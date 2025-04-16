
document.addEventListener('DOMContentLoaded', function () {
    // Sample data for web development companies
    const companies = [
        {
            name: "WebCraft Studio",
            logo: "../assets/placeholder.png",
            description: "Full-stack web development agency specializing in responsive design and e-commerce solutions.",
            technologies: ["React", "Node.js", "MongoDB", "AWS"],
            specialty: "E-commerce",
            location: "San Francisco, CA"
        },
        {
            name: "Digital Apex",
            logo: "../assets/placeholder.png",
            description: "Creative developers focused on cutting-edge web applications with exceptional user experiences.",
            technologies: ["Vue.js", "Laravel", "MySQL", "GCP"],
            specialty: "SaaS Applications",
            location: "New York, NY"
        },
        {
            name: "CodeBridge Solutions",
            logo: "../assets/placeholder.png",
            description: "Backend specialists offering scalable API development and system architecture services.",
            technologies: ["Python", "Django", "PostgreSQL", "Docker"],
            specialty: "API Development",
            location: "Austin, TX"
        },
        {
            name: "FrontEdge Development",
            logo: "../assets/placeholder.png",
            description: "Frontend experts creating pixel-perfect, accessible interfaces with modern frameworks.",
            technologies: ["Angular", "TypeScript", "SCSS", "Netlify"],
            specialty: "UI/UX Implementation",
            location: "Seattle, WA"
        },
        {
            name: "Agile Web Forge",
            logo: "../assets/placeholder.png",
            description: "Agile team delivering high-quality web projects with rapid iteration and collaborative approach.",
            technologies: ["Next.js", "GraphQL", "Prisma", "Vercel"],
            specialty: "Rapid Prototyping",
            location: "Chicago, IL"
        },
        {
            name: "Stack Innovators",
            logo: "../assets/placeholder.png",
            description: "Modern web stack experts helping startups launch MVPs and scale technical infrastructure.",
            technologies: ["MERN Stack", "Firebase", "Redux", "Kubernetes"],
            specialty: "Startup Development",
            location: "Miami, FL"
        },
        {
            name: "Pixel Perfect Labs",
            logo: "../assets/placeholder.png",
            description: "Design-focused web development studio creating visually stunning and highly usable websites.",
            technologies: ["Svelte", "TailwindCSS", "Strapi", "Cloudflare"],
            specialty: "Design-First Development",
            location: "Portland, OR"
        },
        {
            name: "ServerSide Experts",
            logo: "../assets/placeholder.png",
            description: "Enterprise-grade backend development with focus on security, scalability and performance optimization.",
            technologies: ["Java", "Spring Boot", "Oracle", "Kubernetes"],
            specialty: "Enterprise Solutions",
            location: "Boston, MA"
        },
        {
            name: "WebFlow Masters",
            logo: "../assets/placeholder.png",
            description: "No-code and low-code specialists creating custom solutions with rapid deployment and minimal technical debt.",
            technologies: ["Webflow", "Bubble", "Airtable", "Zapier"],
            specialty: "No-Code Development",
            location: "Denver, CO"
        },
        {
            name: "Jamstack Pioneers",
            logo: "../assets/placeholder.png",
            description: "Static site specialists building blazing fast, secure and SEO-friendly websites and web applications.",
            technologies: ["Gatsby", "Astro", "Sanity", "Netlify"],
            specialty: "Static Site Generation",
            location: "Austin, TX"
        },
        {
            name: "Mobile First Devs",
            logo: "../assets/placeholder.png",
            description: "Responsive web application experts ensuring perfect experiences across all device types and screen sizes.",
            technologies: ["React", "PWA", "Capacitor", "Tailwind"],
            specialty: "Responsive Web Apps",
            location: "Atlanta, GA"
        },
        {
            name: "Ecommerce Experts",
            logo: "../assets/placeholder.png",
            description: "Specialized in creating high-converting online stores with seamless checkout experiences and integrations.",
            technologies: ["Shopify", "WooCommerce", "Stripe", "Algolia"],
            specialty: "Online Stores",
            location: "Los Angeles, CA"
        },
        {
            name: "Performance Wizards",
            logo: "../assets/placeholder.png",
            description: "Web optimization specialists ensuring lightning-fast load times and perfect Lighthouse scores.",
            technologies: ["Webpack", "Web Vitals", "Redis", "Cloudinary"],
            specialty: "Web Performance",
            location: "San Diego, CA"
        },
        {
            name: "Accessibility Advocates",
            logo: "../assets/placeholder.png",
            description: "Creating inclusive web experiences that work for everyone, with WCAG compliance and assistive technology support.",
            technologies: ["React", "Aria", "Storybook", "Axe"],
            specialty: "Accessible Websites",
            location: "Minneapolis, MN"
        },
        {
            name: "WordPress Champions",
            logo: "../assets/placeholder.png",
            description: "Custom WordPress development focusing on unique themes, plugins and high-performance implementations.",
            technologies: ["WordPress", "PHP", "jQuery", "ACF"],
            specialty: "WordPress Development",
            location: "Nashville, TN"
        },
        {
            name: "Data Visualization Pros",
            logo: "../assets/placeholder.png",
            description: "Specializing in interactive dashboards and data visualization for complex information systems.",
            technologies: ["D3.js", "Tableau", "Chart.js", "GraphQL"],
            specialty: "Data Visualization",
            location: "Washington, DC"
        }
    ];

    const companyGrid = document.getElementById('company-grid');
    const searchInput = document.getElementById('company-search');
    const noResults = document.getElementById('no-results');

    // Function to render all companies
    function renderCompanies(companiesToRender) {
        companyGrid.innerHTML = '';

        if (companiesToRender.length === 0) {
            noResults.classList.remove('hidden');
        } else {
            noResults.classList.add('hidden');

            companiesToRender.forEach(company => {
                const companyCard = document.createElement('div');
                companyCard.className = 'company-card bg-[#0b0b0d] border border-gray-700 rounded-lg overflow-hidden';

                companyCard.innerHTML = `
                            <div class="h-40 bg-gray-800 flex items-center justify-center">
                                <span class="text-gray-400">${company.name} Logo</span>
                                <!-- Uncomment when you have actual logos: <img src="${company.logo}" alt="${company.name} logo" class="h-full w-full object-contain p-4"> -->
                            </div>
                            <div class="p-5">
                                <h3 class="text-xl font-semibold text-white mb-2">${company.name}</h3>
                                <p class="text-gray-300 text-sm mb-4">${company.description}</p>
                                <p class="text-sm text-gray-400"><span class="font-medium text-[#E94560]">Specialty:</span> ${company.specialty}</p>
                                <p class="text-sm text-gray-400"><span class="font-medium text-[#E94560]">Location:</span> ${company.location}</p>
                                <div class="mt-4">
                                    <p class="text-xs text-gray-500 mb-2">Technologies:</p>
                                    <div class="flex flex-wrap gap-2">
                                        ${company.technologies.map(tech => `
                                            <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">${tech}</span>
                                        `).join('')}
                                    </div>
                                </div>
                                <a href="#" class="block w-full text-center bg-[#E94560] hover:bg-[#e73351] text-white font-medium py-2 px-4 rounded mt-4 transition-colors">
                                    View Details
                                </a>
                            </div>
                        `;

                companyGrid.appendChild(companyCard);
            });
        }
    }

    // Initial render
    renderCompanies(companies);

    // Search functionality
    searchInput.addEventListener('input', function (e) {
        const searchTerm = e.target.value.toLowerCase();

        const filteredCompanies = companies.filter(company => {
            return (
                company.name.toLowerCase().includes(searchTerm) ||
                company.description.toLowerCase().includes(searchTerm) ||
                company.specialty.toLowerCase().includes(searchTerm) ||
                company.location.toLowerCase().includes(searchTerm) ||
                company.technologies.some(tech => tech.toLowerCase().includes(searchTerm))
            );
        });

        renderCompanies(filteredCompanies);
    });
});