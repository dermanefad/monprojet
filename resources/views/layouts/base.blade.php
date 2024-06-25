<!DOCTYPE html>
<html   lang="en" >

<head>
	<!-- Required meta tags -->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
  rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
<!-- Core Css -->
<link rel="stylesheet" href="./assets/css/theme.css" />
	<title>Modernize TailwindCSS HTML Admin Template</title>
</head>

<body class=" bg-white">
	<main>
		<!--start the project-->
		<div id="main-wrapper" class=" flex">
			<aside id="application-sidebar-brand"
				class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full  transform hidden xl:block xl:translate-x-0 xl:end-auto xl:bottom-0 fixed top-0 with-vertical h-screen z-[999] flex-shrink-0 border-r-[1px] w-[270px] border-gray-400  bg-white left-sidebar   transition-all duration-300" >
				<!-- ---------------------------------- -->
<!-- Start Vertical Layout Sidebar -->
<!-- ---------------------------------- -->
<div class="p-5" >
  
  <a href="../" class="text-nowrap">
    <img
      src="./assets/images/logos/dark-logo.svg"
      alt="Logo-Dark"
    />
  </a>


</div>
<div class="scroll-sidebar" data-simplebar="">
 <div class="px-6 mt-8" >
    <nav class=" w-full flex flex-col sidebar-nav">
      <ul  id="sidebarnav" class="text-gray-600 text-sm">
        <li class="text-xs font-bold pb-4">
          <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
          <span>HOME</span>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2 px-3  rounded-md  w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="./index.html"
           >
            <i class="ti ti-layout-dashboard  text-xl"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="text-xs font-bold mb-4 mt-8">
          <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
          <span>UI COMPONENTS</span>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="./components/buttons.html"
           >
            <i class="ti ti-article  text-xl"></i> <span>Buttons</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="./components/alerts.html"
           >
            <i class="ti ti-alert-circle  text-xl"></i> <span>Alerts</span>
          </a>
        </li>        

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="./components/cards.html"
           >
            <i class="ti ti-cards  text-xl"></i> <span>Card</span>
          </a>
        </li>   

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="./components/forms.html"
           >
            <i class="ti ti-file-description  text-xl"></i> <span>Forms</span>
          </a>
        </li> 

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="./components/typography.html"
           >
            <i class="ti ti-typography text-xl"></i> <span>Typography</span>
          </a>
        </li>   
        
        <li class="text-xs font-bold mb-4 mt-8">
          <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
          <span>AUTH</span>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="./pages/authentication-login.html"
           >
            <i class="ti ti-login  text-xl"></i> <span>Login</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="./pages/authentication-register.html"
           >
            <i class="ti ti-user-plus  text-xl"></i> <span>Register</span>
          </a>
        </li>  

        <li class="text-xs font-bold mb-4 mt-8">
          <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
          <span>EXTRA</span>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="./pages/icons.html"
           >
            <i class="ti ti-mood-happy  text-xl"></i> <span>Icons</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="./pages/sample-page.html"
           >
            <i class="ti ti-aperture  text-xl"></i> <span>Sample Page</span>
          </a>
        </li>        

      </ul>
    </nav>
  </div>
</div>

<!-- Bottom Upgrade Option -->
<div class="m-6  relative">
  <div class="bg-blue-500 p-5 rounded-md flex items-center justify-between">
        <div>
          <h5 class="text-base font-semibold text-gray-700 mb-3">Upgrade to Pro</h5>
          <button class="text-xs font-semibold hover:bg-blue-700 text-white bg-blue-600 rounded-md  px-4 py-2">Buy Pro</button>
        </div>
        <div class="-mt-12 -mr-2">
          <img src="./assets/images/profile/rocket.png" class="max-w-fit"  alt="profile" />
        </div>
  </div>
</div>
<!-- </aside> -->
			</aside>
			<div class=" w-full page-wrapper overflow-hidden">

				<!--  Header Start -->
				<header class="container full-container w-full text-sm py-5 xl:px-9 px-5">
					

