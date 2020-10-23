<div>
    {{-- Search Input form--}}
    <div class=" text-2xl">
        <div class="w-full">
            <form class="pt-2">
                <input
                    wire:model.debounce.300ms="search"
                    class="text-indigo-500 shadow appearance-none border rounded-lg w-full py-2 px-3 pl-16 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="search"
                    name="search"
                    type="text"
                    placeholder="Search user by name, email, service or company">
                @svg('zondicons/search', '',['class'=>" relative bottom-9 left-5 h-6 w-6 object-start mr-2
                text-indigo-500 fill-current"])
            </form>
        </div>
    </div>
    {{--List of users cards--}}
    <div class="italic text-sm mb-4">{{ count($users)<10 ? count($users).' résultats' : 'Plus de 10 résultats, vous pouvez affiner votre recherche' }}</div>
    <div class="" wire:loading.remove>
        <div class="grid grid-flow-row flex grid-cols-6 gap-5 mt-3">
            @if(!empty($users))
                @foreach($users as $user)

                    <div class="col-span-3 bg-gray-300 p-6 rounded-lg shadow-xl">
                        <div class="grid grid-flow-row flex grid-cols-3">
                            <div class="text-center flex items-center col-span-1">
                                @if(!empty($user->profile_photo_path))
                                    <img class="border-indigo-700 border-2 rounded-full h-28 w-28 flex items-center justify-center ml-5 "
                                         src="{{ asset('storage/'.$user->profile_photo_path ) }}" alt="avatar">
                                @else
                                    @if($user->gender == 'male')
                                        @svg('undraw/male_avatar', '',['class'=>"border-indigo-700 border-2 rounded-full h-28 w-28 object-start  ml-5"])
                                    @elseif($user->gender == 'female')
                                        @svg('undraw/female_avatar', '',['class'=>"border-indigo-700 border-2 rounded-full h-28 w-28 object-start  ml-5"])
                                    @else
                                        @svg('undraw/profile_pic', '',['class'=>"border-indigo-700 border-2 rounded-full h-28 w-28 object-start  ml-5"])
                                    @endif
                                @endif
                            </div>
                            <div class="col-span-2 text-left">
                                <div class="py-4 px-0">
                                    <h1 class="text-2xl font-semibold text-gray-800">{{ $user->name }}</h1>
                                    <ul class="leading-3 text-gray-600">
                                        <div class="w-full bg-indigo-500 h-0.5 mb-3 mt-3"></div>
                                        <li>
                                            <div class="flex items-center">
                                                @svg('zondicons/home', '',['class'=>"h-4 w-4 object-start mr-2
                                                fill-current"])
                                                <span
                                                    class="py-2 text-lg text-gray-700">{{$user->service[0]->company->name}}
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                @svg('zondicons/at-symbol', '',['class'=>"h-4 w-4 object-start mr-2
                                                fill-current"])
                                                <span class="py-2 text-lg text-gray-700">{{$user->email}}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                @svg('zondicons/computer-desktop', '',['class'=>"h-4 w-4 object-start
                                                mr-2 fill-current"])
                                                <span
                                                    class="py-2 text-lg text-gray-700">{{$user->employment[0]->name}}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                @svg('zondicons/location', '',['class'=>"h-4 w-4 object-start mr-2
                                                fill-current"])
                                                <span
                                                    class="py-2 text-lg text-gray-700">{{$user->service[0]->name}}</span>
                                            </div>
                                        </li>
                                        @if($user->is_manager)
                                        <li>
                                            <div class="flex items-center">
                                                @svg('zondicons/star-full', '',['class'=>"text-indigo-700 h-4 w-4 object-start mr-2
                                                fill-current"])
                                                <span class="py-2 text-lg text-indigo-700">Manager</span>
                                            </div>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>

                            {{-- Actions--}}
                            <div class="col-span-3 h-auto ml-5">
                                <div class="w-full bg-indigo-500 h-0.5 mb-3 mt-1"></div>
                                <h4 class="mb-3">Actions :</h4>
                                <div class="inline-flex">
                                    <button
                                        class="mr-2 inline-flex items-center bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 border border-indigo-800 rounded">
                                        @svg('zondicons/edit-pencil', '',['class'=>"h-3 w-3 object-start mr-2 fill-current"])
                                        <span>Edit</span>
                                    </button>
                                    <a href="{{url('/planning/'.$user->id)}}">
                                        <button
                                            class="inline-flex items-center bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 border border-indigo-800 rounded">
                                            @svg('zondicons/calendar', '',['class'=>"h-3 w-3 object-start mr-2 fill-current"])
                                            <span>Planning</span>
                                        </button>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            @else

            @endif
        </div>
    </div>

    {{--spinner loading--}}
    <div class="items-center justify-center mt-12 mx-auto w-48">
        <div wire:loading class="p-10">
            @svg('zondicons/refresh', '',['class'=>"h-48 w-48 mx-auto fill-current text-indigo-500 animate-spin"])
        </div>
    </div>


</div>
