<div class="wrapper">
   <div class="container">
         <h1 class="title !text-left mt-6 mb-10">{{$page->seo->heading ?? $page->name()}}</h2>
         <div class="grid s:grid-cols-2 lg:grid-cols-3 gap-y-10 gap-x-8">
            @foreach ($news as $item)
            <div>
               <x-link href="{{$item->route()}}" title="{{$item->name}}" class="block space-y-7 group">
                  <div class="aspect-w-3 aspect-h-2 relative overflow-hidden">
                     <div class="text-base font-bold leading-none text-main-content size-10 md:size-14 flex flex-col justify-center items-center absolute top-4 left-2.5 z-10 bg-main">
                        <x-date :date="$item->created_at" format="d M" />
                     </div>
                     <x-image src="{{$item->image}}" alt="{{$item->name}}" width="100" height="100" class="size-full object-contain transition-transform duration-300 group-hover:scale-110" />
                  </div>
                  <div class="space-y-3">
                     <span class="text-xl xs:text-2xl s:text-xl md:text-2xl lg:text-xl xl:text-2xl font-bold text-base-content h-[2.8em] block line-clamp-2 transition-colors group-hover:text-accent">{{$item->name}}</span>
                     <p class="text-base xs:text-lg s:text-base md:text-lg lg:text-base xl:text-lg font-light text-base-content line-clamp-3">
                        {{$item->seo->summary ?? ''}}
                     </p>
                  </div>
               </x-link>
            </div>
            @endforeach
         </div>
         {{$news->links('template::pagination')}}
   </div>
</div>
