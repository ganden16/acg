@extends('layout.dashboard')

@section('title', 'Dashboard Create Blog | ACG')

@section('li-breadcrumb')
<li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
<li class="breadcrumb-item"><a href="/dashboard/blog">Blog</a></li>
<li class="breadcrumb-item" aria-current="page">create</li>
@endsection

@section('content')
<form id="create-blog-form" action="{{ route('dashboard.blog.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="space-y-12">
    <div class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-3">
      <div>
        <h2 class="text-base/7 font-semibold text-gray-900">Blog ID</h2>
        <p class="mt-1 text-sm/6 text-gray-600">Create your indonesian blog</p>
      </div>

      <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
       <div class="sm:col-span-4">
            <label for="title_id" class="block text-sm/6 font-medium text-gray-900">Title</label>
            <div class="mt-2">
                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" name="title_id" id="title_id" class="block min-w-0 grow py-2 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-base" placeholder="title id (required)" value="{{ old('title_id') }}">
                </div>
                @error('title_id')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="sm:col-span-4">
            <label for="subtitle_id" class="block text-sm/6 font-medium text-gray-900">Subtitle</label>
            <div class="mt-2">
                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" name="subtitle_id" id="subtitle_id" class="block min-w-0 grow py-2 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-base" placeholder="subtitle id (optional)" value="{{ old('subtitle_id') }}">
                </div>
                    @error('subtitle_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
            </div>
        </div>

        <div class="col-span-full">
          <label for="content_id" class="block text-sm/6 font-medium text-gray-900">Content</label>
          <div class="mt-2">
            <textarea name="content_id" id="content_id" rows="10" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 placeholder:pt-20" placeholder="content id (required)">{{ old('content_id') }}</textarea>
            @error('content_id')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <div class="col-span-full">
            <label for="cover-photo" class="block text-sm/6 font-medium text-gray-900">Image</label>
            <div class="mt-2 flex justify-center rounded-lg border-2 border-dashed border-gray-900 px-6 py-10">
                <div class="text-center">
                    <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                    </svg>
                    <div class="mt-4 flex text-sm/6 text-gray-600">
                        <label for="fileImage" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                            <span>Upload a image</span>
                            <input id="fileImage" name="fileImage" type="file" class="sr-only">
                        </label>
                    </div>
                    <p class="text-xs/5 text-gray-600 mt-2" id="file-name"></p>
                    <p class="text-xs/5 text-gray-600 mt-2" id="file-size"></p>
                </div>
            </div>
            @error('fileImage')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-3">
      <div>
        <h2 class="text-base/7 font-semibold text-gray-900">Blog EN</h2>
        <p class="mt-1 text-sm/6 text-gray-600">Create your english blog</p>
      </div>

      <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
        <div class="sm:col-span-4">
            <label for="title_en" class="block text-sm/6 font-medium text-gray-900">Title</label>
            <div class="mt-2">
                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" name="title_en" id="title_en" class="block min-w-0 grow py-2 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-base" placeholder="title en (required)" value="{{ old('title_en') }}">
                </div>
                @error('title_en')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="sm:col-span-4">
            <label for="subtitle_en" class="block text-sm/6 font-medium text-gray-900">Subtitle</label>
            <div class="mt-2">
                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" name="subtitle_en" id="subtitle_en" class="block min-w-0 grow py-2 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-base" placeholder="subtitle en (optional)" value="{{ old('subtitle_en') }}">
                </div>
                @error('subtitle_en')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="col-span-full">
          <label for="content_en" class="block text-sm/6 font-medium text-gray-900">Content</label>
          <div class="mt-2">
            <textarea name="content_en" id="content_en" rows="10" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 placeholder:pt-20" placeholder="content en (required)">{{ old('content_en') }}</textarea>
            @error('content_en')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>
        </div>

      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="#" type="submit" onclick="submitForm()" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</a>
    </div>

</form>

@if(session()->has('success'))
<div id="success-modal" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
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
            <h3 class="text-base font-semibold text-gray-900" id="modal-title">Blog Created</h3>
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
    const fileInput = document.getElementById('fileImage');
    const fileNameElement = document.getElementById('file-name');
    const fileSizeElement = document.getElementById('file-size');
    fileInput.addEventListener('change', function () {
        const files = this.files;

        if (files.length > 0) {
            fileNameElement.textContent = `File: ${files[0].name}`;
            const fileSizeInMB = (files[0].size / (1024 * 1024)).toFixed(2);
            fileSizeElement.textContent = `Size: ${fileSizeInMB} MB`;
        } else {
            fileNameElement.textContent = '';
            fileSizeElement.textContent = '';
        }
    });

    function closeModal() {
        document.getElementById('success-modal').classList.add('hidden');
        window.location.reload();
    }

    function submitForm() {
        document.getElementById('create-blog-form').submit();
    }
</script>
@endsection
