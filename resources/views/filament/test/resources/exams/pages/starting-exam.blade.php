<x-filament-panels::page>

    <form wire:submit="submit">

        <ol>
            @foreach ($collections as $pelajaran)
                <li type="A" style="font-weight: 700">
                    {{ $pelajaran['name'] }}
                </li>

                <ol>
                    @foreach ($pelajaran['soals'] as $pertanyaan)
                        <li type="1">
                            {!! $pertanyaan['payload'] !!}

                            <ol>
                                @foreach ($pertanyaan['answers'] as $jawaban)
                                    <li>
                                        <label>
                                            <x-filament::input.radio
                                                wire:model="jawaban.{{ $pertanyaan['id'] }}"
                                                value="{{ $jawaban['id'] }}"
                                            />

                                            <span>
                                                {{ $jawaban['text'] }}
                                            </span>
                                        </label>
                                    </li>
                                @endforeach
                            </ol>
                        </li>

                        <br>
                    @endforeach
                </ol>
            @endforeach
        </ol>

        <div style="margin-top: 20px;">
            <x-filament::button type="submit">
                Selesai Ujian
            </x-filament::button>
        </div>

    </form>

</x-filament-panels::page>