<!DOCTYPE html>
<html>
<title>Laravel with Livewire</title>
{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
@vite('resources/css/app.css')
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.x.x/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.1/slimselect.min.css">
<script src="https://cdn.jsdelivr.net/npm/slimselect@latest/dist/slimselect.min.js"></script>


@livewireStyles
</head>

<body class="fit-width" style="overflow: auto;">
    @yield('content')

    @livewireScripts
    @vite('resources/js/app.js')

    <script>
        document.querySelectorAll('.ss-single-selected').forEach(function(element) {
            element.addEventListener('click', function() {
                var content = this.nextElementSibling; // Lấy phần tử kế tiếp (ss-content)
                var selected = this.classList.toggle('ss-open-below');

                if (selected) {
                    content.classList.add('ss-open');
                } else {
                    content.classList.remove('ss-open');
                }
            });
        });
    </script>

</body>

</html>
