@extends('layout.landingPage')

@section('title', 'Product | ACG')

@section('content')

<div class="relative isolate overflow-hidden bg-gray-900 pt-14 pb-16 sm:pb-20">
      <img src="{{ asset('assets1/images/landingPage/picture3.png') }}" alt="about-us" class="absolute opacity-50 inset-0 -z-10 size-full object-cover">
      <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
          {{-- <div class="hidden sm:mb-8 sm:flex sm:justify-center">
            <div class="relative rounded-full px-3 py-1 text-sm/6 text-gray-400 ring-1 ring-white/10 hover:ring-white/20">
              Announcing our next round of funding. <a href="#" class="font-semibold text-white"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
            </div>
          </div> --}}
          <div class="text-center">
            <h1 class="text-5xl font-semibold tracking-tight text-balance text-white sm:text-7xl">Our Products</h1>
            {{-- <p class="mt-8 text-lg font-medium text-pretty text-gray-400 sm:text-xl/8">We are excited to hear from you</p> --}}
            {{-- <div class="mt-10 flex items-center justify-center gap-x-6">
              <a href="#" class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">Get started</a>
              <a href="#" class="text-sm/6 font-semibold text-white">Learn more <span aria-hidden="true">→</span></a>
            </div> --}}
          </div>
        </div>

        <!-- Logo cloud -->
        {{-- <div class="mx-auto grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
          <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/plus-assets/img/logos/158x48/transistor-logo-white.svg" alt="Transistor" width="158" height="48">
          <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/plus-assets/img/logos/158x48/reform-logo-white.svg" alt="Reform" width="158" height="48">
          <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/plus-assets/img/logos/158x48/tuple-logo-white.svg" alt="Tuple" width="158" height="48">
          <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="https://tailwindui.com/plus-assets/img/logos/158x48/savvycal-logo-white.svg" alt="SavvyCal" width="158" height="48">
          <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="https://tailwindui.com/plus-assets/img/logos/158x48/statamic-logo-white.svg" alt="Statamic" width="158" height="48">
        </div> --}}
      </div>
      <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
</div>


<div class="bg-white">
  <div class="mx-auto max-w-7xl py-24 sm:px-2 sm:py-32 lg:px-4">
    <div class="mx-auto max-w-2xl px-4 lg:max-w-none">
      <div class="max-w-3xl">
          <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Spesification Our Products</p>
        <p class="mt-4 text-gray-500">At PT Adhi Cahaya Global, we take pride in sourcing and supplying the world with some of Indonesia’s finest natural commodities. Our curated product line includes high-demand agricultural exports such as corn, candlenut, cloves, dried ginger, turmeric, and cinnamon — all grown in fertile Indonesian soil and harvested with care by dedicated local farmers.</p>
        <p class="mt-4 text-gray-500">Each product reflects our commitment to quality, sustainability, and authenticity. We work directly with farming communities across Indonesia, ensuring that our products are not only export-grade and traceable, but also ethically sourced. Our mission is to help local farmers gain greater access to international markets while promoting the value of Indonesia’s rich agricultural heritage.</p>
        <p class="mt-4 text-gray-500">With a deep respect for nature and a focus on global standards, we ensure that every shipment meets stringent international requirements — bringing natural goodness from our farms to your business.</p>
      </div>
    </div>
  </div>
</div>