<!-- ========== HEADER ========== -->

    <nav class=" w-full bg-gray-800  flex items-center justify-between" aria-label="Global">
            <ul class="icon-nav flex items-center gap-4">
                <li class="relative xl:hidden">
                    <a class="text-xl  icon-hover cursor-pointer text-heading"
                        id="headerCollapse" data-hs-overlay="#application-sidebar-brand"
                        aria-controls="application-sidebar-brand" aria-label="Toggle navigation" href="javascript:void(0)">
                        <i class="ti ti-menu-2 relative z-1"></i>
                    </a>
                </li>
           
            <li class="relative">
                
    <div class="hs-dropdown relative inline-flex [--placement:bottom-left] sm:[--trigger:hover]">
        <a class="relative hs-dropdown-toggle inline-flex  icon-hover text-gray-600" href="#">
            <i class="ti ti-bell-ringing text-xl relative z-[1]"></i>
            <div
                class="absolute inline-flex items-center justify-center  text-white text-[11px] font-medium  bg-blue-600 w-2 h-2 rounded-full -top-[1px] -right-[6px]">
            </div>
        </a>
        <div class="card hs-dropdown-menu transition-[opacity,margin] border border-gray-400 rounded-md duration hs-dropdown-open:opacity-100 opacity-0 mt-2 min-w-max  w-[300px] hidden z-[12]"
            aria-labelledby="hs-dropdown-custom-icon-trigger">
            <div>
               <h3 class="text-gray-600 font-semibold text-base px-6 py-3">Notification</h3>
               <ul class="list-none  flex flex-col">
                <li>
               <a href="#" class="py-3 px-6 block hover:bg-blue-500">
                <p class="text-sm text-gray-600 font-semibold">Roman Joined the Team!</p>
                <p class="text-xs text-gray-500 font-medium">Congratulate him</p>
               </a>
                </li>
                <li>
                <a href="#" class="py-3 px-6 block hover:bg-blue-500">
                    <p class="text-sm text-gray-600 font-semibold">New message received</p>
                    <p class="text-xs text-gray-500 font-medium">Salma sent you new message</p>
                </a>
                </li>
                <li>
                  <a href="#" class="py-3 px-6 block hover:bg-blue-500">
                    <p class="text-sm text-gray-600 font-semibold">New Payment received</p>
                    <p class="text-xs text-gray-500 font-medium">Check your earnings</p>
                  </a>
                </li>
                <li>
                 <a href="#" class="py-3 px-6 block hover:bg-blue-500">
                    <p class="text-sm text-gray-600 font-semibold">Jolly completed tasks</p>
                    <p class="text-xs text-gray-500 font-medium">Assign her new tasks</p>
                 </a>
                </li>
                <li>
                  <a href="#" class="py-3 px-6 block hover:bg-blue-500">
                    <p class="text-sm text-gray-600 font-semibold">Roman Joined the Team!</p>
                    <p class="text-xs text-gray-500 font-medium">Congratulate him</p>
                  </a>
                </li>
               </ul>
            </div>
        </div>
    </div>

            </li>
            </ul>
        <div class="flex items-center gap-4">
          <a href="#" class="btn font-medium hover:bg-blue-700 py-2" aria-current="page">Download Free</a>
            <div class="hs-dropdown relative inline-flex [--placement:bottom-right] sm:[--trigger:hover]">
    <a class="relative hs-dropdown-toggle cursor-pointer align-middle rounded-full">
        <img class="object-cover w-9 h-9 rounded-full" src="./assets/images/profile/user-1.jpg" alt=""
            aria-hidden="true">
    </a>
    <div class="card hs-dropdown-menu transition-[opacity,margin] border border-gray-400 rounded-[7px] duration hs-dropdown-open:opacity-100 opacity-0 mt-2 min-w-max  w-[200px] hidden z-[12]"
        aria-labelledby="hs-dropdown-custom-icon-trigger">
        <div class="card-body p-0 py-2">
            <a href="javscript:void(0)" class="flex gap-2 items-center px-4 py-[6px] hover:bg-blue-500">
                <i class="ti ti-user text-gray-500 text-xl "></i>
                <p class="text-sm text-gray-500">My Profile</p>
            </a>
            <a href="javscript:void(0)" class="flex gap-2 items-center px-4 py-[6px] hover:bg-blue-500">
                <i class="ti ti-mail text-gray-500 text-xl"></i>
                <p class="text-sm text-gray-500">My Account</p>
            </a>
            <a href="javscript:void(0)" class="flex gap-2 items-center px-4 py-[6px] hover:bg-blue-500">
                <i class="ti ti-list-check text-gray-500 text-xl "></i>
                <p class="text-sm text-gray-500">My Task</p>
            </a>
            <div class="px-4 mt-[7px] grid">
                <a href="../../pages/authentication-login.html" class="btn-outline-primary w-full hover:bg-blue-600 hover:text-white">Logout</a>
            </div>

        </div>
    </div>
</div>


        </div>
    </nav>

  <!-- ========== END HEADER ========== -->
				</header>
				<!--  Header End -->

				<!-- Main Content -->
				<main class="h-full overflow-y-auto  max-w-full  pt-4">
					
					@yield('content')

				</main>
				<!-- Main Content End -->
				
			</div>
		</div>
		<!--end of project-->
	</main>


	
<script src="./assets/libs/jquery/dist/jquery.min.js"></script>
<script src="./assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="./assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
<script src="./assets/libs/@preline/dropdown/index.js"></script>
<script src="./assets/libs/@preline/overlay/index.js"></script>
<script src="./assets/js/sidebarmenu.js"></script>



	<script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="./assets/js/dashboard.js"></script>
</body>

</html>