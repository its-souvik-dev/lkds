@extends('layouts.master')

@section('content')
<div class="bg-white p-6 md:p-8 rounded-lg shadow-lg">

    @session('status')
        {{ session('status') }}
    @endsession

    <!-- Page Header and Add Button -->
    <div class="flex flex-col sm:flex-row items-center justify-between mb-6 border-b pb-4">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 sm:mb-0">
            Candidate List
        </h1>
        <a href="{{ route('candidate.create') }}" class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300 flex items-center justify-center space-x-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
            <span>Add Candidate</span>
        </a>

        <a href="{{ route('candidate.export') }}" 
            class="w-full sm:w-auto bg-green-600 hover:bg-green-700 text-black font-bold py-2 px-4 rounded-lg transition duration-300 flex items-center justify-center space-x-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                    xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" 
                    stroke-linejoin="round" stroke-width="2" 
                    d="M12 4v16m8-8H4"></path></svg>
            <span>Export to Excel</span>
            </a>

    </div>

    <!-- Candidates Table -->
    <div class="overflow-x-auto rounded-lg border">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reg no</th>
                    <th scope="col" class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th scope="col" class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Section</th>
                    <th scope="col" class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Remark</th>
                    <th scope="col" class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($candidates as $candidate)

                    <tr>
                        <td class="py-4 px-6 whitespace-nowrap text-sm font-medium text-gray-900">{{ $candidate->registration }}</td>
                        <td class="py-4 px-6 whitespace-nowrap text-sm text-gray-500">{{ $candidate->name }}</td>
                        <td class="py-4 px-6 whitespace-nowrap text-sm text-gray-500">{{ $candidate->section }}</td>
                        <td class="py-4 px-6 whitespace-nowrap text-sm text-gray-500">{{ $candidate->remarks }}</td>
                        <td class="py-4 px-6 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-4">
                                <a href="{{ route('candidate.edit', $candidate->id) }}" 
                                class="text-indigo-600 hover:text-indigo-900">Edit</a>

                                <form action="{{ route('candidate.destroy', $candidate->id) }}" 
                                    method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
