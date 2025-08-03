@extends('layout.landingPage')

@section('title', 'About Us | ACG')
@section('content')
<div class="relative isolate overflow-hidden bg-gray-900 pt-14 pb-16 sm:pb-20">
      <img src="{{ asset('assets1/images/landingPage/picture2.png') }}" alt="about-us" class="absolute opacity-30 inset-0 -z-10 size-full object-cover">
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
            <h1 class="text-5xl font-semibold tracking-tight text-balance text-white sm:text-7xl">{{ __('about.title') }}</h1>
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

 <main class="isolate">
    <!-- Hero section -->
    <div class="relative isolate -z-10">
        <div class="overflow-hidden">
            <div class="mx-auto max-w-7xl px-6 pt-36 pb-10 sm:pt-60 lg:px-8 lg:pt-32">
                <div class="lg:flex lg:items-start lg:justify-between gap-x-10">
                    <!-- Content Section -->
                    <div class="w-full lg:w-1/2 space-y-6">
                        <h1 class="text-5xl font-semibold tracking-tight text-gray-900 sm:text-6xl">{{ __('about.titleAbout') }}</h1>
                        <p class="mt-8 text-base font-medium text-gray-500 sm:max-w-md sm:text-xl/8 lg:max-w-none">
                            {{ __('about.descriptionAbout1') }}
                        </p>
                        <p class="mt-8 text-base font-medium text-gray-500 sm:max-w-md sm:text-xl/8 lg:max-w-none">
                            {{ __('about.descriptionAbout2') }}
                        </p>
                    </div>

                    <!-- Video Section -->
                    <div class="w-full mt-14 lg:mt-0 lg:w-1/2">
                        <div class="relative">
                            <video controls autoplay muted loop class="aspect-video w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                            <source src="{{ asset('assets1/video/video1.mov') }}" type="video/mp4">
                            Your browser does not support the video tag.
                            </video>
                            <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-gray-900/10 ring-inset"></div>
                        </div>
                        <div class="mx-auto max-w-7xl px-6 py-16 sm:py-20 lg:px-8">
                            <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
                                <h2 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">{{ __('about.titleVision') }}</h2>
                                <div class="mt-6 flex flex-col gap-x-8 gap-y-10 lg:flex-row">
                                <div class="lg:w-full lg:max-w-2xl lg:flex-auto">
                                    <p class="text-lg text-gray-600">
                                    {{ __('about.descriptionVision1') }}
                                    </p>
                                    <p class="mt-6 text-lg text-gray-600">
                                    {{ __('about.descriptionVision2') }}
                                    </p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mission section -->
<div class="mx-auto mt-5 max-w-7xl px-6 sm:mt-10 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">
            {{ __('about.mission.title') }}
        </h2>
    </div>

    <dl class="mx-auto mt-8 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-10 text-base/7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-4">
        @foreach(__('about.mission.missions') as $key => $mission)
            <div>
                <dt class="font-semibold text-gray-900">
                    <i class="fa-solid fa-circle-check" style="color: #3dae8c;"></i>
                </dt>
                <dd class="mt-1 text-gray-600">{{ $mission }}</dd>
            </div>
        @endforeach
    </dl>
</div>

    <!-- Our Service -->
<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <!-- Judul -->
        <div class="mx-auto max-w-2xl lg:text-center">
            <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">
                {{ __('about.service.title') }}
            </p>
        </div>

        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                @foreach(__('about.service.services') as $key => $item)
                    <div class="relative pl-16">
                        <dt class="text-base/7 font-semibold text-gray-900">
                            <div class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-green-700">
                                <i class="{{ $item['icon'] }} text-gray-100"></i>
                            </div>
                            {{ $item['title'] }}
                        </dt>
                        <dd class="mt-2 text-base/7 text-gray-600">
                            {{ $item['description'] }}
                        </dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</div>

    {{-- team --}}
    {{-- <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">Our team</h2>
            <p class="mt-6 text-lg/8 text-gray-600">We’re a dynamic group of individuals who are passionate about what we do and dedicated to delivering the best results for our clients.</p>
            </div>
            <ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <li>
                <img class="aspect-3/2 w-full rounded-2xl object-cover" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                <h3 class="mt-6 text-lg/8 font-semibold tracking-tight text-gray-900">Lindsay Walton</h3>
                <p class="text-base/7 text-gray-600">CEO</p>
                <ul role="list" class="mt-6 flex gap-x-6">
                <li>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">X</span>
                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path d="M11.4678 8.77491L17.2961 2H15.915L10.8543 7.88256L6.81232 2H2.15039L8.26263 10.8955L2.15039 18H3.53159L8.87581 11.7878L13.1444 18H17.8063L11.4675 8.77491H11.4678ZM9.57608 10.9738L8.95678 10.0881L4.02925 3.03974H6.15068L10.1273 8.72795L10.7466 9.61374L15.9156 17.0075H13.7942L9.57608 10.9742V10.9738Z" />
                    </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">LinkedIn</span>
                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                    </svg>
                    </a>
                </li>
                </ul>
            </li>
            <li>
                <img class="aspect-3/2 w-full rounded-2xl object-cover" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                <h3 class="mt-6 text-lg/8 font-semibold tracking-tight text-gray-900">Lindsay Walton</h3>
                <p class="text-base/7 text-gray-600">CFO</p>
                <ul role="list" class="mt-6 flex gap-x-6">
                <li>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">X</span>
                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path d="M11.4678 8.77491L17.2961 2H15.915L10.8543 7.88256L6.81232 2H2.15039L8.26263 10.8955L2.15039 18H3.53159L8.87581 11.7878L13.1444 18H17.8063L11.4675 8.77491H11.4678ZM9.57608 10.9738L8.95678 10.0881L4.02925 3.03974H6.15068L10.1273 8.72795L10.7466 9.61374L15.9156 17.0075H13.7942L9.57608 10.9742V10.9738Z" />
                    </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">LinkedIn</span>
                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                    </svg>
                    </a>
                </li>
                </ul>
            </li>
            <li>
                <img class="aspect-3/2 w-full rounded-2xl object-cover" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                <h3 class="mt-6 text-lg/8 font-semibold tracking-tight text-gray-900">Lindsay Walton</h3>
                <p class="text-base/7 text-gray-600">COO</p>
                <ul role="list" class="mt-6 flex gap-x-6">
                <li>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">X</span>
                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path d="M11.4678 8.77491L17.2961 2H15.915L10.8543 7.88256L6.81232 2H2.15039L8.26263 10.8955L2.15039 18H3.53159L8.87581 11.7878L13.1444 18H17.8063L11.4675 8.77491H11.4678ZM9.57608 10.9738L8.95678 10.0881L4.02925 3.03974H6.15068L10.1273 8.72795L10.7466 9.61374L15.9156 17.0075H13.7942L9.57608 10.9742V10.9738Z" />
                    </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">LinkedIn</span>
                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                    </svg>
                    </a>
                </li>
                </ul>
            </li>

            </ul>
        </div>
    </div> --}}

</main>
@endsection

