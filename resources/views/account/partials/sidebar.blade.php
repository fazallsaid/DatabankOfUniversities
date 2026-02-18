<div class="scroll-sidebar" data-simplebar="">
    <nav class=" w-full flex flex-col sidebar-nav px-4 mt-5">
      <ul  id="sidebarnav" class="text-gray-600 text-sm">

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2.5 my-1 text-base  flex items-center relative  rounded-md text-gray-500  w-full" href="{{url('account/dashboard')}}"
           >
            <i class="ti ti-layout-dashboard ps-2  text-2xl"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2.5 my-1 text-base   flex items-center relative  rounded-md text-gray-500  w-full" href="{{url('account/universities')}}"
           >
            <i class="ti ti-article ps-2 text-2xl"></i> <span>Universities</span>
          </a>
        </li>

        @if(session('userRole') == "administrator")
        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2.5 my-1 text-base   flex items-center relative  rounded-md text-gray-500  w-full" href="{{url('account/users')}}"
           >
            <i class="ti ti-users ps-2 text-2xl"></i> <span>Users</span>
          </a>
        </li>
        @else
        @endif
      </ul>
    </nav>
</div>