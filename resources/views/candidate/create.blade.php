@extends('layouts.app')

@section('content')
<div class="bg-white p-6 md:p-8 rounded-lg shadow-lg max-w-2xl mx-auto">

    <!-- Page Header -->
    <div class="mb-6 border-b pb-4">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-900">
            Add a New Candidate
        </h1>
        <p class="mt-1 text-sm text-gray-600">Fill in the details below to register a new candidate.</p>
    </div>

    <!-- Add Candidate Form -->
    <form action="{{ route('candidate.store') }}" method="POST">
        {{-- CSRF Token - Important for security in Laravel forms --}}
        @csrf
        <div class="space-y-6">
            <!-- Registration Number -->
            <div>
                <label for="reg_no" class="block text-sm font-medium text-gray-700">Registration Number</label>
                <input type="text" name="registration" id="reg_no" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="e.g., REG004" required>
                @error('registration'){{$message}}@enderror
            </div>

            <!-- Full Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="e.g., Alex Johnson" required>
                @error('name'){{$message}}@enderror
            </div>

            <!-- Section -->
            <div>
                <label for="section" class="block text-sm font-medium text-gray-700">Section</label>
                <select id="section" name="section" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    @foreach($sections as $section)
                        <option value="{{ $section->section }}">
                            {{ $section->section }} ({{ $section->limit }}) - {{ $section->subject }}
                        </option>
                    @endforeach
                </select>
                @error('section'){{$message}}@enderror
            </div>

            <!-- Remark -->
            <div>
                <label for="remark" class="block text-sm font-medium text-gray-700">Remark</label>
                <textarea id="remark" name="remarks" rows="4" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Add any relevant remarks here..."></textarea>
                @error('remarks'){{$message}}@enderror
            </div>
        </div>

        <!-- Form Actions -->
        <div class="mt-8 flex items-center justify-end space-x-4">
             <a href="{{ route('candidate.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded-lg transition duration-300">
                Back to List
            </a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300 flex items-center justify-center space-x-2">
                <span>Save Candidate</span>
            </button>
        </div>
    </form>
</div>
@endsection

