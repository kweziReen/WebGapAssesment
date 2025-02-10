@extends('layout.app')
@section('content')
    <div class="grid grid-cols-12">
        <div class="flex justify-center col-span-5 h-screen bg-white text-black">
            <div class="bg-white mt-60 max-w-md">
                <h1 class="text-2xl font-bold text-center mb-4">SUBMIT LEAD</h1>
                <form id="lead-form" method="POST" action="{{ route('store-lead') }}">
                    @csrf
                    <div class="m-4">
                        <input type="email" id="email" name="email" placeholder="Email address"
                            class="w-full px-5 py-2 bg-gray-200 border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            required>
                            @error('email')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        <input type="text" id="cellphone" name="cellphone" placeholder="Cellphone number"
                            class="w-full px-5 py-2 mt-4 bg-gray-200 border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            required>
                            @error('cellphone')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                    </div>
                    <button
                        type="submit"
                        class="w-full bg-blue-500 text-white py-2 rounded-full shadow-lg font-medium hover:bg-blue-600
                        transition duration-300">
                        Submit
                    </button>
                </form>
            </div>
        </div>
        <div class="col-span-7 h-screen bg-gray-50 text-black bg-[url(/public/images/background-img.jpg)] bg-cover bg-center">
        </div>
    </div>
@endsection
