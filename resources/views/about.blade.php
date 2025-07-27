@extends('layout.landingPage')

@section('content')

<div class="relative isolate overflow-hidden bg-gray-900 pt-14 pb-16 sm:pb-20">
      <img src="{{ asset('assets1/images/landingPage/picture2.png') }}" alt="about-us" class="absolute opacity-30 inset-0 -z-10 size-full object-cover">
      <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
          <div class="hidden sm:mb-8 sm:flex sm:justify-center">
            <div class="relative rounded-full px-3 py-1 text-sm/6 text-gray-400 ring-1 ring-white/10 hover:ring-white/20">
              Announcing our next round of funding. <a href="#" class="font-semibold text-white"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
            </div>
          </div>
          <div class="text-center">
            <h1 class="text-5xl font-semibold tracking-tight text-balance text-white sm:text-7xl">Data to enrich your online business</h1>
            <p class="mt-8 text-lg font-medium text-pretty text-gray-400 sm:text-xl/8">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat.</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
              <a href="#" class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">Get started</a>
              <a href="#" class="text-sm/6 font-semibold text-white">Learn more <span aria-hidden="true">→</span></a>
            </div>
          </div>
        </div>

        <!-- Logo cloud -->
        <div class="mx-auto grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
          <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/plus-assets/img/logos/158x48/transistor-logo-white.svg" alt="Transistor" width="158" height="48">
          <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/plus-assets/img/logos/158x48/reform-logo-white.svg" alt="Reform" width="158" height="48">
          <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/plus-assets/img/logos/158x48/tuple-logo-white.svg" alt="Tuple" width="158" height="48">
          <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="https://tailwindui.com/plus-assets/img/logos/158x48/savvycal-logo-white.svg" alt="SavvyCal" width="158" height="48">
          <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="https://tailwindui.com/plus-assets/img/logos/158x48/statamic-logo-white.svg" alt="Statamic" width="158" height="48">
        </div>
      </div>
      <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
