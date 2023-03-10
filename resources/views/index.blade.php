<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    {{-- Only Style Cdn link  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
</head>
<body>
    {{-- header Postion  --}}
    <section class="header">
        <x-include.header/>
        <x-blogs.offerBanner/>
        <x-include.slider/>
    </section>
    {{-- Categries Banner Section  --}}
    <section class="categriesBlogs">
        <x-blogs.categries-banner/>
    </section>
    {{-- Product Slider Section  --}}
    <section class="productSlider" style="background-color: #eee;"> 
        <x-blogs.ProductSlider/>
    </section>
    {{-- offer Banner section  --}}
    <section class="offerBanner my-5">
        <x-blogs.productGallery/>
    </section>
    <x-blogs.offerBanner/>
    @include('components.include.footer')

    {{-- Only Script Cdn link  --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>