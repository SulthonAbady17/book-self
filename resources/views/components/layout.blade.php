<!DOCTYPE html>
<html lang="en" dir="" class="relative min-h-full dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/main.min.css">

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="dark:bg-neutral-900">
    <!-- ========== HEADER ========== -->
    <x-navbar></x-navbar>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content">
        {{ $slot }}
    </main>
    <!-- ========== END MAIN CONTENT ========== -->
    <script src="../assets/vendor/preline/dist/index.js"></script>
</body>

</html>
