<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MiniCoding Academy | Company Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <style>
      /* Small helper so hero doesn't hide under fixed navbar on small screens */
      :root { --nav-height: 72px; }
      body { scroll-padding-top: var(--nav-height); }
    </style>
  </head>

  <body class="bg-white text-gray-800 font-sans">
    <!-- ===== NAVBAR ===== -->
    <header
      class="flex justify-between items-center px-4 md:px-10 py-3 md:py-6 bg-white/30 backdrop-blur-md border-b border-white/40 fixed w-full top-0 z-50 shadow-lg"
      style="height: var(--nav-height);"
    >
      <!-- LOGO + TEXT -->
      <div class="flex items-center space-x-3">
        <img
          src="{{ asset('images/MCA_Logo-removebg.png') }}"
          alt="Logo MCA"
          class="w-8 h-8 md:w-10 md:h-10 rounded-full object-cover"
        />
        <h1 class="text-lg md:text-2xl font-bold flex items-center">
          <span class="text-black">Mini</span>
          <span class="text-cyan-500">Coding</span>
          <span class="text-black">Academy</span>
        </h1>
      </div>

      <!-- NAV LINKS (desktop) -->
      <nav id="navMenu" class="hidden md:flex space-x-10 text-gray-600 font-semibold">
        <a href="#home" class="hover:text-cyan-500">HOME</a>
        <a href="#services" class="hover:text-cyan-500">SERVICES</a>
        <a href="#products" class="hover:text-cyan-500">PRODUCTS</a>
        <a href="#about" class="hover:text-cyan-500">ABOUT</a>
      </nav>

      <!-- (removed contact/login buttons as requested) -->

      <!-- MOBILE MENU BUTTON -->
      <div class="md:hidden flex items-center gap-2">
        <button
          id="menuBtn"
          aria-label="Toggle menu"
          class="text-gray-700 focus:outline-none focus:ring-2 focus:ring-cyan-400 rounded-lg p-2"
        >
          <!-- hamburger -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>
    </header>

    <!-- MOBILE NAV -->
    <div
      id="mobileMenu"
      class="hidden fixed top-[72px] left-0 w-full bg-white/95 backdrop-blur-md shadow-md border-t border-gray-200 z-40 flex flex-col space-y-2 py-4 text-center text-gray-700 font-semibold"
    >
      <a href="#home" class="py-2 hover:text-cyan-500">HOME</a>
      <a href="#services" class="py-2 hover:text-cyan-500">SERVICES</a>
      <a href="#products" class="py-2 hover:text-cyan-500">PRODUCTS</a>
      <a href="#about" class="py-2 hover:text-cyan-500">ABOUT</a>
    </div>

    <!-- ===== HOME SECTION ===== -->
    <section
      id="home"
      class="h-auto md:h-screen flex flex-col md:flex-row items-center justify-between px-6 md:px-20 pt-28 md:pt-0 bg-white"
    >
      <!-- LEFT -->
      <div
        class="flex-1 max-w-xl text-center md:text-left md:pr-10"
        data-aos="fade-right"
      >
        <p class="text-cyan-600 tracking-widest uppercase mb-4">Welcome to the Future</p>
        <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4 text-gray-900">
          Empowering <br />
          Young <span class="text-cyan-500 italic">Coders</span>
        </h1>
        <p class="text-gray-600 mb-8 text-base md:text-lg">
          Mini Coding Academy nurtures the next generation of programmers through engaging, hands-on learning experiences designed for children and teens.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
          <a href="#services" class="w-full sm:w-auto">
            <button class="bg-cyan-500 px-6 py-3 rounded-lg font-semibold text-white hover:bg-cyan-400 transition w-full">Learn More</button>
          </a>
          <a href="#products" class="w-full sm:w-auto">
            <button class="border border-cyan-500 text-cyan-500 px-6 py-3 rounded-lg font-semibold hover:bg-cyan-500 hover:text-white transition w-full">Our Products</button>
          </a>
        </div>
      </div>

      <!-- RIGHT -->
      <div class="flex-1 flex justify-center mt-8 md:mt-0" data-aos="fade-left">
        <div class="w-64 h-64 sm:w-80 sm:h-80 md:w-[400px] md:h-[400px] bg-white rounded-3xl shadow-lg flex items-center justify-center">
          <img src="{{ asset('images/MCA-Logo2.jpg') }}" alt="Mini Coding Academy" class="object-contain w-40 h-40 sm:w-52 sm:h-52 md:w-64 md:h-64" />
        </div>
      </div>
    </section>

    <!-- ===== SERVICES SECTION ===== -->