<div class="bg-white">
  <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-10 lg:max-w-7xl lg:grid-cols-2 lg:px-8 lg:mb-20">
    <div>
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Yellow Corn (Zea mays)</h2>
      {{-- <p class="mt-4 text-gray-500">The walnut wood card tray is precision milled to perfectly fit a stack of Focus cards. The powder coated steel divider separates active cards from new ones, or can be used to archive important task lists.</p> --}}

      <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Standard Compliance</dt>
          <dd class="mt-2 text-sm text-gray-500">ISO 22000 | Codex Alimentarius (CXC 51-2003)</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Moisture Content</dt>
          <dd class="mt-2 text-sm text-gray-500">≤ 14%</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Foreign Matter</dt>
          <dd class="mt-2 text-sm text-gray-500">≤ 1%</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Broken Kernels</dt>
          <dd class="mt-2 text-sm text-gray-500">≤ 3%</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Packaging</dt>
          <dd class="mt-2 text-sm text-gray-500">50 kg PP bag or as per buyer request</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Usage</dt>
          <dd class="mt-2 text-sm text-gray-500">Feed, food processing, starch production</dd>
        </div>
      </dl>
    </div>
    <div class="">
      <img src="{{ asset('assets1/images/products/picture5.png') }}" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="rounded-lg bg-gray-100">
    </div>
  </div>

  <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-10 lg:max-w-7xl lg:grid-cols-2 lg:px-8 lg:mb-20">
    <div>
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Candlenut (Aleurites moluccanus)</h2>
      {{-- <p class="mt-4 text-gray-500">The walnut wood card tray is precision milled to perfectly fit a stack of Focus cards. The powder coated steel divider separates active cards from new ones, or can be used to archive important task lists.</p> --}}

      <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Standard Compliance</dt>
          <dd class="mt-2 text-sm text-gray-500">ISO 22000 | Codex STAN 19-1981 (Oils and Fats)</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Moisture Content</dt>
          <dd class="mt-2 text-sm text-gray-500">≤ 8%</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Foreign Matter</dt>
          <dd class="mt-2 text-sm text-gray-500">≤ 50%</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Broken Kernels</dt>
          <dd class="mt-2 text-sm text-gray-500">≤ 1%</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Packaging</dt>
          <dd class="mt-2 text-sm text-gray-500">25–50 kg bag or vacuum packed</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Usage</dt>
          <dd class="mt-2 text-sm text-gray-500">Culinary, cosmetic oil, industrial oil</dd>
        </div>
      </dl>
    </div>
    <div class="">
      <img src="{{ asset('assets1/images/products/picture6.png') }}" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="rounded-lg bg-gray-100">
    </div>
  </div>

  <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-10 lg:max-w-7xl lg:grid-cols-2 lg:px-8 lg:mb-20">
    <div>
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Cloves (Syzygium aromaticum)</h2>
      {{-- <p class="mt-4 text-gray-500">The walnut wood card tray is precision milled to perfectly fit a stack of Focus cards. The powder coated steel divider separates active cards from new ones, or can be used to archive important task lists.</p> --}}

      <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Standard Compliance</dt>
          <dd class="mt-2 text-sm text-gray-500">ISO 2254 | Codex STAN 42-1981 | ASTA</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Moisture Content</dt>
          <dd class="mt-2 text-sm text-gray-500">≤ 12%</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Headless Cloves</dt>
          <dd class="mt-2 text-sm text-gray-500">≤ 3%</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Stems/Foreign Matter</dt>
          <dd class="mt-2 text-sm text-gray-500">≤ 1%</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Volatile Oil Content</dt>
          <dd class="mt-2 text-sm text-gray-500">≥ 15%</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Color</dt>
          <dd class="mt-2 text-sm text-gray-500">Uniform dark brown</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Packaging</dt>
          <dd class="mt-2 text-sm text-gray-500">10–25 kg jute or laminated PP bag</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Usage</dt>
          <dd class="mt-2 text-sm text-gray-500">Food, pharma, tobacco, fragrance</dd>
        </div>
      </dl>
    </div>
    <div class="">
      <img src="{{ asset('assets1/images/products/picture7.png') }}" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="rounded-lg bg-gray-100">
    </div>
  </div>

  <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-10 lg:max-w-7xl lg:grid-cols-2 lg:px-8 lg:mb-20">
    <div>
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Dried Ginger (Zingiber officinale)</h2>
      {{-- <p class="mt-4 text-gray-500">The walnut wood card tray is precision milled to perfectly fit a stack of Focus cards. The powder coated steel divider separates active cards from new ones, or can be used to archive important task lists.</p> --}}

      <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Standard Compliance</dt>
          <dd class="mt-2 text-sm text-gray-500">ISO 6571 | Codex STAN 255-2007</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Moisture Content</dt>
          <dd class="mt-2 text-sm text-gray-500">≤ 12%</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Volatile Oil Content</dt>
          <dd class="mt-2 text-sm text-gray-500">≥ 1.5%</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Color</dt>
          <dd class="mt-2 text-sm text-gray-500">Light brown to golden yellow</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Packaging</dt>
          <dd class="mt-2 text-sm text-gray-500">25–50 kg PP bags or as per buyer request</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Usage</dt>
          <dd class="mt-2 text-sm text-gray-500">Food, herbal, pharma</dd>
        </div>
      </dl>
    </div>
    <div class="">
      <img src="{{ asset('assets1/images/products/picture8.png') }}" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="rounded-lg bg-gray-100">
    </div>
  </div>

  <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-10 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
    <div>
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Dried Turmeric (Curcuma longa)</h2>
      {{-- <p class="mt-4 text-gray-500">The walnut wood card tray is precision milled to perfectly fit a stack of Focus cards. The powder coated steel divider separates active cards from new ones, or can be used to archive important task lists.</p> --}}

      <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Standard Compliance</dt>
          <dd class="mt-2 text-sm text-gray-500">ISO 6571 | Codex STAN 255-2007</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Moisture Content</dt>
          <dd class="mt-2 text-sm text-gray-500">≤ 10%</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Curcumin Content</dt>
          <dd class="mt-2 text-sm text-gray-500">≥ 3.5% (fingers), ≥ 5% (powder)</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Color</dt>
          <dd class="mt-2 text-sm text-gray-500">Bright yellow to orange</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Foreign Matter</dt>
          <dd class="mt-2 text-sm text-gray-500">≤ 1%</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Packaging</dt>
          <dd class="mt-2 text-sm text-gray-500">25 kg HDPE or paper bags</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Usage</dt>
          <dd class="mt-2 text-sm text-gray-500">Food coloring, spice blend, pharma</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Form</dt>
          <dd class="mt-2 text-sm text-gray-500">Finger / Powder</dd>
        </div>
      </dl>
    </div>
    <div class="">
      <img src="{{ asset('assets1/images/products/picture9.png') }}" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="rounded-lg bg-gray-100">
    </div>
  </div>

  <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-10 lg:max-w-7xl lg:grid-cols-2 lg:px-8 lg:mb-20">
    <div>
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Cinnamon (Cinnamomum burmannii)</h2>
      {{-- <p class="mt-4 text-gray-500">The walnut wood card tray is precision milled to perfectly fit a stack of Focus cards. The powder coated steel divider separates active cards from new ones, or can be used to archive important task lists.</p> --}}

      <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Standard Compliance</dt>
          <dd class="mt-2 text-sm text-gray-500">ISO 6571 | Codex STAN 255-2007</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Moisture Content</dt>
          <dd class="mt-2 text-sm text-gray-500">≤ 13%</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Foreign Matter</dt>
          <dd class="mt-2 text-sm text-gray-500">≤ 1%</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Color</dt>
          <dd class="mt-2 text-sm text-gray-500">Reddish to dark brown, uniform</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Length</dt>
          <dd class="mt-2 text-sm text-gray-500">6–15 cm average (adjustable)</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Packaging</dt>
          <dd class="mt-2 text-sm text-gray-500">10–25 kg corrugated box or PP bag</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Usage</dt>
          <dd class="mt-2 text-sm text-gray-500">Food coloring, spice blend, pharma</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-medium text-gray-900">Grade</dt>
          <dd class="mt-2 text-sm text-gray-500">Stick (Split/Whole)</dd>
        </div>
      </dl>
    </div>
    <div class="">
      <img src="{{ asset('assets1/images/products/picture10.png') }}" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="rounded-lg bg-gray-100">
    </div>
  </div>

</div>

<div class="bg-gray-100 p-5">
  <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:flex lg:items-center lg:justify-between lg:px-8 shadow-lg">
    <h2 class="max-w-2xl text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Ready to grow with us? Let’s talk.</h2>
    <div class="mt-10 flex items-center gap-x-6 lg:mt-0 lg:shrink-0">
      <a href="https://wa.me/62881082048368" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ask for offer</a>
      <a href="{{ route('contact') }}" class="text-sm/6 font-semibold text-gray-900 hover:scale-105">Contact us <span aria-hidden="true">→</span></a>
    </div>
  </div>
</div>




@endsection
