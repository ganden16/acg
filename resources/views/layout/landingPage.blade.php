<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets1/images/logo/acg4.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>@yield('title', 'ACG')</title>
    <style>
        /* WhatsApp Floating Button */
        .whatsapp-float-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        background-color: #25D366;
        border-radius: 50%;
        color: white;
        font-size: 24px;
        text-decoration: none;
        transition: transform 0.3s ease;
        z-index: 9999;
        }

        .whatsapp-float-button:hover {
        transform: scale(1.1);
        }

        /* WhatsApp Floating Button Container */
        .whatsapp-float-container {
        position: relative;
        }

        /* WhatsApp Tooltip */
        .whatsapp-tooltip {
        position: absolute;
        bottom: calc(100% + 10px);
        left: -70px;
        background-color: #25D366;
        color: white;
        padding: 10px 15px;
        border-radius: 5px;
        font-size: 14px;
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none;
        }

        .whatsapp-float-container:hover .whatsapp-tooltip {
        opacity: 1;
        }
    </style>
    @vite('resources/css/app.css')
</head>
<body>
<div class="bg-white">
  <!-- Header -->
  <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
<header class="opacity-90" style="background-color: #fafaf5">
  <nav aria-label="Global" class="mx-auto flex max-w-7xl items-center justify-between lg:px-8" style="background-color: #7a8450">
    <div class="flex lg:flex-1">
      <a href="#" class="p-2 md:me-10">
        <img src="{{ asset('assets1/images/logo/acg2-rem.png') }}" alt="p-0 m-0" class="w-20" />
        {{-- <img src="{{ asset('assets1/images/logo-rb-2.png') }}" alt="p-0 m-0" class="w-20" /> --}}
      </a>
    </div>
    <div class="flex md:hidden">
      <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex cursor-pointer items-center justify-center rounded-md p-2.5 text-gray-100">
        <span class="sr-only">Open main menu</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
          <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
    <el-popover-group class="hidden md:flex md:gap-x-12">
      <a href="{{ route('home') }}" class="text-sm/6 font-semibold text-gray-100 hover:text-gray-400">Home</a>
      <a href="{{ route('about') }}" class="text-sm/6 font-semibold text-gray-100 hover:text-gray-400">About</a>
      <a href="{{ route('product') }}" class="text-sm/6 font-semibold text-gray-100 hover:text-gray-400">Product</a>
      <a href="{{ route('blog') }}" class="text-sm/6 font-semibold text-gray-100 hover:text-gray-400">Blog</a>
      <a href="{{ route('contact') }}" class="text-sm/6 font-semibold text-gray-100 hover:text-gray-400">Contact</a>
    </el-popover-group>
    <div class="hidden md:flex md:flex-1 md:justify-end">
      <div class="relative">
        <button popovertarget="desktop-menu-language" class="flex items-center cursor-pointer gap-x-1 text-sm/6 font-semibold text-gray-100 hover:text-gray-400">
            Language
            <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-gray-400">
            <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
            </svg>
        </button>

        <!-- Popover -->
        <el-popover
            id="desktop-menu-language"
            anchor="bottom"
            popover
            class="w-screen max-w-md overflow-hidden rounded-3xl bg-gray-800 shadow-lg ring-1 ring-gray-900/5 transition transition-discrete [--anchor-gap:--spacing(3)] backdrop:bg-transparent open:block data-closed:translate-y-1 data-closed:opacity-0 data-enter:duration-200 data-enter:ease-out data-leave:duration-150 data-leave:ease-in">
            <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
            <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 text-sm/6 font-semibold text-gray-900 hover:bg-gray-200">
                Indonesia
            </a>
            <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 text-sm/6 font-semibold text-gray-900 hover:bg-gray-200">
                English
            </a>
            </div>
        </el-popover>
        </div>
    </div>
  </nav>
  <el-dialog>
    <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
      <div tabindex="0" class="fixed inset-0 focus:outline-none">
        <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
          <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">Your Company</span>
              <img src="{{ asset('assets1/images/logo/acg2-rem.png') }}" alt="Logo ACG" class="h-10" />
            </a>
            <button type="button" command="close" commandfor="mobile-menu" class="cursor-pointer -m-2.5 rounded-md p-2.5 text-gray-700">
              <span class="sr-only">Close menu</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
          </div>
          <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
              <div class="space-y-3 py-6">
                <a href="#" class="-mx-3 block rounded-lg text-center px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-100">Home</a>
                <a href="#" class="-mx-3 block rounded-lg text-center px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-100">About</a>
                <a href="#" class="-mx-3 block rounded-lg text-center px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-100">Product</a>
                <a href="#" class="-mx-3 block rounded-lg text-center px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-100">Blog</a>
                <a href="#" class="-mx-3 block rounded-lg text-center px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-100">Contact</a>
              </div>
              <div class="py-6">
                <div class="-mx-3">
                  <button type="button" command="--toggle" commandfor="products" class="cursor-pointer flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">
                    Language
                    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none in-aria-expanded:rotate-180">
                      <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                    </svg>
                  </button>
                  <el-disclosure id="products" hidden class="mt-2 block space-y-2">
                    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-100">Indonesia</a>
                    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-100">English</a>
                  </el-disclosure>
                </div>
              </div>
            </div>
          </div>
        </el-dialog-panel>
      </div>
    </dialog>
  </el-dialog>
