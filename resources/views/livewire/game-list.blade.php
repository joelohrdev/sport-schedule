<div class="max-w-3xl mx-auto my-10 space-y-10 px-5">
    @foreach($dates as $date => $game)
        <div>
            <h1 class="w-full font-black text text-white tracking-wider rounded p-3 bg-gradient-to-r from-gray-900 to-gray-600 bg-gradient-to-r">{{ $date }}</h1>
            <ol class="mt-3 text-sm leading-6 lg:col-span-7 xl:col-span-8 space-y-3">
                @foreach($game as $g)
                    <li class="relative space-x-6 xl:static rounded shadow overflow-hidden @if($g->date->format('dmy') === now()->format('dmy')) bg-gradient-to-l from-sky-200 to-white @else bg-white @endif">
                        <div class="grid grid-cols-12">
                            <div class="col-span-1 relative @if($g->player->name === 'Kailee') bg-sky-800 @else bg-orange-500  @endif py-5 px-3">
                                <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white font-bold">{{ $g->date->format('d') }}</span>
                            </div>
                            <div class="col-span-11 p-3">
                                <h1 class="">{{ $g->player->name }} <span class="text-sm @if($g->date->format('dmy') === now()->format('dmy')) @else text-gray-400 @endif">vs. {{ $g->opponent }}</span></h1>
                                <p class="font-bold">{{ $g->time->format('g:i A') }}</p>
                                <p>
                                    @if($g->tournament)
                                        <span class="block">{{ $g->tournament->name }}</span>
                                    @endif
                                    {{ $g->location }}
                                </p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    @endforeach
</div>
