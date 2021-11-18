<!-- header -->
<header class="py-4 bg-pink-100 shadow-sm lg:bg-white">
    <div class="container flex items-center justify-between">
        <!-- logo -->
        <a href="#" class="block w-32">
            <img src="images/logo.svg" alt="logo" class="w-full">
        </a>
        <!-- logo end -->

        <!-- searchbar -->
        <div class="relative hidden w-full xl:max-w-xl lg:max-w-lg lg:flex">
            <span class="absolute text-lg text-gray-400 left-4 top-3">
                <i class="fas fa-search"></i>
            </span>
            <input type="text"
                class="w-full px-3 py-3 pl-12 border border-r-0 border-primary rounded-l-md focus:ring-primary focus:border-primary"
                placeholder="search">
            <button type="submit"
                class="px-8 font-medium text-white transition border bg-primary border-primary rounded-r-md hover:bg-transparent hover:text-primary">
                Search
            </button>
        </div>
        <!-- searchbar end -->

        <!-- navicons -->
        <div class="flex items-center space-x-4">
            <a href="wishlist.html" class="relative block text-center text-gray-700 transition hover:text-primary">
                <span
                    class="absolute flex items-center justify-center w-5 h-5 text-xs text-white rounded-full -right-0 -top-1 bg-primary">5</span>
                <div class="text-2xl">
                    <i class="far fa-heart"></i>
                </div>
                <div class="text-xs leading-3">Wish List</div>
            </a>
            <a href="cart.html"
                class="relative hidden text-center text-gray-700 transition lg:block hover:text-primary">
                <span
                    class="absolute flex items-center justify-center w-5 h-5 text-xs text-white rounded-full -right-3 -top-1 bg-primary">3</span>
                <div class="text-2xl">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="text-xs leading-3">Cart</div>
            </a>
            <a href="account.html" class="block text-center text-gray-700 transition hover:text-primary">
                <div class="text-2xl">
                    <i class="far fa-user"></i>
                </div>
                <div class="text-xs leading-3">Account</div>
            </a>
        </div>
        <!-- navicons end -->

    </div>
</header>
<!-- header end -->