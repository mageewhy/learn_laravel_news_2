@extends('admin.dashboard-layout')
@section('admin-content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Comment</h1>
                </div>

                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <form class="table-search-form row gx-1 align-items-center"
                                    action="{{ route('comment-searchQuery', $post) }}" method="GET">
                                    <div class="col-auto">
                                        <input type="text" id="search" name="search-post" class="form-control"
                                            placeholder="Search Author of Comment">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn app-btn-secondary">Search</button>
                                    </div>
                                </form>
                            </div><!--//col-->
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
                                        <th class="cell">Subcategory</th>
                                        <th class="cell">Author Name</th>
                                        <th class="cell">Comments</th>
                                        <th class="cell">Created At</th>
                                        <th class="cell">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($comment as $item)
                                        <tr>
                                            <td class="cell">{{ $item->posts->category->category_kh }} ||
                                                {{ $item->posts->category->category_en }}</td>
                                            <td class="cell">{{ $item->posts->subcategory->sub_category_kh }} ||
                                                {{ $item->posts->subcategory->sub_category_en }}</td>
                                            <td class="cell">{{ $item->name }}</td>
                                            <td class="cell">{{ $item->comment }}</td>
                                            <td class="cell">{{ $item->created_at }}</td>
                                            <td class="cell">
                                                <a class="btn btn-danger"
                                                    href="{{ route('admin.delete-post', $item->id) }}"
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
            </div><!-- //table-content-->
            <div class="app-pagination">
                {{ $comment->links() }}
            </div><!--//app-pagination-->
        </div><!--//container-fluid-->
    </div><!--//app-content-->
@endsection

