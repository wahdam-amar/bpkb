<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container flex flex-col gap-4 mx-8">
                <label class="text-gray-100 font-semibold tracking-wider text-lg">Statistik</label>
                <div
                    class="bg-white rounded-lg w-full h-auto py-4 flex flex-row justify-between divide-x divide-solid divide-gray-400 shadow-md">
                    <div class="relative flex-1 flex flex-col gap-2 px-4">
                        <label class="text-slate-600 text-base font-semibold tracking-wider">Total Tanggapan</label>
                        <label class="text-slate-600 text-4xl font-bold">{{ $countFeedback }}</label>
                    </div>
                    <div class="relative flex-1 flex flex-col gap-2 px-4">
                        <label class="text-slate-600 text-base font-semibold tracking-wider">Tanggapan Positive</label>
                        <label class="text-green-600 text-4xl font-bold">{{ $positiveFeedback }}</label>
                        <div
                            class="absolute bg-green-400 rounded-md font-semibold text-xs text-gray-100 p-2 right-4 bottom-0">
                            {{ ($positiveFeedback * 100) / $countFeedback }} %
                        </div>
                    </div>
                    <div class="relative flex-1 flex flex-col gap-2 px-4">
                        <label class="text-slate-600 text-base font-semibold tracking-wider">Tanggapan Negatif</label>
                        <label class="text-red-600 text-4xl font-bold">{{ $negativeFeedback }}</label>
                        <div
                            class="absolute bg-red-400 rounded-md font-semibold text-xs text-gray-100 p-2 right-4 bottom-0">
                            {{ ($negativeFeedback * 100) / $countFeedback }} %
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
