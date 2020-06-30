<div x-show="tab === 'tab3'">
    <form method="post" action="{{ route('cbrm.storePinjaman') }}" enctype="multipart/form-data">
        @csrf

        <div class="my-8 px-4">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                            Keterangan Mengenai Pembiayaan Yang Dipohon
                        </h3>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="purchase_price"
                                            class="block text-sm font-medium leading-5 text-gray-700">Jumlah Pembiayaan Yang Diperlukan <span class="text-red-700">*</span></label>
                                        <select id="purchase_price" name="purchase_price"
                                            class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                                <option value="">Sila Pilih Jumlah Pembiayaan</option>
                                                <option value="1000" 
                                                    @if(isset(auth()->user()->pinjaman->purchase_price))
                                                        @if(auth()->user()->pinjaman->purchase_price == '1000') 
                                                            selected 
                                                        @else {{ old('purchase_price') == '1000' ? 'selected':'' }} @endif
                                                        @else{{ old('purchase_price') == '1000' ? 'selected':'' }}@endif
                                                >RM 1,000.00</option>
                                                <option value="2000" 
                                                    @if(isset(auth()->user()->pinjaman->purchase_price))
                                                        @if(auth()->user()->pinjaman->purchase_price == '2000') 
                                                            selected 
                                                            @else {{ old('purchase_price') == '2000' ? 'selected':'' }} @endif
                                                            @else{{ old('purchase_price') == '2000' ? 'selected':'' }}@endif
                                                >RM 2,000.00</option>
                                                <option value="3000" 
                                                    @if(isset(auth()->user()->pinjaman->purchase_price))
                                                        @if(auth()->user()->pinjaman->purchase_price == '3000') 
                                                            selected 
                                                            @else {{ old('purchase_price') == '3000' ? 'selected':'' }} @endif
                                                            @else{{ old('purchase_price') == '3000' ? 'selected':'' }}@endif
                                                >RM 3,000.00</option>
                                                <option value="4000" 
                                                    @if(isset(auth()->user()->pinjaman->purchase_price))
                                                        @if(auth()->user()->pinjaman->purchase_price == '4000') 
                                                            selected 
                                                            @else {{ old('purchase_price') == '4000' ? 'selected':'' }} @endif
                                                            @else{{ old('purchase_price') == '4000' ? 'selected':'' }}@endif
                                                >RM 4,000.00</option>
                                                <option value="5000" 
                                                    @if(isset(auth()->user()->pinjaman->purchase_price))
                                                        @if(auth()->user()->pinjaman->purchase_price == '5000') 
                                                            selected 
                                                            @else {{ old('purchase_price') == '5000' ? 'selected':'' }} @endif
                                                            @else{{ old('purchase_price') == '5000' ? 'selected':'' }}@endif
                                                >RM 5,000.00</option>
                                                <option value="6000" 
                                                    @if(isset(auth()->user()->pinjaman->purchase_price))
                                                        @if(auth()->user()->pinjaman->purchase_price == '6000') 
                                                            selected 
                                                            @else {{ old('purchase_price') == '6000' ? 'selected':'' }} @endif
                                                            @else{{ old('purchase_price') == '6000' ? 'selected':'' }}@endif
                                                >RM 6,000.00</option>
                                                <option value="7000" 
                                                    @if(isset(auth()->user()->pinjaman->purchase_price))
                                                        @if(auth()->user()->pinjaman->purchase_price == '7000') 
                                                            selected 
                                                            @else {{ old('purchase_price') == '7000' ? 'selected':'' }} @endif
                                                            @else{{ old('purchase_price') == '7000' ? 'selected':'' }}@endif
                                                >RM 7,000.00</option>
                                                <option value="8000" 
                                                    @if(isset(auth()->user()->pinjaman->purchase_price))
                                                        @if(auth()->user()->pinjaman->purchase_price == '8000') 
                                                            selected 
                                                            @else {{ old('purchase_price') == '8000' ? 'selected':'' }} @endif
                                                            @else{{ old('purchase_price') == '8000' ? 'selected':'' }}@endif
                                                >RM 8,000.00</option>
                                                <option value="9000" 
                                                    @if(isset(auth()->user()->pinjaman->purchase_price))
                                                        @if(auth()->user()->pinjaman->purchase_price == '9000') 
                                                            selected 
                                                            @else {{ old('purchase_price') == '9000' ? 'selected':'' }} @endif
                                                            @else{{ old('purchase_price') == '9000' ? 'selected':'' }}@endif
                                                >RM 9,000.00</option>
                                                <option value="10000" 
                                                    @if(isset(auth()->user()->pinjaman->purchase_price))
                                                        @if(auth()->user()->pinjaman->purchase_price == '10000') 
                                                            selected 
                                                            @else {{ old('purchase_price') == '10000' ? 'selected':'' }} @endif
                                                            @else{{ old('purchase_price') == '10000' ? 'selected':'' }}@endif
                                                >RM 10,000.00</option>
                                        </select>
                                        @error('purchase_price')
                                            <p class="text-red-500 text-xs italic mt-4">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="duration"
                                            class="block text-sm font-medium leading-5 text-gray-700">Tempoh Pembayaran <span class="text-red-700">*</span></label>
                                        <select id="duration" name="duration"
                                            class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                                <option value="">Sila Pilih Tempoh Pembayaran</option>
                                                <option value="12" 
                                                    @if(isset(auth()->user()->pinjaman->duration))
                                                        @if(auth()->user()->pinjaman->duration == '12') 
                                                            selected 
                                                            @else {{ old('duration') == '12' ? 'selected':'' }} @endif
                                                            @else{{ old('duration') == '12' ? 'selected':'' }}@endif
                                                >12 Bulan</option>
                                                <option value="24" 
                                                    @if(isset(auth()->user()->pinjaman->duration))
                                                        @if(auth()->user()->pinjaman->duration == '24') 
                                                            selected 
                                                            @else {{ old('duration') == '24' ? 'selected':'' }} @endif
                                                            @else{{ old('duration') == '24' ? 'selected':'' }}@endif
                                                >24 Bulan</option>
                                                <option value="36" 
                                                    @if(isset(auth()->user()->pinjaman->duration))
                                                        @if(auth()->user()->pinjaman->duration == '36') 
                                                            selected 
                                                            @else {{ old('duration') == '36' ? 'selected':'' }} @endif
                                                            @else{{ old('duration') == '36' ? 'selected':'' }}@endif
                                                >36 Bulan</option>
                                        </select>
                                        @error('duration')
                                            <p class="text-red-500 text-xs italic mt-4">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden sm:block">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="mt-10 sm:mt-0 my-8 px-4">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Perujuk</h3>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6 mt-6">
                                <div class="col-span-6 sm:col-span-6">
                                    <label for="reference_name"
                                        class="block text-sm font-medium leading-5 text-gray-700">Nama <span class="text-red-700">*</span></label>
                                    <input id="reference_name" name="reference_name"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                        value="{{ isset(auth()->user()->pinjaman->reference_name) ? auth()->user()->pinjaman->reference_name : old('reference_name') }}" />
                                    @error('reference_name')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                </div>
                            </div>

                            <div class="grid grid-cols-6 gap-6 mt-6">
                                <div class="col-span-6">
                                    <label for="reference_address1"
                                        class="block text-sm font-medium leading-5 text-gray-700">Alamat <span class="text-red-700">*</span></label>
                                    <input id="reference_address1" name="reference_address1"
                                        value="{{ isset(auth()->user()->pinjaman->reference_address1) ? auth()->user()->pinjaman->reference_address1 : old('reference_address1') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('reference_address1')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror


                                    <input id="reference_address2" name="reference_address2"
                                        value="{{ isset(auth()->user()->pinjaman->reference_address2) ? auth()->user()->pinjaman->reference_address2 : old('reference_address2') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('reference_address2')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="reference_postcode"
                                        class="block text-sm font-medium leading-5 text-gray-700">Poskod <span class="text-red-700">*</span></label>
                                    <input id="reference_postcode" name="reference_postcode" minlength="5" maxlength="5"
                                        value="{{ isset(auth()->user()->pinjaman->reference_postcode) ? auth()->user()->pinjaman->reference_postcode : old('reference_postcode') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('reference_postcode')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="reference_city"
                                        class="block text-sm font-medium leading-5 text-gray-700">Bandar <span class="text-red-700">*</span></label>
                                    <input id="reference_city" name="reference_city"
                                        value="{{ isset(auth()->user()->pinjaman->reference_city) ? auth()->user()->pinjaman->reference_city : old('reference_city') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('reference_city')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="reference_state"
                                        class="block text-sm font-medium leading-5 text-gray-700">Negeri <span class="text-red-700">*</span></label>
                                    <select id="reference_state" name="reference_state"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="">Sila Pilih Negeri</option>
                                        @foreach($negerix as $negerix5)
                                        <option value="{{ $negerix5->kodnegeri }}" 
                                            @if(isset(auth()->user()->pinjaman->reference_state))
                                                @if(auth()->user()->pinjaman->reference_state == $negerix5->kodnegeri)
                                                    selected
                                                @else
                                                    {{ old('reference_state') == ($negerix5->kodnegeri) ? 'selected':'' }}
                                                @endif 
                                            @else
                                                {{ old('reference_state') == ($negerix5->kodnegeri) ? 'selected':'' }}
                                            @endif
                                            >{{ $negerix5->namanegeri }}</option>
                                        @endforeach
                                    </select>
                                    @error('reference_state')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="reference_relation"
                                        class="block text-sm font-medium leading-5 text-gray-700">Hubungan Dengan Pemohon <span class="text-red-700">*</span></label>
                                    <input id="reference_relation" name="reference_relation"
                                        value="{{ isset(auth()->user()->pinjaman->reference_relation) ? auth()->user()->pinjaman->reference_relation : old('reference_relation') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('reference_relation')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="reference_phone"
                                        class="block text-sm font-medium leading-5 text-gray-700">No Telefon - cth (0123456789) <span class="text-red-700">*</span></label>
                                    <input id="reference_phone" name="reference_phone"
                                        value="{{ isset(auth()->user()->pinjaman->reference_phone) ? auth()->user()->pinjaman->reference_phone : old('reference_phone') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('reference_phone')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden sm:block">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="mt-10 sm:mt-0 my-8 px-4">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Dokumen Sokongan</h3>
						<p class="mt-1 text-sm leading-5 text-gray-500">
							Panduan menukar gambar jenis "JPG" kepada PDF
						</p>
						<span class="inline-flex rounded-md shadow-sm">
							<a href="{{ asset('img') }}/cbrm/pdf_convert.pdf" target="_blank" type="button"
								class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
								<svg class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
									<path fill-rule="evenodd"
										d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
										clip-rule="evenodd"></path>
								</svg>
								Klik sini
							</a>
						</span>
						<p class="mt-3 text-sm leading-5 text-gray-500">
							Link Website
						</p>
						<span class="inline-flex rounded-md shadow-sm">
							<a href="https://jpg2pdf.com/" target="_blank" type="button"
								class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
								<svg class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
									<path d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.26zm8.814-.569a1 1 0 00-1.415-1.414l-.707.707a1 1 0 101.415 1.415l.707-.708zm-7.071 7.072l.707-.707A1 1 0 003.465 9.12l-.708.707a1 1 0 001.415 1.415zm3.2-5.171a1 1 0 00-1.3 1.3l4 10a1 1 0 001.823.075l1.38-2.759 3.018 3.02a1 1 0 001.414-1.415l-3.019-3.02 2.76-1.379a1 1 0 00-.076-1.822l-10-4z" clip-rule="evenodd"></path>
								</svg>
								Klik sini
							</a>
						</span>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="mt-1">
                                <label for="profile_pic" class="block text-sm leading-5 font-medium text-gray-700">
                                    Kad Pengenalan <span class="text-red-700">*</span>
                                </label>
                                <div id="ic-div"
                                    class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 @error('doc_ic_no') border-red-500 @enderror border-dashed rounded-md cursor-pointer"
                                    style="display: block;">

                                    @if(isset(auth()->user()->pinjaman->document_ic_no))
                                    <div class="flex" x-data="{ open: false }">
                                        <div class="justify-center">
                                            <span class="inline-flex rounded-md shadow-sm">
                                                <a href="{{ asset('storage/'.auth()->user()->ic_no. '/' . auth()->user()->pinjaman->document_ic_no) }}"
                                                    target="_blank" type="button"
                                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                                                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                                                        <path fill-rule="evenodd"
                                                            d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    Muat Turun
                                                </a>
                                            </span>
                                            <span class="inline-flex rounded-md shadow-sm">
                                                <button type="submit"
                                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition ease-in-out duration-150"
                                                    @click.prevent="open = true">
                                                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    Padam Fail
                                                </button>
                                            </span>
                                        </div>

                                        {{-- delete gambar modal --}}
                                        <div class="fixed bottom-0 inset-x-0 px-4 pb-4 sm:inset-0 sm:flex sm:items-center sm:justify-center"
                                            x-show="open">
                                            <div class="fixed inset-0 transition-opacity" 
                                                x-show="open"
                                                x-transition:enter="ease-out duration-300""
                                                x-transition:enter-start=" opacity-0"
                                                x-transition:enter-end="opacity-100"
                                                x-transition:leave="ease-in duration-200"
                                                x-transition:leave-start="opacity-100"
                                                x-transition:leave-end="opacity-0">
                                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                            </div>

                                            <div class="bg-white rounded-lg px-4 pt-5 pb-4 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full sm:p-6"
                                                x-show="open" 
                                                x-transition:enter="ease-out duration-300""
                                                x-transition:enter-start=" opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                x-transition:leave="ease-in duration-200"
                                                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                                                <div class="sm:flex sm:items-start">
                                                    <div
                                                        class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                        <svg class="h-6 w-6 text-red-600" stroke="currentColor"
                                                            fill="none" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                        </svg>
                                                    </div>
                                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                                                            Padam Fail Kad Pengenalan!
                                                        </h3>
                                                        <div class="mt-2">
                                                            <p class="text-sm leading-5 text-gray-500">
                                                                Adakah anda pasti untuk memadam fail kad pengenalan ini?
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                                                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                                        <button type="button"
                                                            class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                                            onclick="event.preventDefault();deleteKP({{auth()->user()->pinjaman->id}})">
                                                            Padam!
                                                        </button>
                                                    </span>
                                                    <span
                                                        class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                        <button type="button"
                                                            class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                                            @click="open = false">
                                                            Batal
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end delete gambar modal --}}
                                    </div>
                                    @else
                                    <div class="text-center">
                                        <input type="file" name="doc_ic_no" id="ic" class="hidden" />
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                            viewBox="0 0 48 48">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <p class="mt-1 text-sm text-gray-600">
                                            <a
                                                class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition duration-150 ease-in-out">
                                                Muat naik
                                            </a>
                                        </p>
                                        <p class="mt-1 text-xs text-gray-500">
                                            Salinan Kad Pengenalan Pemohon dan Pasangan (jika berkenaan) - Di Kedua-dua Bahagian (Depan dan Belakang)
                                        </p>
                                        <p class="mt-1 text-xs text-gray-500">
                                            PDF sahaja
                                        </p>
                                        @error('doc_ic_no')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            Ruangan Dokument Sokongan - Kad Pengenalan diperlukan
                                        </p>
                                        @enderror
                                    </div>
                                    @endif
                                </div>
                                {{-- test --}}
                                <div id="ic-uploaded-div"
                                    class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer"
                                    style="display:none">
                                    <span class="mt-3 inline-flex rounded-md shadow-sm">
                                        <a id="ic-buttonDel" type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition ease-in-out duration-150"
                                            onclick="icDelFile()">
                                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd">
                                            </svg>
                                            Padam Fail
                                        </a>
                                    </span>
                                    <span id="ic-uploaded">Tiada fail diupload.</span>
                                </div>
                                {{-- end test --}}
                            </div>

                            <div class="mt-6">
                                <label for="profile_pic" class="block text-sm leading-5 font-medium text-gray-700">
                                    SSM <span class="text-red-700">*</span>
                                </label>
                                <div id="ssm-div"
                                    class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 @error('doc_ssm') border-red-500 @enderror border-dashed rounded-md cursor-pointer"
                                    style="display: block;">
                                    @if(isset(auth()->user()->pinjaman->document_ssm))
                                    <div class="flex" x-data="{ open: false }">
                                        <div class="justify-center">
                                            <span class="inline-flex rounded-md shadow-sm">
                                                <a href="{{ asset('storage/'.auth()->user()->ic_no. '/' . auth()->user()->pinjaman->document_ssm) }}"
                                                    target="_blank" type="button"
                                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                                                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                                                        <path fill-rule="evenodd"
                                                            d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    Muat Turun
                                                </a>
                                            </span>
                                            <span class="inline-flex rounded-md shadow-sm">
                                                <button type="submit"
                                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition ease-in-out duration-150"
                                                    @click.prevent="open = true">
                                                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    Padam Fail
                                                </button>
                                            </span>
                                        </div>

                                        {{-- delete gambar modal --}}
                                        <div class="fixed bottom-0 inset-x-0 px-4 pb-4 sm:inset-0 sm:flex sm:items-center sm:justify-center"
                                            x-show="open">
                                            <div class="fixed inset-0 transition-opacity" 
                                                x-show="open"
                                                x-transition:enter="ease-out duration-300""
                                                x-transition:enter-start=" opacity-0"
                                                x-transition:enter-end="opacity-100"
                                                x-transition:leave="ease-in duration-200"
                                                x-transition:leave-start="opacity-100"
                                                x-transition:leave-end="opacity-0">
                                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                            </div>

                                            <div class="bg-white rounded-lg px-4 pt-5 pb-4 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full sm:p-6"
                                                x-show="open" 
                                                x-transition:enter="ease-out duration-300""
                                                x-transition:enter-start=" opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                x-transition:leave="ease-in duration-200"
                                                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                                                <div class="sm:flex sm:items-start">
                                                    <div
                                                        class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                        <svg class="h-6 w-6 text-red-600" stroke="currentColor"
                                                            fill="none" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                        </svg>
                                                    </div>
                                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                                                            Padam Fail SSM!
                                                        </h3>
                                                        <div class="mt-2">
                                                            <p class="text-sm leading-5 text-gray-500">
                                                                Adakah anda pasti untuk memadam fail SSM ini?
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                                                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                                        <button type="button"
                                                            class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                                            onclick="event.preventDefault();deleteSSM({{auth()->user()->pinjaman->id}})">
                                                            Padam!
                                                        </button>
                                                    </span>
                                                    <span
                                                        class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                        <button type="button"
                                                            class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                                            @click="open = false">
                                                            Batal
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end delete gambar modal --}}
                                    </div>
                                    @else
                                    <div class="text-center">
                                        <input type="file" name="doc_ssm" id="ssm" class="hidden" />
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                            viewBox="0 0 48 48">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <p class="mt-1 text-sm text-gray-600">
                                            <a
                                                class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition duration-150 ease-in-out">
                                                Muat naik
                                            </a>
                                        </p>
                                        <p class="mt-1 text-xs text-gray-500">
                                            Salinan lesen/permit daripada Pihak Berkuasa Tempatan (PBT)/Daftar Perniagaan (SSM) yang sah/Dokumen yang mengesahkan pemohon menjalankan perniagaan
                                        </p>
                                        <p class="mt-1 text-xs text-gray-500">
                                            Bagi SSM : Sila Kemukakan Borang E, Maklumat Pemilikan & Maklumat Perniagaan
                                        </p>
                                        <p class="mt-1 text-xs text-gray-500">
                                            PDF sahaja
                                        </p>
                                        @error('doc_ssm')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            Ruangan Dokument Sokongan - SSM diperlukan
                                        </p>
                                        @enderror
                                    </div>
                                    @endif
                                </div>
                                {{-- test --}}
                                <div id="ssm-uploaded-div"
                                    class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer"
                                    style="display:none">
                                    <span class="mt-3 inline-flex rounded-md shadow-sm">
                                        <a id="ssm-buttonDel" type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition ease-in-out duration-150"
                                            onclick="ssmDelFile()">
                                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd">
                                            </svg>
                                            Padam Fail
                                        </a>
                                    </span>
                                    <span id="ssm-uploaded">Tiada fail diupload.</span>
                                </div>
                                {{-- end test --}}
                            </div>

                            <div class="mt-6">
                                <label for="profile_pic" class="block text-sm leading-5 font-medium text-gray-700">
                                    Penyata Bank <span class="text-red-700">*</span>
                                </label>
                                <div id="bank-div"
                                    class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 @error('doc_bank') border-red-500 @enderror border-dashed rounded-md cursor-pointer"
                                    style="display: block;">
                                    @if(isset(auth()->user()->pinjaman->document_bank_statements))
                                    <div class="flex" x-data="{ open: false }">
                                        <div class="justify-center">
                                            <span class="inline-flex rounded-md shadow-sm">
                                                <a href="{{ asset('storage/'.auth()->user()->ic_no. '/' . auth()->user()->pinjaman->document_bank_statements) }}"
                                                    target="_blank" type="button"
                                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                                                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                                                        <path fill-rule="evenodd"
                                                            d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    Muat Turun
                                                </a>
                                            </span>
                                            <span class="inline-flex rounded-md shadow-sm">
                                                <button type="submit"
                                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition ease-in-out duration-150"
                                                    @click.prevent="open = true">
                                                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    Padam Fail
                                                </button>
                                            </span>
                                        </div>

                                        {{-- delete gambar modal --}}
                                        <div class="fixed bottom-0 inset-x-0 px-4 pb-4 sm:inset-0 sm:flex sm:items-center sm:justify-center"
                                            x-show="open">
                                            <div class="fixed inset-0 transition-opacity" 
                                                x-show="open"
                                                x-transition:enter="ease-out duration-300""
                                                x-transition:enter-start=" opacity-0"
                                                x-transition:enter-end="opacity-100"
                                                x-transition:leave="ease-in duration-200"
                                                x-transition:leave-start="opacity-100"
                                                x-transition:leave-end="opacity-0">
                                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                            </div>

                                            <div class="bg-white rounded-lg px-4 pt-5 pb-4 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full sm:p-6"
                                                x-show="open" x-transition:enter="ease-out duration-300"
                                                x-transition:enter-start=" opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                x-transition:leave="ease-in duration-200"
                                                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                                                <div class="sm:flex sm:items-start">
                                                    <div
                                                        class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                        <svg class="h-6 w-6 text-red-600" stroke="currentColor"
                                                            fill="none" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                        </svg>
                                                    </div>
                                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                                                            Padam Fail Penyata Bank!
                                                        </h3>
                                                        <div class="mt-2">
                                                            <p class="text-sm leading-5 text-gray-500">
                                                                Adakah anda pasti untuk memadam fail Penyata Bank ini?
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                                                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                                        <button type="button"
                                                            class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                                            onclick="event.preventDefault();deleteBank({{auth()->user()->pinjaman->id}})">
                                                            Padam!
                                                        </button>
                                                    </span>
                                                    <span
                                                        class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                        <button type="button"
                                                            class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                                            @click="open = false">
                                                            Batal
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end delete gambar modal --}}
                                    </div>
                                    @else
                                    <div class="text-center">
                                        <input type="file" name="doc_bank" id="bank" class="hidden" />
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                            viewBox="0 0 48 48">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <p class="mt-1 text-sm text-gray-600">
                                            <a
                                                class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition duration-150 ease-in-out">
                                                Muat naik
                                            </a>
                                        </p>
                                        <p class="mt-1 text-xs text-gray-500">
                                            Salinan Penyata Bank / Buku Simpanan Muka Hadapan serta Transaksi Terakhir (1 Bulan Terkini)
                                        </p>
                                        <p class="mt-1 text-xs text-gray-500">
                                            PDF sahaja
                                        </p>
                                        @error('doc_bank')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            Ruangan Dokumen Sokongan - Penyata Bank diperlukan
                                        </p>
                                        @enderror
                                    </div>
                                    @endif
                                </div>
                                {{-- test --}}
                                <div id="bank-uploaded-div"
                                    class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer"
                                    style="display:none">
                                    <span class="mt-3 inline-flex rounded-md shadow-sm">
                                        <a id="bank-buttonDel" type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition ease-in-out duration-150"
                                            onclick="bankDelFile()">
                                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd">
                                            </svg>
                                            Padam Fail
                                        </a>
                                    </span>
                                    <span id="bank-uploaded">Tiada fail diupload.</span>
                                </div>
                                {{-- end test --}}
                            </div>

                            <div class="mt-6">
                                <label for="profile_pic" class="block text-sm leading-5 font-medium text-gray-700">
                                    Bil Utiliti <span class="text-red-700">*</span>
                                </label>
                                <div id="bil-div"
                                    class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 @error('doc_bil') border-red-500 @enderror border-dashed rounded-md cursor-pointer"
                                    style="display: block;">
                                    @if(isset(auth()->user()->pinjaman->document_utility))
                                    <div class="flex" x-data="{ open: false }">
                                        <div class="justify-center">
                                            <span class="inline-flex rounded-md shadow-sm">
                                                <a href="{{ asset('storage/'.auth()->user()->ic_no. '/' . auth()->user()->pinjaman->document_utility) }}"
                                                    target="_blank" type="button"
                                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                                                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                                                        <path fill-rule="evenodd"
                                                            d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    Muat Turun
                                                </a>
                                            </span>
                                            <span class="inline-flex rounded-md shadow-sm">
                                                <button type="submit"
                                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition ease-in-out duration-150"
                                                    @click.prevent="open = true">
                                                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    Padam Fail
                                                </button>
                                            </span>
                                        </div>

                                        {{-- delete gambar modal --}}
                                        <div class="fixed bottom-0 inset-x-0 px-4 pb-4 sm:inset-0 sm:flex sm:items-center sm:justify-center"
                                            x-show="open">
                                            <div class="fixed inset-0 transition-opacity" x-show="open"
                                                x-transition:enter="ease-out duration-300""
                                                x-transition:enter-start=" opacity-0"
                                                x-transition:enter-end="opacity-100"
                                                x-transition:leave="ease-in duration-200"
                                                x-transition:leave-start="opacity-100"
                                                x-transition:leave-end="opacity-0">
                                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                            </div>

                                            <div class="bg-white rounded-lg px-4 pt-5 pb-4 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full sm:p-6"
                                                x-show="open" x-transition:enter="ease-out duration-300""
                                                x-transition:enter-start=" opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                x-transition:leave="ease-in duration-200"
                                                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                                                <div class="sm:flex sm:items-start">
                                                    <div
                                                        class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                        <svg class="h-6 w-6 text-red-600" stroke="currentColor"
                                                            fill="none" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                        </svg>
                                                    </div>
                                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                                                            Padam Fail Bil Utiliti!
                                                        </h3>
                                                        <div class="mt-2">
                                                            <p class="text-sm leading-5 text-gray-500">
                                                                Adakah anda pasti untuk memadam fail Bil Utiliti ini?
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                                                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                                        <button type="button"
                                                            class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                                            onclick="event.preventDefault();deleteBil({{auth()->user()->pinjaman->id}})">
                                                            Padam!
                                                        </button>
                                                    </span>
                                                    <span
                                                        class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                        <button type="button"
                                                            class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                                            @click="open = false">
                                                            Batal
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end delete gambar modal --}}
                                    </div>
                                    @else
                                    <div class="text-center">
                                        <input type="file" name="doc_bil" id="bil" class="hidden" />
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                            viewBox="0 0 48 48">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <p class="mt-1 text-sm text-gray-600">
                                            <a
                                                class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition duration-150 ease-in-out">
                                                Muat naik
                                            </a>
                                        </p>
                                        <p class="mt-1 text-xs text-gray-500">
                                            Salinan Salah Satu Bil Utiliti (Elektrik / Air / Telefon) Rumah atau Premis Perniagaan
                                        </p>
                                        <p class="mt-1 text-xs text-gray-500">
                                            PDF sahaja
                                        </p>
                                        @error('doc_bil')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            Ruangan Dokumen Sokongan - Bil Utiliti diperlukan
                                        </p>
                                        @enderror
                                    </div>
                                    @endif
                                </div>
                                {{-- test --}}
                                <div id="bil-uploaded-div"
                                    class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer"
                                    style="display:none">
                                    <span class="mt-3 inline-flex rounded-md shadow-sm">
                                        <a id="bil-buttonDel" type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition ease-in-out duration-150"
                                            onclick="bilDelFile()">
                                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd">
                                            </svg>
                                            Padam Fail
                                        </a>
                                    </span>
                                    <span id="bil-uploaded">Tiada fail diupload.</span>
                                </div>
                                {{-- end test --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex justify-center">
            <span class="inline-flex rounded-md shadow-sm">
                <button type="submit"
                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition ease-in-out duration-150">
                    {{--add this to disable button: opacity-50 cursor-not-allowed --}}
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Simpan
                </button>
            </span>
        </div>
    </form>
</div>

@push('js')
<script>
    $("#ic-div").click(function (event) {
        if (!$(event.target).is('#ic')) {
            $(this).find("#ic").trigger('click');
        }
    });

    $("input[id='ic']").on('change', function () {
        icreadURL(this);
        iccheckFiles();
    });

    var iccheckFiles = function () {
        if (document.getElementById("ic").files.length > 0) {
            $('#ic-uploaded-div').css('display', 'block');
            $('#ic-div').css('display', 'none');
        } else {
            $('#ic-uploaded-div').css('display', 'none');
            $('#ic-div').css('display', 'block');
        }
    }

    var icreadURL = function (input) {
        var fullPath = document.getElementById('ic').value;
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
            document.getElementById("ic-uploaded").textContent = filename;
        }
    }

    function icDelFile() {
        $("#ic").val('');
        $('#ic-uploaded-div').css('display', 'none');
        $('#ic-div').css('display', 'block');
    }

    function deleteKP(id) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'POST',
            url: "{{ url('cbrm-deleteKP')}}" + '/' + id,
            data: {
                '_token': CSRF_TOKEN,
                '_method': 'DELETE'
            },
            success: function () {
                window.location = "{{ url('cbrm')}}";
            }
        });
    }

