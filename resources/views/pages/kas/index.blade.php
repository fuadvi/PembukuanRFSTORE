@extends('layouts.dasboard')

@section('content')
    <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
        <!-- component -->
        <div class="-my-5 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
            <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">ID</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Nama Produk</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Jumlah Uang Kas</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Tanggal Update uang masuk</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @forelse ($items as $item)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="flex items-center">
                                    <div>
                                        <div class="text-sm leading-5 text-gray-800">{{ $item->id }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="text-sm leading-5 text-blue-900">{{ $item->pemasukan->nama_produk }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{ $item->uang_kas }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{ $item->tanggal_masuk }}</td>
                        </tr>
                        @empty
                        <td class="text-center mt-10 pt-10 text-red-400" colspan="6">Belom Ada Pengeluaran Dana</td>
                        @endforelse
                    </tbody>
                </table>
                <div class="sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans">
                    <div>
                        <p class="text-sm leading-5 text-blue-700">
                            Showing
                            <span class="font-medium">1</span>
                            to
                            <span class="font-medium">200</span>
                            of
                            <span class="font-medium">2000</span>
                            results
                        </p>
                    </div>
                    <div>
                        <nav class="relative z-0 inline-flex shadow-sm">
                            <div v-if="pagination.current_page < pagination.last_page">
                                {{ $items->links() }}
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
