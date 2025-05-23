<!-- Mobile Navbar (Bottom Menu) -->
<div class="menu fixed inset-x-0 bottom-0 z-40 lg:hidden">
  <div class="grid h-16 w-full grid-cols-4 items-center border border-default-200 bg-white dark:bg-default-50">
    <a class="flex flex-col items-center justify-center gap-1 text-default-600" href="{{ route('second', ['home', 'home-one']) }}">
      <i class="ti ti-shopping-bag text-xl"></i>
      <span class="text-xs font-medium tracking-wide sm:text-sm">Home</span>
    </a>
    <a class="flex flex-col items-center justify-center gap-1 text-default-600" href="{{ route('second', ['products', 'grid']) }}">
      <i class="ti ti-layout-2 text-xl"></i>
      <span class="text-xs font-medium tracking-wide sm:text-sm">Categories</span>
    </a>
    <a class="flex flex-col items-center justify-center gap-1 text-default-600" href="{{ route('second', ['pages', 'wishlist']) }}">
      <i class="ti ti-heart text-xl"></i>
      <span class="text-xs font-medium tracking-wide sm:text-sm">Wishlist</span>
    </a>
    <a class="flex flex-col items-center justify-center gap-1 text-default-600" href="{{ route('second', ['account', 'profile']) }}">
      <i class="ti ti-user-circle text-xl"></i>
      <span class="text-xs font-medium tracking-wide sm:text-sm">Profile</span>
    </a>
  </div>
</div>