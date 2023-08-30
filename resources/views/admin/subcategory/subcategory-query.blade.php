@extends('admin.dashboard-layout')
@section('admin-content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">

                    <h1 class="app-page-title mb-0">

                        <a href="{{ route('admin.subcategory') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                            </svg>
                        </a>

                        Subcategory
                    </h1>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <form class="table-search-form row gx-1 align-items-center"
                                    action="{{ route('subcategory-searchQuery') }}" method="GET">
                                    <div class="col-auto">
                                        <input type="text" id="search" name="search-subcategory" class="form-control"
                                            placeholder="Search">
                                    </div>
                                    <div class="col-auto">
                                        <select class="form-select w-auto" name="select-category-query">
                                            <option value="">All Category</option>
                                            @foreach ($category as $item)
                                                <option value="{{ $item->id }}"
                                                    @if ($category_id != null) {{ $item->id == $category_id->id ? 'selected' : '' }}
                                                @else
                                                    {{ $item->id == $category_id ? 'selected' : '' }} @endif>
                                                    {{ $item->category_kh }} || {{ $item->category_en }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn app-btn-secondary">Search</button>
                                    </div>
                                </form>
                            </div><!--//col-->

                            {{-- <div class="col-auto">
                                <select class="form-select w-auto">
                                    <option selected value="option-1">All</option>
                                    <option value="option-2">This week</option>
                                    <option value="option-3">This month</option>
                                    <option value="option-4">Last 3 months</option>

                                </select>
                            </div> --}}
                            {{-- <div class="col-auto">
                                <a class="btn app-btn-secondary" href="#">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                        <path fill-rule="evenodd"
                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                    </svg> Download Data </a>
                            </div> --}}
                        </div><!--//row-->
                    </div><!--//table-utilities-->
                </div><!--//col-auto-->
            </div><!--//row-->

            <div class="tab-content" id="orders-table-tab-content">
                <div class="app-card app-card-orders-table shadow-sm mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="cell">Category</th>
                                        <th class="cell">Subcategory Khmer</th>
                                        <th class="cell">Subcategory English</th>
                                        <th class="cell">Created At</th>
                                        <th class="cell">Updated At</th>
                                        <th class="cell">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($subcategory as $item)
                                        <tr>
                                            <td class="cell">{{ $item->category->category_kh }} ||
                                                {{ $item->category->category_en }}</td>
                                            <td class="cell">{{ $item->sub_category_kh }}</td>
                                            <td class="cell">{{ $item->sub_category_en }}</td>
                                            <td class="cell">{{ $item->created_at }}</td>
                                            <td class="cell">{{ $item->updated_at }}</td>
                                            <td class="cell">
                                                <a class="btn btn-primary"
                                                    href="{{ route('admin.edit-subcategory', $item->id) }}">Edit</a>
                                                <a class="btn btn-danger"
                                                    href="{{ route('admin.delete-subcategory', $item->id) }}"
                                                    id="delete">Delete</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6">
                                                <div class="text-center alert alert-danger">No record found</div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div><!--//table-responsive-->

                    </div><!--//app-card-body-->
                </div><!--//app-card-->
            </div><!--//table-content-->
            <div class="app-pagination">
                {{ $subcategory->links() }}
            </div><!--//app-pagination-->
        </div><!--//container-fluid-->
    </div><!--//app-content-->
@endsection