</header>


  <main>
    @yield('content')

    <div class="whatsapp-float-container">
        <a href="https://wa.me/62881082048368" target="_blank" class="whatsapp-float-button">
        <i class="fa-brands fa-whatsapp"></i>
        <span class="whatsapp-tooltip">Whatsapp</span>
        </a>
    </div>
  </main>

  <!-- Footer -->
<footer class="" style="background-color: #7a8450">
  <div class="mx-auto max-w-7xl overflow-hidden px-6 py-10 sm:py-12 lg:px-8">
    <nav class="-mb-6 flex flex-wrap justify-center gap-x-12 gap-y-3 text-sm/6" aria-label="Footer">
      <a href="{{ route('home') }}" class="text-gray-100 hover:text-gray-400">Home</a>
      <a href="{{ route('about') }}" class="text-gray-100 hover:text-gray-400">About</a>
      <a href="{{ route('product') }}" class="text-gray-100 hover:text-gray-400">Product</a>
      <a href="{{ route('blog') }}" class="text-gray-100 hover:text-gray-400">Blog</a>
      <a href="{{ route('contact') }}" class="text-gray-100 hover:text-gray-400">Contact</a>
    </nav>
    <div class="mt-16 flex justify-center gap-x-10">
        <a href="tel:+62881082048368" class="text-gray-100 hover:text-gray-400">
            <span class="sr-only">Telephone</span>
            <i class="fas fa-phone"></i>
        </a>
        <a href="https://www.linkedin.com/company/pt-adhi-cahaya-global" class="text-gray-100 hover:text-gray-400">
            <span class="sr-only">Linkedin</span>
            <i class="fa-brands fa-linkedin"></i>
        </a>
        <a href="mailto:pt.adhicahayaglobal@gmail.com" class="text-gray-100 hover:text-gray-400">
            <span class="sr-only">Email</span>
            <i class="fa-solid fa-envelope"></i>
        </a>

    </div>
    {{-- <div class="mt-16 flex justify-center gap-x-10">
      <a href="#" class="text-gray-400 hover:text-gray-300">
        <span class="sr-only">Facebook</span>
        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
        </svg>
      </a>
      <a href="#" class="text-gray-400 hover:text-gray-300">
        <span class="sr-only">Instagram</span>
        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
        </svg>
      </a>
      <a href="#" class="text-gray-400 hover:text-gray-300">
        <span class="sr-only">X</span>
        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z" />
        </svg>
      </a>
      <a href="#" class="text-gray-400 hover:text-gray-300">
        <span class="sr-only">GitHub</span>
        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
        </svg>
      </a>
      <a href="#" class="text-gray-400 hover:text-gray-300">
        <span class="sr-only">YouTube</span>
        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" />
        </svg>
      </a>
    </div> --}}
    <p class="mt-10 text-center text-sm/6 text-gray-100"><i class="fa-solid fa-location-dot"></i>  Mojosulur, Mojosari, Kab. Mojokerto, Jawa Timur. 61382</p>
    <p class="mt-8 text-center text-sm/6 text-gray-100">&copy; 2025 PT. ADHI CAHAYA GLOBAL. All rights reserved.</p>
  </div>
</footer>


</div>

<script>

</script>
<!-- Tambahkan script ini jika belum ada -->
<script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

@yield('js')

</body>
</html>
