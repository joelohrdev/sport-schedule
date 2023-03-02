<div class="max-w-3xl mx-auto my-20 space-y-10 px-10">
    @foreach($dates as $date => $game)
        <div>
            <h1 class="w-full font-black text-2xl text-white rounded-xl p-5 bg-gradient-to-l from-blue-500 to-blue-600">{{ $date }}</h1>
            <ol class="mt-4 divide-y divide-gray-100 text-sm leading-6 lg:col-span-7 xl:col-span-8 space-y-3">
                @foreach($game as $g)
                    <li class="relative flex space-x-6 py-6 xl:static bg-gray-200 rounded-xl p-5 text-gray-800">
                        <div class="flex-auto">
                            <h3 class="pr-10 font-semibold xl:pr-0">{{ $g->player->name }} vs. {{ $g->opponent }}</h3>
                            <dl class="mt-2 flex flex-col xl:flex-row">
                                <div class="flex items-start space-x-3">
                                    <dt class="mt-0.5">
                                        <span class="sr-only">Date</span>
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd"></path>
                                        </svg>
                                    </dt>
                                    <dd><time datetime="2022-01-12T17:00">{{ $g->date->format('F d, Y') }} at {{ $g->time->format('g:m A') }}</time></dd>
                                </div>
                                <div class="mt-2 flex items-start space-x-3 xl:mt-0 xl:ml-3.5 xl:border-l xl:border-gray-400 xl:border-opacity-50 xl:pl-3.5">
                                    <dt class="mt-0.5">
                                        <span class="sr-only">Location</span>
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd"></path>
                                        </svg>
                                    </dt>
                                    <dd>{{ $g->location }}</dd>
                                </div>
                            </dl>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    @endforeach
</div>
