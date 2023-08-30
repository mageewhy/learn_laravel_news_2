@extends('admin.dashboard-layout')
@section('admin-content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Add New Subcategory</h1>
                </div>
            </div><!--//row-->

            <div class="tab-content" id="orders-table-tab-content">
                <div class="app-card app-card-orders-table shadow-sm mb-5">
                    <div class="app-card-body">
                        <div class="col-12 col-md-8">
                            <form class="p-4" method="POST" action="{{ route('admin.store-subcategory') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="category_id" style="font-weight: bold;" class="form-label">Main Category</label>
                                    <select class="form-select w-auto" name="category_id" id="category_id">
                                        <option selected>Select Category</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->category_kh }} || {{ $item->category_en }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="sub_category_kh" style="font-weight: bold;" class="form-label">Subcategory Khmer</label>
                                    <input type="text" class="form-control" id="sub_category_kh" name="sub_category_kh"
                                        value="{{ old('sub_category_kh') }}" required>
                                    @error('sub_category_kh')
                                        <div class="text-danger m-0">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="sub_category_en" style="font-weight: bold;" class="form-label">Subcategory English</label>
                                    <input type="text" class="form-control" id="sub_category_kh" name="sub_category_en"
                                        value="{{ old('sub_category_en') }}" required>
                                    @error('sub_category_en')
                                        <div class="text-danger m-0">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn app-btn-primary">Add New</button>
                                <a href="{{ route('admin.subcategory') }}" class="btn btn-danger text-white">Cancel</a>
                            </form>
                        </div>
                    </div><!--//app-card-body-->
                </div><!--//app-card-->
            </div><!--//table-content-->
        </div><!--//container-fluid-->
    </div><!--//app-content-->
@endsection

{{-- Input with Popover --}}
{{-- <div class="mb-3">
        <label for="setting-input-1" class="form-label">Business Name<span
                class="ms-2" data-bs-container="body" data-bs-toggle="popover"
                data-bs-trigger="hover focus" data-bs-placement="top"
                data-bs-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg
                    width="1em" height="1em" viewBox="0 0 16 16"
                    class="bi bi-info-circle" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path
                        d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
                    <circle cx="8" cy="4.5" r="1" />
                </svg></span></label>
        <input type="text" class="form-control" id="setting-input-1"
            value="Lorem Ipsum Ltd." required>
    </div> --}}
