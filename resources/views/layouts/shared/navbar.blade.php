<!-- Top Small Navbar Menu -->
<div class="z-20 hidden h-8 items-center bg-default-100 lg:flex">
  <div class="container">
    <div class="flex items-center justify-between gap-4">
      <ul class="flex items-center justify-end gap-4">
        <li class="menu-item flex">
          <a class="text-xs font-medium text-default-700 transition-all hover:text-primary" href="{{ route('second' ,['admin', 'dashboard']) }}" target="_blank">Seller Center</a>
        </li>

        <li>
          <span class="hidden h-4 w-px bg-default-400 lg:flex"></span>
        </li>

        <li class="menu-item flex">
          <a class="text-xs font-semibold text-default-800 transition-all hover:text-primary" href="#">Register Seller</a>
        </li>
      </ul>

      <div class="flex items-center">
        <ul class="flex items-center justify-end gap-4">
          <li class="menu-item flex">
            <a class="text-xs font-medium text-default-700 transition-all hover:text-primary" href="#">Help & Contect</a>
          </li>

          <li>
            <span class="hidden h-4 w-px bg-default-400 lg:flex"></span>
          </li>

          <li class="menu-item flex">
            <a class="text-xs font-semibold text-default-800 transition-all hover:text-primary" href="#">Order Tracking</a>
          </li>
        </ul>

        <!-- Language Dropdown -->
        <div class="relative ms-6 flex">
          <div class="hs-dropdown relative inline-flex [--placement:bottom] [--trigger:hover]">
            <a class="hs-dropdown-toggle relative flex items-center text-base after:absolute after:inset-0 hover:after:-bottom-10" href="#">
              <img alt="Image" class="h-3 rounded-sm" src="/images/icons/flags/us.jpg" />
              <i class="ms-2 h-4 w-4" data-lucide="chevron-down"></i>
            </a>

            <div class="hs-dropdown-menu z-50 mt-4 hidden min-w-[140px] rounded-lg border border-default-100 bg-white p-1.5 opacity-0 shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50">
              <ul class="flex flex-col gap-1">
                <li>
                  <a class="flex items-center gap-2 rounded px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700" href="#"><img alt="flag" class="h-4" src="/images/icons/flags/us.jpg" />
                    English</a>
                </li>
                <li>
                  <a class="flex items-center gap-2 rounded px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700" href="#"><img alt="flag" class="h-4" src="/images/icons/flags/french.jpg" />
                    French</a>
                </li>
                <li>
                  <a class="flex items-center gap-2 rounded px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700" href="#"><img alt="flag" class="h-4" src="/images/icons/flags/germany.jpg" />
                    German</a>
                </li>
                <li>
                  <a class="flex items-center gap-2 rounded px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700" href="#"><img alt="flag" class="h-4" src="/images/icons/flags/spain.jpg" />
                    Spanish</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Navbar  -->
