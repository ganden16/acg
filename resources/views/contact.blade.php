@extends('layout.landingPage')

@section('title', 'Contact | ACG')
@section('content')
<div class="relative isolate overflow-hidden bg-gray-900 pt-14 pb-16 sm:pb-20">
      <img src="{{ asset('assets1/images/landingPage/picture6.png') }}" alt="about-us" class="absolute opacity-30 inset-0 -z-10 size-full object-cover">
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
            <h1 class="text-5xl font-semibold tracking-tight text-balance text-white sm:text-7xl">Contact Us</h1>
            <p class="mt-8 text-lg font-medium text-pretty text-gray-400 sm:text-xl/8">We are excited to hear from you</p>
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

<div class="relative bg-white">

  <div class="pt-16 pb-24 sm:pt-24 sm:pb-32 lg:mx-auto lg:grid lg:max-w-7xl lg:grid-cols-2 lg:pt-20">
    <div class="px-6 lg:px-8">
      <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
        <h2 class="text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">GET IN TOUCH</h2>
        <p class="mt-2 text-lg/8 text-gray-600">Ready to grow with us? Let’s talk.</p>
        <form action="{{ route('send-email') }}" method="POST" class="mt-16">
            @csrf
          <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
            <div>
              <label for="first_name" class="block text-sm/6 font-semibold text-gray-900">First name</label>
              <div class="mt-2.5">
                <input type="text" value="{{ old('first_name') }}" name="first_name" id="first_name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                @error('first_name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>
            </div>
            <div>
              <label for="last_name" class="block text-sm/6 font-semibold text-gray-900">Last name</label>
              <div class="mt-2.5">
                <input type="text" value="{{ old('last_name') }}" name="last_name" id="last_name" autocomplete="family-name" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                @error('last_name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>
            </div>
            <div class="sm:col-span-2">
              <label for="email" class="block text-sm/6 font-semibold text-gray-900">Email</label>
              <div class="mt-2.5">
                <input id="email" value="{{ old('email') }}" name="email" type="text" autocomplete="email" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>
            </div>
            <div class="sm:col-span-2">
              <div class="flex justify-between text-sm/6">
                <label for="phone" class="block font-semibold text-gray-900">Phone</label>
              </div>
              <div class="mt-2.5">
                <input type="number" value="{{ old('phone') }}" name="phone" id="phone" autocomplete="tel" aria-describedby="phone-description" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                @error('phone')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>
            </div>
            <div class="sm:col-span-2">
              <div class="flex justify-between text-sm/6">
                <label for="message" class="block text-sm/6 font-semibold text-gray-900">How can we help you?</label>
              </div>
              <div class="mt-2.5">
                <textarea id="message" name="message" rows="7" aria-describedby="message-description" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">{{ old('message') }}</textarea>
                @error('message')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>
            </div>
          </div>
          <div class="mt-10 flex justify-end border-t border-gray-900/10 pt-8">
            <button type="submit" class="cursor-pointer rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Send message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="lg:absolute lg:inset-0 lg:left-1/2 mt-10 lg:mt-0">
    <img class="h-90% bg-gray-50 object-covers lg:absolute lg:h-full" src="{{ asset('assets1/images/landingPage/picture1-1.png') }}" alt="">
  </div>
</div>

<div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
  <div class="mx-auto max-w-2xl text-center">
    <h2 class="text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl">Contact Us</h2>
    <p class="mt-2 text-lg/8 text-gray-600">I’m excited to hear from you</p>
  </div>

  <div class="mx-auto mt-20 max-w-4xl lg:flex lg:items-start lg:gap-12">
    <!-- Contact Details -->
    <div class="lg:flex-1">
      <div class="space-y-10 sm:space-y-12">
        <div class="flex gap-x-6">
          <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z"/></svg>
          </div>
          <div class="flex-1">
            <h3 class="text-base font-semibold text-gray-900">Telephone</h3>
            <p class="mt-2 text-base text-gray-600">+62881082048368</p>
            <p class="mt-4 text-sm font-semibold">
              <a href="tel:+62881082048368" class="text-indigo-600">Contact us <span aria-hidden="true">&rarr;</span></a>
            </p>
          </div>
        </div>

        <div class="flex gap-x-6">
          <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M512 96L127.9 96C110.3 96 96 110.5 96 128.3L96 511.7C96 529.5 110.3 544 127.9 544L512 544C529.6 544 544 529.5 544 511.7L544 128.3C544 110.5 529.6 96 512 96zM231.4 480L165 480L165 266.2L231.5 266.2L231.5 480L231.4 480zM198.2 160C219.5 160 236.7 177.2 236.7 198.5C236.7 219.8 219.5 237 198.2 237C176.9 237 159.7 219.8 159.7 198.5C159.7 177.2 176.9 160 198.2 160zM480.3 480L413.9 480L413.9 376C413.9 351.2 413.4 319.3 379.4 319.3C344.8 319.3 339.5 346.3 339.5 374.2L339.5 480L273.1 480L273.1 266.2L336.8 266.2L336.8 295.4L337.7 295.4C346.6 278.6 368.3 260.9 400.6 260.9C467.8 260.9 480.3 305.2 480.3 362.8L480.3 480z"/></svg>
          </div>
          <div class="flex-1">
            <h3 class="text-base font-semibold text-gray-900">Linkedin</h3>
            <p class="mt-2 text-base text-gray-600">@pt-adhi-cahaya-global</p>
            <p class="mt-4 text-sm font-semibold">
              <a href="https://www.linkedin.com/company/pt-adhi-cahaya-global" class="text-indigo-600">Visit now <span aria-hidden="true">&rarr;</span></a>
            </p>
          </div>
        </div>

        <div class="flex gap-x-6">
          <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M112 128C85.5 128 64 149.5 64 176C64 191.1 71.1 205.3 83.2 214.4L291.2 370.4C308.3 383.2 331.7 383.2 348.8 370.4L556.8 214.4C568.9 205.3 576 191.1 576 176C576 149.5 554.5 128 528 128L112 128zM64 260L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 260L377.6 408.8C343.5 434.4 296.5 434.4 262.4 408.8L64 260z"/></svg>
          </div>
          <div class="flex-1">
            <h3 class="text-base font-semibold text-gray-900">Email</h3>
            <p class="mt-2 text-base text-gray-600">pt.adhicahayaglobal@gmail.com</p>
            <p class="mt-4 text-sm font-semibold">
              <a href="mailto:pt.adhicahayaglobal@gmail.com" class="text-indigo-600">Send email now <span aria-hidden="true">&rarr;</span></a>
            </p>
          </div>
        </div>

        <div class="flex gap-x-6">
          <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-gray-100">
            <i class="fa-solid fa-location-dot"></i>
          </div>
          <div class="flex-1">
            <h3 class="text-base font-semibold text-gray-900">Location</h3>
            <p class="mt-2 text-base text-gray-600">Mojosulur, Mojosari, Kab. Mojokerto, Jawa Timur</p>
            <p class="mt-2 text-base text-gray-600">ZIP Code 61382</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Quote Section -->
    <div class="mt-12 lg:mt-0 lg:max-w-xs lg:flex lg:flex-col lg:justify-center">
        <span class="w-12 flex justify-center align-middle items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224-32c7 0 13.7 3.1 18.3 8.5l136 160c6.1 7.1 7.4 17.1 3.5 25.6S369.4 176 360 176l-24.9 0 75.2 88.5c6.1 7.1 7.4 17.1 3.5 25.6S401.4 304 392 304l-38.5 0 88.8 104.5c6.1 7.1 7.4 17.1 3.5 25.6S433.4 448 424 448l-168 0 0 64c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-64-168 0c-9.4 0-17.9-5.4-21.8-13.9s-2.6-18.5 3.5-25.6L94.5 304 56 304c-9.4 0-17.9-5.4-21.8-13.9s-2.6-18.5 3.5-25.6L112.9 176 88 176c-9.4 0-17.9-5.4-21.8-13.9s-2.6-18.5 3.5-25.6l136-160C210.3-28.9 217-32 224-32z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M535.3 70.7C541.7 64.6 551 62.4 559.6 65.2C569.4 68.5 576 77.7 576 88L576 274.9C576 406.1 467.9 512 337.2 512C260.2 512 193.8 462.5 169.7 393.3C134.3 424.1 112 469.4 112 520C112 533.3 101.3 544 88 544C74.7 544 64 533.3 64 520C64 445.1 102.2 379.1 160.1 340.3C195.4 316.7 237.5 304 280 304L360 304C373.3 304 384 293.3 384 280C384 266.7 373.3 256 360 256L280 256C240.3 256 202.7 264.8 169 280.5C192.3 210.5 258.2 160 336 160C402.4 160 451.8 137.9 484.7 116C503.9 103.2 520.2 87.9 535.4 70.7z"/></svg>
        </span>
      <figure class="mt-8">
        <blockquote class="text-sm/6 sm:text-base/7 font-semibold text-gray-900">
          <p>Your Reliable Partner for Ethical Trade & Authentic Indonesian Commodities</p>
        </blockquote>
        <figcaption class="mt-6 flex items-center gap-x-1 justify-between">
          <img class="size-20 rounded bg-gray-50" src="{{ asset('assets1/images/logo-acg.png') }}" alt="PT. ADHI CAHAYA GLOBAL">
          <div>
            <div class="text-gray-600 text-sm">PT. ADHI CAHAYA GLOBAL</div>
          </div>
        </figcaption>
      </figure>
    </div>
  </div>
</div>

@if(session()->has('success-send-email'))
<div id="success-modal-send-email" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div class="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true"></div>
  <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
      <div class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
        <div>
          <div class="mx-auto flex size-12 items-center justify-center rounded-full bg-green-100">
            <svg class="size-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
            </svg>
          </div>
          <div class="mt-3 text-center sm:mt-5">
            <h3 class="text-base font-semibold text-gray-900" id="modal-title">Email Sent</h3>
            <div class="mt-2">
              <p class="text-sm text-gray-500">{{ session('success-send-email') }}</p>
            </div>
          </div>
        </div>
        <div class="mt-5 sm:mt-6">
          <a href="#" onclick="closeModalSuccessSendEmail()" type="button" class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">OKE</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endif

@if (session()->has('error-send-email'))
<div id="error-modal-send-email" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div class="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true"></div>
  <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
      <div class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
        <div>
          <div class="mx-auto flex size-12 items-center justify-center rounded-full bg-green-100">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M352 96C352 78.3 337.7 64 320 64C302.3 64 288 78.3 288 96L288 416C288 433.7 302.3 448 320 448C337.7 448 352 433.7 352 416L352 96zM320 576C342.1 576 360 558.1 360 536C360 513.9 342.1 496 320 496C297.9 496 280 513.9 280 536C280 558.1 297.9 576 320 576z"/></svg>
          </div>
          <div class="mt-3 text-center sm:mt-5">
            <h3 class="text-base font-semibold text-gray-900" id="modal-title">Failed</h3>
            <div class="mt-2">
              <p class="text-sm text-gray-500">{{ session('error-send-email') }}</p>
            </div>
          </div>
        </div>
        <div class="mt-5 sm:mt-6">
          <a href="#" onclick="closeModalErrorSendEmail()" type="button" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">OKE</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endif

@endsection

@section('js')
<script>
     function closeModalSuccessSendEmail() {
        document.getElementById('success-modal-send-email').classList.add('hidden');
        window.location.reload();
    }
     function closeModalErrorSendEmail() {
        document.getElementById('error-modal-send-email').classList.add('hidden');
        window.location.reload();
    }
</script>
@endsection
