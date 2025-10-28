{{-- Applications Table --}}
<div class="overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 table-auto">
        <thead class="text-sm text-gray-700 bg-gray-50">
            <tr>
                <th scope="col" class="px-4 py-3 font-normal">Info Pelamar</th>
                <th scope="col" class="px-4 py-3 font-normal">Contact</th>
                <th scope="col" class="px-4 py-3 font-normal">Riwayat Pendidikan</th>
                <th scope="col" class="px-4 py-3 font-normal">Tanggal Form Dikirim</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($applications as $application)
                <tr class="border-b dark:border-gray-700">
                    <th scope="row" class="px-4 py-3 font-medium text-slate-800 whitespace-nowrap dark:text-white">
                        {{ $application->nama_lengkap }}<br>
                        <span class="text-sm font-normal text-gray-500">{{ $application->jenis_kelamin }} •
                            {{ $application->status_kawin }}</span>
                        <br>
                        <div class="inline-flex space-x-2 items-center text-xs font-normal mt-2">
                            {{-- view button --}}
                            <a href="{{ route('dashboard.job-applications.show', $application->id) }}"
                                class="text-primary-400 hover:text-primary-600" target="_blank">Lihat</a>

                            {{-- delete button --}}
                            <button type="button"
                                onclick="confirmDelete('{{ route('dashboard.job-applications.destroy', $application->id) }}')"
                                class="text-primary-400 hover:text-red-600">Hapus</button>
                        </div>
                    </th>

                    <td class="px-4 py-3">
                        Email: {{ $application->email }}<br>
                        Phone: {{ $application->no_hp_whatsapp }}
                    </td>
                    <td class="px-4 py-3">
                        SMA: {{ $application->sma_nama }}<br>
                        @if ($application->s1_nama_univ)
                            S1: {{ $application->s1_nama_univ }}
                        @endif
                    </td>
                    <td class="px-4 py-3">
                        {{ $application->created_at->format('d M Y') }}<br>
                        <span class="text-sm text-gray-500">{{ $application->created_at->format('H:i') }}</span>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center py-6 text-gray-400">No job applications found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{-- Pagination --}}
@if ($applications instanceof \Illuminate\Pagination\LengthAwarePaginator && $applications->hasPages())
    <div class="p-4">
        {{ $applications->links() }}
    </div>
@endif
