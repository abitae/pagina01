<x-furea-layout>
    @include('frontend.furea.include.header')
    <main class="main__content_wrapper">
        @include('frontend.furea.include.slider')
        @include('frontend.furea.include.categories')
        @include('frontend.furea.include.product')
        <!-- End product section -->
        @include('frontend.furea.include.product_slider')
        @include('frontend.furea.include.suscribe')
    </main>
    @include('frontend.furea.include.footer')
    @include('frontend.furea.include.popup')
</x-furea-layout>
