<div class="p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-6">
    @forelse ($awards as $award)
        <div class="bg-white rounded-lg border overflow-hidden group relative">
            <div class="invisible group-hover:visible absolute top-2 right-2 flex space-x-2 z-10">
                <button type="button"
                    onclick="openEditModal('{{ $award->id }}', '{{ $award->name }}', '{{ $award->award_from }}', '{{ $award->received_at->format('Y-m-d') }}', '{{ $award->image_url }}')"
                    class="text-white hover:text-blue-200 bg-blue-500 rounded-full p-1.5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                    </svg>
                </button>
                <form action="{{ route('dashboard.awards.destroy', $award) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-white hover:text-red-200 bg-red-500 rounded-full p-1.5"
                        onclick="return confirm('Are you sure you want to delete this award?')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </form>
            </div>
            <img src="{{ $award->image_url }}" alt="{{ $award->alt }}"
                class="w-full h-48 object-cover cursor-pointer hover:opacity-75 transition-opacity"
                onclick="window.open('{{ $award->image_url }}', '_blank')">
            <div class="p-4 flex flex-col" style="min-height: 120px;">
                <h3 class="font-semibold mb-2">{{ $award->name }}</h3>
                <p class="absolute top-3 text-xs text-white bg-black p-1 -mr-4 text-center rounded px-2 bg-opacity-60">
                    {{ $award->received_at ? $award->received_at->format('F Y') : 'Unknown' }}</p>
                <p class="text-blue-600 text-sm font-semibold mt-auto">{{ $award->award_from }}</p>
            </div>
        </div>
    @empty
        <div class="col-span-full text-center py-8 text-gray-500">
            No awards found.
        </div>
    @endforelse
</div>