<section id="services" class="min-h-screen bg-gray-50 px-6 md:px-12 py-24">
  <div class="max-w-7xl mx-auto">
    
    <!-- Header -->
    <div class="text-center mb-16" data-aos="fade-up">
      <h4 class="text-cyan-600 uppercase tracking-widest mb-2">Our Services</h4>
      <h1 class="text-4xl md:text-5xl font-bold mb-4 text-gray-900">
        Apa yang Kami Tawarkan
      </h1>
      <p class="text-gray-600 max-w-2xl mx-auto text-sm md:text-base">
        Mini Coding Academy menyediakan berbagai layanan terbaik untuk membantu anak dan remaja
        mempelajari dunia teknologi secara menyenangkan dan interaktif.
      </p>
    </div>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10" data-aos="fade-up" data-aos-delay="100">

      <!-- Service 1 -->
      <div class="group bg-white rounded-3xl p-8 shadow-md hover:shadow-xl border border-gray-100 transition-all duration-300 hover:-translate-y-2">
        <div class="flex justify-center items-center w-16 h-16 rounded-2xl bg-cyan-100 text-cyan-600 mb-5 group-hover:bg-cyan-500 group-hover:text-white transition-all">
          <!-- icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2"/>
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2">Kelas Pemrograman Anak</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          Pembelajaran pemrograman untuk anak usia 7–12 tahun menggunakan metode bermain dan proyek kreatif.
        </p>
      </div>

      <!-- Service 2 -->
      <div class="group bg-white rounded-3xl p-8 shadow-md hover:shadow-xl border border-gray-100 transition-all duration-300 hover:-translate-y-2">
        <div class="flex justify-center items-center w-16 h-16 rounded-2xl bg-cyan-100 text-cyan-600 mb-5 group-hover:bg-cyan-500 group-hover:text-white transition-all">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18"/>
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2">Kursus Web Development</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          Belajar HTML, CSS, JavaScript, hingga membuat website sendiri secara step-by-step.
        </p>
      </div>

      <!-- Service 3 -->
      <div class="group bg-white rounded-3xl p-8 shadow-md hover:shadow-xl border border-gray-100 transition-all duration-300 hover:-translate-y-2">
        <div class="flex justify-center items-center w-16 h-16 rounded-2xl bg-cyan-100 text-cyan-600 mb-5 group-hover:bg-cyan-500 group-hover:text-white transition-all">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L4.75 12 9.75 7M14.25 7l5 5-5 5"/>
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2">Private Coding Class</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          Program pembelajaran eksklusif 1-on-1 dengan mentor pilihan untuk hasil belajar optimal.
        </p>
      </div>

      <!-- Service 4 -->
      <div class="group bg-white rounded-3xl p-8 shadow-md hover:shadow-xl border border-gray-100 transition-all duration-300 hover:-translate-y-2">
        <div class="flex justify-center items-center w-16 h-16 rounded-2xl bg-cyan-100 text-cyan-600 mb-5 group-hover:bg-cyan-500 group-hover:text-white transition-all">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2">Project Mentoring</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          Siswa dibimbing membuat aplikasi atau game dari nol hingga selesai sesuai level kemampuan.
        </p>
      </div>

      <!-- Service 5 -->
      <div class="group bg-white rounded-3xl p-8 shadow-md hover:shadow-xl border border-gray-100 transition-all duration-300 hover:-translate-y-2">
        <div class="flex justify-center items-center w-16 h-16 rounded-2xl bg-cyan-100 text-cyan-600 mb-5 group-hover:bg-cyan-500 group-hover:text-white transition-all">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l4-4-4-4m4 8l4-4-4-4"/>
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2">Kelas Robotik</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          Belajar logika dan otomasi dengan perangkat robotik modern dan permainan interaktif.
        </p>
      </div>

      <!-- Service 6 -->
      <div class="group bg-white rounded-3xl p-8 shadow-md hover:shadow-xl border border-gray-100 transition-all duration-300 hover:-translate-y-2">
        <div class="flex justify-center items-center w-16 h-16 rounded-2xl bg-cyan-100 text-cyan-600 mb-5 group-hover:bg-cyan-500 group-hover:text-white transition-all">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2">Coding Bootcamp</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          Program intensif untuk remaja yang ingin mahir coding dalam waktu singkat dengan praktik nyata.
        </p>
      </div>

      @foreach ($services as $service)
  <div class="group bg-white rounded-3xl p-8 shadow-md hover:shadow-xl border border-gray-100 transition-all duration-300 hover:-translate-y-2">
    
    <div class="flex justify-center items-center w-16 h-16 rounded-2xl bg-cyan-100 text-cyan-600 mb-5
      group-hover:bg-cyan-500 group-hover:text-white transition-all text-3xl">
      {{ $service->emoji }}
    </div>

    <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $service->title }}</h3>
    <p class="text-gray-600 text-sm leading-relaxed">
      {{ $service->description }}
    </p>
  </div>