<header class="fixed top-0 z-40 flex w-full items-center border-b border-default-100 bg-white transition-all duration-300 dark:bg-default-50 lg:top-8 [&.nav-sticky]:top-0 [&.nav-sticky]:shadow" id="navbar">
  <nav class="container flex h-16 items-center justify-between gap-4">
    <div class="flex items-center gap-4">
      <!-- Mobile Menu Toggle Button -->
      <button class="block lg:hidden" data-hs-overlay="#mobile-menu">
        <i class="ti ti-menu-2 text-2xl"></i>
      </button>

      <!-- Navbar Brand Logo -->
      <a href="{{ route('second', ['home', 'home-one']) }}">
        <img src="/images/logo-dark.png" class="flex h-10 dark:hidden lg:h-12" alt="Brand Logo" />
        <img src="/images/logo.png" class="hidden h-10 dark:flex lg:h-12" alt="Brand Logo" />
      </a>
    </div>

    <!-- Nevigation Menu -->
    <div class="relative mx-auto hidden flex-grow lg:block">
      <ul class="menu flex items-center justify-center">
        <!-- Home Menu -->
        <li class="menu-item">
          <div class="hs-dropdown relative inline-flex [--trigger:hover]">
            <a class="hs-dropdown-toggle inline-flex items-center rounded-full px-4 py-2 text-sm font-medium text-default-700 after:absolute after:inset-0 hover:text-primary hover:after:-bottom-10 lg:text-base" href="#">
              Home <i data-lucide="chevron-down" class="ms-2 h-4 w-4"></i>
            </a>

            <div class="hs-dropdown-menu z-10 hidden min-w-48 rounded-lg border border-default-100 bg-white p-1.5 opacity-0 shadow transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50">
              <ul class="flex flex-col gap-1">
                <li>
                  <a class="flex items-center rounded px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-100 hover:text-default-700" href="{{ route('second', ['home', 'home-one']) }}">Home One</a>
                </li>
                <li>
                  <a class="flex items-center rounded px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-100 hover:text-default-700" href="{{ route('second', ['home', 'home-two']) }}">Home Two</a>
                </li>
              </ul>
            </div>
          </div>
        </li>

        <!-- Product Menu -->
        <li class="menu-item">
          <div class="hs-dropdown relative inline-flex [--placement:bottom] [--trigger:hover]">
            <a class="hs-dropdown-toggle inline-flex items-center rounded-full px-4 py-2 text-sm font-medium text-default-700 after:absolute after:inset-0 hover:text-primary hover:after:-bottom-10 lg:text-base" href="#">
              Product <i data-lucide="chevron-down" class="ms-2 h-4 w-4"></i>
            </a>

            <div class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white p-1.5 opacity-0 shadow transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50">
              <ul class="flex flex-col gap-1">
                <li>
                  <a class="flex items-center rounded px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-100 hover:text-default-700" href="{{ route('second', ['products', 'grid']) }}">Products Grid</a>
                </li>
                <li>
                  <a class="flex items-center rounded px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-100 hover:text-default-700" href="{{ route('second', ['products', 'list']) }}">Products List</a>
                </li>
                <li>
                  <a class="flex items-center rounded px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-100 hover:text-default-700" href="{{ route('second', ['products', 'details']) }}">Product Details</a>
                </li>
                <li>
                  <a class="flex items-center rounded px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-100 hover:text-default-700" href="{{ route('second', ['products', 'filter']) }}">Product Filter</a>
                </li>
              </ul>
            </div>
          </div>
        </li>

        <!-- Mega Menu -->
        <li class="menu-item">
          <div class="hs-dropdown relative inline-flex [--trigger:hover] [--auto-close:inside]">
            <a class="hs-dropdown-toggle inline-flex items-center whitespace-nowrap rounded-full px-4 py-2 text-sm font-medium text-default-700 after:absolute after:inset-0 hover:text-primary hover:after:-bottom-10 lg:text-base" href="#">
              Mega Menu <i data-lucide="chevron-down" class="ms-2 h-4 w-4"></i>
            </a>

            <div class="hs-dropdown-menu z-10 mt-4 hidden w-full min-w-full opacity-0 transition-[opacity,margin] duration-300 hs-dropdown-open:opacity-100">
              <div class="container">
                <div class="overflow-hidden rounded-xl border border-default-200 bg-white shadow-lg dark:bg-default-50">
                  <div class="grid grid-cols-12">
                    <div class="col-span-2 text-sm">
                      <div class="h-full w-full bg-default-100 px-6 py-10">
                        <nav class="flex flex-col space-y-3.5" aria-label="Tabs" role="tablist" data-hs-tabs-vertical="true">
                          <button type="button" class="active inline-flex items-center !bg-transparent text-base font-medium text-default-600 transition-all hover:text-primary hs-tab-active:text-primary" data-hs-tab="#fruits-vegetables" role="tab">
                            Fruits & Vegetables
                            <i data-lucide="chevron-right" class="ms-auto h-5 w-5"></i>
                          </button>
                          <button type="button" class="inline-flex items-center !bg-transparent text-base font-medium text-default-600 transition-all hover:text-primary hs-tab-active:text-primary" data-hs-tab="#bakery-dairy" role="tab">
                            Bakery & Dairy
                            <i data-lucide="chevron-right" class="ms-auto h-5 w-5"></i>
                          </button>
                          <button type="button" class="inline-flex items-center !bg-transparent text-base font-medium text-default-600 transition-all hover:text-primary hs-tab-active:text-primary" data-hs-tab="#beverages" role="tab">
                            Beverages
                            <i data-lucide="chevron-right" class="ms-auto h-5 w-5"></i>
                          </button>
                          <button type="button" class="inline-flex items-center !bg-transparent text-base font-medium text-default-600 transition-all hover:text-primary hs-tab-active:text-primary" data-hs-tab="#snacks-munchies" role="tab">
                            Snacks & Munchies
                            <i data-lucide="chevron-right" class="ms-auto h-5 w-5"></i>
                          </button>
                          <button type="button" class="inline-flex items-center !bg-transparent text-base font-medium text-default-600 transition-all hover:text-primary hs-tab-active:text-primary" data-hs-tab="#eggs-meat-fish" role="tab">
                            Eggs, Meat & Fish
                            <i data-lucide="chevron-right" class="ms-auto h-5 w-5"></i>
                          </button>
                        </nav>
                      </div>
                    </div>

                    <div class="col-span-10">
                      <div>
                        <div id="fruits-vegetables" role="tabpanel">
                          <div class="grid grid-cols-4 divide-x divide-default-200">
                            <div class="px-6 py-10">
                              <h6 class="text-base font-medium text-default-800">
                                Fresh Vegetables
                              </h6>
                              <ul class="mt-4 grid space-y-3">
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Potato, Onion & Tomato</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Cucumber & Capsicum</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Leafy Vegetables</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Root Vegetables</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Beans & Egg Plants</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Cabbage & Cauliflower</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Pumpkin & Drumstick</a>
                                </li>
                              </ul>
                            </div>

                            <div class="px-6 py-10">
                              <h6 class="text-base font-medium text-default-800">
                                Herbs & Seasoning
                              </h6>
                              <ul class="mt-4 grid space-y-3">
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Lemon, Ginger & Garlic</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Indian & Exotic Herbs</a>
                                </li>
                              </ul>
                            </div>

                            <div class="px-6 py-10">
                              <h6 class="text-base font-medium text-default-800">
                                Fresh Fruits
                              </h6>
                              <ul class="mt-4 grid space-y-3">
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Banana, Sapota & Papaya</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Kiwi & Melons</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Apples & Seasonal Fruits</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Mangos</a>
                                </li>
                              </ul>
                            </div>

                            <div class="px-6 py-10">
                              <h6 class="text-base font-medium text-default-800">
                                Organic Fruits & Vegs
                              </h6>
                              <ul class="mt-4 grid space-y-3">
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Organic Fruits</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Organic Vegetables</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div id="bakery-dairy" class="hidden" role="tabpanel">
                          <div class="grid grid-cols-4 divide-x divide-default-200">
                            <div class="px-6 py-10">
                              <h6 class="text-base font-medium text-default-800">
                                Dairy
                              </h6>
                              <ul class="mt-4 grid space-y-3">
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Milk & Curd</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Paneer & Cream</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Butter & Margarine</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Condensed & Butter Milk</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Cheese</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Yogurt & Shrikhand</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Flavoured & Soya Milk</a>
                                </li>
                              </ul>
                            </div>

                            <div class="px-6 py-10">
                              <h6 class="text-base font-medium text-default-800">
                                Cakes Pastries
                              </h6>
                              <ul class="mt-4 grid space-y-3">
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Tea Cakes & Slice Cakes</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Muffins & Cup Cakes</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Doughnuts & Mousses</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Pastries & Brownies</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Birthday & Party Cakes</a>
                                </li>
                              </ul>
                            </div>

                            <div class="px-6 py-10">
                              <h6 class="text-base font-medium text-default-800">
                                Bakery Snacksgs
                              </h6>
                              <ul class="mt-4 grid space-y-3">
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Bread Sticks & Lavash</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Cheese & Garlic Bread</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Puffs, Patties & Sandwiches</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Breadcrumbs</a>
                                </li>
                              </ul>
                            </div>

                            <div class="px-6 py-10">
                              <h6 class="text-base font-medium text-default-800">
                                Cookies & Rusk
                              </h6>
                              <ul class="mt-4 grid space-y-3">
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Rusks</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Khari & Cream Rolls</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Premium Cookies</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Bakery Biscuits & Cookies</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div id="beverages" class="hidden" role="tabpanel">
                          <div class="grid grid-cols-4 divide-x divide-default-200">
                            <div class="px-6 py-10">
                              <h6 class="text-base font-medium text-default-800">
                                Energy & Soft Drinks
                              </h6>
                              <ul class="mt-4 grid space-y-3">
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Soda & Mocktail Mix</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Cold Drinks</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Sports &Energy Drinks</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Non-Alcoholic Drinks</a>
                                </li>
                              </ul>
                            </div>

                            <div class="px-6 py-10">
                              <h6 class="text-base font-medium text-default-800">
                                Water
                              </h6>
                              <ul class="mt-4 grid space-y-3">
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Packed Water</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Spring Water</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Flavoured Water</a>
                                </li>
                              </ul>
                            </div>

                            <div class="px-6 py-10">
                              <h6 class="text-base font-medium text-default-800">
                                Tea & Coffee
                              </h6>
                              <ul class="mt-4 grid space-y-3">
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Leaf & Dust Tea</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Green Tea</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Exotic Tea</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Tea Bags</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Ground Coffee</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Cold Coffee</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Instant Coffee</a>
                                </li>
                              </ul>
                            </div>

                            <div class="px-6 py-10">
                              <h6 class="text-base font-medium text-default-800">
                                Fruit Juice
                              </h6>
                              <ul class="mt-4 grid space-y-3">
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Unsweetened</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Juices</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Syrup</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Cold Press</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div id="snacks-munchies" class="hidden" role="tabpanel">
                          <div class="grid grid-cols-4 divide-x divide-default-200">
                            <div class="px-6 py-10">
                              <h6 class="text-base font-medium text-default-800">
                                Snacks & Biscuits
                              </h6>
                              <ul class="mt-4 grid space-y-3">
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Chips & Corn Snacks</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Salted Biscuit</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Marie, Health & Digestive</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Cream & Wafer Biscuits</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Glucose & Milk Biscuits</a>
                                </li>
                              </ul>
                            </div>

                            <div class="px-6 py-10">
                              <h6 class="text-base font-medium text-default-800">
                                Sauce & Ketchup
                              </h6>
                              <ul class="mt-4 grid space-y-3">
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Honey</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Tomato Ketchup & Sauces</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Jam & Marmalade</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Chilli & Soya Sauce</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Vinegar</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Dips & Dressings</a>
                                </li>
                              </ul>
                            </div>

                            <div class="px-6 py-10">
                              <h6 class="text-base font-medium text-default-800">
                                Chocolates & Candies
                              </h6>
                              <ul class="mt-4 grid space-y-3">
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Chocolates</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Toffee, Cady & Lollypop</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Mints & Chewing Gum</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Gift Box</a>
                                </li>
                              </ul>
                            </div>

                            <div class="px-6 py-10">
                              <h6 class="text-base font-medium text-default-800">
                                Breakfast Cereals
                              </h6>
                              <ul class="mt-4 grid space-y-3">
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Oats & Porridge</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Kids Cereal</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Muesli</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Flakes</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Granola</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div id="eggs-meat-fish" class="hidden" role="tabpanel">
                          <div class="grid grid-cols-4 divide-x divide-default-200">
                            <div class="px-6 py-10">
                              <h6 class="text-base font-medium text-default-800">
                                Eggs
                              </h6>
                              <ul class="mt-4 grid space-y-3">
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Farm Eggs</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Country Eggs</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Protein Eggs</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Organic Eggs</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Other Eggs</a>
                                </li>
                              </ul>
                            </div>

                            <div class="px-6 py-10">
                              <h6 class="text-base font-medium text-default-800">
                                Fish & Seafood
                              </h6>
                              <ul class="mt-4 grid space-y-3">
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Fresh Water Fish</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Dry Fish</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Frozen Fish & Seafood</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Marine Water Fish</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Prawns & Shrimps</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Other Seafood</a>
                                </li>
                              </ul>
                            </div>

                            <div class="px-6 py-10">
                              <h6 class="text-base font-medium text-default-800">
                                Sausages & Salami
                              </h6>
                              <ul class="mt-4 grid space-y-3">
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Chicken Sausages</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Pork & Ham</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Turkey & Dusk</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Lamb</a>
                                </li>
                              </ul>
                            </div>

                            <div class="px-6 py-10">
                              <h6 class="text-base font-medium text-default-800">
                                Poultry & Muttons
                              </h6>
                              <ul class="mt-4 grid space-y-3">
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Turkey</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Fresh Chicken</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Frozen Chicken</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Fresh Mutton</a>
                                </li>
                                <li>
                                  <a class="text-sm font-medium text-default-600 transition-all hover:text-primary" href="#">Frozen Mutton</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>

        <!-- Pages Menu -->
        <li class="menu-item">
          <div class="hs-dropdown relative inline-flex [--placement:bottom] [--trigger:hover]">
            <a class="hs-dropdown-toggle inline-flex items-center rounded-full px-4 py-2 text-sm font-medium text-default-700 after:absolute after:inset-0 hover:text-primary hover:after:-bottom-10 lg:text-base" href="#">
              Pages <i data-lucide="chevron-down" class="ms-2 h-4 w-4"></i>
            </a>

            <div class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white p-1.5 opacity-0 shadow-md transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50">
              <ul class="flex flex-col gap-1">
                <li>
                  <a class="flex items-center rounded px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-100 hover:text-default-700" href="{{ route('second', ['account', 'profile']) }}">Account Profile</a>
                </li>
                <li>
                  <a class="flex items-center rounded px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-100 hover:text-default-700" href="{{ route('second', ['pages', 'cart']) }}">Cart</a>
                </li>
                <li>
                  <a class="flex items-center rounded px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-100 hover:text-default-700" href="{{ route('second', ['pages', 'checkout']) }}">Checkout</a>
                </li>
                <li>
                  <a class="flex items-center rounded px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-100 hover:text-default-700" href="{{ route('second', ['pages', 'wishlist']) }}">Wishlist</a>
                </li>
                <li>
                  <a class="flex items-center rounded px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-100 hover:text-default-700" href="{{ route('second', ['pages', 'faqs']) }}">FAQs</a>
                </li>
                <li>
                  <a class="flex items-center rounded px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-100 hover:text-default-700" href="{{ route('second', ['pages', 'error-404']) }}">Error 404</a>
                </li>
                <li>
                  <a class="flex items-center rounded px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-100 hover:text-default-700" href="{{ route('second', ['auth', 'login']) }}">Login</a>
                </li>
                <li>
                  <a class="flex items-center rounded px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-100 hover:text-default-700" href="{{ route('second', ['auth', 'register']) }}">Register</a>
                </li>
                <li>
                  <a class="flex items-center rounded px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-100 hover:text-default-700" href="{{ route('second', ['auth', 'recoverpw']) }}">Forgot Password</a>
                </li>
                <li>
                  <a class="flex items-center rounded px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-100 hover:text-default-700" href="{{ route('second', ['auth', 'reset-password']) }}">Reset Password</a>
                </li>
                <li>
                  <a class="flex items-center rounded px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-100 hover:text-default-700" href="{{ route('second', ['auth', 'logout']) }}">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </li>

        <!-- Contact us Link -->
        <li class="menu-item">
          <div class="flex items-center">
            <a class="inline-flex items-center rounded-full px-4 py-2 text-sm font-medium text-default-700 hover:text-primary lg:text-base" href="{{ route('second', ['pages', 'contact']) }}">Contact Us</a>
          </div>
        </li>
      </ul>
    </div>

    <!-- Nav Link -->
    <ul class="flex items-center justify-center gap-4">
      <li class="menu-item flex lg:hidden">
        <a href="#" data-hs-overlay="#search-drawer" class="relative inline-flex h-10 w-10 flex-shrink-0 items-center justify-center gap-2 rounded-full bg-default-100 align-middle font-medium text-default-700 transition-all hover:text-primary">
          <i class="ti ti-search text-xl"></i>
        </a>
      </li>

      <li class="menu-item flex">
        <a href="{{ route('second', ['pages', 'cart']) }}" class="relative inline-flex h-10 w-10 flex-shrink-0 items-center justify-center gap-2 rounded-full bg-default-100 align-middle font-medium text-default-700 transition-all hover:text-primary">
          <i class="ti ti-shopping-bag text-xl"></i>
        </a>
      </li>

      <li class="menu-item hidden lg:flex">
        <a href="{{ route('second', ['pages', 'wishlist']) }}" class="relative inline-flex h-10 w-10 flex-shrink-0 items-center justify-center gap-2 rounded-full bg-default-100 align-middle font-medium text-default-700 transition-all hover:text-primary">
          <i class="ti ti-heart text-xl"></i>
        </a>
      </li>

      <li class="menu-item hidden lg:flex">
        <div class="hs-dropdown relative inline-flex [--placement:bottom-right] [--trigger:hover]">
          <a class="hs-dropdown-toggle inline-flex h-10 w-10 flex-shrink-0 items-center justify-center gap-2 rounded-full bg-default-100 align-middle font-medium text-default-700 transition-all after:absolute after:inset-0 hover:text-primary hover:after:-bottom-10" href="#">
            <i class="ti ti-user text-xl"></i>
          </a>

          <div class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] overflow-hidden rounded-lg border border-default-100 bg-white pb-1.5 opacity-0 shadow transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50">
            <ul class="flex flex-col gap-1">
              <li class="border-b border-dashed border-default-200 bg-primary/10 p-4">
                <a href="{{ route('second', ['account', 'profile']) }}" class="flex items-center gap-4">
                  <div class="relative">
                    <div class="rounded-full bg-default-200">
                      <img src="/images/avatars/1.png" alt="" class="h-10 w-10 rounded-full" />
                    </div>
                    <span class="absolute end-0 top-0 h-3 w-3 rounded-full border-2 border-white bg-green-400 dark:border-default-50"></span>
                  </div>
                  <div>
                    <h6 class="text-base text-primary">Paula Keenan</h6>
                    <small class="text-primary/80">User</small>
                  </div>
                </a>
              </li>
              <li class="px-1.5">
                <a class="flex items-center rounded-md px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-100 hover:text-default-700" href="{{ route('second', ['account', 'profile']) }}"><i class="ti ti-user-circle me-2 text-lg"></i> My Account</a>
              </li>
              <li class="px-1.5">
                <a class="flex items-center rounded-md px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-100 hover:text-default-700" href="{{ route('second' ,['admin', 'dashboard']) }}" target="_blank"><i class="ti ti-dashboard me-2 text-lg"></i> Become a
                  Seller</a>
              </li>
              <li class="px-1.5">
                <a class="flex items-center rounded-md px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-100 hover:text-default-700" href="{{ route('second', ['pages', 'cart']) }}"><i class="ti ti-shopping-cart me-2 text-lg"></i> Cart</a>
              </li>
              <li class="px-1.5">
                <a class="flex items-center rounded-md px-3 py-2 font-normal text-default-600 transition-all hover:bg-red-500/10 hover:text-red-500" href="{{ route('second', ['auth', 'login']) }}"><i class="ti ti-logout-2 me-2 text-lg"></i> Log Out</a>
              </li>
            </ul>
          </div>
        </div>
      </li>
    </ul>
  </nav>
