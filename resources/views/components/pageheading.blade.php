<div class="sm:flex sm:items-center mt-0 p-8 border border-gray-200 rounded">
     <div class="sm:flex-auto">
          <h1 class="text-2xl font-bold leading-9 text-slate-500">{{ $title }}</h1>
          <p class="mt-2 text-sm font-normal text-gray-500">{{ $subtitle }}</p>
     </div>
     <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
          <a href="{{ $link }}" class="py-2 px-6 rounded font-normal text-sm text-white bg-slate-500 hover:bg-slate-500/90">{{ $linkname }}</a>
     </div>
</div>