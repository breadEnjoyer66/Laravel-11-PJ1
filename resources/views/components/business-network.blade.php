<!-- Markets / Tabs -->
<section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
    <div class="mb-8">
        <h2 class=" mb-4 text-4xl font-bold text-gray-900 dark:text-white">What We Serve</h2>
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
                    <img id="panelImg" src="" alt=""
                        class="w-10/12 aspect-[4/3] object-cover rounded-2xl shadow" />
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
                body: 'We specialize in B2B solutions, providing products and services exclusively to corporate and government clients. Our commitment is to support your organization’s technology and information needs with reliable, high-quality offerings. We prioritize building strong, long-term partnerships grounded in business ethics and trust. Unlike consumer-focused providers, our expertise lies in meeting the complex demands of enterprises and institutions.',
                img: 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' // placeholder
            },
            {
                key: 'b2g',
                label: 'B2G',
                title: 'Business to Government (B2G)',
                body: 'We participate in B2G (business-to-government), a specialized variation of B2B. This concept enables businesses and government institutions to use centralized online platforms to exchange information and conduct transactions more efficiently than traditional manual processes. We are registered on the LKPP-managed platform, which serves as a marketplace for government agencies and state-owned enterprises to carry out their procurement and transactions.',
                img: 'https://images.unsplash.com/photo-1541726260-e6b6a6a08b27?q=80&w=1159&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            },
            {
                key: 'distribution',
                label: 'Distribution',
                title: 'Distribution',
                body: 'We also engage in distribution activities, delivering products from manufacturers to consumers to ensure wide product availability. Our distribution focuses on technology and information-related goods, and we guarantee secure delivery to distributors or end customers. In other words, we act as the vital link between production and consumption.',
                img: 'https://images.unsplash.com/photo-1565793298595-6a879b1d9492?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            },
            {
                key: 'retail',
                label: 'Retail',
                title: 'Retail',
                body: 'Curated consumer tech, ranging from laptops and smartphones to printers, accessories, and more. Backed by warranty and dedicated after-sales support. With three retail stores strategically located in Medan and Banda Aceh, we are closer to our customers and ready to serve with convenience and trust. We provide a wide range of IT products, ensuring that every end-user need is met, from everyday devices to complete technology solutions. Our goal is to deliver not only quality products but also peace of mind, making technology simple, reliable, and accessible for everyone.',
                img: 'https://images.unsplash.com/photo-1649030616983-845d870570d7?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            },
            {
                key: 'online',
                label: 'Online Store',
                title: 'Online Store',
                body: 'We also offer purchasing through online platforms and have been active for over 5 years on several leading marketplaces in Indonesia. All our products sold on these marketplaces come with official warranties. We ensure timely delivery and use quality packaging to prevent damage during shipping.',
                img: 'https://images.unsplash.com/photo-1674027392851-7b34f21b07ee?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
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
