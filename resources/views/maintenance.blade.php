<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Maintenance</title>
</head>

<body>
    <section class="bg-white lg:grid lg:h-screen lg:place-content-center">
        <div
            class="mx-auto w-screen max-w-screen-xl px-4 py-16 sm:px-6 sm:py-24 md:grid md:grid-cols-2 md:items-center md:gap-4 lg:px-8 lg:py-32">
            <div class="max-w-prose text-left">
                <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl">
                    SEDANG DALAM
                    <strong class="text-indigo-600"> PERBAIKAN </strong>
                </h1>

                <p class="mt-4 text-base text-pretty text-gray-700 sm:text-lg/relaxed">
                    Maaf, halaman yang Anda coba akses sedang dalam proses perbaikan. Kami sedang bekerja keras untuk
                    meningkatkan pengalaman Anda. Silakan kunjungi kembali nanti atau hubungi kami jika ada pertanyaan.
                </p>

                <div class="mt-4 flex gap-4 sm:mt-6">
                    {{-- <a class="inline-block rounded border border-indigo-600 bg-indigo-600 px-5 py-3 font-medium text-white shadow-sm transition-colors hover:bg-indigo-700"
                        href="#">
                        Get Started
                    </a>

                    <a class="inline-block rounded border border-gray-200 px-5 py-3 font-medium text-gray-700 shadow-sm transition-colors hover:bg-gray-50 hover:text-gray-900"
                        href="#">
                        Learn More
                    </a> --}}
                </div>
            </div>

            <img src="/pic/error.svg" alt="">
        </div>
    </section>
</body>

</html>
