@extends('layouts.app')

@section('content')

    <div class="bg-gray-100 mx-auto max-w-6xl bg-white py-20 px-12 lg:px-24 shadow-xl mt-6 mb-24">
        @if (session('status'))

            <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                <p class="font-bold">Informacion</p>
                <p> {{ session('status') }}</p>
            </div>

        @endif
        <p class="text-center font-bold text-black mb-8 mt-3">Mos hezitoni na knotaktoni</p>
        <form method="post" action="/contact-store">
            @csrf
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="emri">
                            Emri
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
                               id="emri" name='emri' type="text" placeholder="Emri">
                        <div>

                        </div>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="mbiemri">
                            Mbiemri
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
                               id="mbiemri" name="mbiemri" type="text" placeholder="Mbiemri">
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="emaili">
                          Email-i
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
                               id="emaili" name='emaili' type="email" placeholder="Email-i">
                        <div>

                        </div>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="phone">
                            Numri Telefonit
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
                               id="phone" name="phone" type="text" placeholder="Numri i Telefonit">
                    </div>
                </div>


                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-full px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="mesazhi">
                            Emaili
                        </label>
                        <textarea class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
                                  id="mesazhi" name="mesazhi"  placeholder="mesazhi" cols="10" rows="5"></textarea>
                    </div>
                </div>
                <div class="-mx-3 md:flex mt-2">
                    <div class="md:w-full px-3">
                        <button
                            class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
                            Dergo
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