</header>

<!-- Navbar -->
<div class="mt-16">
  <div class="hidden h-16 items-center border-b border-default-100 bg-white dark:bg-default-50 lg:flex">
    <div class="container">
      <div class="flex items-center gap-4 whitespace-nowrap">
        <div class="hs-dropdown flex [--trigger:hover]">
          <a href="#" class="hs-dropdown-toggle relative flex items-center gap-2 rounded-md bg-primary/10 px-4 py-2.5 text-base font-semibold text-primary transition-all duration-300 after:absolute after:inset-x-0 after:-bottom-3 after:top-0 hover:bg-primary hover:text-white">
            <i class="ti ti-layout-grid text-xl/none"></i>
            <span>Browse All Categories</span>
            <i class="ti ti-chevron-down"></i>
          </a>

          <div class="hs-dropdown-menu z-10 mt-4 hidden min-w-[260px] rounded-b-lg border border-t-0 border-default-100 bg-white opacity-0 shadow transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50">
            <div class="divide-y divide-default-100">
              <a class="flex items-center gap-3 px-4 py-2.5 font-normal text-default-600 transition-all hover:bg-primary/10 hover:text-primary" href="#"><i class="ti ti-cup text-lg"></i> Food & Beverage
                <i class="ti ti-chevron-right ms-auto"></i></a>
              <a class="flex items-center gap-3 px-4 py-2.5 font-normal text-default-600 transition-all hover:bg-primary/10 hover:text-primary" href="#"><i class="ti ti-shopping-bag text-lg"></i> Fruits & Vegetables
                <i class="ti ti-chevron-right ms-auto"></i></a>
              <a class="flex items-center gap-3 px-4 py-2.5 font-normal text-default-600 transition-all hover:bg-primary/10 hover:text-primary" href="#"><i class="ti ti-shopping-cart text-lg"></i> Nuts & Berries
                <i class="ti ti-chevron-right ms-auto"></i></a>
              <a class="flex items-center gap-3 px-4 py-2.5 font-normal text-default-600 transition-all hover:bg-primary/10 hover:text-primary" href="#"><i class="ti ti-meat text-lg"></i> Meat
                <i class="ti ti-chevron-right ms-auto"></i></a>
              <a class="flex items-center gap-3 px-4 py-2.5 font-normal text-default-600 transition-all hover:bg-primary/10 hover:text-primary" href="#"><i class="ti ti-fish text-lg"></i> SeaFood
                <i class="ti ti-chevron-right ms-auto"></i></a>
              <a class="flex items-center gap-3 px-4 py-2.5 font-normal text-default-600 transition-all hover:bg-primary/10 hover:text-primary" href="#"><i class="ti ti-eggs text-lg"></i> Eggs
                <i class="ti ti-chevron-right ms-auto"></i></a>
              <a class="flex items-center gap-3 px-4 py-2.5 font-normal text-default-600 transition-all hover:bg-primary/10 hover:text-primary" href="#"><i class="ti ti-bread text-lg"></i> Baking
                <i class="ti ti-chevron-right ms-auto"></i></a>
              <a class="flex items-center gap-3 px-4 py-2.5 font-normal text-default-600 transition-all hover:bg-primary/10 hover:text-primary" href="#"><i class="ti ti-beer-filled text-lg"></i> Drinks
                <i class="ti ti-chevron-right ms-auto"></i></a>
              <a class="flex items-center gap-3 px-4 py-2.5 font-normal text-default-600 transition-all hover:bg-primary/10 hover:text-primary" href="#"><i class="ti ti-cheese text-lg"></i> Cheese
                <i class="ti ti-chevron-right ms-auto"></i></a>
            </div>
          </div>
        </div>

        <div class="group relative">
          <select id="all-select-categories" data-hs-select='{
                            "placeholder": "Select Country",
                            "toggleTag": "<button type=\"button\"></button>",
                            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 rounded-md bg-primary/10 text-primary text-base flex items-center font-semibold gap-2 px-10 py-2.5 transition-all duration-300 group-hover:bg-primary group-hover:text-white before:absolute before:inset-0 before:z-[1]",
                            "dropdownClasses": "mt-2 z-50 min-w-[200px] max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto end-0 dark:bg-default-50 custom-scroll overflow-hidden",
                            "optionClasses": "py-2 px-3 w-full text-sm text-default-600 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                            "optionTemplate": "<div class=\"flex justify-between items-center font-medium w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                            }' class="hidden shadow">
            <option></option>
            <option value="United States">United States</option>
            <option value="Canada">Canada</option>
            <option value="California" selected>California</option>
            <option value="Australia">Australia</option>
            <option value="Germany">Germany</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="China">China</option>
            <option value="Argentina">Argentina</option>
            <option value="Bharat">Bharat</option>
            <option value="Afghanistan">Afghanistan</option>
            <option value="France">France</option>
            <option value="India">India</option>
            <option value="Brazil">Brazil</option>
            <option value="Belgium">Belgium</option>
            <option value="Colombia">Colombia</option>
            <option value="Albania">Albania</option>
          </select>

          <div class="absolute -inset-y-0 end-3 start-3 flex items-center text-primary group-hover:text-white">
            <i class="ti ti-map-pin text-xl"></i>
          </div>
          <div class="absolute -inset-y-0 end-3 start-auto flex items-center text-primary group-hover:text-white">
            <i class="ti ti-chevron-down shrink text-base/none"></i>
          </div>
        </div>
        <!-- End Select -->

        <form class="relative mx-auto flex min-w-80">
          <input id="data-input" type="search" placeholder="Search for items..." class="w-full rounded-lg border-none bg-default-100 py-3 pe-6 ps-12 text-sm text-default-900 transition placeholder:text-default-600 focus:outline-none focus:ring-transparent" />
          <button type="button" aria-label="Click here to search input data" class="absolute inset-y-0 start-2 z-10 flex h-full w-10 shrink-0 cursor-default items-center justify-center focus:outline-none">
            <i data-lucide="search" class="h-5 w-5"></i>
          </button>
        </form>

        <div class="flex">
          <a href="tel:+XXXXXXXX" class="flex items-center gap-2">
            <i class="ti ti-headset text-4xl text-default-600"></i>
            <div>
              <h4 class="text-xl font-medium text-primary">1900 789 564</h4>
              <p class="text-xs font-medium text-default-600">
                24/7 Support Center
              </p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Mobile Sidebar Menu -->
