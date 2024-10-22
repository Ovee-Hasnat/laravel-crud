@props(['category', 'posts'])

<x-layout>
    <x-slot:heading>Posts on {{ $category -> name }}</x-slot>

        <div id="kt_content_container" class="container-xxl">
            @if ($posts->isEmpty())
            <p class="text-lg font-medium italic text-center">No posts found!
                <span><a href="/posts" class="underline text-blue-500">Back to all posts.</a></span>
            </p>
            @endif

            <a href="/posts" class="underline font-semibold mb-6 block">Back to all posts.</a>

            <div class="mb-10 grid grid-cols-3 gap-10">
                @foreach ($posts as $post)
                <!--begin::Post-->
                <div class="ps-lg-6 mt-md-0 flex h-full flex-col justify-between rounded-lg bg-white p-4 shadow-sm">
                    <!--begin::Body-->
                    <div class="mb-6">
                        <!--begin::Title-->
                        <a href="/posts/{{ $post['id'] }}"
                            class="fw-bolder text-dark fs-2 lh-base text-hover-primary mb-4 line-clamp-2">
                            {{ $post['title'] }}
                        </a>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <div class="fw-bold fs-5 text-dark mt-4 line-clamp-3 text-gray-600">
                            {{ $post['content'] }}
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="d-flex flex-stack flex-wrap">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center pe-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle me-3">
                                <img src="/assets/media/avatars/150-20.jpg" class="object-cover" alt="" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Text-->
                            <div class="fs-5 fw-bolder">
                                <a href="#" class="text-hover-primary text-gray-700">
                                    {{ $post->user->name }}
                                </a>
                                <span class="text-muted">on {{ date('d M, y', strtotime($post->created_at)) }}</span>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Label-->
                        <span class="badge badge-light-info fw-bolder my-2 uppercase">
                            {{ $post->category->name }}
                        </span>
                        <!--end::Label-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Post-->
                @endforeach
            </div>

            <div>
                {{ $posts->links() }}
            </div>
        </div>
</x-layout>