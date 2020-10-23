<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl text-gray-200 leading-tight">
            <a class="text-gray-300" href="{{ route('users.index')}}">{{ __('Users management') }}</a> > <span class="font-semibold">{{ __('Planning') }}</span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @push('css')
                    <link href='{{ asset('css/fullcalendar.css')}}' rel='stylesheet' />
                @endpush

                    <div class="grid grid-flow-col">
                        <div class="col-span-1">

                            <div class="text-center mt-5">
                                <h2 class="font-semibold text-xl text-indigo-500 leading-tight">{{ $user->name }}</h2>
                            </div>

                            <div class="flex items-center text-left pl-6 mt-10 ">
                                @svg('zondicons/checkmark', '',['class'=>"h-4 w-4 object-start mr-2
                                text-green-500 fill-current"])
                                <span>
                                    {{__("Days off per year")}} : {{$user->activeWorkingTerms[0]->days_off_per_year}}
                                </span>
                            </div>
                            <div class="flex items-center text-left pl-6 mt-3 ">
                                @svg('zondicons/checkmark', '',['class'=>"h-4 w-4 object-start mr-2
                                text-green-500 fill-current"])
                                <span>
                                    {{__("Additional days off")}} : {{$user->activeWorkingTerms[0]->additional_days_off}}
                                </span>
                            </div>

                        </div>
                        <div id='calendar' class="pr-5 pl-5 pt-6 pb-6 col-span-2 w-auto"></div>
                    </div>

                {{--scripts--}}
                @push('scripts')
                    <script src="{{asset('js/fullcalendar.js')}}"></script>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                let calendarEl = document.getElementById('calendar');
                                let calendar = new FullCalendar.Calendar(calendarEl, {
                                    plugins: [ dayGridPlugin, interactionPlugin, listPlugin ],
                                    locales:allLocales,
                                    locale:'fr',
                                    initialView: 'dayGridMonth',
                                    initialDate: '2020-10-07',
                                    headerToolbar: {
                                        left: 'prev,next today',
                                        center: 'title',
                                        //right: 'dayGridMonth,timeGridWeek,timeGridDay'
                                    },
                                    events: {!! $eventsJson !!}
                                });
                                calendar.render();
                            });
                        </script>
                @endpush
            </div>
        </div>
    </div>
</x-app-layout>