</script>
<script>
    $("#ssm-div").click(function (event) {
        if (!$(event.target).is('#ssm')) {
            $(this).find("#ssm").trigger('click');
        }
    });

    $("input[id='ssm']").on('change', function () {
        ssmreadURL(this);
        ssmcheckFiles();
    });

    var ssmcheckFiles = function () {
        if (document.getElementById("ssm").files.length > 0) {
            $('#ssm-uploaded-div').css('display', 'block');
            $('#ssm-div').css('display', 'none');
        } else {
            $('#ssm-uploaded-div').css('display', 'none');
            $('#ssm-div').css('display', 'block');
        }
    }

    var ssmreadURL = function (input) {
        var fullPath = document.getElementById('ssm').value;
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
            document.getElementById("ssm-uploaded").textContent = filename;
        }
    }

    function ssmDelFile() {
        $("#ssm").val('');
        $('#ssm-uploaded-div').css('display', 'none');
        $('#ssm-div').css('display', 'block');
    }

    function deleteSSM(id) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'POST',
            url: "{{ url('cbrm-deleteSSM')}}" + '/' + id,
            data: {
                '_token': CSRF_TOKEN,
                '_method': 'DELETE'
            },
            success: function () {
                window.location = "{{ url('cbrm')}}";
            }
        });
    }