@endforeach


    </div>
  </div>
</section>


    <!-- ===== PRODUCTS SECTION (was Projects) ===== -->
    <section id="products" class="min-h-screen bg-white px-8 md:px-12 py-24">
    <div class="text-center mb-16" data-aos="fade-up">
        <h4 class="text-cyan-600 uppercase tracking-widest mb-2">Our Products</h4>
        <h1 class="text-5xl font-bold mb-4 text-gray-900">
            <span class="text-cyan-500">Product</span> Portfolio
        </h1>
        <p class="text-gray-700 max-w-2xl mx-auto text-sm md:text-base">
            Beberapa hasil karya dan produk yang dikembangkan oleh siswa dan tim Mini Coding Academy.
        </p>
    </div>

    <!-- PRODUCT GRID DINAMIS -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 max-w-7xl mx-auto" data-aos="fade-up">
        
        @forelse($products as $product)
            <div class="bg-gray-100 rounded-2xl overflow-hidden hover:scale-105 transform transition shadow-md">
                
                <!-- IMAGE -->
                <img src="{{ asset('storage/' . $product->image) }}" 
                     alt="{{ $product->title }}" 
                     class="w-full h-56 object-cover" />

                <div class="p-6">
                    <h3 class="text-cyan-600 text-xl font-semibold mb-2">
                        {{ $product->title }}
                    </h3>

                    <p class="text-gray-700 text-sm line-clamp-3">
                        {{ $product->description }}
                    </p>

                    <a href="{{ route('product.show', $product->id) }}"
                       class="inline-block bg-cyan-500 text-white px-4 py-2 mt-4 rounded-md font-medium hover:bg-cyan-400 transition">
                        Lihat Detail →
                    </a>
                </div>
            </div>
        @empty
            <p class="text-center text-gray-600 col-span-3">
                Belum ada produk.
            </p>
        @endforelse

    </div>
