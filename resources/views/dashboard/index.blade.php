@extends('layout.dashboard')

@section('title', 'Dashboard | ACG')
@section('link-meta')
    <link rel="stylesheet" href="{{ asset('assets1/fonts/phosphor/duotone/style.css') }}" />
@endsection

@section('content')
<div class="grid grid-cols-12 gap-x-6">
          <div class="col-span-12 xl:col-span-4 md:col-span-6">
            <div class="card">
              <div class="card-header !pb-0 !border-b-0">
                <h5>Daily Sales</h5>
              </div>
              <div class="card-body">
                <div class="flex items-center justify-between gap-3 flex-wrap">
                  <h3 class="font-light flex items-center mb-0">
                    <i class="feather icon-arrow-up text-success-500 text-[30px] mr-1.5"></i>
                    $ 249.95
                  </h3>
                  <p class="mb-0">67%</p>
                </div>
                <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mt-6 dark:bg-themedark-bodybg">
                  <div class="bg-theme-bg-1 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]" role="progressbar"
                    style="width: 75%"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-span-12 xl:col-span-4 md:col-span-6">
            <div class="card">
              <div class="card-header !pb-0 !border-b-0">
                <h5>Monthly Sales</h5>
              </div>
              <div class="card-body">
                <div class="flex items-center justify-between gap-3 flex-wrap">
                  <h3 class="font-light flex items-center mb-0">
                    <i class="feather icon-arrow-down text-danger-500 text-[30px] mr-1.5"></i>
                    $ 2.942.32
                  </h3>
                  <p class="mb-0">36%</p>
                </div>
                <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mt-6 dark:bg-themedark-bodybg">
                  <div class="bg-theme-bg-2 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]" role="progressbar"
                    style="width: 35%"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-span-12 xl:col-span-4">
            <div class="card">
              <div class="card-header !pb-0 !border-b-0">
                <h5>Yearly Sales</h5>
              </div>
              <div class="card-body">
                <div class="flex items-center justify-between gap-3 flex-wrap">
                  <h3 class="font-light flex items-center mb-0">
                    <i class="feather icon-arrow-up text-success-500 text-[30px] mr-1.5"></i>
                    $8.638.32
                  </h3>
                  <p class="mb-0">80%</p>
                </div>
                <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mt-6 dark:bg-themedark-bodybg">
                  <div class="bg-theme-bg-1 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]" role="progressbar"
                    style="width: 80%"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-span-12 xl:col-span-4">
            <div class="card card-social">
              <div class="card-body border-b border-theme-border dark:border-themedark-border">
                <div class="flex items-center justify-center">
                  <div class="shrink-0">
                    <i class="fab fa-facebook-f text-primary-500 text-[36px]"></i>
                  </div>
                  <div class="grow ltr:text-right rtl:text-left">
                    <h3 class="mb-2">12,281</h3>
                    <h5 class="text-success-500 mb-0">+7.2% <span class="text-muted">Total Likes</span></h5>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="grid grid-cols-12 gap-x-6">
                  <div class="col-span-6">
                    <h6 class="text-center mb-2.5"><span class="text-muted m-r-5">Target:</span>35,098</h6>
                    <div class="w-full bg-theme-bodybg rounded-lg h-1.5 dark:bg-themedark-bodybg">
                      <div class="bg-theme-bg-1 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]" role="progressbar" style="width: 60%"></div>
                    </div>
                  </div>
                  <div class="col-span-6">
                    <h6 class="text-center mb-2.5"><span class="text-muted m-r-5">Duration:</span>350</h6>
                    <div class="w-full bg-theme-bodybg rounded-lg h-1.5 dark:bg-themedark-bodybg">
                      <div class="bg-theme-bg-2 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]" role="progressbar" style="width: 45%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-span-12 xl:col-span-4 md:col-span-6">
            <div class="card card-social">
              <div class="card-body border-b border-theme-border dark:border-themedark-border">
                <div class="flex items-center justify-center">
                  <div class="shrink-0">
                    <i class="fab fa-twitter text-primary-500 text-[36px]"></i>
                  </div>
                  <div class="grow ltr:text-right rtl:text-left">
                    <h3 class="mb-2">11,200</h3>
                    <h5 class="text-purple-500 mb-0">+6.2% <span class="text-muted">Total Likes</span></h5>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="grid grid-cols-12 gap-x-6">
                  <div class="col-span-6">
                    <h6 class="text-center mb-2.5"><span class="text-muted m-r-5">Target:</span>34,185</h6>
                    <div class="w-full bg-theme-bodybg rounded-lg h-1.5 dark:bg-themedark-bodybg">
                      <div class="bg-success-500 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]" role="progressbar" style="width: 40%"></div>
                    </div>
                  </div>
                  <div class="col-span-6">
                    <h6 class="text-center mb-2.5"><span class="text-muted m-r-5">Duration:</span>800</h6>
                    <div class="w-full bg-theme-bodybg rounded-lg h-1.5 dark:bg-themedark-bodybg">
                      <div class="bg-primary-500 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]" role="progressbar" style="width: 70%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-span-12 xl:col-span-4 md:col-span-6">
            <div class="card card-social">
              <div class="card-body border-b border-theme-border dark:border-themedark-border">
                <div class="flex items-center justify-center">
                  <div class="shrink-0">
                    <i class="fab fa-google-plus-g text-danger-500 text-[36px]"></i>
                  </div>
                  <div class="grow ltr:text-right rtl:text-left">
                    <h3 class="mb-2">10,500</h3>
                    <h5 class="text-purple-500 mb-0">+5.9% <span class="text-muted">Total Likes</span></h5>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="grid grid-cols-12 gap-x-6">
                  <div class="col-span-6">
                    <h6 class="text-center mb-2.5"><span class="text-muted m-r-5">Target:</span>25,998</h6>
                    <div class="w-full bg-theme-bodybg rounded-lg h-1.5 dark:bg-themedark-bodybg">
                      <div class="bg-theme-bg-1 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]" role="progressbar" style="width: 80%"></div>
                    </div>
                  </div>
                  <div class="col-span-6">
                    <h6 class="text-center mb-2.5"><span class="text-muted m-r-5">Duration:</span>900</h6>
                    <div class="w-full bg-theme-bodybg rounded-lg h-1.5 dark:bg-themedark-bodybg">
                      <div class="bg-theme-bg-2 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]" role="progressbar" style="width: 50%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
