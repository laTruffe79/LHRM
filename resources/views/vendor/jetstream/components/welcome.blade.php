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

    <div class="grid grid-cols-2 gap-5 mt-6 flex items-center text-center">
        <div class="bg-gray-300 rounded-lg shadow-xl w-full h-full p-6 text-left">
            <h2 class="text-indigo-700 text-xl">
                {{__("Hello")}} {{ ucfirst($user->name) }}
            </h2>
            <ul class="pt-3">
                <li>{{ __('My current working term') }} :</li>
                <li class="pl-4">{{__('My current employment')}} : {{ $user->employment[0]->name }}</li>
                <li class="pl-4">{{__('Days off per year')}} : {{ $user->activeWorkingTerms[0]->days_off_per_year }}</li>
                <li class="pl-4">{{__('Additional days off')}} : {{ $user->activeWorkingTerms[0]->additional_days_off }}</li>
            </ul>
            <ul class="pt-3 mt-3">
                <li>{{ __('My previous working term') }} :</li>
                @foreach($user->workingTerms as $workingTerm)
                    @if(count($user->workingTerms)==1)
                        {{__('None')}}
                    @endif
                    @if($workingTerm->id !== $user->activeWorkingTerms[0]->id)
                <li class="pl-4">{{__('My current employment')}} : {{ $workingTerm->employment->name }}</li>
                <li class="pl-4">{{__('Days off per year')}} : {{ $workingTerm->days_off_per_year }}</li>
                <li class="pl-4">{{__('Additional days off')}} : {{ $workingTerm->additional_days_off }}</li>
                    @endif
                @endforeach
            </ul>

        </div>
        <div class="bg-gray-300 rounded-lg shadow-xl w-full h-full p-6 text-left">
            <h2 class="text-indigo-700 text-xl">
                {{__("My days off periods")}}
            </h2>
            <ul class="pt-3">
                @if(count($user->periods)>0)
                    @foreach($user->periods as $period)
                        <li class="flex items-center">
                            <button style="background-color: {{$period->periodType->color}}" class="mr-2 text-white text-sm px-2 font-bold rounded-full">
                                {{$period->periodType->name}}
                            </button>
                            {{__('From')}} {{$period->start}} {{__('To')}} {{$period->end}}
                            @if($period->accepted)
                                @svg('zondicons/checkmark-outline', '',['class'=>"h-4 w-4 object-start ml-2 mr-2
                                text-green-700 fill-current"])
                                {{__('Accepted')}}
                            @else
                                @svg('zondicons/close-outline', '',['class'=>"h-4 w-4 object-start ml-2 mr-2
                                text-red-700 fill-current"])
                                {{__('Denied')}}
                            @endif
                        </li>
                    @endforeach
                @else
                    {{__("None")}}
                @endif
            </ul>
        </div>
    </div>

</div>