</script>
<script>
    $("#bank-div").click(function (event) {
        if (!$(event.target).is('#bank')) {
            $(this).find("#bank").trigger('click');
        }
    });

    $("input[id='bank']").on('change', function () {
        bankreadURL(this);
        bankcheckFiles();
    });

    var bankcheckFiles = function () {
        if (document.getElementById("bank").files.length > 0) {
            $('#bank-uploaded-div').css('display', 'block');
            $('#bank-div').css('display', 'none');
        } else {
            $('#bank-uploaded-div').css('display', 'none');
            $('#bank-div').css('display', 'block');
        }
    }

    var bankreadURL = function (input) {
        var fullPath = document.getElementById('bank').value;
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
            document.getElementById("bank-uploaded").textContent = filename;
        }
    }

    function bankDelFile() {
        $("#bank").val('');
        $('#bank-uploaded-div').css('display', 'none');
        $('#bank-div').css('display', 'block');
    }

    function deleteBank(id) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'POST',
            url: "{{ url('cbrm-deleteBank')}}" + '/' + id,
            data: {
                '_token': CSRF_TOKEN,
                '_method': 'DELETE'
            },
            success: function () {
                window.location = "{{ url('cbrm')}}";
            }
        });
    }

</script>
<script>
    $("#bil-div").click(function (event) {
        if (!$(event.target).is('#bil')) {
            $(this).find("#bil").trigger('click');
        }
    });

    $("input[id='bil']").on('change', function () {
        bilreadURL(this);
        bilcheckFiles();
    });

    var bilcheckFiles = function () {
        if (document.getElementById("bil").files.length > 0) {
            $('#bil-uploaded-div').css('display', 'block');
            $('#bil-div').css('display', 'none');
        } else {
            $('#bil-uploaded-div').css('display', 'none');
            $('#bil-div').css('display', 'block');
        }
    }

    var bilreadURL = function (input) {
        var fullPath = document.getElementById('bil').value;
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
            document.getElementById("bil-uploaded").textContent = filename;
        }
    }

    function bilDelFile() {
        $("#bil").val('');
        $('#bil-uploaded-div').css('display', 'none');
        $('#bil-div').css('display', 'block');
    }

    function deleteBil(id) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'POST',
            url: "{{ url('cbrm-deleteBil')}}" + '/' + id,
            data: {
                '_token': CSRF_TOKEN,
                '_method': 'DELETE'
            },
            success: function () {
                window.location = "{{ url('cbrm')}}";
            }
        });
    }

