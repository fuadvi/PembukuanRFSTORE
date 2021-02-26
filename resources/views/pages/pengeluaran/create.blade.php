@extends('layouts.dasboard')

@section('content')
    <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
        <!-- component -->
    <div class="bg-gray-200 min-h-screen pt-2 font-mono my-7">
        <div class="container mx-auto">
            <div class="inputs w-full max-w-2xl p-6 mx-auto">
                <h2 class="text-2xl text-gray-900">Pengeluaran</h2>
                <form class="mt-6 border-t border-gray-400 pt-4" action="{{ route('pemasukan.store') }}" method="POST">
                    @csrf
                    <div class='flex flex-wrap -mx-3 mb-6'>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>Nama Produk</label>
                            <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' name="nama_produk" id='grid-text-1' type='text' placeholder='masukan nama produk'  required>
                        </div>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >Keterangan</label>
                            <textarea class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white'  required></textarea>
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
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>Tanggal Pengeluaran</label>
                            <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' name="purchase_date" type='date'  required>
                        </div>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>Status</label>
                            <div class="lex-shrink w-full inline-block relative">
                                <select name="status" class='block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded'>
                                    <option value="PRIBADI">Uang Pribadi</option>
                                    <option value="KAS">Uang Kas</option>
                                </select>
                                <div class="pointer-events-none absolute top-0 mt-3  right-0 flex items-center px-2 text-gray-600">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
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
