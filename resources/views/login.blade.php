<!doctype html>
<html lang="en" data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" dir="ltr" data-pc-theme="light">
  <!-- [Head] start -->

  <head>
    <title>Login | ACG</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <link rel="stylesheet" href="{{ asset('assets1/fonts/feather.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets1/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets1/fonts/material.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets1/fonts/tabler-icons.min.css') }}" />
    <link rel="stylesheet" href={{ asset('assets1/css/style.css') }} id="main-style-link" />
    <link rel="icon" href="{{ asset('assets1/images/logo/acg4.png') }}" type="image/x-icon" />

    @vite('resources/css/app.css')

  </head>

  <body>
    <div class="loader-bg fixed inset-0 bg-white dark:bg-themedark-cardbg z-[1034]">
      <div class="loader-track h-[5px] w-full inline-block absolute overflow-hidden top-0">
        <div class="loader-fill w-[300px] h-[5px] bg-primary-500 absolute top-0 left-0 animate-[hitZak_0.6s_ease-in-out_infinite_alternate]"></div>
      </div>
    </div>

    <div class="auth-main relative">
      <div class="auth-wrapper v1 flex items-center w-full h-full min-h-screen">
        <div class="auth-form flex items-center justify-center grow flex-col min-h-screen relative p-6 ">
          <div class="w-full max-w-[350px] relative">
            <div class="auth-bg ">
              <span class="absolute top-[-100px] right-[-100px] w-[300px] h-[300px] block rounded-full bg-theme-bg-1 animate-[floating_7s_infinite]"></span>
              <span class="absolute top-[150px] right-[-150px] w-5 h-5 block rounded-full bg-primary-500 animate-[floating_9s_infinite]"></span>
              <span class="absolute left-[-150px] bottom-[150px] w-5 h-5 block rounded-full bg-theme-bg-1 animate-[floating_7s_infinite]"></span>
              <span class="absolute left-[-100px] bottom-[-100px] w-[300px] h-[300px] block rounded-full bg-theme-bg-2 animate-[floating_9s_infinite]"></span>
            </div>
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="card sm:my-12  w-full shadow-none">
                    <div class="card-body !p-10">
                        <div class="text-center mb-8">
                            <a href="/"><img src="{{ asset('assets1/images/acg-1.png') }}" alt="Logo ACG" class="w-30"/></a>
                        </div>
                       @if (session('unauthorized'))
                        <div class="border-l-4 border-yellow-400 bg-yellow-50 p-4">
                            <div class="flex">
                                <div class="shrink-0">
                                <svg class="size-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495ZM10 5a.75.75 0 0 1 .75.75v3.5a.75.75 0 0 1-1.5 0v-3.5A.75.75 0 0 1 10 5Zm0 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" clip-rule="evenodd" />
                                </svg>
                                </div>
                                <div class="ml-3">
                                <p class="text-sm text-yellow-700">
                                    {{ session('unauthorized') }}
                                </p>
                                </div>
                            </div>
                        </div>
                       @endif

                        <h4 class="text-center font-medium mb-4">Login</h4>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="{{ old('username') }}"/>
                            @error('username')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
                            @error('password')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex mt-1 justify-between items-center flex-wrap">
                            <div class="form-check">
                                <input class="form-check-input input-primary" type="checkbox" name="remember_me" id="remember_me" />
                                <label class="form-check-label text-muted" for="remember_me">Remember me?</label>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <button type="submit" class="btn btn-primary mx-auto shadow-2xl">Login</button>
                        </div>
                    </div>
                </div>
            </form>
          </div>

        </div>
      </div>
    </div>
    <script src="{{ asset('assets1/js/script.js') }}"></script>

    <div class="floting-button fixed bottom-[50px] right-[30px] z-[1030]">
    </div>

  </body>
</html>
