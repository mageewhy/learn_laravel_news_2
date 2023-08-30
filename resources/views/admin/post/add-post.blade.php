@extends('admin.dashboard-layout')
@section('admin-content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Add New Post</h1>
                </div>
            </div><!--//row-->

            <div class="tab-content" id="orders-table-tab-content">
                <div class="app-card app-card-orders-table shadow-sm mb-5">
                    <div class="app-card-body">
                        <div class="col-12">
                            <form class="p-4" method="POST" action="{{ route('admin.store-post') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="mb-3 col-6">
                                        <label for="category_id" style="font-weight: bold;" class="form-label">Main
                                            Category</label>
                                        <select class="form-select " name="category_id" id="category">
                                            <option selected>Select Category</option>
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}">
                                                    {{ $item->category_kh }} || {{ $item->category_en }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3 col-6">
                                        <label for="sub_category_id" style="font-weight: bold;" class="form-label">Subcategory</label>
                                        <select class="form-select " name="sub_category_id" id="subcategory">
                                            <option value="">Select Subcategory</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="mb-3 col-6">
                                        <label for="title_kh" style="font-weight: bold;" class="form-label">Title
                                            Khmer</label>
                                        <input type="text" class="form-control" id="title_kh" name="title_kh"
                                            value="{{ old('title_kh') }}" required>
                                        @error('title_kh')
                                            <div class="text-danger m-0">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-6">
                                        <label for="title_en" style="font-weight: bold;" class="form-label">Title
                                            English</label>
                                        <input type="text" class="form-control" id="title_en" name="title_en"
                                            value="{{ old('title_en') }}" required>
                                        @error('title_en')
                                            <div class="text-danger m-0">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="mb-3 col-6">
                                        <label for="description_kh" style="font-weight: bold;"
                                            class="form-label">Description English</label>
                                        <textarea class="form-control" id="description_kh" rows="10" style="height:200px;" name="description_kh" required></textarea>
                                        @error('description_kh')
                                            <div class="text-danger m-0">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-6">
                                        <label for="description_en" style="font-weight: bold;"
                                            class="form-label">Description English</label>
                                        <textarea class="form-control" id="description_en" rows="10" style="height:200px;" name="description_en" required></textarea>
                                        @error('description_en')
                                            <div class="text-danger m-0">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="mb-3 col-6">
                                        <label for="image" style="font-weight: bold;">Image</label>
                                        <input type="file" class="form-control" name="image" id="selectImage">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="status" style="font-weight: bold;">Post Status</label>
                                        <input type="text" class="form-control" id="status" name="status"
                                        placeholder="Post Status">
                                        @error('status')
                                        <div class="text-danger m-0">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="col-auto">
                                    <img id="preview" src="#" alt="Image Preview" class="mt-3 mb-3"
                                    height="450" width="600" style="display: none;" />
                                </div> --}}
                                <button type="submit" class="btn app-btn-primary">Add New</button>
                                <a href="{{ route('admin.posts') }}" class="btn btn-danger text-white">Cancel</a>
                            </form>
                        </div>
                    </div><!--//app-card-body-->
                </div><!--//app-card-->
            </div><!--//table-content-->
        </div><!--//container-fluid-->
    </div><!--//app-content-->
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
        // alert('hellow')

        $('#category').change(function(e) {
            var cat_id = $(this).val();
            // alert('hello');

            $('#subcategory').html('<option value="">Select Subcategory</option>');
            $.ajax({
                url: "{{ route('admin.get-subcategory-option') }}",
                type: 'GET',
                data: 'cat_id=' + cat_id + '&_token={{ csrf_token() }}',

                success: function(result) {
                    // console.log(result);
                    $('#subcategory').html(result);
                    // alert('success');

                }
            });

        });
    });

    selectImage.onchange = evt => {
        preview = document.getElementById('preview');
        preview.style.display = "block";
        const [file] = selectImage.files;
        if (file) {
            preview.src = URL.createObjectURL(file);
        }
    }
</script>
