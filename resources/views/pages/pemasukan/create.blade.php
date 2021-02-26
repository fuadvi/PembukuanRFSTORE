@extends('layouts.dasboard')

@section('content')
    <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
        <!-- component -->
    <div class="bg-gray-200 min-h-screen pt-2 font-mono my-16">
        <div class="container mx-auto">
            <div class="inputs w-full max-w-2xl p-6 mx-auto">
                <h2 class="text-2xl text-gray-900">Pemasukan</h2>
                <form class="mt-6 border-t border-gray-400 pt-4" action="{{ route('pemasukan.store') }}" method="POST">
                    @csrf
                    <div class='flex flex-wrap -mx-3 mb-6'>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>Nama Produk</label>
                            <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' name="nama_produk" id='grid-text-1' type='text' placeholder='masukan nama produk'  required>
                        </div>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>Harga</label>
                            <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' name="price" id='grid-text-1' type='number' placeholder='Masukan Harga'  required>
                        </div>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>Jumlah</label>
                            <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' name="quantity" type='number' placeholder='Masukan Jumlah'  required>
                        </div>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>Tanggal Pemasukan</label>
                            <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' name="purchase_date" type='date'  required>
                        </div>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>Tanggal Pemasukan</label>
                            <select name="status" class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>
                                <option value="PRIBADI">Status</option>
                                <option value="KAS">Uang Kas</option>
                            </select>
                        </div>

                        <div class="personal w-full border-t pt-2">
                        <div class="flex justify-end">
                            <button class="appearance-none bg-gray-200 text-white px-2 py-1 shadow-sm border bg-blue-700 rounded-md mr-3 transform hover:scale-110 motion-reduce:transform-none ..." type="submit">save pemasukan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
