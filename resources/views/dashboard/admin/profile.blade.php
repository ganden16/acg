@extends('layout.dashboard')

@section('title', 'Dashboard ProfileAdmin | ACG')

@section('link-meta')

@endsection

@section('content')
<form action="{{ route('dashboard.profile.update') }}" method="POST">
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
                    <input type="text" name="current_password" id="current_password" class="block min-w-0 grow py-2 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-base" placeholder="your current password">
                </div>
            </div>
        </div>
       <div class="sm:col-span-4">
            <label for="new_password" class="block text-sm/6 font-medium text-gray-900">New Password</label>
            <div class="mt-2">
                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" name="new_password" id="new_password" class="block min-w-0 grow py-2 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-base" placeholder="set your new password">
                </div>
            </div>
        </div>
       <div class="sm:col-span-4">
            <label for="new_password_confirmation" class="block text-sm/6 font-medium text-gray-900">Confirm Password</label>
            <div class="mt-2">
                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" name="new_password_confirmation" id="new_password_confirmation" class="block min-w-0 grow py-2 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-base" placeholder="confirm your new password">
                </div>
            </div>
        </div>

      </div>
    </div>

    <div class="mt-1 flex items-center justify-end gap-x-4">
        <a href="/dashboard" type="button" class="rounded-md bg-red-600 px-5 py-1 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Cancel</a>
        <a type="submit" class="rounded-md bg-indigo-600 px-10 py-1 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</a>
    </div>

</form>


@endsection