<div id="mobile-menu" class="hs-overlay fixed left-0 top-0 z-60 hidden h-full w-full max-w-[270px] -translate-x-full transform border-e border-e-default-200 bg-white transition-all hs-overlay-open:translate-x-0 dark:bg-default-50" tabindex="-1">
  <div class="flex h-16 items-center justify-center border-b border-dashed border-b-default-200 transition-all duration-300">
    <a href="{{ route('second', ['home', 'home-one']) }}">
      <img src="/images/logo-dark.png" class="flex h-10 dark:hidden lg:h-12" alt="Brand Logo" />
      <img src="/images/logo.png" class="hidden h-10 dark:flex lg:h-12" alt="Brand Logo" />
    </a>
  </div>

  <div data-simplebar class="h-[calc(100%-4rem)] overflow-y-auto">
    <nav class="hs-accordion-group flex w-full flex-col flex-wrap p-4">
      <ul class="admin-menu flex w-full flex-col gap-1.5">
        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
            <i class="ti ti-smart-home text-xl"></i>
            Home
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>

          <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 flex flex-col gap-2">
              <li class="menu-item">
                <a href="{{ route('second', ['home', 'home-one']) }}" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Home One
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ route('second', ['home', 'home-two']) }}" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Home Two
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
            <i class="ti ti-list-details text-xl"></i>
            Product
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>

          <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 flex flex-col gap-2">
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="{{ route('second', ['products', 'grid']) }}">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Products Grid
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="{{ route('second', ['products', 'list']) }}">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Products List
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="{{ route('second', ['products', 'details']) }}">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Product Details
                </a>
              </li>
              <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100" href="{{ route('second', ['products', 'filter']) }}">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Product Filter
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="menu-item hs-accordion">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
            <i class="ti ti-clipboard-text text-xl"></i>
            Pages
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>

          <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 flex flex-col gap-2">
              <li class="menu-item">
                <a href="{{ route('second', ['pages', 'cart']) }}" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Cart
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ route('second', ['pages', 'checkout']) }}" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Checkout
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ route('second', ['pages', 'wishlist']) }}" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Wishlist
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ route('second', ['pages', 'faqs']) }}" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  FAQs
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ route('second', ['pages', 'error-404']) }}" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Error 404
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="menu-item">
          <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-collapse-open:bg-default-100" href="{{ route('second', ['pages', 'contact']) }}">
            <i class="ti ti-phone-call text-xl"></i>
            Contact Us
          </a>
        </li>

        <li class="px-4 py-2 text-sm font-medium text-default-600">Account</li>

        <li class="menu-item">
          <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-collapse-open:bg-default-100" href="{{ route('second', ['account', 'profile']) }}">
            <i class="ti ti-user-circle text-xl"></i>
            Personal Info
          </a>
        </li>

        <li class="menu-item hs-accordion" id="mobile-menu-order">
          <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
            <i class="ti ti-box text-xl"></i>
            My Orders
            <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
          </a>

          <div id="mobile-menu-order" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
            <ul class="mt-2 flex flex-col gap-2">
              <li class="menu-item">
                <a href="{{ route('second', ['account', 'order-list']) }}" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Order List
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ route('second', ['account', 'order-detail']) }}" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                  <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                  Order Detail
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="menu-item">
          <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-collapse-open:bg-default-100" href="{{ route('second', ['account', 'address']) }}">
            <i class="ti ti-map-pin text-xl"></i>
            My Addresses
          </a>
        </li>

        <li class="menu-item">
          <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-collapse-open:bg-default-100" href="{{ route('second', ['account', 'wallet']) }}">
            <i class="ti ti-wallet text-xl"></i>
            Wallet
          </a>
        </li>

        <li class="menu-item">
          <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-collapse-open:bg-default-100" href="{{ route('second',['account', 'settings']) }}">
            <i class="ti ti-settings text-xl"></i>
            Settings
          </a>
        </li>

        <li class="menu-item">
          <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-collapse-open:bg-default-100" href="{{ route('second', ['auth', 'login']) }}">
            <i class="ti ti-user text-xl"></i>
            Logout
          </a>
        </li>
      </ul>
    </nav>
  </div>
