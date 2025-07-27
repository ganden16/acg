@extends('layout.dashboard')

@section('title', 'Dashboard Create Blog | ACG')

@section('link-meta')

@endsection

@section('content')
<form>
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
                    <input type="text" name="title_id" id="title_id" class="block min-w-0 grow py-2 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-base" placeholder="title id (required)">
                </div>
            </div>
        </div>

        <div class="sm:col-span-4">
            <label for="subtitle_id" class="block text-sm/6 font-medium text-gray-900">Subtitle</label>
            <div class="mt-2">
                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" name="subtitle_id" id="subtitle_id" class="block min-w-0 grow py-2 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-base" placeholder="subtitle id (optional)">
                </div>
            </div>
        </div>

        <div class="col-span-full">
          <label for="content_id" class="block text-sm/6 font-medium text-gray-900">Content</label>
          <div class="mt-2">
            <textarea name="content_id" id="content_id" rows="10" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 placeholder:pt-20" placeholder="content id (required)"></textarea>
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
                        <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                            <span>Upload a image</span>
                            <input id="file-upload" name="file-upload" type="file" class="sr-only">
                        </label>
                    </div>
                    <p class="text-xs/5 text-gray-600 mt-2" id="file-name"></p>
                    <p class="text-xs/5 text-gray-600 mt-2" id="file-size"></p>
                </div>
            </div>
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
                    <input type="text" name="title_en" id="title_en" class="block min-w-0 grow py-2 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-base" placeholder="title en (required)">
                </div>
            </div>
        </div>
        <div class="sm:col-span-4">
            <label for="subtitle_en" class="block text-sm/6 font-medium text-gray-900">Subtitle</label>
            <div class="mt-2">
                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" name="subtitle_en" id="subtitle_en" class="block min-w-0 grow py-2 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-base" placeholder="subtitle en (optional)">
                </div>
            </div>
        </div>

        <div class="col-span-full">
          <label for="content_en" class="block text-sm/6 font-medium text-gray-900">Content</label>
          <div class="mt-2">
            <textarea name="content_en" id="content_en" rows="10" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 placeholder:pt-20" placeholder="content en (required)"></textarea>
          </div>
        </div>

      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="#" type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</a>
    </div>

</form>
@section('js')
<script>
    const fileInput = document.getElementById('file-upload');
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
</script>
@endsection


@endsection
