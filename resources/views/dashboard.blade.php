<x-layout>
    <x-slot:heading>Dashboard</x-slot>

    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!--begin::Row-->
        <div class="row g-5">
            <x-dashboard.category-table :categories="$categories" />
            <x-dashboard.mypost-table :posts="$posts" />
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</x-layout>
