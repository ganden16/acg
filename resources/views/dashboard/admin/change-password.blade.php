@extends('layout.dashboard')

@section('title', 'Dashboard ProfileAdmin | ACG')

@section('li-breadcrumb')
<li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
<li class="breadcrumb-item" aria-current="page">Change Password</li>
@endsection

@section('content')
<form id="change-password-form" action="{{ route('dashboard.change-password.update') }}" method="POST">
    @csrf
    @method('PUT')
  <div class="space-y-12">
    <div class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-3">
      <div>
        <h2 class="text-base/7 font-semibold text-gray-900">Change Your Password</h2>
      </div>

      <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
       <div class="sm:col-span-4">
            <label for="current_password" class="block text-sm/6 font-medium text-gray-900">Current Password</label>
            <div class="mt-2">
                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="password" name="current_password" id="current_password" class="block min-w-0 grow py-2 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-base" placeholder="your current password">
                </div>
                @error('current_password')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
       <div class="sm:col-span-4">
            <label for="new_password" class="block text-sm/6 font-medium text-gray-900">New Password</label>
            <div class="mt-2">
                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="password" name="new_password" id="new_password" class="block min-w-0 grow py-2 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-base" placeholder="set your new password">
                </div>
                @error('new_password')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
       <div class="sm:col-span-4">
            <label for="new_password_confirmation" class="block text-sm/6 font-medium text-gray-900">Confirm Password</label>
            <div class="mt-2">
                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="block min-w-0 grow py-2 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-base" placeholder="confirm your new password">
                </div>
            </div>
        </div>

      </div>
    </div>

    <div class="mt-1 flex items-center justify-end gap-x-4">
        <a href="/dashboard" type="button" class="rounded-md bg-red-600 px-5 py-1 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Cancel</a>
        <a onclick="submitForm()" href="#" type="button" class="rounded-md bg-indigo-600 px-10 py-1 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</a>
    </div>

</form>

@if(session()->has('success'))
<div id="success-modal-change-password" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
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
            <h3 class="text-base font-semibold text-gray-900" id="modal-title">Password Updated</h3>
            <div class="mt-2">
              <p class="text-sm text-gray-500">{{ session('success') }}</p>
            </div>
          </div>
        </div>
        <div class="mt-5 sm:mt-6">
          <a href="#" onclick="closeModal()" type="button" class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">OKE</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endif


@endsection

@section('js')
<script>
    function submitForm() {
        if(confirm('Are you sure want to change your password?')){
            document.getElementById('change-password-form').submit();
        }
    }

    function closeModal() {
        document.getElementById('success-modal-change-password').classList.add('hidden');
        window.location.reload();
    }
</script>
@endsection