</section>


    <!-- ===== STRUKTUR ORGANISASI & VISI MISI (moved near bottom) ===== -->
    <section id="about" class="bg-gray-50 px-6 md:px-8 py-24">
      <div class="max-w-6xl mx-auto">
        <!-- Struktur Organisasi -->
        <div class="struktur mb-20" data-aos="fade-up" data-aos-delay="150">
          <h3 class="text-3xl font-semibold text-center mb-12 text-gray-900">
            Struktur Organisasi
          </h3>

          <!-- Swiper Container -->
          <div class="swiper mySwiper max-w-5xl mx-auto">
            <div class="swiper-wrapper">

              <!-- Card 1 -->
              <div class="swiper-slide flex justify-center">
                <div class="bg-white border border-gray-200 rounded-2xl shadow-md p-6 text-center max-w-xs">
                  <img src="{{ asset('images/blank-profile-picture.webp') }}" class="w-28 h-28 mx-auto rounded-full mb-4" />
                  <h3 class="font-semibold text-lg text-gray-900">Roni Okfriyandi, S.Kom</h3>
                  <p class="text-cyan-600 font-medium">Marketing</p>
                  <p class="text-gray-600 text-sm mt-2">
                    Mengelola dan mengembangkan strategi pemasaran MCA untuk menjangkau siswa lebih luas.
                  </p>
                </div>
              </div>

              <!-- Card 2 -->
              <div class="swiper-slide flex justify-center">
                <div class="bg-white border border-gray-200 rounded-2xl shadow-md p-6 text-center max-w-xs">
                  <img src="{{ asset('images/blank-profile-picture.webp') }}" class="w-28 h-28 mx-auto rounded-full mb-4" />
                  <h3 class="font-semibold text-lg text-gray-900">Ranti Ermina Sari, S.Pd, Gr</h3>
                  <p class="text-cyan-600 font-medium">Project Manager</p>
                  <p class="text-gray-600 text-sm mt-2">
                    Bertanggung jawab atas koordinasi proyek dan memastikan setiap program berjalan efektif.
                  </p>
                </div>
              </div>

              <!-- Card 3 -->
              <div class="swiper-slide flex justify-center">
                <div class="bg-white border border-gray-200 rounded-2xl shadow-md p-6 text-center max-w-xs">
                  <img src="{{ asset('images/blank-profile-picture.webp') }}" class="w-28 h-28 mx-auto rounded-full mb-4" />
                  <h3 class="font-semibold text-lg text-gray-900">Nadir, S.Kom, Gr</h3>
                  <p class="text-cyan-600 font-medium">System Analyst</p>
                  <p class="text-gray-600 text-sm mt-2">
                    Mendesain sistem pembelajaran digital yang efisien dan mudah digunakan oleh siswa.
                  </p>
                </div>
              </div>

              <!-- Card 4 -->
              <div class="swiper-slide flex justify-center">
                <div class="bg-white border border-gray-200 rounded-2xl shadow-md p-6 text-center max-w-xs">
                  <img src="{{ asset('images/blank-profile-picture.webp') }}" class="w-28 h-28 mx-auto rounded-full mb-4" />
                  <h3 class="font-semibold text-lg text-gray-900">Riska Marleni, S.Kom</h3>
                  <p class="text-cyan-600 font-medium">Marketing</p>
                  <p class="text-gray-600 text-sm mt-2">
                    Mengembangkan branding dan promosi digital akademi di berbagai platform.
                  </p>
                </div>
              </div>

            </div>

            <!-- Pagination -->
            <div class="swiper-pagination mt-6"></div>

            <!-- Navigation buttons -->
            <div class="swiper-button-next text-cyan-600"></div>
            <div class="swiper-button-prev text-cyan-600"></div>
          </div>
        </div>

        <!-- Visi dan Misi -->
        <div class="visi-misi mt-20" data-aos="fade-up" data-aos-delay="200">
          <h3 class="text-3xl font-semibold text-center mb-12">Visi & Misi</h3>
          <div class="flex flex-col md:flex-row items-stretch justify-center gap-10 md:gap-16">
            <div class="flex-1 text-center md:text-left">
              <h4 class="text-2xl font-semibold text-cyan-600 mb-4">Visi</h4>
              <p class="text-gray-600 leading-relaxed">
                Menjadi akademi terbaik dalam membangun generasi muda yang cerdas, kreatif, dan inovatif di bidang teknologi dan pemrograman.
              </p>
            </div>
            <div class="hidden md:block w-[2px] bg-gray-300"></div>
            <div class="flex-1 text-center md:text-left">
              <h4 class="text-2xl font-semibold text-cyan-600 mb-4">Misi</h4>
              <ul class="list-disc list-inside text-gray-600 leading-relaxed">
                <li>Mengembangkan kurikulum belajar yang menyenangkan dan interaktif.</li>
                <li>Membimbing siswa dalam menciptakan proyek teknologi nyata.</li>
                <li>Mendorong kreativitas dan kerja sama dalam tim.</li>
                <li>Menanamkan nilai-nilai kepemimpinan dan rasa ingin tahu yang tinggi.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== FOOTER ===== -->
    <footer id="footer" class="border-t bg-white">
      <div class="max-w-6xl mx-auto py-6 flex flex-col md:flex-row items-center justify-between gap-4">
        <div class="flex items-center gap-3">
          <img src="{{ asset('images/MCA_Logo-removebg.png') }}" alt="Logo MCA" class="w-10 h-10 rounded-full object-cover" />
          <span class="text-gray-900 font-bold">
            Mini<span class="text-cyan-600">Coding</span><span class="text-gray-900">Academy</span>
          </span>
        </div>
        <ul class="flex gap-6 text-gray-600">
          <li><a href="#services" class="hover:text-cyan-600">Services</a></li>
          <li><a href="#products" class="hover:text-cyan-600">Products</a></li>
          <li><a href="#" class="hover:text-cyan-600">FAQ</a></li>
        </ul>
        <p class="text-gray-500 text-sm">© 2025 Mini Coding Academy. All rights reserved.</p>
      </div>
    </footer>

    <!-- ===== SCRIPT ===== -->
    <script>
      // Navbar Mobile Toggle
      const menuBtn = document.getElementById("menuBtn");
      const mobileMenu = document.getElementById("mobileMenu");
      menuBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
      });

      // Initialize AOS
      AOS.init({
        duration: 1000,
        once: false,
      });
    </script>

    <!-- SwiperJS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
      const swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          },
        },
      });
    </script>
  </body>
</html>
