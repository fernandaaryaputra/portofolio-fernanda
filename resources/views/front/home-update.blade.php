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
    


 
   

    <div class="mx-auto lg:w-1/2 p-5 bg-primary mt-5 rounded-xl">
      <form method="POST" class="w-full h-full p-10">
        @csrf
        <!-- <div class="w-full h-full bg-sky-600 mb- p-10 "> -->
        <label
          for=""
          class="font-bold text-4xl text-white mb-5 sm:text-center text-center flex justify-center" 
          data-aos="flip-up"
          
          >Update Pesan</label
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
          Update
        </button>
        <!-- </div> -->
        <div class="mx-auto bg-teal-700 w-96"></div>
      </form>
    </div>
   
       <!-- footer section start -->
    
    <div class="w-full bg-[#023322] h-10 text-center py-2 text-white font-bold text-lg opacity-100 fixed right-0 bottom-0"> Copyright ©️ 2024 Fernanda Arya Putra</div>

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
