@extends('layout.dashboard')

@section('title', 'Dashboard Blog | ACG')

@section('li-breadcrumb')
<li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
<li class="breadcrumb-item"><a href="/dashboard/blog">Blog</a></li>
<li class="breadcrumb-item" aria-current="page">Index</li>
@endsection

@section('content')
<div class="px-4 sm:px-6 lg:px-8">
  <div class="sm:flex sm:items-center">
    <div class="sm:flex-auto">
      <h1 class="text-base font-semibold text-gray-900">Blogs</h1>
      <p class="mt-2 text-sm text-gray-700">A list of all the blogs</p>
    </div>
    <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
      <a href="{{ route('dashboard.blog.create') }}" type="button" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add New Blog</a>
    </div>
  </div>
  <div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle">
        <table class="min-w-full divide-y divide-gray-300">
          <thead>
            <tr>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">#</th>
              <th scope="col" class="py-3.5 pr-3 pl-4 text-left text-sm font-semibold text-gray-900 sm:pl-6 lg:pl-8">Title</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Slug</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Image</th>
              <th scope="col" class="relative py-3.5 pr-4 pl-3 sm:pr-6 lg:pr-8">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 bg-white">
            @forelse ($blogs as $blog)
            <tr>
              <td class="py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap text-gray-900 sm:pl-6 lg:pl-8">
                {{ $loop->iteration }}
              </td>
              <td class="py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap text-gray-900 sm:pl-6 lg:pl-8">
                {{ $blog->title }}
              </td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500">
                {{ $blog->slug }}
              </td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500">
                 @if($blog->image)
                    <img src="{{ $blog->image }}" alt="{{ $blog->slug }}" class="h-10 w-10 object-cover">
                 @else
                    No Image
                 @endif
              </td>
              <td class="relative py-4 pr-4 pl-3 text-right text-sm font-medium whitespace-nowrap sm:pr-6 lg:pr-8">
                <a href="{{ route('dashboard.blog.edit', $blog->slug) }}" class="text-indigo-600 hover:text-indigo-900 mr-3 underline">Edit</a>
                <form action="{{ route('dashboard.blog.destroy', $blog->slug) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-900 underline">Delete</button>
                </form>
              </td>
            </tr>
            @empty
             <tr>
                <td colspan="4" class="px-3 py-4 text-sm text-gray-500 text-center">No blogs found.</td>
             </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@if(session()->has('success-delete'))
<div id="success-modal-delete" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
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
            <h3 class="text-base font-semibold text-gray-900" id="modal-title">Blog Deleted</h3>
            <div class="mt-2">
              <p class="text-sm text-gray-500">{{ session('success-delete') }}</p>
            </div>
          </div>
        </div>
        <div class="mt-5 sm:mt-6">
          <a href="#" onclick="closeModalDeleted()" type="button" class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">OKE</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endif

@if(session()->has('success-update'))
<div id="success-modal-update" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
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
            <h3 class="text-base font-semibold text-gray-900" id="modal-title">Blog Updated</h3>
            <div class="mt-2">
              <p class="text-sm text-gray-500">{{ session('success-update') }}</p>
            </div>
          </div>
        </div>
        <div class="mt-5 sm:mt-6">
          <a href="#" onclick="closeModalUpdated()" type="button" class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">OKE</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endif

@endsection

@section('js')
<script>
     function closeModalDeleted() {
        document.getElementById('success-modal-delete').classList.add('hidden');
        window.location.reload();
    }
     function closeModalUpdated() {
        document.getElementById('success-modal-update').classList.add('hidden');
        window.location.reload();
    }
</script>
@endsection