</script>
<script>
    $("#borang-div").click(function (event) {
        if (!$(event.target).is('#borang')) {
            $(this).find("#borang").trigger('click');
        }
    });

    $("input[id='borang']").on('change', function () {
        borangreadURL(this);
        borangcheckFiles();
    });

    var borangcheckFiles = function () {
        if (document.getElementById("borang").files.length > 0) {
            $('#borang-uploaded-div').css('display', 'block');
            $('#borang-div').css('display', 'none');
        } else {
            $('#borang-uploaded-div').css('display', 'none');
            $('#borang-div').css('display', 'block');
        }
    }

    var borangreadURL = function (input) {
        var fullPath = document.getElementById('borang').value;
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
            document.getElementById("borang-uploaded").textContent = filename;
        }
    }

    function borangDelFile() {
        $("#borang").val('');
        $('#borang-uploaded-div').css('display', 'none');
        $('#borang-div').css('display', 'block');
    }

    function deleteBorang(id) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'POST',
            url: "{{ url('cbrm-deleteBorang')}}" + '/' + id,
            data: {
                '_token': CSRF_TOKEN,
                '_method': 'DELETE'
            },
            success: function () {
                window.location = "{{ url('cbrm')}}";
            }
        });
    }

</script>

<script>
    $(document).ready(function () {
        @error('purchase_price')
        $("#purchase_price").addClass("border-red-500");
        @enderror

        @error('duration')
        $("#duration").addClass("border-red-500");
        @enderror

        @error('reference_name')
        $("#reference_name").addClass("border-red-500");
        @enderror

        @error('reference_address1')
        $("#reference_address1").addClass("border-red-500");
        @enderror

        @error('reference_address2')
        $("#reference_address2").addClass("border-red-500");
        @enderror

        @error('reference_postcode')
        $("#reference_postcode").addClass("border-red-500");
        @enderror

        @error('reference_city')
        $("#reference_city").addClass("border-red-500");
        @enderror

        @error('reference_state')
        $("#reference_state").addClass("border-red-500");
        @enderror

        @error('reference_relation')
        $("#reference_relation").addClass("border-red-500");
        @enderror

        @error('reference_phone')
        $("#reference_phone").addClass("border-red-500");
        @enderror
    });

</script>
@endpush
