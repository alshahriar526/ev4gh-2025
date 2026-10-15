<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EV4GH 2026 Fellows</title>
    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Pro 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts: Inter & Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
        /* CSS Variables & Brand Palette */
        :root {
            --ev-red: #a62527;
            --ev-blue: #3ba4d7;
            --ev-teal: #126466;
            --ev-dark: #0f172a;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--ev-dark);
            color: #f8fafc;
            min-height: 100vh;
        }

        .font-heading {
            font-family: 'Poppins', sans-serif;
        }

        /* Glassmorphism Styles */
        .glass-panel {
            background: rgba(15, 23, 42, 0.9);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.12);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .glass-card:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: rgba(59, 164, 215, 0.5);
            transform: translateY(-4px);
            box-shadow: 0 12px 30px -10px rgba(59, 164, 215, 0.3);
        }

        /* Gradient Text Helper */
        .text-gradient {
            background: linear-gradient(135deg, var(--ev-blue) 0%, #ffffff 50%, var(--ev-red) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Full page scrollable dialog */
        .modal-fullscreen-custom {
            max-width: 95vw;
            margin: 2rem auto;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.15);
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(166, 37, 39, 0.5);
            border-radius: 9999px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgba(166, 37, 39, 0.9);
        }

        /* Animated Close Button */
        .btn-close-custom {
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            background-color: rgba(15, 23, 42, 0.85);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            cursor: pointer;
        }

        .btn-close-custom:hover {
            background-color: var(--ev-red);
            transform: rotate(180deg) scale(1.15);
            border-color: var(--ev-red);
            box-shadow: 0 0 15px rgba(166, 37, 39, 0.6);
        }

        /* Icon-Only Theme Switcher Bar */
        .theme-switcher-bar {
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 4px;
            border-radius: 50rem;
        }

        .theme-btn-icon {
            width: 2.2rem;
            height: 2.2rem;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #cbd5e1;
            transition: all 0.3s ease;
            border: none;
            background: transparent;
        }

        .theme-btn-icon:hover {
            color: #fff;
            background: rgba(255, 255, 255, 0.15);
        }

        .theme-btn-icon.active {
            background-color: var(--ev-red);
            color: #fff;
            box-shadow: 0 2px 8px rgba(166, 37, 39, 0.5);
        }

        /* Compact Header Styles */
        .ev-logo-compact {
            width: 60px;
            height: 60px;
            background: #fff;
            border-radius: 50%;
            padding: 4px;
            object-fit: contain;
        }

        /* Search Input Focus Style */
        .custom-search-input:focus {
            box-shadow: 0 0 0 0.25rem rgba(59, 164, 215, 0.3);
            border-color: var(--ev-blue);
        }

        .badge-brand-red {
            background-color: var(--ev-red);
            color: #fff;
        }

        .badge-brand-blue {
            background-color: rgba(59, 164, 215, 0.2);
            color: var(--ev-blue);
            border: 1px solid rgba(59, 164, 215, 0.4);
        }

        .organaizer-image-panel {
            background: #ffffff;
            backdrop-filter: blur(10px);
            height: 90px;
            /* Reduced container height */
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            padding: 10px 15px;
            gap: 15px;
            /* Clean spacing between images */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .organaizer-image-panel img {
            background-color: transparent;
            max-height: 55px;
            /* Significantly reduced image height */
            width: auto;
            /* Maintains original aspect ratio */
            object-fit: contain;
            padding: 4px;
            border: none;
            /* Removes heavy default img-thumbnail borders */
            transition: transform 0.2s ease;
        }

        .organaizer-image-panel img:hover {
            transform: scale(1.05);
            /* Subtle hover effect */
        }


        .search-bar {
            display: flex;
            flex-direction: column;
            align-content: center;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>

    <div class="modal fade" id="fellowsModal" tabindex="-1" aria-labelledby="fellowsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-custom">

            <div id="modalContainer"
                class="modal-content rounded-5 shadow-lg border-0 glass-panel text-white position-relative">

                <!-- TOP RIGHT CORNER: ICON-ONLY THEME SWITCHER & ANIMATED CLOSE BUTTON -->
                <div class="position-absolute top-0 end-0 m-3 m-md-4 d-flex align-items-center gap-2"
                    style="z-index: 1065;">
                    <div class="theme-switcher-bar d-flex align-items-center gap-1 shadow-sm">
                        <button onclick="switchTheme('v1')" id="btn-v1" class="theme-btn-icon active"
                            title="Executive Glass">
                            <i class="fa-solid fa-moon"></i>
                        </button>
                        <button onclick="switchTheme('v2')" id="btn-v2" class="theme-btn-icon"
                            title="Modern Editorial">
                            <i class="fa-solid fa-newspaper"></i>
                        </button>
                        <button onclick="switchTheme('v3')" id="btn-v3" class="theme-btn-icon"
                            title="Vibrant Festival">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                        </button>
                    </div>

                    <button type="button" class="btn-close-custom shadow-sm" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-solid fa-xmark fs-5"></i>
                    </button>
                </div>

                <!-- COMPACT MODAL HEADER SECTION -->
                <div id="modalHeader"
                    class="modal-header border-bottom border-white border-opacity-10 px-4 pt-4 pb-3 d-block bg-dark bg-opacity-50 rounded-top-5">

                    <div class="text-center mx-auto pe-md-5" style="max-width: 600px;">

                        <div class="d-flex align-items-center justify-content-center gap-2 mb-2">
                            
                            <img src="assets/images/logo/EV4GH-NEW-Logo.png"
                                class="img-thumbnail ev-logo-compact shadow-sm" alt="EV4GH Logo">
                            <h3 id="modalMainTitle" class="modal-title font-heading h4 fw-extrabold text-white mb-0"
                                id="fellowsModalLabel">
                                Welcome, EV4GH 2026 Fellows!
                            </h3>
                        </div>

                        <!-- Search Bar -->
                        <div class="mt-2 mx-auto search-bar">
                            <div class="position-relative d-flex align-items-center">
                                <i
                                    class="fa-solid fa-magnifying-glass position-absolute start-0 ms-3 text-secondary"></i>
                                <input type="text" id="searchInput" onkeyup="filterFellows()"
                                    placeholder="Search fellows by name or country..."
                                    class="form-control custom-search-input ps-5 pe-5 py-1.5 rounded-pill bg-dark bg-opacity-75 border-secondary text-white placeholder-secondary fs-7">
                                <span id="fellowsCount"
                                    class="position-absolute end-0 me-2 badge badge-brand-red rounded-pill px-2 py-1 fs-8">
                                    23 Fellows
                                </span>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- MODAL BODY: FELLOWS GRID -->
                <div id="modalBody" class="modal-body p-4 p-md-5">

                    <!-- Dynamic Fellows Cards Grid -->
                    <div id="fellowsGrid"
                        class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-6 g-3 g-md-4">
                        <!-- Cards injected dynamically via JS -->
                    </div>

                    <!-- Empty State for Search -->
                    <div id="emptySearch" class="d-none text-center py-5">
                        <i class="fa-solid fa-user-slash fs-1 text-secondary mb-3"></i>
                        <p class="text-secondary fw-medium">No fellows found matching your search query.</p>
                        <button onclick="resetSearch()" class="btn btn-sm btn-outline-light rounded-3 px-3">Clear
                            Filters</button>
                    </div>

                    <hr>
                    <div class="row justify-content-center mt-3">
                        <div class="col-md-8 col-lg-6">
                            <div class="organaizer-image-panel">
                                <img src="assets/images/fellows-2026/bracjpgsph.png"
                                    alt="BRAC JPGSPH Logo">
                                <img src="assets/images/fellows-2026/hsg.png"
                                    alt="Partner Logo">
                                <img src="assets/images/fellows-2026/hsg2026.webp"
                                    alt="HSR 2026 Logo">
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript Application Logic -->
    <script>
        // 23 Real EV4GH 2026 Fellows Data
        const fellowsData = [{
                id: 1,
                name: "Kusum V Moray",
                country: "India",
                avatar: "assets/images/fellows-2026/small - Kusum Moray.jpg"
            },
            {
                id: 2,
                name: "Basma Mohamed Saleh",
                country: "Egypt",
                avatar: "assets/images/fellows-2026/EV4GH2026_Basma.Mohamed.Saleh - Basma saleh.jpg"
            },
            {
                id: 3,
                name: "Hein Thu",
                country: "Myanmar",
                avatar: "assets/images/fellows-2026/EV4GH2026_Hein Thu - Hein Thu.jpg"
            },
            {
                id: 4,
                name: "Joyce O. Abel",
                country: "Liberia",
                avatar: "assets/images/fellows-2026/EV4GH2026_Joyce O. Abel - Joyce Abel.png"
            },
            {
                id: 5,
                name: "Mostafa SHAKSHAK",
                country: "Egypt",
                avatar: "assets/images/fellows-2026/EV4GH2026_Mostafa SHAKSHAK - Mostafa Shakshak.JPG"
            },
            {
                id: 6,
                name: "Jared Odaro",
                country: "Kenya",
                avatar: "assets/images/fellows-2026/EV4GH2026_[Jared Odaro] - Jared Odaro.jpeg"
            },
            {
                id: 7,
                name: "M Tasdik Hasan",
                country: "Bangladesh",
                avatar: "assets/images/fellows-2026/EV4GH2026_M Tasdik Hasan - Tasdik Hasan.jpeg"
            },
            {
                id: 8,
                name: "Israel Herrera-Ramirez",
                country: "Mexico",
                avatar: "assets/images/fellows-2026/EV4GH2026_Israel_Herrera_Ramirez - Israel H.jpeg"
            },
            {
                id: 9,
                name: "Rodrigo Karlop Arce Cardozo",
                country: "Bolivia",
                avatar: "assets/images/fellows-2026/EV4GH2026_Rodrigo Karlop Arce Cardozo - Rodrigo K. Arce C..jpg"
            },
            {
                id: 10,
                name: "Vanessa Thulisile Mukundwa",
                country: "Zimbabwe",
                avatar: "assets/images/fellows-2026/EV4GH2026_Vanessa Thulisile Mukundwa - Vanessa Thulisile Mukundwa.png"
            },
            {
                id: 11,
                name: "Alen Chandy Alexander",
                country: "India",
                avatar: "assets/images/fellows-2026/EV4GH2026_AlenChandyAlexander - Alen Alexander.png"
            },
            {
                id: 12,
                name: "Dr. Lamisa Rahman",
                country: "Bangladesh",
                avatar: "assets/images/fellows-2026/EV4GH2026_Lamisa_Rahman - Dr. Lamisa Rahman.JPG"
            },
            {
                id: 13,
                name: "Ashik Barua",
                country: "Bangladesh",
                avatar: "assets/images/fellows-2026/EV4GH2026_AshikBarua - Ashik Barua.png"
            },
            {
                id: 14,
                name: "Krizelle Cleo Fowler",
                country: "Philippines",
                avatar: "assets/images/fellows-2026/EV4GH2026_Krizelle Cleo Fowler - Krizelle Fowler.jpg"
            },
            {
                id: 15,
                name: "Ranjan Koiri",
                country: "Bangladesh",
                avatar: "assets/images/fellows-2026/Koiri Photo _1 - Ranjan Koiri.jpeg"
            },
            {
                id: 16,
                name: "Jemima Nyamekye Puni",
                country: "Ghana",
                avatar: "assets/images/fellows-2026/EV4GH2026_[ Jemima Nyamekye Puni] - Jemima puni.png"
            },
            {
                id: 17,
                name: "Obaida Karim",
                country: "Bangladesh",
                avatar: "assets/images/fellows-2026/EV4GH2026_Obaida Karim - Obaida karim.png"
            },
            {
                id: 18,
                name: "Webby Emmanuel Phiri",
                country: "Zambia",
                avatar: "assets/images/fellows-2026/Webby Phiri - Bio Picture - Webby Phiri.png"
            },
            {
                id: 19,
                name: "Neti Triwinanti",
                country: "Indonesia",
                avatar: "assets/images/fellows-2026/EV4GH2026_Neti Triwinanti - Neti Triwinanti.JPG"
            },
            {
                id: 20,
                name: "Aswathy Ram",
                country: "India",
                avatar: "assets/images/fellows-2026/Aswathy_photo - Aswathy Ram.jpg"
            },
            {
                id: 21,
                name: "Fabian Schlumberger",
                country: "Germany",
                avatar: "assets/images/fellows-2026/EV4GH2026_FabianSchlumberger - Fabian Schlumberger.jpg"
            },
            {
                id: 22,
                name: "Hashim Hounkpatin",
                country: "Benin",
                avatar: "assets/images/fellows-2026/Hashim Hounkpatin (2) - Hashim Hounkpatin.jpg"
            },
            {
                id: 23,
                name: "Maria Jeriesa Osorio",
                country: "Philippines",
                avatar: "assets/images/fellows-2026/EV4GH2026_Maria Jeriesa P. Osorio - Jeriesa Osorio.jpg"
            }
        ];

        let currentTheme = 'v1';
        let bsModal = null;

        // Render Cards (Photo + Overlapping Country Badge on bottom right)
        function renderFellowsCards(items) {
            const grid = document.getElementById('fellowsGrid');
            const empty = document.getElementById('emptySearch');
            grid.innerHTML = '';

            if (items.length === 0) {
                empty.classList.remove('d-none');
                return;
            } else {
                empty.classList.add('d-none');
            }

            items.forEach(fellow => {
                let cardHTML = '';
                const colWrapper = document.createElement('div');
                colWrapper.className = 'col';

                if (currentTheme === 'v1') {
                    // VERSION 1: EXECUTIVE GLASSMORPHISM
                    cardHTML = `
                        <div class="glass-card rounded-4 p-3 d-flex flex-column align-items-center text-center h-100 position-relative overflow-hidden">
                            <div class="position-relative mb-3 p-1 rounded-circle" style="width: 100px; height: 100px; background: linear-gradient(135deg, var(--ev-red), var(--ev-blue));">
                                <img src="${fellow.avatar}" alt="${fellow.name}" class="w-100 h-100 object-fit-cover rounded-circle">
                                <span class="position-absolute bottom-0 end-0 badge bg-dark border border-secondary text-light fs-8 px-2 py-1 rounded-pill shadow">
                                    ${fellow.country}
                                </span>
                            </div>
                            <h3 class="font-heading fw-bold text-white fs-6 mb-0 mt-auto">${fellow.name}</h3>
                        </div>
                    `;
                } else if (currentTheme === 'v2') {
                    // VERSION 2: CLEAN MODERN EDITORIAL (Light Theme)
                    cardHTML = `
                        <div class="bg-white text-dark rounded-4 p-3 shadow-sm hover-shadow-lg border border-light-subtle d-flex flex-column align-items-center text-center h-100">
                            <div class="position-relative mb-3 rounded-circle" style="width: 100px; height: 100px;">
                                <img src="${fellow.avatar}" alt="${fellow.name}" class="w-100 h-100 object-fit-cover rounded-circle border border-2 border-secondary-subtle">
                                <span class="position-absolute bottom-0 end-0 badge bg-white text-dark border border-secondary-subtle text-uppercase fw-bold fs-8 px-2 py-1 rounded-pill shadow-sm" style="color: var(--ev-teal) !important;">
                                    ${fellow.country}
                                </span>
                            </div>
                            <h3 class="font-heading fw-bold text-dark fs-6 mb-0 mt-auto">${fellow.name}</h3>
                        </div>
                    `;
                } else if (currentTheme === 'v3') {
                    // VERSION 3: VIBRANT FESTIVAL SHOWCASE
                    cardHTML = `
                        <div class="bg-black bg-gradient rounded-4 p-3 border border-1 d-flex flex-column align-items-center text-center h-100 position-relative" style="border-color: rgba(59, 164, 215, 0.4) !important;">
                            <div class="position-relative mb-3 p-1 rounded-circle shadow-lg" style="width: 100px; height: 100px; background: linear-gradient(45deg, var(--ev-blue), var(--ev-teal), var(--ev-red));">
                                <img src="${fellow.avatar}" alt="${fellow.name}" class="w-100 h-100 object-fit-cover rounded-circle">
                                <span class="position-absolute bottom-0 end-0 badge badge-brand-red rounded-pill fs-8 px-2 py-1 shadow">
                                    ${fellow.country}
                                </span>
                            </div>
                            <h3 class="font-heading fw-black text-white fs-6 mb-0 mt-auto">${fellow.name}</h3>
                        </div>
                    `;
                }

                colWrapper.innerHTML = cardHTML;
                grid.appendChild(colWrapper);
            });

            document.getElementById('fellowsCount').innerText = `${items.length} Fellows`;
        }

        // Filter Functionality
        function filterFellows() {
            const query = document.getElementById('searchInput').value.toLowerCase();
            const filtered = fellowsData.filter(f =>
                f.name.toLowerCase().includes(query) ||
                f.country.toLowerCase().includes(query)
            );
            renderFellowsCards(filtered);
        }

        function resetSearch() {
            document.getElementById('searchInput').value = '';
            renderFellowsCards(fellowsData);
        }

        // Switch Theme Version
        function switchTheme(version) {
            currentTheme = version;
            const modalContainer = document.getElementById('modalContainer');
            const modalHeader = document.getElementById('modalHeader');
            const modalMainTitle = document.getElementById('modalMainTitle');

            // Reset Switcher Button Active Styles
            document.querySelectorAll('.theme-btn-icon').forEach(btn => {
                btn.classList.remove('active');
            });

            const activeBtn = document.getElementById(`btn-${version}`);
            if (activeBtn) activeBtn.classList.add('active');

            // Apply Theme Containers & Color Adjustments
            if (version === 'v1') {
                document.documentElement.setAttribute('data-bs-theme', 'dark');
                modalContainer.className =
                    "modal-content rounded-5 shadow-lg border-0 glass-panel text-white position-relative";
                modalHeader.className =
                    "modal-header border-bottom border-white border-opacity-10 px-4 pt-4 pb-3 d-block bg-dark bg-opacity-50 rounded-top-5";
                modalMainTitle.className = "modal-title font-heading h4 fw-extrabold text-white mb-0";
            } else if (version === 'v2') {
                document.documentElement.setAttribute('data-bs-theme', 'light');
                modalContainer.className =
                    "modal-content rounded-5 shadow-lg border-0 bg-light text-dark position-relative";
                modalHeader.className =
                    "modal-header border-bottom border-secondary-subtle px-4 pt-4 pb-3 d-block bg-white rounded-top-5";
                modalMainTitle.className = "modal-title font-heading h4 fw-extrabold text-danger mb-0";
            } else if (version === 'v3') {
                document.documentElement.setAttribute('data-bs-theme', 'dark');
                modalContainer.className =
                    "modal-content rounded-5 shadow-lg border border-2 border-danger bg-black text-white position-relative";
                modalHeader.className =
                    "modal-header border-bottom border-danger border-opacity-50 px-4 pt-4 pb-3 d-block bg-dark rounded-top-5";
                modalMainTitle.className = "modal-title font-heading h4 fw-extrabold text-gradient mb-0";
            }

            renderFellowsCards(fellowsData);
        }

        // Open Modal Trigger
        function openModal() {
            if (!bsModal) {
                bsModal = new bootstrap.Modal(document.getElementById('fellowsModal'));
            }
            bsModal.show();
        }

        // Initialize on load
        window.addEventListener('DOMContentLoaded', () => {
            bsModal = new bootstrap.Modal(document.getElementById('fellowsModal'));
            switchTheme('v1');
            bsModal.show();
        });
    </script>
</body>

</html>
