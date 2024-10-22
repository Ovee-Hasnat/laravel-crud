@props([
'categories', 'post'
])

<x-layout>
    <x-slot:heading>Update post</x-slot>

        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <div class="card mb-xl-10 mb-5">
                <!--begin::Content-->

                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form" method="POST" action="/posts/{{ $post -> id }}">
                    @csrf
                    @method('PATCH')


                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-bold fs-6">Category</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <select name="category" aria-label="Select a category" data-control="select2"
                                    data-placeholder="Select a category..."
                                    class="form-select form-select-solid form-select-lg fw-bold">
                                    <option value="">Select a category...</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $post->category_id == $category->id ?
                                        'selected' : '' }}>
                                        {{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <x-form-error name="category" />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-bold fs-6">Title</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <input type="text" name="title" class="form-control form-control-lg form-control-solid"
                                    placeholder="Enter Post Title" value="{{ $post->title }}" />
                                <x-form-error name="title" />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-bold fs-6">Content</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <textarea type="text" name="content" rows="10"
                                    class="form-control form-control-lg form-control-solid"
                                    placeholder="Enter Content">{{ $post->content }}</textarea>
                                <x-form-error name="content" />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Actions-->
                        <div class="card-footer d-flex justify-content-end px-9 py-6">
                            <a href="/dashboard" type="reset" class="btn btn-light btn-active-light-primary me-2"
                                onclick="">
                                Discard
                            </a>
                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">
                                Update
                            </button>
                        </div>
                        <!--end::Actions-->
                    </div>
                </form>
            </div>
        </div>
</x-layout>