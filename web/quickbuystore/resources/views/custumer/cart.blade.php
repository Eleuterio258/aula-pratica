@extends('layout.app')
@section('titolo', 'Dashboard.')

@section('content')
    <!-- breadcrum -->
    <div class="container flex items-center gap-3 py-4">
        <a href="index.html" class="text-base text-primary">
            <i class="fas fa-home"></i>
        </a>
        <span class="text-sm text-gray-400"><i class="fas fa-chevron-right"></i></span>
        <p class="font-medium text-gray-600 uppercase">Shopping Cart</p>
    </div>
    <!-- breadcrum end -->

    <!-- cart wrapper -->
    <div class="container items-start grid-cols-12 gap-6 pt-4 pb-16 lg:grid">
        <!-- product cart -->
        <div class="xl:col-span-9 lg:col-span-8">
            <!-- cart title -->
            <div class="hidden py-2 pl-12 pr-20 mb-4 bg-gray-200 xl:pr-28 md:flex">
                <p class="text-center text-gray-600">Product</p>
                <p class="ml-auto mr-16 text-center text-gray-600 xl:mr-24">Quantity</p>
                <p class="text-center text-gray-600">Total</p>
            </div>
            <!-- cart title end -->

            <!-- shipping carts -->
            <div class="space-y-4">
                <!-- single cart -->
                <div
                    class="flex flex-wrap items-center gap-4 p-4 border border-gray-200 rounded md:justify-between md:gap-6 md:flex-nowrap">
                    <!-- cart image -->
                    <div class="flex-shrink-0 w-32">
                        <img src="images/products/product9.jpg" class="w-full">
                    </div>
                    <!-- cart image end -->
                    <!-- cart content -->
                    <div class="w-full md:w-1/3">
                        <h2 class="mb-3 font-medium text-gray-800 uppercase xl:text-xl textl-lg">
                            Italian L Shape Sofa
                        </h2>
                        <p class="font-semibold text-primary">$45.00</p>
                        <p class="text-gray-500">Size: M</p>
                    </div>
                    <!-- cart content end -->
                    <!-- cart quantity -->
                    <div class="flex text-gray-600 border border-gray-300 divide-x divide-gray-300">
                        <div class="flex items-center justify-center w-8 h-8 text-xl cursor-pointer select-none">-</div>
                        <div class="flex items-center justify-center w-10 h-8">4</div>
                        <div class="flex items-center justify-center w-8 h-8 text-xl cursor-pointer select-none">+</div>
                    </div>
                    <!-- cart quantity end -->
                    <div class="ml-auto md:ml-0">
                        <p class="text-lg font-semibold text-primary">$320.00</p>
                    </div>
                    <div class="text-gray-600 cursor-pointer hover:text-primary">
                        <i class="fas fa-trash"></i>
                    </div>
                </div>
                <!-- single cart end -->
                <!-- single cart -->
                <div
                    class="flex flex-wrap items-center gap-4 p-4 border border-gray-200 rounded md:justify-between md:gap-6 md:flex-nowrap">
                    <!-- cart image -->
                    <div class="flex-shrink-0 w-32">
                        <img src="images/products/product9.jpg" class="w-full">
                    </div>
                    <!-- cart image end -->
                    <!-- cart content -->
                    <div class="w-full md:w-1/3">
                        <h2 class="mb-3 font-medium text-gray-800 uppercase xl:text-xl textl-lg">
                            Italian L Shape Sofa
                        </h2>
                        <p class="font-semibold text-primary">$45.00</p>
                        <p class="text-gray-500">Size: M</p>
                    </div>
                    <!-- cart content end -->
                    <!-- cart quantity -->
                    <div class="flex text-gray-600 border border-gray-300 divide-x divide-gray-300">
                        <div class="flex items-center justify-center w-8 h-8 text-xl cursor-pointer select-none">-</div>
                        <div class="flex items-center justify-center w-10 h-8">4</div>
                        <div class="flex items-center justify-center w-8 h-8 text-xl cursor-pointer select-none">+</div>
                    </div>
                    <!-- cart quantity end -->
                    <div class="ml-auto md:ml-0">
                        <p class="text-lg font-semibold text-primary">$320.00</p>
                    </div>
                    <div class="text-gray-600 cursor-pointer hover:text-primary">
                        <i class="fas fa-trash"></i>
                    </div>
                </div>
                <!-- single cart end -->
            </div>
            <!-- shipping carts end -->
        </div>
        <!-- product cart end -->
        <!-- order summary -->
        <div class="px-4 py-4 mt-6 border border-gray-200 rounded xl:col-span-3 lg:col-span-4 lg:mt-0">
            <h4 class="mb-4 text-lg font-medium text-gray-800 uppercase">ORDER SUMMARY</h4>
            <div class="pb-3 space-y-1 text-gray-600 border-b border-gray-200">
                <div class="flex justify-between font-medium">
                    <p>Subtotal</p>
                    <p>$320</p>
                </div>
                <div class="flex justify-between">
                    <p>Delivery</p>
                    <p>Free</p>
                </div>
                <div class="flex justify-between">
                    <p>Tax</p>
                    <p>Free</p>
                </div>
            </div>
            <div class="flex justify-between my-3 font-semibold text-gray-800 uppercase">
                <h4>Total</h4>
                <h4>$320</h4>
            </div>

            <!-- searchbar -->
            <div class="flex mb-5">
                <input type="text"
                    class="w-full px-3 py-2 pl-4 text-sm border border-r-0 border-primary rounded-l-md focus:ring-primary focus:border-primary"
                    placeholder="Coupon">
                <button type="submit"
                    class="px-5 text-sm font-medium text-white transition border bg-primary border-primary rounded-r-md hover:bg-transparent hover:text-primary font-roboto">
                    Apply
                </button>
            </div>
            <!-- searchbar end -->

            <!-- checkout -->
            <a href="checkout.html"
                class="block w-full px-4 py-3 text-sm font-medium text-center text-white uppercase transition border rounded-md bg-primary border-primary hover:bg-transparent hover:text-primary">
                Process to checkout
            </a>
            <!-- checkout end -->
        </div>
        <!-- order summary end -->
    </div>
    <!-- cart wrapper end -->

@endsection