</div>

    <!-- Content section -->
    <div class="mx-auto mt-12 max-w-7xl px-6 sm:mt-0 lg:px-8 xl:mt-8">
      <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
        <h2 class="text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">Our mission</h2>
        <div class="mt-6 flex flex-col gap-x-8 gap-y-20 lg:flex-row">
          <div class="lg:w-full lg:max-w-2xl lg:flex-auto">
            <p class="text-xl/8 text-gray-600">Aliquet nec orci mattis amet quisque ullamcorper neque, nibh sem. At arcu, sit dui mi, nibh dui, diam eget aliquam. Quisque id at vitae feugiat egestas ac. Diam nulla orci at in viverra scelerisque eget. Eleifend egestas fringilla sapien.</p>
            <p class="mt-10 max-w-xl text-base/7 text-gray-700">Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis mauris semper sed amet vitae sed turpis id. Id dolor praesent donec est. Odio penatibus risus viverra tellus varius sit neque erat velit. Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis mauris semper sed amet vitae sed turpis id.</p>
          </div>
          <div class="lg:flex lg:flex-auto lg:justify-center">
            <dl class="w-64 space-y-8 xl:w-80">
              <div class="flex flex-col-reverse gap-y-4">
                <dt class="text-base/7 text-gray-600">Transactions every 24 hours</dt>
                <dd class="text-5xl font-semibold tracking-tight text-gray-900">44 million</dd>
              </div>
              <div class="flex flex-col-reverse gap-y-4">
                <dt class="text-base/7 text-gray-600">Assets under holding</dt>
                <dd class="text-5xl font-semibold tracking-tight text-gray-900">$119 trillion</dd>
              </div>
              <div class="flex flex-col-reverse gap-y-4">
                <dt class="text-base/7 text-gray-600">New users annually</dt>
                <dd class="text-5xl font-semibold tracking-tight text-gray-900">46,000</dd>
              </div>
            </dl>
          </div>
        </div>
      </div>
    </div>

    <!-- Image section -->
    <div class="mt-32 sm:mt-40 xl:mx-auto xl:max-w-7xl xl:px-8">
      <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2832&q=80" alt="" class="aspect-5/2 w-full object-cover xl:rounded-3xl">
    </div>

    <!-- Values section -->
    <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-40 lg:px-8">
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">Our values</h2>
        <p class="mt-6 text-lg/8 text-gray-600">Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.</p>
      </div>
      <dl class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 text-base/7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        <div>
          <dt class="font-semibold text-gray-900">Be world-class</dt>
          <dd class="mt-1 text-gray-600">Aut illo quae. Ut et harum ea animi natus. Culpa maiores et sed sint et magnam exercitationem quia. Ullam voluptas nihil vitae dicta molestiae et. Aliquid velit porro vero.</dd>
        </div>
        <div>
          <dt class="font-semibold text-gray-900">Share everything you know</dt>
          <dd class="mt-1 text-gray-600">Mollitia delectus a omnis. Quae velit aliquid. Qui nulla maxime adipisci illo id molestiae. Cumque cum ut minus rerum architecto magnam consequatur. Quia quaerat minima.</dd>
        </div>
        <div>
          <dt class="font-semibold text-gray-900">Always learning</dt>
          <dd class="mt-1 text-gray-600">Aut repellendus et officiis dolor possimus. Deserunt velit quasi sunt fuga error labore quia ipsum. Commodi autem voluptatem nam. Quos voluptatem totam.</dd>
        </div>
        <div>
          <dt class="font-semibold text-gray-900">Be supportive</dt>
          <dd class="mt-1 text-gray-600">Magnam provident veritatis odit. Vitae eligendi repellat non. Eum fugit impedit veritatis ducimus. Non qui aspernatur laudantium modi. Praesentium rerum error deserunt harum.</dd>
        </div>
        <div>
          <dt class="font-semibold text-gray-900">Take responsibility</dt>
          <dd class="mt-1 text-gray-600">Sit minus expedita quam in ullam molestiae dignissimos in harum. Tenetur dolorem iure. Non nesciunt dolorem veniam necessitatibus laboriosam voluptas perspiciatis error.</dd>
        </div>
        <div>
          <dt class="font-semibold text-gray-900">Enjoy downtime</dt>
          <dd class="mt-1 text-gray-600">Ipsa in earum deserunt aut. Quos minus aut animi et soluta. Ipsum dicta ut quia eius. Possimus reprehenderit iste aspernatur ut est velit consequatur distinctio.</dd>
        </div>
      </dl>
    </div>

    <!-- Logo cloud -->
    <div class="relative isolate -z-10 mt-32 sm:mt-48">
      <div class="absolute inset-x-0 top-1/2 -z-10 flex -translate-y-1/2 justify-center overflow-hidden [mask-image:radial-gradient(50%_45%_at_50%_55%,white,transparent)]">
        <svg class="h-[40rem] w-[80rem] flex-none stroke-gray-200" aria-hidden="true">
          <defs>
            <pattern id="e9033f3e-f665-41a6-84ef-756f6778e6fe" width="200" height="200" x="50%" y="50%" patternUnits="userSpaceOnUse" patternTransform="translate(-100 0)">
              <path d="M.5 200V.5H200" fill="none" />
            </pattern>
          </defs>
          <svg x="50%" y="50%" class="overflow-visible fill-gray-50">
            <path d="M-300 0h201v201h-201Z M300 200h201v201h-201Z" stroke-width="0" />
          </svg>
          <rect width="100%" height="100%" stroke-width="0" fill="url(#e9033f3e-f665-41a6-84ef-756f6778e6fe)" />
        </svg>
      </div>
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="text-center text-lg/8 font-semibold text-gray-900">Trusted by the world’s most innovative teams</h2>
        <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
          <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/plus-assets/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor" width="158" height="48">
          <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/plus-assets/img/logos/158x48/reform-logo-gray-900.svg" alt="Reform" width="158" height="48">
          <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/plus-assets/img/logos/158x48/tuple-logo-gray-900.svg" alt="Tuple" width="158" height="48">
          <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="https://tailwindui.com/plus-assets/img/logos/158x48/savvycal-logo-gray-900.svg" alt="SavvyCal" width="158" height="48">
          <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="https://tailwindui.com/plus-assets/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic" width="158" height="48">
        </div>
      </div>
    </div>

    <!-- Team section -->
    <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-48 lg:px-8">
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">Our team</h2>
        <p class="mt-6 text-lg/8 text-gray-600">We’re a dynamic group of individuals who are passionate about what we do and dedicated to delivering the best results for our clients.</p>
      </div>
      <ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-2 gap-x-8 gap-y-16 text-center sm:grid-cols-3 md:grid-cols-4 lg:mx-0 lg:max-w-none lg:grid-cols-5 xl:grid-cols-6">
        <li>
          <img class="mx-auto size-24 rounded-full" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
          <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-gray-900">Michael Foster</h3>
          <p class="text-sm/6 text-gray-600">Co-Founder / CTO</p>
        </li>

        <!-- More people... -->
      </ul>
    </div>

    <!-- Blog section -->
    <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-40 lg:px-8">
      <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
        <h2 class="text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl">From the blog</h2>
        <p class="mt-2 text-lg/8 text-gray-600">Learn how to grow your business with our expert advice.</p>
      </div>
      <div class="mx-auto mt-16 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pt-80 pb-8 sm:pt-48 lg:pt-80">
          <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80" alt="" class="absolute inset-0 -z-10 size-full object-cover">
          <div class="absolute inset-0 -z-10 bg-linear-to-t from-gray-900 via-gray-900/40"></div>
          <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-gray-900/10 ring-inset"></div>

          <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm/6 text-gray-300">
            <time datetime="2020-03-16" class="mr-8">Mar 16, 2020</time>
            <div class="-ml-4 flex items-center gap-x-4">
              <svg viewBox="0 0 2 2" class="-ml-0.5 size-0.5 flex-none fill-white/50">
                <circle cx="1" cy="1" r="1" />
              </svg>
              <div class="flex gap-x-2.5">
                <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-6 flex-none rounded-full bg-white/10">
                Michael Foster
              </div>
            </div>
          </div>
          <h3 class="mt-3 text-lg/6 font-semibold text-white">
            <a href="#">
              <span class="absolute inset-0"></span>
              Vel expedita assumenda placeat aut nisi optio voluptates quas
            </a>
          </h3>
        </article>

        <!-- More posts... -->
      </div>
    </div>
@endsection

