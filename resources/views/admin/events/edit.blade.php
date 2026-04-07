@extends('layouts.admin')

@section('header', 'Edit Event')

@section('content')
<div class="max-w-2xl bg-white rounded-3xl shadow-lg border border-gray-100 overflow-hidden">
    <form action="{{ route('admin.events.update', $event) }}" method="POST" enctype="multipart/form-data" class="p-8 space-y-6">
        @csrf
        @method('PUT')
        
        <div>
            <label for="title" class="block text-sm font-bold text-gray-700 mb-2">Judul Event</label>
            <input type="text" name="title" id="title" class="w-full rounded-xl border-gray-200 focus:border-potads-blue focus:ring-potads-blue transition" value="{{ old('title', $event->title) }}" required>
            @error('title') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="grid grid-cols-2 gap-6">
            <div>
                <label for="event_date" class="block text-sm font-bold text-gray-700 mb-2">Tanggal & Waktu</label>
                <input type="datetime-local" name="event_date" id="event_date" class="w-full rounded-xl border-gray-200 focus:border-potads-blue focus:ring-potads-blue transition" value="{{ old('event_date', \Carbon\Carbon::parse($event->event_date)->format('Y-m-d\TH:i')) }}" required>
                @error('event_date') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <label for="status" class="block text-sm font-bold text-gray-700 mb-2">Status</label>
                <select name="status" id="status" class="w-full rounded-xl border-gray-200 focus:border-potads-blue focus:ring-potads-blue transition">
                    <option value="upcoming" {{ old('status', $event->status) == 'upcoming' ? 'selected' : '' }}>Mendatang (Upcoming)</option>
                    <option value="ongoing" {{ old('status', $event->status) == 'ongoing' ? 'selected' : '' }}>Berjalan (Ongoing)</option>
                    <option value="completed" {{ old('status', $event->status) == 'completed' ? 'selected' : '' }}>Selesai (Completed)</option>
                </select>
                @error('status') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>
        </div>

        <div>
            <label for="location" class="block text-sm font-bold text-gray-700 mb-2">Lokasi / Link Meet</label>
            <input type="text" name="location" id="location" class="w-full rounded-xl border-gray-200 focus:border-potads-blue focus:ring-potads-blue transition" value="{{ old('location', $event->location) }}">
            @error('location') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="description" class="block text-sm font-bold text-gray-700 mb-2">Deskripsi Event</label>
            <textarea name="description" id="description" rows="4" class="w-full rounded-xl border-gray-200 focus:border-potads-blue focus:ring-potads-blue transition">{{ old('description', $event->description) }}</textarea>
            @error('description') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-bold text-gray-700 mb-2">Gambar Banner Saat Ini</label>
            @if($event->image)
                <img src="{{ asset('storage/' . $event->image) }}" class="w-32 h-20 object-cover rounded-lg mb-4 shadow-sm">
            @endif
            <label for="image" class="block text-sm font-bold text-gray-700 mb-2">Ganti Gambar (Opsional)</label>
            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-xl hover:border-potads-blue transition cursor-pointer">
                <div class="space-y-1 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"><path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>
                    <div class="flex text-sm text-gray-600">
                        <label for="image-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-potads-blue hover:text-potads-blue-dark focus-within:outline-none">
                            <span>Upload a file</span>
                            <input id="image-upload" name="image" type="file" class="sr-only">
                        </label>
                        <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 2MB</p>
                </div>
            </div>
            @error('image') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="flex justify-end gap-4 pt-4">
            <a href="{{ route('admin.events.index') }}" class="px-6 py-2.5 rounded-xl font-bold text-gray-500 hover:bg-gray-100 transition">Batal</a>
            <button type="submit" class="bg-potads-blue text-white px-8 py-2.5 rounded-xl font-bold hover:bg-potads-blue-dark transition shadow-lg">
                Update Event
            </button>
        </div>
    </form>
</div>
@endsection
