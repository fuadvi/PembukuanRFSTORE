@extends('layouts.dasboard')

@section('content')
    <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
        <div class="max-w-lg max-w-xs bg-blue-800 shadow-2xl rounded-lg mx-auto text-center py-12 mt-4 rounded-xl">
            <h1 class="text-gray-200 text-center font-extrabold -mt-3 text-3xl">Modal Usaha</h1>
            <div class="container py-5 max-w-md mx-auto">
                <form method="POST" action="{{ route('modal.store') }}">
                    @csrf
                    <div class="mb-4">
                        <input placeholder="Jumlah modal"
                            class="shadow appearance-none  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="modal_bulanan" name="modal_bulanan" type="number">
                    </div>
                    <div class="flex items-center justify-between">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
