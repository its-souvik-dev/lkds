<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-indigo-600 leading-tight tracking-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-16 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-xl">
                <div class="p-8 text-gray-800">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">
                                {{ __("You're logged in!") }}
                            </h3>
                            <p class="mt-2 text-sm text-gray-600">
                                Welcome to your dashboard! Check out the latest updates or view the drawing competition results.
                            </p>
                        </div>
                        <a href="{{ route('candidate.index') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-black font-semibold rounded-lg shadow-md hover:bg-indigo-700 transition duration-200">
                            {{ __('View Results') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>