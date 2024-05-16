<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>FERNANDA | PORTOFOLIO</title>
{{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
<link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <script>
    tailwind.config = {
      theme: {
         container: {
            center: true,
            padding: "16px",
        },
        extend: {
            width: {
                "30rem": "28rem",
            },
            colors: {
                primary: "#019B65",
                backgpround: "#2A2A2A",
                footer: "#023322",
                second: "#023322",
            },
            screens: {
                desktop: "8",
                "2xl": "1320px",
            },
            spacing: {
                "140px": "140px",
            },
            backgroundImage: {
                portofolio: "url('webportofolio.png')",
            },

        }
      }
    }
    </script>
      <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    {{--@vite('resources/css/app.css')--}}
    <!-- link css tailwinds -->
    {{-- <link rel="stylesheet" href="input.css" /> --}}
    {{--<link rel="stylesheet" href="public/output.css" />--}}
    <style type="text/css">
      #Portofolio {
        background-image: url(img/backrgound_portofolio.png);
      }
    header {
        background-color: #2A2A2A;
    }   
   .navbar-fixed {
    
    background-color: #2A2A2A;
    backdrop-filter: blur(5px);
    position:fixed;
    left: 0;
    right:0;
    top: 0;
    z-index: 9999;
    box-shadow: inset 0 -1px 0 0 rgba(0, 0, 0, 0.1);
}
.hamburger-line {
    width: 30px;
    height: 5px;
    margin-top: 4px;
    display: block;
    background-color: #019B65; /* Ganti dengan warna primer yang sesuai */
}

.hamburger-lines {
    width: 30px;
    height: 5px;
    margin-top: 5px;
    display: block;
    background-color: #019B65; /* Ganti dengan warna primer yang sesuai */
}

.hamburger-active > span:nth-child(1) {
    transform: rotate(40deg);
}

.hamburger-active > span:nth-child(3) {
    transform: rotate(-40deg);
}

.hamburger-active > span:nth-child(2) {
    transform: scale(0);
}

#textPortofolio {
    -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: white;
}
#textService {
    -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: #019b65;
}

    </style>
    {{-- link font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet" />

      {{-- link animate css --}}
      <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
     />

  {{-- link animate On Scroll --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  {{-- link icon --}}
  <link rel="icon" type="image/svg" href="font-sans-serif.svg">

<style type="css/text">

</style> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body class="bg-backgpround">
    @if($message = Session::get('success'))
    <script>
        Swal.fire({
            title: "Thank You",
            text: "{{ Session::get('success') }}",
            // background: "#00C853"
            // color: "#FAFAFA",
            icon: "success"
        });
    </script>
@endif
    {{-- @if($message = Session::get('success'))
        <div class="" style="background: green; color:white;padding:5px">
            {{ Session::get('success') }}
        </div>
    @endif --}}
     {{-- @if ($message = Session::get('success'))
     <div class="swal" data-swal="{{ session('success') }}"></div>
     <script>
      const swal = $('.swal').data('swal');

        if(swal){
            Swal.fire({
                'title':'Success',
                'text' : swal,
                'icon': 'success',
                'showConfirmButton':false,
                'timer':2000
            })
        }
      </script>    
     
    @endif
    --}}
     <header
      class="fixed top-0 left-0 w-full flex items-center z-30 animate__animated animate__fadeInDown header bg-[#2A2A2A]">
      <div class="container">
        <div class="flex flex-wrap items-center justify-between relative">
          <div class="px-4">
            <a href="#Home" class="font-bold text-4xl text-primary block py-6"
              >Fernanda<span class="text-white">.Id</span></a
            >
          </div>
          <div class="flex items-center px-4">
            <button
              id="hamburger"
              name=" hamburger"
              type="button"
              class="block absolute right-4 lg:hidden">
              <span
                class="hamburger-line transition duration-300 ease-in-out origin-top-left">
              </span>
              <span
                class="hamburger-line transition duration-300 ease-in-out"></span>
              <span
                class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
            </button>
            <nav
              id="nav-menu"
              class="hidden absolute py-5 bg-primary shadow-lg shadow-white rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
              <ul class="block lg:flex">
                <li class="group">
                  <a
                    href="#home"
                    class="text-base font-bold text-white py-2 mx-8 flex group-hover:text-black active:font-bold"
                    >HOME</a
                  >
                </li>
                <li class="group">
                  <a
                    href="#Service"
                    class="text-base font-bold text-white py-2 mx-8 flex group-hover:text-black active:font-bold"
                    >SERVICE</a
                  >
                </li>
                <li class="group">
                  <a
                    href="#Portofolio"
                    class="text-base font-bold text-white py-2 mx-8 flex group-hover:text-black active:font-bold"
                    >PORTOFOLIO</a
                  >
                </li>
                <li class="group">
                  <a
                    href="#About"
                    class="text-base font-bold text-white py-2 mx-8 flex group-hover:text-black active:font-bold"
                    >ABOUT ME</a
                  >
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
{{-- navbar section end --}}
    <!-- Hero section start -->
    <section id="home" class="py-10 bg-backgpround">
      <div class="container">
        <div class="flex flex-wrap justify-evenly lg:mt-10">
          <!-- container gambar -->
          <div class="w-full self-center px-4 lg:w-1/2">
            <div class="mt-10 relative lg:mt-9 lg:right-0 animate__animated animate__slideInLeft">
              <img
                src="{{ asset('img/baru.png') }}"
                alt="personal"
                class="w-full mx-auto brightness-50 shadow-lg shadow-black border rounded-2xl border-teal-600 border-transparent" />
              {{-- <span class="absolute top-0 -z-10 lg:left-28 lg:translate-y-10"
                ><div
                  class="w-96 h-96 bg-sky-500 rounded-full translate-x-6 lg:translate-y-10"></div
              ></span> --}}
            </div>
          </div>

          <!-- end -->
          <!-- hero-text -->
          <div class="w-full self-center px-4 lg:w-1/2 mt-10">
            <div class="lg:ml-16 lg:mt-10 animate__animated animate__slideInRight">
              <h1
                class="text-xl text-white font-bold md:text-xl lg:text-4xl  xl:text-4xl animate__animated animate__slideInRight">
                Hello, I'am
              </h1>
              <h4
                class="text-4xl font-bold mb-3 md:text-4xl lg:text-4xl lg:my-auto xl:text-6xl text-white animate__animated animate__slideInRight">
                A
                <span class="text-primary">Web developer | UI/UX Design </span>
              </h4>
              <p class="text-white mb-10 text-lg lg:text-2xl animate__animated animate__slideInRight">
                @foreach ($abouts as $item)
                    {{ $item->home }}
                @endforeach
              </p>

              <a
                href="#Portofolio"
                class="text-base text-white bg-primary px-4 py-3 rounded-full hover:bg-second hover:shadow-md hover:shadow-white transition duration-500 ease-in-out lg:text-xl active:bg-black animate__animated animate__bounceInDown animate__delay-1s"
                >View Portofolio</a
              >
              <p
                class="text-base text-white lg:mt-24 mt-10 lg:text-xl xl:mt-52  md:mt-5  lg:font-semibold animate__animated animate__backInUp">
                Email : fernandaaryaputra@gmail.com | From : Indonesia
              </p>
            </div>
          </div>
          <div class="relative p-10 z-20">
            {{-- facebook --}}
            <div
              class="w-12 h-12  rounded-full flex fixed bottom-5 right-5 cursor-pointer">
              <a href="https://www.facebook.com/fernandaaryaputra.fernandaaryaputra?mibextid=ZbWKwL" class="text m-auto">
                <svg width="42" height="45" viewBox="0 0 42 45" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-white hover:fill-[#019B65] stroke-white  hover:rounded-sm">
                  <path d="M41.6667 22.3153C41.6667 9.99727 32.3333 0 20.8333 0C9.33333 0 0 9.99727 0 22.3153C0 33.116 7.16667 42.109 16.6667 44.1844V29.0099H12.5V22.3153H16.6667V16.7365C16.6667 12.4296 19.9375 8.92613 23.9583 8.92613H29.1667V15.6207H25C23.8542 15.6207 22.9167 16.6249 22.9167 17.8523V22.3153H29.1667V29.0099H22.9167V44.5191C33.4375 43.4033 41.6667 33.897 41.6667 22.3153Z" />
                  </svg>

              </a>
            </div>
            {{-- Github --}}
            <div
              class="w-12 h-12  rounded-full flex fixed bottom-20 right-5 cursor-pointer  ">
              <a href="https://github.com/fernandaaryaputra" class="text m-auto ">
                <svg width="42" height="44" viewBox="0 0 42 44" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-white hover:fill-[#019B65] stroke-white  hover:rounded-sm">
                  <path d="M20.8333 0C18.0975 0 15.3884 0.577203 12.8608 1.69865C10.3331 2.8201 8.0365 4.46384 6.10194 6.53601C2.19493 10.7209 0 16.3969 0 22.3153C0 32.1787 5.97917 40.547 14.25 43.5149C15.2917 43.6934 15.625 43.0016 15.625 42.3991V38.6278C9.85417 39.9668 8.625 35.6376 8.625 35.6376C7.66667 33.049 6.3125 32.3572 6.3125 32.3572C4.41667 30.9737 6.45833 31.0183 6.45833 31.0183C8.54167 31.1745 9.64583 33.3168 9.64583 33.3168C11.4583 36.7087 14.5208 35.7045 15.7083 35.169C15.8958 33.7185 16.4375 32.7366 17.0208 32.1787C12.3958 31.6208 7.54167 29.7017 7.54167 21.1996C7.54167 18.7226 8.33333 16.7365 9.6875 15.1521C9.47917 14.5942 8.75 12.2734 9.89583 9.26086C9.89583 9.26086 11.6458 8.65835 15.625 11.537C17.2708 11.0461 19.0625 10.8006 20.8333 10.8006C22.6042 10.8006 24.3958 11.0461 26.0417 11.537C30.0208 8.65835 31.7708 9.26086 31.7708 9.26086C32.9167 12.2734 32.1875 14.5942 31.9792 15.1521C33.3333 16.7365 34.125 18.7226 34.125 21.1996C34.125 29.724 29.25 31.5985 24.6042 32.1564C25.3542 32.8482 26.0417 34.2094 26.0417 36.2847V42.3991C26.0417 43.0016 26.375 43.7157 27.4375 43.5149C35.7083 40.5246 41.6667 32.1787 41.6667 22.3153C41.6667 19.3848 41.1278 16.483 40.0808 13.7756C39.0339 11.0682 37.4993 8.60818 35.5647 6.53601C33.6302 4.46384 31.3335 2.8201 28.8059 1.69865C26.2783 0.577203 23.5692 0 20.8333 0Z" />
                  </svg>
              </a>
            </div>
            {{-- Instagram --}}
            <div
              class="w-12 h-12  rounded-full flex fixed bottom-140px right-5 cursor-pointer">
              <a href="https://www.instagram.com/aryafery_69?igsh=YjJvd3R1MzlqODhz" class="text m-auto">
                <svg width="42" height="45" viewBox="0 0 42 45"  xmlns="http://www.w3.org/2000/svg" class="fill-white hover:fill-[#019B65] stroke-white  hover:rounded-sm ">
                <path d="M22.9762 0C25.32 0.0066946 26.5095 0.0200838 27.5366 0.0513253L27.9408 0.0669459C28.4075 0.0847982 28.8679 0.107113 29.4241 0.133892C31.6408 0.245469 33.1533 0.620366 34.4804 1.17156C35.8554 1.73836 37.0137 2.50601 38.172 3.74451C39.2314 4.86005 40.0511 6.20944 40.5741 7.69879C41.0887 9.12028 41.4387 10.7404 41.5429 13.117C41.5679 13.7105 41.5887 14.2037 41.6054 14.7058L41.6179 15.1387C41.6491 16.2366 41.6616 17.5108 41.6658 20.0213L41.6679 21.686V24.6093C41.673 26.237 41.657 27.8647 41.6199 29.4919L41.6075 29.9249C41.5908 30.427 41.57 30.9201 41.545 31.5137C41.4408 33.8903 41.0866 35.5082 40.5741 36.9319C40.0526 38.422 39.2327 39.7718 38.172 40.8862C37.1303 42.0205 35.8706 42.8984 34.4804 43.4591C33.1533 44.0103 31.6408 44.3852 29.4241 44.4968C28.9298 44.5217 28.4353 44.544 27.9408 44.5637L27.5366 44.5771C26.5095 44.6083 25.32 44.624 22.9762 44.6284L21.422 44.6307H18.695C17.1747 44.6363 15.6544 44.6192 14.1345 44.5793L13.7304 44.566C13.2358 44.5459 12.7414 44.5228 12.247 44.4968C10.0304 44.3852 8.51787 44.0103 7.1887 43.4591C5.79843 42.8998 4.53915 42.0217 3.49912 40.8862C2.4388 39.771 1.61834 38.4216 1.09495 36.9319C0.580369 35.5104 0.230369 33.8903 0.126202 31.5137C0.102991 30.9842 0.0821576 30.4546 0.063702 29.9249L0.0532856 29.4919C0.014894 27.8647 -0.00246892 26.2371 0.00120208 24.6093V20.0213C-0.00461243 18.3936 0.010667 16.7659 0.0470356 15.1387L0.0616188 14.7058C0.0782855 14.2037 0.0991188 13.7105 0.124119 13.117C0.228285 10.7404 0.578285 9.12251 1.09287 7.69879C1.61602 6.20791 2.43812 4.8581 3.5012 3.74451C4.54098 2.60972 5.79942 1.73164 7.1887 1.17156C8.51787 0.620366 10.0283 0.245469 12.247 0.133892C12.8012 0.107113 13.2637 0.0847982 13.7304 0.0669459L14.1345 0.0535566C15.6537 0.0139085 17.1733 -0.00320158 18.6929 0.00223137L22.9762 0ZM20.8345 11.1577C18.0719 11.1577 15.4223 12.3332 13.4688 14.4257C11.5153 16.5181 10.4179 19.3561 10.4179 22.3153C10.4179 25.2745 11.5153 28.1125 13.4688 30.205C15.4223 32.2975 18.0719 33.473 20.8345 33.473C23.5972 33.473 26.2467 32.2975 28.2002 30.205C30.1537 28.1125 31.2512 25.2745 31.2512 22.3153C31.2512 19.3561 30.1537 16.5181 28.2002 14.4257C26.2467 12.3332 23.5972 11.1577 20.8345 11.1577ZM20.8345 15.6207C21.6553 15.6206 22.468 15.7936 23.2264 16.1299C23.9847 16.4662 24.6738 16.9592 25.2543 17.5807C25.8347 18.2023 26.2952 18.9402 26.6094 19.7524C26.9236 20.5646 27.0854 21.4351 27.0856 22.3142C27.0857 23.1934 26.9242 24.0639 26.6102 24.8762C26.2963 25.6885 25.836 26.4266 25.2557 27.0483C24.6755 27.6701 23.9865 28.1633 23.2283 28.4999C22.4701 28.8365 21.6574 29.0098 20.8366 29.0099C19.179 29.0099 17.5893 28.3046 16.4172 27.0491C15.2451 25.7936 14.5866 24.0909 14.5866 22.3153C14.5866 20.5398 15.2451 18.837 16.4172 17.5815C17.5893 16.3261 19.179 15.6207 20.8366 15.6207M31.7741 7.81037C31.0834 7.81037 30.4211 8.10425 29.9327 8.62737C29.4443 9.15049 29.17 9.85998 29.17 10.5998C29.17 11.3396 29.4443 12.0491 29.9327 12.5722C30.4211 13.0953 31.0834 13.3892 31.7741 13.3892C32.4648 13.3892 33.1272 13.0953 33.6155 12.5722C34.1039 12.0491 34.3783 11.3396 34.3783 10.5998C34.3783 9.85998 34.1039 9.15049 33.6155 8.62737C33.1272 8.10425 32.4648 7.81037 31.7741 7.81037Z" />
                </svg>
              </a>
            </div>
            {{-- TikTok --}}
            <div
              class="w-12 h-12  rounded-full flex fixed bottom-10 mb-40 right-5 cursor-pointer">
              <a href="https://www.instagram.com/aryafery_69?igsh=YjJvd3R1MzlqODhz" class="text m-auto">
                <svg width="33" height="41" viewBox="0 0 33 41"  xmlns="http://www.w3.org/2000/svg" class="fill-white hover:fill-[#019B65] stroke-white  hover:rounded-sm">
                <path d="M25.9167 6.29292C24.4926 4.55148 23.7077 2.31506 23.7083 0H17.2708V27.671C17.2212 29.1684 16.631 30.5868 15.6245 31.6274C14.618 32.668 13.2739 33.2496 11.875 33.2498C8.91667 33.2498 6.45833 30.6613 6.45833 27.4479C6.45833 23.6096 9.91667 20.7309 13.4792 21.9137V14.862C6.29167 13.8355 0 19.816 0 27.4479C0 34.8789 5.75 40.1676 11.8542 40.1676C18.3958 40.1676 23.7083 34.4772 23.7083 27.4479V13.4115C26.3187 15.4196 29.4528 16.4969 32.6667 16.491V9.59559C32.6667 9.59559 28.75 9.79643 25.9167 6.29292Z" />
                </svg>
              </a>
            </div>
          </div>
          <!-- end -->
        </div>
      </div>
    </section>
    <!-- Hero section End -->
    <!-- Sosmed -->

 
    <!-- card service start -->
    <div class="w-full " id="Service">
      <div class="bg-backgpround w-full gap-5 lg:h-full ">
        <div class="mb-10 h-5"></div>
        <h1
          class="text-6xl mt-10 mb-10 text-center font-bold text-white bg-gradient-to-br from-primary to-white bg-clip-text text-transparent lg:text-8xl"
          id="textService" data-aos="fade-up" data-aos-duration="1500">
          Services
        </h1>
        <div class="flex flex-wrap lg:mt-20 justify-center">
          {{-- card Service 1 --}}
          <div
            class="bg-black shadow-lg w-96 mx-auto py-5 px-8 mb-10 rounded-lg border border-white lg:w-30rem lg:mb-10 group hover:bg-primary hover:border hover:border-gray-950 hover:shadow-lg hover:shadow-slate-950 " data-aos="zoom-in-up" >
            <svg
              width="72"
              height="50"
              viewBox="0 0 72 50"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="w-20 h-20 fill-[#019B65] group-hover:fill-black">
              <path
                d="M6 49.5C4.35 49.5 2.938 48.9375 1.764 47.8124C0.59 46.6873 0.002 45.3332 0 43.75H12C10.35 43.75 8.938 43.1875 7.764 42.0624C6.59 40.9373 6.002 39.5832 6 38V6.375C6 4.79375 6.588 3.44058 7.764 2.3155C8.94 1.19042 10.352 0.626917 12 0.625H60C61.65 0.625 63.063 1.1885 64.239 2.3155C65.415 3.4425 66.002 4.79567 66 6.375V38C66 39.5813 65.413 40.9354 64.239 42.0624C63.065 43.1894 61.652 43.7519 60 43.75H72C72 45.3313 71.413 46.6854 70.239 47.8124C69.065 48.9394 67.652 49.5019 66 49.5H6ZM36 46.625C36.85 46.625 37.563 46.349 38.139 45.797C38.715 45.245 39.002 44.5627 39 43.75C39 42.9354 38.712 42.2531 38.136 41.703C37.56 41.1529 36.848 40.8769 36 40.875C35.15 40.875 34.438 41.151 33.864 41.703C33.29 42.255 33.002 42.9373 33 43.75C33 44.5646 33.288 45.2479 33.864 45.7999C34.44 46.3519 35.152 46.6269 36 46.625ZM12 38H60V6.375H12V38Z"
                 />
            </svg>

            <!-- <img src="laptop.svg" alt="" class="w-20 h-20 bg-white" /> -->
            <h1 class="text-2xl font-bold text-white">Web Design</h1>
            <p class="text-white">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
              similique.
            </p>
          </div>
          {{-- Card Service 2 --}}
          <div
            class="bg-black shadow-lg w-96 mx-auto py-5 px-8 mb-16 rounded-lg border border-white lg:w-30rem lg:mb-10 group hover:bg-primary hover:border hover:border-gray-950 hover:shadow-lg hover:shadow-slate-950" data-aos="zoom-in-up" data-aos-delay="200">
            <svg width="77" 
            height="50" 
            viewBox="0 0 77 45" 
            fill="none" 
            xmlns="http://www.w3.org/2000/svg" 
            class="w-20 h-20 group-hover:fill-black fill-[#019B65]">
            <path d="M0 44.25C0.525 38.0827 2.436 32.4052 5.733 27.2177C9.03 22.0302 13.419 17.9091 18.9 14.8542L12.425 3.78753C12.075 3.26878 11.9875 2.7212 12.1625 2.14482C12.3375 1.56843 12.7167 1.13613 13.3 0.84794C13.7667 0.559746 14.2917 0.502108 14.875 0.675025C15.4583 0.847941 15.925 1.19377 16.275 1.71252L22.75 12.7792C27.7667 10.7042 33.0167 9.66669 38.5 9.66669C43.9833 9.66669 49.2333 10.7042 54.25 12.7792L60.725 1.71252C61.075 1.19377 61.5417 0.847941 62.125 0.675025C62.7083 0.502108 63.2333 0.559746 63.7 0.84794C64.2833 1.13613 64.6625 1.56843 64.8375 2.14482C65.0125 2.7212 64.925 3.26878 64.575 3.78753L58.1 14.8542C63.5833 17.9091 67.9723 22.0302 71.267 27.2177C74.5617 32.4052 76.4727 38.0827 77 44.25H0ZM21 34.7396C22.225 34.7396 23.261 34.3212 24.108 33.4842C24.955 32.6473 25.3773 31.6248 25.375 30.4167C25.375 29.2063 24.9515 28.1826 24.1045 27.3457C23.2575 26.5088 22.2227 26.0915 21 26.0938C19.775 26.0938 18.739 26.5122 17.892 27.3492C17.045 28.1861 16.6227 29.2086 16.625 30.4167C16.625 31.6271 17.0485 32.6508 17.8955 33.4877C18.7425 34.3246 19.7773 34.7419 21 34.7396ZM56 34.7396C57.225 34.7396 58.261 34.3212 59.108 33.4842C59.955 32.6473 60.3773 31.6248 60.375 30.4167C60.375 29.2063 59.9515 28.1826 59.1045 27.3457C58.2575 26.5088 57.2227 26.0915 56 26.0938C54.775 26.0938 53.739 26.5122 52.892 27.3492C52.045 28.1861 51.6227 29.2086 51.625 30.4167C51.625 31.6271 52.0485 32.6508 52.8955 33.4877C53.7425 34.3246 54.7773 34.7419 56 34.7396Z" />
            </svg>


            <!-- <img src="laptop.svg" alt="" class="w-20 h-20 bg-white" /> -->
            <h1 class="text-2xl font-bold text-white">App Developer</h1>
            <p class="text-white">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
              similique.
            </p>
          </div>
          {{-- Card Service 3 --}}
          <div
            class="bg-black shadow-lg w-96 mx-auto py-5 px-8 mb-10 rounded-lg border border-white lg:w-30rem lg:mb-10 group hover:bg-primary hover:border hover:border-gray-950 hover:shadow-lg hover:shadow-slate-950" data-aos="zoom-in-up" data-aos-delay="400" >
          <svg
                width="30"
                height="30"
                viewBox="0 0 48 48"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-20 h-20 group-hover:fill-black fill-[#019B65]">
                <path
                  d="M24 21.3333C30.6667 21.3333 36.3333 20.2889 41 18.2C45.6667 16.1111 48 13.6 48 10.6667C48 7.73333 45.6667 5.22222 41 3.13333C36.3333 1.04444 30.6667 0 24 0C17.3333 0 11.6667 1.04444 7 3.13333C2.33333 5.22222 0 7.73333 0 10.6667C0 13.6 2.33333 16.1111 7 18.2C11.6667 20.2889 17.3333 21.3333 24 21.3333ZM24 28C25.8222 28 28.1004 27.8107 30.8347 27.432C33.5689 27.0533 36.2018 26.4427 38.7333 25.6C41.2667 24.7556 43.4444 23.656 45.2667 22.3013C47.0889 20.9467 48 19.2907 48 17.3333V24C48 25.9556 47.0889 27.6116 45.2667 28.968C43.4444 30.3244 41.2667 31.424 38.7333 32.2667C36.2 33.1111 33.5671 33.7227 30.8347 34.1013C28.1022 34.48 25.824 34.6684 24 34.6667C22.1778 34.6667 19.9004 34.4773 17.168 34.0987C14.4356 33.72 11.8018 33.1093 9.26667 32.2667C6.73333 31.4222 4.55556 30.3227 2.73333 28.968C0.911111 27.6133 0 25.9573 0 24V17.3333C0 19.2889 0.911111 20.9449 2.73333 22.3013C4.55556 23.6578 6.73333 24.7573 9.26667 25.6C11.8 26.4444 14.4338 27.056 17.168 27.4347C19.9022 27.8133 22.1796 28.0018 24 28ZM24 41.3333C25.8222 41.3333 28.1004 41.144 30.8347 40.7653C33.5689 40.3867 36.2018 39.776 38.7333 38.9333C41.2667 38.0889 43.4444 36.9893 45.2667 35.6347C47.0889 34.28 48 32.624 48 30.6667V37.3333C48 39.2889 47.0889 40.9449 45.2667 42.3013C43.4444 43.6578 41.2667 44.7573 38.7333 45.6C36.2 46.4444 33.5671 47.056 30.8347 47.4347C28.1022 47.8133 25.824 48.0018 24 48C22.1778 48 19.9004 47.8107 17.168 47.432C14.4356 47.0533 11.8018 46.4427 9.26667 45.6C6.73333 44.7556 4.55556 43.656 2.73333 42.3013C0.911111 40.9467 0 39.2907 0 37.3333V30.6667C0 32.6222 0.911111 34.2782 2.73333 35.6347C4.55556 36.9911 6.73333 38.0907 9.26667 38.9333C11.8 39.7778 14.4338 40.3893 17.168 40.768C19.9022 41.1467 22.1796 41.3351 24 41.3333Z"
                   />
              </svg>


            <!-- <img src="laptop.svg" alt="" class="w-20 h-20 bg-white" /> -->
            <h1 class="text-2xl font-bold text-white">Back-End Development</h1>
            <p class="text-white">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
              similique.
            </p>
          </div>
          {{-- Card Service 4 --}}
          <div
            class="bg-black shadow-lg w-96 mx-auto py-5 px-8 mb-10 rounded-lg border border-white lg:w-30rem lg:mb-10 group hover:bg-primary hover:border hover:border-gray-950 hover:shadow-lg hover:shadow-slate-950" data-aos="zoom-in-up" data-aos-delay="600">
                <svg
                  width="60"
                  height="50"
                  viewBox="0 0 60 50"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-20 h-20 group-hover:fill-black fill-[#019B65]">
                  <path
                    d="M6 50C4.35 50 2.938 49.3885 1.764 48.1656C0.59 46.9427 0.002 45.4708 0 43.75V6.25C0 4.53125 0.588 3.06042 1.764 1.8375C2.94 0.614583 4.352 0.00208333 6 0H54C55.65 0 57.063 0.612499 58.239 1.8375C59.415 3.0625 60.002 4.53333 60 6.25V43.75C60 45.4687 59.413 46.9406 58.239 48.1656C57.065 49.3906 55.652 50.0021 54 50H6ZM6 43.75H37.5V32.8125H6V43.75ZM43.5 43.75H54V15.625H43.5V43.75ZM6 26.5625H37.5V15.625H6V26.5625Z"
                    />
                </svg>

            <!-- <img src="laptop.svg" alt="" class="w-20 h-20 bg-white" /> -->
            <h1 class="text-2xl font-bold text-white">Web Development</h1>
            <p class="text-white">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
              similique.
            </p>
          </div>
          {{-- Card Service 5 --}}
          <div
            class="bg-black shadow-lg w-96 mx-auto py-5 px-8 mb-10 rounded-lg border border-white lg:w-30rem lg:mb-10 group hover:bg-primary hover:border hover:border-gray-950 hover:shadow-lg hover:shadow-slate-950" data-aos="zoom-in-up" data-aos-delay="800">
             <svg
                width="38"
                height="59"
                viewBox="0 0 38 59"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-20 h-20 group-hover:fill-black fill-[#019B65]">
                <path
                  d="M14.6667 50.6667H22.6667C23.0222 50.6667 23.3333 50.5333 23.6 50.2667C23.8667 50 24 49.6889 24 49.3333C24 48.9778 23.8667 48.6667 23.6 48.4C23.3333 48.1333 23.0222 48 22.6667 48H14.6667C14.3111 48 14 48.1333 13.7333 48.4C13.4667 48.6667 13.3333 48.9778 13.3333 49.3333C13.3333 49.6889 13.4667 50 13.7333 50.2667C14 50.5333 14.3111 50.6667 14.6667 50.6667ZM5.33333 58.6667C3.86667 58.6667 2.61156 58.1449 1.568 57.1013C0.524444 56.0578 0.00177778 54.8018 0 53.3333V5.33333C0 3.86667 0.522666 2.61156 1.568 1.568C2.61333 0.524445 3.86844 0.00177778 5.33333 0H32C33.4667 0 34.7227 0.522667 35.768 1.568C36.8133 2.61333 37.3351 3.86844 37.3333 5.33333V53.3333C37.3333 54.8 36.8116 56.056 35.768 57.1013C34.7244 58.1467 33.4684 58.6684 32 58.6667H5.33333ZM5.33333 45.3333V53.3333H32V45.3333H5.33333ZM5.33333 40H32V13.3333H5.33333V40ZM5.33333 8H32V5.33333H5.33333V8Z"
                   />
              </svg>

            <!-- <img src="laptop.svg" alt="" class="w-20 h-20 bg-white" /> -->
            <h1 class="text-2xl font-bold text-white">Flutter Developer</h1>
            <p class="text-white">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
              similique.
            </p>
          </div>
          {{-- Card Service 6 --}}
          <div
            class="bg-black shadow-lg w-96 mx-auto py-5 px-8 mb-10 rounded-lg border border-white lg:w-30rem lg:mb-10 group hover:bg-primary hover:border hover:border-gray-950 hover:shadow-lg hover:shadow-slate-950" data-aos="zoom-in-up" data-aos-delay="1000">
              <svg
                width="53"
                height="49"
                viewBox="0 0 53 49"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-20 h-20 group-hover:fill-black fill-[#019B65]">
                <path
                  d="M24.5311 34.7854L15.3194 26.2802C16.9653 23.6046 19.366 20.9542 22.5184 18.3375C26.5831 14.9566 33.7579 9.24169 44.0395 1.19263C45.0812 0.376799 46.4171 -0.0474277 47.7819 0.00421722C49.1467 0.0558622 50.4405 0.5796 51.4064 1.4714C52.3723 2.3632 52.9395 3.55781 52.9954 4.81795C53.0514 6.07809 52.5919 7.31155 51.7083 8.27334C42.9786 17.7833 36.792 24.4078 33.1425 28.1441C30.3084 31.0464 27.4379 33.2601 24.5311 34.7854ZM11.1455 30.3467L20.1329 38.642L15.9923 43.9763L0 49L5.36816 34.1669L11.1455 30.3467Z"
                   />
              </svg>

            <!-- <img src="laptop.svg" alt="" class="w-20 h-20 bg-white" /> -->
            <h1 class="text-2xl font-bold text-white">UI / UX Design</h1>
            <p class="text-white">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
              similique.
            </p>
          </div>
        </div>
        <div class="hidden w-5 lg:block h-24"></div>
      </div>
    </div>
    <!-- card service end -->

    <!-- card Portofolio start -->
    <div
      class="w-full pb-10 bg-portofolio lg:h-screen bg-repeat grayscale-0"
      id="Portofolio">
      <h1
        class="text-6xl font-bold p-10 mx-auto text-center text-primary outline-2 outline-blue-600 lg:pb-20 lg:text-8xl"
        id="textPortofolio" data-aos="fade-up" data-aos-duration="1000">
        PORTOFOLIO
      </h1>
      <div class="flex flex-wrap w-full gap-0">
        {{-- card Portofolio 1 --}}
        <div
          class="w-96 mx-auto pb-5 rounded-xl overflow-hidden shadow-xl shadow-slate-700 mb-5 group hover:bg-primary" data-aos="fade-up-right" data-aos-delay="400">
          <img src="{{ asset("img/webportofolio.png") }}" alt="" class="bg-center mb-2" />
          <h2 class="text-2xl font-bold px-5 mt-5 group-hover:text-white">Web Ecomerce</h2>
          <p class="mb-10 px-5 group-hover:text-white" >
            Pembuatan sebuah website ecomerce Tentang penjualan kerudung yang
            responsive
          </p>
          <div class="ml-5 mb-5">
            <a
              href="#"
              class="mt-10 px-8 text-lg mb-10 py-2 bg-primary text-white rounded-xl group-hover:bg-white group-hover:text-primary hover:shadow-md hover:shadow-slate-800 active:bg-primary active:text-white "
              >VISIT</a
            >
          </div>
        </div>
                {{-- card Portofolio 2 --}}
        <div
          class="w-96 mx-auto pb-5 rounded-xl overflow-hidden shadow-xl shadow-slate-700 mb-5 group hover:bg-primary" data-aos="fade-up" data-aos-delay="600">
          <img src="{{ asset("img/webportofolio.png") }}" alt="" class="bg-center mb-2" />
          <h2 class="text-2xl font-bold px-5 mt-5 group-hover:text-white" >Web Ecomerce</h2>
          <p class="mb-10 px-5 group-hover:text-white">
            Pembuatan sebuah website ecomerce Tentang penjualan kerudung yang
            responsive
          </p>
          <div class="ml-5 mb-5">
            <a
              href="#"
              class="mt-10 px-8 text-lg mb-10 py-2 bg-primary text-white rounded-xl group-hover:bg-white group-hover:text-primary hover:shadow-md hover:shadow-slate-800 active:bg-primary active:text-white"
              >VISIT</a
            >
          </div>
        </div>
                {{-- card Portofolio 3 --}}
        <div
          class="w-96 mx-auto pb-5 rounded-xl overflow-hidden shadow-xl shadow-slate-700 mb-5 group hover:bg-primary" data-aos="fade-up-left" data-aos-delay="800">
          <img src="{{ asset("img/webportofolio.png") }}" alt="" class="bg-center mb-2" />
          <h2 class="text-2xl font-bold px-5 mt-5 group-hover:text-white">Web Ecomerce</h2>
          <p class="mb-10 px-5 group-hover:text-white">
            Pembuatan sebuah website ecomerce Tentang penjualan kerudung yang
            responsive
          </p>
          <div class="ml-5 mb-5">
            <a
              href="#"
              class="mt-10 px-8 text-lg mb-10 py-2 bg-primary text-white rounded-xl group-hover:bg-white group-hover:text-primary hover:shadow-md hover:shadow-slate-800 active:bg-primary active:text-white"
              >VISIT</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- card Portofolio End -->

    <!-- About Section start -->
    <section id="About" class="py-10 pb-20 bg-backgpround">
      <div class="container">
        <div class="flex flex-wrap justify-evenly">
          <!-- container gambar -->
          <div class="w-full self-end px-4 lg:w-1/2">
            <div class="mt-10 relative lg:mt-9 lg:right-0" data-aos="zoom-out" data-aos-duration="1000">
              <img
                src="{{ asset("img/baru.png") }}"
                alt=""
                class="w-full mx-auto brightness-50 shadow-lg shadow-black border rounded-full border-teal-600 border-transparent" />
              {{-- <span class="absolute top-0 -z-10 lg:left-28 lg:translate-y-10"
                ><div
                  class="w-96 h-96  rounded-full translate-x-6 lg:translate-y-10"></div
              ></span> --}}
            </div>
          </div>

          <!-- end -->
          <!-- hero-text -->
          <div class="w-full self-center px-4 lg:w-1/2 mt-10" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="lg:py-8">
              <h1
                class="text-2xl lg:text-4xl text-primary font-bold " data-aos="zoom-in-right" >
                Who am I?
              </h1>
              <h4 class="text-3xl lg:text-6xl font-bold mb-3 text-white" data-aos="zoom-in-right" data-aos-delay="200">
                I'am Fernanda Arya Putra, a Visual UI/UX Design and web
                developer
              </h4>
              <p class="text-white mb-2 text-lg lg:text-xl" data-aos="zoom-in-right" data-aos-delay="400">
                @foreach ($abouts as $item)
                    {{ $item->isi }}
                @endforeach
              </p>
              <p class="h-[4px] w-full bg-white my-2 mb-1" data-aos="zoom-in-right" data-aos-delay="600"></p>
              <div
                class="flex flex-wrap  w-full py-6 mb-10 gap-7 justify-stretch" data-aos="zoom-in-right" data-aos-delay="800">
                <div class="text-white text-lg">
                  <h4>Name : Fernanda Arya Putra</h4>
                  <h4>Github : fernandaarya</h4>
                  <h4>Instagram : @aryafery_69</h4>
                </div>
                <div class="text-white text-lg w-1/2 self-start" data-aos="zoom-in-right" data-aos-delay="1000">
                  <h4>Age : 20</h4>
                  <h4>From : Indonesia</h4>
                </div>
              </div>
              <a
                href="#Portofolio"
                class="text-base text-white bg-primary px-4 py-3 mt-10 rounded-full hhover:bg-second hover:shadow-md hover:shadow-white transition duration-500 ease-in-out lg:text-xl active:bg-black hover:bg-second" data-aos="fade-up-left"
                >My Portofolio</a
              >
            </div>
          </div>
          <!-- end -->
        </div>
      </div>
    </section>
       <!-- footer section start -->
    <div class="w-full bg-primary rounded-t-full">
      <div class="flex flex-wrap w-full">
        <div class="mx-auto self-center lg:w-1/2">
          <img src="{{ asset("img/footer.png") }}" alt="" />
        </div>
        <div class="mx-auto lg:w-1/2 p-10">
          <form method="POST" class="w-full h-full p-10">
            @csrf
            <!-- <div class="w-full h-full bg-sky-600 mb- p-10 "> -->
            <label
              for=""
              class="font-bold text-4xl text-white mb-5 sm:text-center"
              data-aos="flip-up"
              
              >Contact Me</label
            >
            <br />
            <input
              type="text"
              class="bg-slate-900 bg-opacity-55 w-full mt-2 py-2 px-2 text-xl rounded-xl text-white  hover:bg-white hover:text-black hover:border-l hover:border-second focus:text-black focus:bg-white focus:shadow-md focus:shadow-second active:bg-primary focus:border-2 focus:border-second"
              placeholder="Your Name *" name="name" value="{{ (isset($tamu)) ? $tamu->name:"" }}" />
            <input
              type="text"
              class="bg-slate-900 bg-opacity-55 w-full mt-2 py-2 px-2 text-xl rounded-xl text-white hover:bg-white hover:text-black hover:border-l hover:border-second focus:text-black focus:bg-white focus:shadow-md focus:shadow-second active:bg-primary focus:border-2 focus:border-second"
              placeholder="Your From *" name="from" value="{{ (isset($tamu)) ? $tamu->from:"" }}"/>
            <input
              type="text"
              class="bg-slate-900 bg-opacity-55 w-full mt-2 py-2 px-2 text-xl rounded-xl text-white hover:bg-white hover:text-black hover:border-l hover:border-second focus:text-black focus:bg-white focus:shadow-md focus:shadow-second active:bg-primary focus:border-2 focus:border-second"
              placeholder="Your Instagram *" name="instagram" value="{{ (isset($tamu)) ? $tamu->instagram:"" }}"/>
            <textarea
              name="pesan"
              id="mesaage"
              cols="30"
              rows="6"
              class="bg-slate-900 bg-opacity-55 w-full mt-2 py-2 px-2 text-xl rounded-xl text-white  hover:bg-white hover:text-black hover:border-l hover:border-second focus:text-black focus:bg-white focus:shadow-md focus:shadow-second active:bg-primary focus:border-2 focus:border-second"
              
              placeholder="Your Message"
              value="{{ (isset($tamu)) ? $tamu->pesan:"" }}"></textarea>
            <!-- <input
              type="textarea "
              class="h-36 w-full rounded-2xl bg-slate-900 bg-opacity-55 text-pretty mt-2"
              placeholder="Your Message " /> -->
            <button
              class="bg-white my-5 py-2 px-3 rounded-full text-primary font-bold text-xl hover:bg-primary hover:text-white hover:border hover:border-black active:bg-red-700" type="submit">
              Send Message
            </button>
            <!-- </div> -->
            <div class="mx-auto bg-teal-700 w-96"></div>
          </form>
        </div>
      </div>
    </div>
    <div class="w-full bg-[#023322] h-10 text-center py-2 text-white font-bold text-lg opacity-100"> Copyright ©️ 2024 Fernanda Arya Putra</div>

    {{-- footer section end --}}
    {{-- <div class="mb-96"></div>
    <div class="mb-96"></div> --}}
    {{-- File Javascript --}}
   
    <script>
      
      const swal = $('.swal').data('swal');

        if(swal){
            Swal.fire({
                'title':'Success',
                'text' : swal,
                'icon': 'success',
                'showConfirmButton':false,
                'timer':2000
            })
        }


//       // navbar fixed
//     window.onscroll = function () {
//     const header = document.querySelector("header");
//     const fixedNav = header.offsetTop;
//     if (window.pageYOffset > fixedNav) {
//         header.classList.add("navbar-fixed");
//     } else {
//         header.classList.remove("navbar-fixed");
//     }
// };

// // hamburger
// const hamburger = document.querySelector("#hamburger");
// const navMenu = document.querySelector("#nav-menu");
// hamburger.addEventListener("click", function () {
//     hamburger.classList.toggle("hamburger-active");
//     navMenu.classList.toggle("hidden");
// });

    </script>
    <script>
        // navbar fixed
// document.addEventListener("DOMContentLoaded", function() {
//     window.onscroll = function() {
//         const header = document.querySelector(".header"); // Sesuaikan dengan kelas header Anda
//         const fixedNav = header.offsetTop;
//         if (window.pageYOffset > fixedNav) {
//             header.classList.add("navbar-fixed");
//         } else {
//             header.classList.remove("navbar-fixed");
//         }
//     };
// });


// hamburger
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");
hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});

    </script>
    {{--<script src="js/script.js"></script>--}}
   
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
   <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>
