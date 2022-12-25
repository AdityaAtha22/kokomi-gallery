<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }}</title>
  {{-- trix css --}}
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css" />
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
  {{-- tailwind css --}}
  @vite('resources/css/app.css')
  {{-- fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600&display=swap" rel="stylesheet" />
</head>

<body class="font-inter">
  <div>
    <div class="h-screen flex bg-white overflow-y-hidden" x-data="setup()" x-init="$refs.loading.classList.add('hidden')">
      {{-- loading screen --}}
      @include('dashboard.components.loadingscreen')
      <!-- Sidebar backdrop -->
      <div x-show.in.out.opacity="isSidebarOpen" class="fixed inset-0 z-10 bg-black bg-opacity-20 lg:hidden" style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)"></div>
      <!-- Sidebar -->
      <aside x-cloak x-transition:enter="transition transform duration-300" x-transition:enter-start="-translate-x-full opacity-30 ease-in" x-transition:enter-end="translate-x-0 opacity-100 ease-out" x-transition:leave="transition transform duration-300" x-transition:leave-start="translate-x-0 opacity-100 ease-out" x-transition:leave-end="-translate-x-full opacity-0 ease-in" class="w-64 max-h-screen bg-white border-r shadow-lg lg:shadow-none fixed lg:static inset-y-0 z-10 lg:z-auto flex flex-col flex-shrink-0 overflow-hidden transition-all transform" :class="{'lg:w-20 -translate-x-full lg:translate-x-0': !isSidebarOpen}">
        {{-- sidebar header --}}
        @include('dashboard.components.sidebarheader')
        {{-- sidebar links --}}
        @include('dashboard.components.sidebarlinks')
      </aside>
      <div class="h-full flex flex-col flex-1 overflow-hidden text-white bg-slate-800">
        {{-- navbar --}}
        <header class="flex-shrink-0 border-b">
          <div class="flex items-center justify-between p-2">
            {{-- navbar left --}}
            @include('dashboard.components.navbarleft')
            {{-- mobile search box --}}
            @include('dashboard.components.mobilesearch')
            {{-- desktop search box --}}
            <div class="hidden lg:flex lg:flex-1 items-center space-x-2 text-white bg-slate-800 lg:mr-auto lg:ml-5 px-2">
              {{-- search icon --}}
              @include('dashboard.components.searchicon')
            </div>
            {{-- navbar right --}}
            <div class="relative flex items-center space-x-3">
              <!-- search button -->
              @include('dashboard.components.searchbutton')
              {{-- avatar --}}
              @include('dashboard.components.avatar')
            </div>
          </div>
        </header>
        {{-- main content --}}
        @include('dashboard.components.maincontent')
        {{-- footer --}}
        @include('dashboard.components.footer')
      </div>
      {{-- setting panel --}}
      @include('dashboard.components.settingpanel')
    </div>
  </div>
  {{-- tailwind js --}}
  @vite('resources/js/app.js')
  {{-- my script --}}
  <script>
    // dashboard
    const setup = () => {
      function getSidebarStateFromLocalStorage() {
        if (window.localStorage.getItem("isSidebarOpen")) {
          return JSON.parse(
            window.localStorage.getItem("isSidebarOpen")
          );
        }
        return false;
      }

      function setSidebarStateToLocalStorage(value) {
        window.localStorage.setItem("isSidebarOpen", value);
      }
      return {
        loading: true,
        isSidebarOpen: getSidebarStateFromLocalStorage(),
        toggleSidbarMenu() {
          this.isSidebarOpen = !this.isSidebarOpen;
          setSidebarStateToLocalStorage(this.isSidebarOpen);
        },
        isSettingsPanelOpen: false,
        isSearchBoxOpen: false,
      };
    };

    // tombol close alert
    function closeAlert(event) {
      let element = event.target;
      while (element.nodeName !== "BUTTON") {
        element = element.parentNode;
      }
      element.parentNode.parentNode.removeChild(element.parentNode);
    }

    // slug otomatis
    const title = document.querySelector("#title");
    const slug = document.querySelector("#slug");
    title.addEventListener("keyup", function() {
      let preslug = title.value;
      preslug = preslug.replace(/ /g, "-");
      slug.value = preslug.toLowerCase();
    });
  </script>
</body>

</html>