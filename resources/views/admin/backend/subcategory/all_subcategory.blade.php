@extends('./admin.admin_dashboard')
@section('admin')

<div class="page-content">
    <!--breadcrumb-->
    <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
        {{-- <div class="breadcrumb-title pe-3">All Category</div> --}}
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="p-0 mb-0 breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Sub Category</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ route('add.subcategory') }}" class="px-5 btn btn-primary">Add Sub Category</a>

            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">Sub Category Table</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Category Name</th>
                            <th>Sub-Category Name</th>


                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($subcategories as $key=> $item)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            {{-- <td>{{ $item->category_id }}</td> --}}
                            <td>{{ $item['category']['category_name']}}</td>
                            <td>{{ $item->subcategory_name }}</td>


                            <td>
                                <div class="gap-2 btn-group">
                                    <a href="{{ route('edit.subcategory', $item->id) }}" class="px-5 btn btn-success">Edit</a>
                                    <a href="{{ route('delete.subcategory', $item->id) }}" class="px-5 btn btn-danger" id="delete">Delete</a>

                                </div>
                            </td>

                        </tr>
                        @endforeach

                </table>
            </div>
        </div>
    </div>

</div>

@endsection
