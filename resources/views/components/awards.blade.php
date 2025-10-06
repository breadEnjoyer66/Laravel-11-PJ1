<div class="bg-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 py-8 lg:py-16 sm:px-6 ">
        <h2
            class="pb-2 bg-gradient-to-r from-orange-600 to-orange-500 text-transparent bg-clip-text mb-4 text-4xl lg:text-[2.8rem] font-extrabold">
            Achievements and certifications</h2>
        <p class="text-gray-500 sm:text-lg dark:text-gray-400">
            Backed by strong partnerships with leading global brands, we consistently meet exceptional standards of
            quality and service. These recognitions strengthen our commitment to supporting corporations, government
            agencies, and institutions with reliable technology.
        </p>

        <div class="py-4 my-4 mx-auto max-w-7xl lg:py-4">
            <div class="grid gap-4 lg:grid-cols-6 md:grid-cols-4 grid-cols-2">
                @foreach ($awards as $award)
                    <button type="button" class="group rounded-xl overflow-hidden text-left"
                        data-full="{{ asset('img/awards/' . $award->file_name) }}">
                        <img src="{{ asset('img/awards/' . $award->file_name) }}" alt="Award" loading="lazy"
                            class="rounded-xl w-full object-contain transition duration-200 group-hover:scale-[0.98] group-hover:shadow-lg cursor-zoom-in">
                    </button>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="imageModal" class="fixed inset-0 z-50 hidden" aria-hidden="true">
    <!-- overlay -->
    <div id="modalOverlay" class="absolute inset-0 bg-black/70"></div>

    <!-- content -->
    <div class="relative flex items-center justify-center h-full p-4">
        <img id="modalImg" src="" alt="Preview"
            class="max-w-[88vw] max-h-[85vh] rounded-xl shadow-2xl select-none" />
        <button id="modalClose"
            class="absolute top-6 right-6 inline-flex items-center justify-center rounded-full bg-white/90 hover:bg-white
                   text-gray-800 w-10 h-10 shadow-md focus:outline-none focus:ring-2 focus:ring-primary-500"
            aria-label="Close preview">
            ✕
        </button>
    </div>
</div>

<script>
    (() => {
        const modal = document.getElementById('imageModal');
        const img = document.getElementById('modalImg');
        const closeBtn = document.getElementById('modalClose');

        const open = (src) => {
            img.src = src;
            modal.classList.remove('hidden');
            modal.setAttribute('aria-hidden', 'false');
            document.documentElement.classList.add('overflow-hidden');
            closeBtn.focus();
        };

        const close = () => {
            modal.classList.add('hidden');
            modal.setAttribute('aria-hidden', 'true');
            document.documentElement.classList.remove('overflow-hidden');
            img.src = '';
        };

        // open on any card click
        document.addEventListener('click', (e) => {
            const btn = e.target.closest('[data-full]');
            if (!btn) return;
            open(btn.getAttribute('data-full'));
        });

        // close on ✕
        closeBtn.addEventListener('click', close);

        // ✅ close on ANY click that isn't the image or the ✕
        modal.addEventListener('click', (e) => {
            // works even if you click on wrappers, icons, etc.
            const path = e.composedPath ? e.composedPath() : (function(el, p = []) {
                while (el) {
                    p.push(el);
                    el = el.parentNode;
                }
                return p;
            })(e.target);
            const clickedImage = path.includes(img);
            const clickedClose = path.includes(closeBtn);
            if (!clickedImage && !clickedClose) close();
        });

        // close on Esc
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) close();
        });
    })();
</script>
