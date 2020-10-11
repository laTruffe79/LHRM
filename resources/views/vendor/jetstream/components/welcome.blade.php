<div class="p-6 sm:px-20 bg-white border-b border-gray-200">

    <div class="grid-flow-col col-auto h-100 grid grid-rows-1 grid-cols-4 gap-4">
        <div class="col-span-1">
            @svg('undraw/charts', '',['width'=>"200",'height'=>"130"])
        </div>
        <div class="col-span-3 content-start flex items-center">
            <h2 class="font-semibold text-3xl text-gray-700 leading-tight">
                @php
                    use Carbon\Carbon;
                    $locale = Carbon::setLocale(Locale::getDefault());
                    $date = Carbon::now()->translatedFormat('l d F Y');
                @endphp
                {{ ucfirst($date) }}
            </h2>
        </div>
    </div>
    {{--<x-jet-application-logo class="block h-12 w-auto" />--}}

    <div class="mt-8 text-2xl">

    </div>

</div>

