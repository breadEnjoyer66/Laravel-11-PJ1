<!-- Markets / Tabs -->
<section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="mb-8">
        <h2
            class="bg-gradient-to-r from-orange-600 to-orange-500 text-transparent bg-clip-text mb-4 text-4xl lg:text-5xl font-extrabold">
            What We Serve</h2>
        <p class=" text-gray-500 sm:text-lg dark:text-gray-400">We serve businesses, government, and institutions, also
            end users with a wide range of technology solutions.</p>
    </div>

    <!-- Tabs -->
    <div id="marketTabs" class="flex flex-wrap gap-2">
        <!-- Buttons created in JS (keeps markup clean) -->
    </div>

    <!-- Panel -->
    <div id="marketPanel"
        class="rounded-r-3xl rounded-bl-3xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-100 shadow-sm">
        <div class="p-6 sm:p-8 lg:p-10">
            <div class="grid gap-8 md:grid-cols-2 items-center">
                <!-- Image -->
                <div>
                    <img id="panelImg" src="" alt="" class="w-4/5 object-contain rounded-2xl shadow" />
                </div>
                <!-- Copy -->
                <div class="lg:-ml-16 lg:pr-10">
                    <h3 id="panelTitle" class="text-4xl font-bold text-gray-900 dark:text-white mb-3"></h3>
                    <p id="panelBody" class="text-gray-600 dark:text-gray-300 leading-relaxed text-justify"></p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    (() => {
        // 1) Data for each tab (replace text/images as you like)
        const TABS = [{
                key: 'b2b',
                label: 'B2B',
                title: 'Business to Business (B2B)',
                body: 'We provide a wide range of technology products and services to support the needs of private enterprises. By upholding business ethics, we maintain long-term, mutually beneficial relationships. We also help companies improve efficiency, reduce operational costs, and accelerate digital transformation.',
                img: 'img/corporate-team.jpg' // placeholder
            },
            {
                key: 'b2g',
                label: 'B2G',
                title: 'Business to Government (B2G)',
                body: 'As a Government partner, we are registered in the INAPROC Electronic Catalog system. We are ready to serve the needs of Government Institutions and State-Owned Enterprises (SOEs) through efficient and transparent digital solutions. Our focus is to support government programs in developing technology infrastructure and strengthening digital governance.',
                img: 'img/b2g-team.jpg'
            },
            {
                key: 'distribution',
                label: 'Distribution',
                title: 'Distribution',
                body: 'We operate an integrated distribution system that reaches various regions. Our products are delivered to dealers and end customers with fast shipping and reliable service. Through a modern logistics system, we ensure the supply chain remains efficient and dependable.',
                img: 'img/gudang.jpg'
            },
            {
                key: 'retail',
                label: 'Retail',
                title: 'Retail',
                body: 'We operate several IT Plaza Stores in Medan and Banda Aceh to provide easy access for customers. Our retail stores are designed as one-stop solutions where customers can find the latest products along with trusted after-sales services.',
                img: 'img/retail.jpg'
            },
            {
                key: 'online',
                label: 'Online Store',
                title: 'Online Store',
                body: 'We have been active for more than six years across leading marketplace platforms in Indonesia, such as Tokopedia, Shopee, Bli-bli and many more! Offering officially licensed products with on-time delivery. Supported by a robust e-commerce system, customers can shop easily, safely, and conveniently from anywhere.',
                img: 'img/online-store.jpg'
            },
        ];

        // 2) DOM
        const tabsWrap = document.getElementById('marketTabs');
        const panelImg = document.getElementById('panelImg');
        const panelTitle = document.getElementById('panelTitle');
        const panelBody = document.getElementById('panelBody');

        // 3) Helpers
        const baseBtn =
            "px-4 py-2 text-sm font-medium rounded-t-2xl border border-slate-200 dark:border-slate-700 bg-white/70 dark:bg-slate-800/70 backdrop-blur " +
            "shadow-sm -mb-px focus:outline-none focus-visible:ring-2 focus-visible:ring-indigo-500";
        const activeBtn =
            "bg-white dark:bg-slate-900 text-gray-900 dark:text-white border-b-white dark:border-b-slate-900";
        const inactiveBtn =
            "text-gray-600 dark:text-gray-300 hover:bg-white dark:hover:bg-slate-800";

        let activeKey = (location.hash || '').replace('#', '') || 'retail';

        function renderTabs() {
            tabsWrap.innerHTML = '';
            TABS.forEach((t, i) => {
                const btn = document.createElement('button');
                btn.type = 'button';
                btn.setAttribute('role', 'tab');
                btn.setAttribute('data-key', t.key);
                btn.className = baseBtn + ' ' + (t.key === activeKey ? activeBtn : inactiveBtn);
                btn.textContent = t.label;
                btn.addEventListener('click', () => setActive(t.key, true));
                // keyboard
                btn.addEventListener('keydown', (e) => {
                    const idx = TABS.findIndex(x => x.key === activeKey);
                    if (e.key === 'ArrowRight') setActive(TABS[(idx + 1) % TABS.length].key, true),
                        focusActive();
                    if (e.key === 'ArrowLeft') setActive(TABS[(idx - 1 + TABS.length) % TABS.length]
                        .key, true), focusActive();
                });
                tabsWrap.appendChild(btn);
            });
        }

        function renderPanel(tab) {
            panelImg.src = tab.img;
            panelImg.alt = tab.title;
            panelTitle.textContent = tab.title;
            panelBody.textContent = tab.body;
        }

        function setActive(key, pushHash = false) {
            activeKey = key;
            // toggle button styles
            [...tabsWrap.children].forEach(btn => {
                const isActive = btn.getAttribute('data-key') === key;
                btn.className = baseBtn + ' ' + (isActive ? activeBtn : inactiveBtn);
            });
            // update panel
            const tab = TABS.find(t => t.key === key) || TABS[0];
            renderPanel(tab);
            if (pushHash) history.replaceState(null, '', '#' + key);
        }

        function focusActive() {
            const activeBtnEl = [...tabsWrap.children].find(el => el.getAttribute('data-key') === activeKey);
            activeBtnEl && activeBtnEl.focus();
        }

        // init
        renderTabs();
        setActive(activeKey, false);
    })();
</script>
