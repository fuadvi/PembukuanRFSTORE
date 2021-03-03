        <div class="bg-gray-800 shadow-xl h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48">

            <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
                    <li class="mr-3 flex-1">
                        <a href="{{ route('home') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2{{ request()->is('/') ? ' border-pink-500' : ' border-gray-800' }} hover:border-pink-500">
                            <i class="fas fa-tasks pr-0 md:pr-3{{ request()->is('/') ? ' text-pink-500' : ''}}"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Tasks</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="{{ route('pemasukan') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2{{ request()->is('pemasukan') ? ' border-purple-500' : ' border-gray-800' }} hover:border-purple-500">
                            <i class="fa fa-coins pr-0 md:pr-3{{ request()->is('pemasukan') ? ' text-yellow-500' : ''}}"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Pemasukan</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="{{ route('pengeluaran') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2{{ request()->is('pengeluaran') ? ' border-blue-500' : ' border-gray-800' }} hover:border-blue-500">
                            <i class="fas fa-hand-holding-usd pr-0 md:pr-3{{ request()->is('pengeluaran') ? ' text-blue-500' : ''}}"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Pengeluaran</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="{{ route('kas') }}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2{{ request()->is('kas') ? ' border-red-500' : ' border-gray-800' }} hover:border-red-500">
                            <i class="fa fa-wallet pr-0 md:pr-3{{ request()->is('kas') ? ' text-red-500' : ''}}"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Kas</span>
                        </a>
                    </li>
                </ul>
            </div>


        </div>
