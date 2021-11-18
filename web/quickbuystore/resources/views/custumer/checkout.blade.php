@extends('layout.app')
@section('titolo', 'Dashboard.')

@section('content')

    <!-- breadcrum -->
    <div class="container flex items-center gap-3 py-4">
        <a href="index.html" class="text-base text-primary">
            <i class="fas fa-home"></i>
        </a>
        <span class="text-sm text-gray-400"><i class="fas fa-chevron-right"></i></span>
        <p class="font-medium text-gray-600 uppercase">checkout</p>
    </div>
    <!-- breadcrum end -->

    <!-- checkout wrapper -->
    <div class="container items-start grid-cols-12 gap-6 pt-4 pb-16 lg:grid">
        <!-- checkout form -->
        <div class="px-4 py-4 border border-gray-200 rounded lg:col-span-8">
            <form action="">
                <h3 class="mb-4 text-lg font-medium capitalize">
                    checkout
                </h3>

                <div class="space-y-4">
                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label class="block mb-2 text-gray-600">
                                First Name <span class="text-primary">*</span>
                            </label>
                            <input type="text" class="input-box">
                        </div>
                        <div>
                            <label class="block mb-2 text-gray-600">
                                Last Name <span class="text-primary">*</span>
                            </label>
                            <input type="text" class="input-box">
                        </div>
                    </div>
                    <div>
                        <label class="block mb-2 text-gray-600">
                            Company Name
                        </label>
                        <input type="text" class="input-box">
                    </div>
                    <div>
                        <label class="block mb-2 text-gray-600">
                            County/Region <span class="text-primary">*</span>
                        </label>
                        <input type="text" class="input-box">
                    </div>
                    <div>
                        <label class="block mb-2 text-gray-600">
                            Street Address <span class="text-primary">*</span>
                        </label>
                        <input type="text" class="input-box">
                    </div>
                    <div>
                        <label class="block mb-2 text-gray-600">
                            Town/City <span class="text-primary">*</span>
                        </label>
                        <input type="text" class="input-box">
                    </div>
                    <div>
                        <label class="block mb-2 text-gray-600">
                            Zip Code <span class="text-primary">*</span>
                        </label>
                        <input type="text" class="input-box">
                    </div>
                    <div>
                        <label class="block mb-2 text-gray-600">
                            Phone Number <span class="text-primary">*</span>
                        </label>
                        <input type="text" class="input-box">
                    </div>
                    <div>
                        <label class="block mb-2 text-gray-600">
                            Email Address <span class="text-primary">*</span>
                        </label>
                        <input type="text" class="input-box">
                    </div>
                </div>
            </form>
        </div>
        <!-- checkout form end -->

        <!-- order summary -->
        <div class="px-4 py-4 mt-6 border border-gray-200 rounded lg:col-span-4 lg:mt-0">
            <h4 class="mb-4 text-lg font-medium text-gray-800 uppercase">ORDER SUMMARY</h4>
            <div class="space-y-2">
                <div class="flex justify-between" v-for="n in 3" :key="n">
                    <div>
                        <h5 class="font-medium text-gray-800">Italian Shape Sofa</h5>
                        <p class="text-sm text-gray-600">Size: M</p>
                    </div>
                    <p class="text-gray-600">x3</p>
                    <p class="font-medium text-gray-800">$320</p>
                </div>
            </div>
            <div class="flex justify-between mt-1 border-b border-gray-200">
                <h4 class="my-3 font-medium text-gray-800 uppercase">Subtotal</h4>
                <h4 class="my-3 font-medium text-gray-800 uppercase">$320</h4>
            </div>
            <div class="flex justify-between border-b border-gray-200">
                <h4 class="my-3 font-medium text-gray-800 uppercase">Shipping</h4>
                <h4 class="my-3 font-medium text-gray-800 uppercase">Free</h4>
            </div>
            <div class="flex justify-between">
                <h4 class="my-3 font-semibold text-gray-800 uppercase">Total</h4>
                <h4 class="my-3 font-semibold text-gray-800 uppercase">$320</h4>
            </div>

            <!-- agreeement  -->
            <div class="flex items-center mt-2 mb-4">
                <input type="checkbox" id="agreement" class="w-3 h-3 rounded-sm cursor-pointer text-primary focus:ring-0">
                <label for="agreement" class="ml-3 text-sm text-gray-600 cursor-pointer">
                    Agree to our
                    <a href="#" class="text-primary">terms & conditions</a>
                </label>
            </div>

            <!-- checkout -->
            <a href="order-complete.html"
                class="block w-full px-4 py-3 text-sm font-medium text-center text-white uppercase transition border rounded-md bg-primary border-primary hover:bg-transparent hover:text-primary">
                Place order
            </a>
            <!-- checkout end -->
        </div>
        <!-- order summary end -->
    </div>
    <!-- checkout wrapper end -->
@endsection