</div>

<!-- Mobile Search Drawer -->
<div id="search-drawer" class="hs-overlay fixed inset-x-0 bottom-0 z-60 hidden h-full w-full max-w-full translate-y-full transform bg-white transition-all duration-300 hs-overlay-open:translate-y-0 dark:bg-default-50" tabindex="-1">
  <div class="flex h-16 items-center justify-between gap-4 border-b border-dashed border-default-200 px-4 transition-all duration-300">
    <button type="button" class="inline-flex h-10 w-10 flex-shrink-0 items-center justify-center gap-2 rounded-full bg-default-100 align-middle font-medium text-default-700 transition-all hover:text-primary" data-hs-overlay="#search-drawer">
      <i class="ti ti-x text-xl"></i>
    </button>

    <form class="relative mx-auto flex w-full">
      <input id="data-input" type="search" placeholder="Search for items..." class="w-full rounded-lg border-none bg-default-100 py-3 pe-6 ps-12 text-sm text-default-900 transition placeholder:text-default-600 focus:outline-none focus:ring-transparent" />
      <button type="button" aria-label="Click here to search input data" class="absolute inset-y-0 start-2 z-10 flex h-full w-10 shrink-0 cursor-default items-center justify-center focus:outline-none">
        <i data-lucide="search" class="h-5 w-5"></i>
      </button>
    </form>
  </div>

  <div class="">
    <div class="p-4 lg:p-8">
      <h4 class="text-base font-medium text-default-900">Recent</h4>
    </div>
    <div class="mb-4 px-4 pb-4">
      <div class="flex flex-col gap-2">
        <div id="close" class="flex items-center gap-2 rounded-md bg-default-100 px-4 py-3">
          <i class="ti ti-clock shrink text-lg text-default-700"></i>
          <span class="inline-block grow text-base font-medium text-default-700 transition-all hover:text-default-900">Fruits</span>
          <div class="flex items-center gap-2">
            <a href="#">
              <i class="ti ti-arrow-up-right-circle align-middle text-lg text-default-700 transition-all hover:text-default-950"></i>
            </a>
            <span class="shrink" data-hs-remove-element="#close" role="button">
              <i class="ti ti-x align-middle text-lg text-default-700 hover:text-red-500"></i>
            </span>
          </div>
        </div>
        <div id="close-two" class="flex items-center gap-2 rounded-md bg-default-100 px-4 py-3">
          <i class="ti ti-clock shrink text-lg text-default-700"></i>
          <span class="inline-block grow text-base font-medium text-default-700 transition-all hover:text-default-900">Fresh Vegetables</span>
          <div class="flex items-center gap-2">
            <a href="#">
              <i class="ti ti-arrow-up-right-circle align-middle text-lg text-default-700 transition-all hover:text-default-950"></i>
            </a>
            <span class="shrink" data-hs-remove-element="#close-two" role="button">
              <i class="ti ti-x align-middle text-lg text-default-700 hover:text-red-500"></i>
            </span>
          </div>
        </div>
        <div id="close-three" class="flex items-center gap-2 rounded-md bg-default-100 px-4 py-3">
          <i class="ti ti-clock shrink text-lg text-default-700"></i>
          <span class="inline-block grow text-base font-medium text-default-700 transition-all hover:text-default-900">Nuts And Berries</span>
          <div class="flex items-center gap-2">
            <a href="#">
              <i class="ti ti-arrow-up-right-circle align-middle text-lg text-default-700 transition-all hover:text-default-950"></i>
            </a>
            <span class="shrink" data-hs-remove-element="#close-three" role="button">
              <i class="ti ti-x align-middle text-lg text-default-700 hover:text-red-500"></i>
            </span>
          </div>
        </div>
        <div id="close-four" class="flex items-center gap-2 rounded-md bg-default-100 px-4 py-3">
          <i class="ti ti-clock shrink text-lg text-default-700"></i>
          <span class="inline-block grow text-base font-medium text-default-700 transition-all hover:text-default-900">Best Instructors</span>
          <div class="flex items-center gap-2">
            <a href="#">
              <i class="ti ti-arrow-up-right-circle align-middle text-lg text-default-700 transition-all hover:text-default-950"></i>
            </a>
            <span class="shrink" data-hs-remove-element="#close-four" role="button">
              <i class="ti ti-x align-middle text-lg text-default-700 hover:text-red-500"></i>
            </span>
          </div>
        </div>
        <div id="close-five" class="flex items-center gap-2 rounded-md bg-default-100 px-4 py-3">
          <i class="ti ti-clock shrink text-lg text-default-700"></i>
          <span class="inline-block grow text-base font-medium text-default-700 transition-all hover:text-default-900">Contact</span>
          <div class="flex items-center gap-2">
            <a href="#">
              <i class="ti ti-arrow-up-right-circle align-middle text-lg text-default-700 transition-all hover:text-default-950"></i>
            </a>
            <span class="shrink" data-hs-remove-element="#close-five">
              <i class="ti ti-x align-middle text-lg text-default-700 hover:text-red-500"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
