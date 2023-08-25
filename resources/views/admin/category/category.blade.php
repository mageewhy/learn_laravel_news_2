@extends('admin.dashboard-layout')
@section('admin-content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="tab-content" id="orders-table-tab-content">
                <div class="app-card app-card-orders-table shadow-sm mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="cell">ID</th>
                                        <th class="cell">Category Khmer</th>
                                        <th class="cell">Category English</th>
                                        <th class="cell">Created At</th>
                                        <th class="cell">Updated At</th>
                                        <th class="cell">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($category as $item)
                                        <tr>
                                            <td class="cell">{{ $item->id }}</td>
                                            <td class="cell">{{ $item->category_kh }}</td>
                                            <td class="cell">{{ $item->category_en }}</td>
                                            <td class="cell">{{ $item->created_at }}</td>
                                            <td class="cell">{{ $item->updated_at }}</td>
                                            <td class="cell">
                                                <a class="btn btn-primary"
                                                    href="{{ route('admin.edit-category', $item->id) }}">Edit</a>
                                                <a class="btn btn-danger"
                                                    href="{{ route('admin.delete-category', $item->id) }}"
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
                <nav class="app-pagination">
                    {{ $category->links('pagination::bootstrap-4') }}
                </nav><!--//app-pagination-->
            </div><!--//container-fluid-->
        </div><!--//app-content-->
    @endsection
