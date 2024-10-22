@props([
'post',
'latestPosts',
])

<x-layout>
    <x-slot:heading>Post Details</x-slot>

        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="row g-5">
                <!--begin::Post-->
                <div class="post d-flex flex-column-fluid" id="kt_post">
                    <!--begin::Container-->
                    <div id="kt_content_container" class="container-xxl">
                        <!--begin::Post card-->
                        <div class="card">
                            <!--begin::Body-->
                            <div class="card-body p-lg-20 pb-lg-0">
                                <!--begin::Layout-->
                                <div class="d-flex flex-column flex-xl-row">
                                    <!--begin::Content-->
                                    <div class="flex-lg-row-fluid me-xl-15">
                                        <!--begin::Post content-->
                                        <div class="mb-17">

                                            @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                            @endif

                                            <!--begin::Wrapper-->
                                            <div class="mb-8">
                                                <!--begin::Info-->
                                                <div class="d-flex mb-6 flex-wrap">
                                                    <!--begin::Item-->
                                                    <div class="my-1 me-9 flex items-center gap-3">
                                                        <!--begin::Icon-->
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                        <span class="svg-icon svg-icon-primary svg-icon-2 me-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect x="2" y="2" width="9" height="9" rx="2"
                                                                    fill="black" />
                                                                <rect opacity="0.3" x="13" y="2" width="9" height="9"
                                                                    rx="2" fill="black" />
                                                                <rect opacity="0.3" x="13" y="13" width="9" height="9"
                                                                    rx="2" fill="black" />
                                                                <rect opacity="0.3" x="2" y="13" width="9" height="9"
                                                                    rx="2" fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <!--end::Icon-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bolder text-gray-400">
                                                            {{ $post->category->name }}
                                                        </span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Title-->
                                                <div class="flex items-center justify-between gap-4">
                                                    <p class="text-dark text-hover-primary fs-2 fw-bolder">
                                                        {{ $post->title }}
                                                        <span class="fw-bolder text-muted fs-5 ps-1">5 mins read</span>
                                                    </p>

                                                    @can("update", $post)
                                                    <a class="btn btn-secondary btn-sm"
                                                        href="/posts/{{ $post->id }}/edit">Edit</a>
                                                    @endcan
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Description-->
                                            <div class="fs-5 fw-bold text-gray-600">
                                                <!--begin::Text-->
                                                <p class="mb-8 whitespace-pre-line">
                                                    {{ $post->content }}
                                                </p>
                                                <!--end::Text-->
                                                <!--begin::Text-->
                                                <p class="mb-8">
                                                    There’s an old maxim that states,
                                                    <span class="pe-1 text-gray-800">
                                                        “No fun for the writer, no fun for the reader.”
                                                    </span>
                                                    No matter what industry you’re working in, as a blogger, you should
                                                    live
                                                    and die by this statement.
                                                </p>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Description-->
                                            <!--begin::Block-->
                                            <div
                                                class="d-flex align-items-center border-1 card-rounded p-lg-10 mb-14 border-dashed p-5">
                                                <!--begin::Section-->
                                                <div class="me-lg-13 me-7 flex-shrink-0 text-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-70px symbol-circle mb-2">
                                                        <img src="/assets/media/avatars/150-2.jpg" class="" alt="" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Info-->
                                                    <div class="mb-0">
                                                        <a href="#" class="fw-bolder text-hover-primary text-gray-700">
                                                            {{ $post->user->name }}
                                                        </a>
                                                        <span class="fs-7 fw-bold d-block mt-1 text-gray-400">
                                                            Co-founder
                                                        </span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Text-->
                                                <div class="fs-6 mb-0">
                                                    <div class="text-muted fw-bold lh-lg mb-2">
                                                        First, a disclaimer – the entire process of writing a blog post
                                                        often takes more than a couple of hours, even if you can type
                                                        eighty
                                                        words per minute and your writing skills are sharp writing a
                                                        blog
                                                        post often takes more than a couple.
                                                    </div>
                                                    <a href="#" class="fw-bold link-primary">Author’s Profile</a>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Block-->
                                            <!--begin::Icons-->
                                            <div class="d-flex flex-center">
                                                <!--begin::Icon-->
                                                <a href="#" class="mx-4">
                                                    <img src="/assets/media/svg/brand-logos/facebook-4.svg"
                                                        class="h-20px my-2" alt="" />
                                                </a>
                                                <!--end::Icon-->
                                                <!--begin::Icon-->
                                                <a href="#" class="mx-4">
                                                    <img src="/assets/media/svg/brand-logos/instagram-2-1.svg"
                                                        class="h-20px my-2" alt="" />
                                                </a>
                                                <!--end::Icon-->
                                                <!--begin::Icon-->
                                                <a href="#" class="mx-4">
                                                    <img src="/assets/media/svg/brand-logos/github.svg"
                                                        class="h-20px my-2" alt="" />
                                                </a>
                                                <!--end::Icon-->
                                                <!--begin::Icon-->
                                                <a href="#" class="mx-4">
                                                    <img src="/assets/media/svg/brand-logos/behance.svg"
                                                        class="h-20px my-2" alt="" />
                                                </a>
                                                <!--end::Icon-->
                                                <!--begin::Icon-->
                                                <a href="#" class="mx-4">
                                                    <img src="/assets/media/svg/brand-logos/pinterest-p.svg"
                                                        class="h-20px my-2" alt="" />
                                                </a>
                                                <!--end::Icon-->
                                                <!--begin::Icon-->
                                                <a href="#" class="mx-4">
                                                    <img src="/assets/media/svg/brand-logos/twitter.svg"
                                                        class="h-20px my-2" alt="" />
                                                </a>
                                                <!--end::Icon-->
                                                <!--begin::Icon-->
                                                <a href="#" class="mx-4">
                                                    <img src="/assets/media/svg/brand-logos/dribbble-icon-1.svg"
                                                        class="h-20px my-2" alt="" />
                                                </a>
                                                <!--end::Icon-->
                                            </div>
                                            <!--end::Icons-->
                                        </div>
                                        <!--end::Post content-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Sidebar-->
                                    <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
                                        <!--begin::Recent posts-->
                                        <div class="m-0">
                                            <h4 class="mb-7 text-black text-lg font-semibold">Recent Posts</h4>
                                            @foreach ($latestPosts as $latest)
                                            <!--begin::Item-->
                                            <div class="d-flex mb-7 items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-60px symbol-2by3 me-4">
                                                    <div class="symbol-label" style="
                                                            background-image: url('/assets/media/stock/600x400/img-7.jpg');
                                                        "></div>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="m-0">
                                                    <a href="/posts/{{ $latest['id'] }}"
                                                        class="text-dark fw-bolder text-hover-primary fs-6 line-clamp-2">
                                                        {{ $latest->title }}
                                                    </a>
                                                    <span class="fw-bold d-block fs-7 pt-1 text-gray-600">
                                                        {{ date('d M, y', strtotime($latest->created_at)) }}
                                                    </span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            @endforeach
                                        </div>
                                        <!--end::Recent posts-->
                                        <!--begin::Tags-->
                                        <div class="m-0">
                                            <h4 class="mb-7 text-lg font-semibold">Relevant Tags</h4>
                                            @foreach ($categories as $category)
                                            <span class="btn btn-sm btn-link inline-block mr-2 !py-0 mb-3">
                                                <a href="/category/{{ $category -> id }}">{{ $category -> name }}</a>
                                            </span>
                                            @endforeach
                                        </div>
                                        <!--end::Tags-->
                                    </div>
                                    <!--end::Sidebar-->
                                </div>
                                <!--end::Layout-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Post card-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Post-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
</x-layout>