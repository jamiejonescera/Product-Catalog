@extends('layout')

@section('main-content')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="h-100">
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Tools & Components
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#pages"
                            aria-expanded="false" aria-controls="pages">
                            <i class="fa-regular fa-file-lines pe-2"></i>
                            Product Catalog
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="AdminCatalog" class="sidebar-link">Catalog</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="AdminCatalogSize" class="sidebar-link">Size</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="AdminCatalogColor" class="sidebar-link">Color</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Page Content -->
        <div class="container-fluid">
            <button type="button" class="btn btn-primary mx-auto" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Add Product
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Product</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="productForm">
                                @csrf
                                <label for="productName" class="form-label">Product Name</label>
                                <input class="form-control" type="text" id="productName" name="productName" required>

                                <br>
                                <label for="productImage" class="form-label">Apparel Picture</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="productImage" name="productImage" onchange="previewImage(this)" required>
                                    <label class="input-group-text" for="productImage">Upload</label>
                                    <img id="imagePreview" src="#" alt="Preview" style="max-width: 50px; max-height: 50px; display: none;">
                                </div>
                                <br>

                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="catalogOptions">Catalog Options</label>
                                    <select class="form-select" id="catalogOptions" name="catalogOptions" required>
                                        <option selected>Options</option>
                                        <option value="1">Mens</option>
                                        <option value="2">Womens</option>
                                        <option value="3">Unisex</option>
                                    </select>
                                </div>

                                <label for="productDescription" class="form-label">Description</label>
                                <textarea class="form-control" id="productDescription" name="productDescription" rows="3"
                                    required></textarea>

                                <br>
                                <label for="productMaterial" class="form-label">Material</label>
                                <textarea class="form-control" id="productMaterial" name="productMaterial" rows="3" required></textarea>

                                <br>
                                <label for="productCareguide" class="form-label">Careguide</label>
                                <textarea class="form-control" id="productCareguide" name="productCareguide" rows="3" required></textarea>

                                <br>
                                <label for="productQuantity" class="form-label">Quantity</label>
                                <input class="form-control" type="number" id="productQuantity" name="productQuantity" required>

                                <br>
                                <label for="productPrice" class="form-label">Price</label>
                                <input class="form-control" type="number" id="productPrice" name="productPrice" required>

                                <br>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="productAvailability">Availability</label>
                                    <select class="form-select" id="productAvailability" name="productAvailability" required>
                                        <option selected disabled>Select Availability</option>
                                        <option value="active">Active</option>
                                        <option value="not_active">Not Active</option>
                                    </select>
                                </div>
                            </form>

                            <div class="input-group mb-3">
                            <label class="input-group-text" for="productSize">Size</label>
                            <select class="form-select" id="productSize" name="productSize" required>
                                <option selected disabled>Select Size</option>
                                <option value="S">Small (S)</option>
                                <option value="M">Medium (M)</option>
                                <option value="L">Large (L)</option>
                                <!-- You can dynamically populate additional sizes from a database here -->
                            </select>
                        </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success" onclick="addProduct()">Add</button>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <div class="card mx-auto">
                <div class="card-header">
                    Manage Product
                </div>
                <div class="card-body">
                    <table class="table" id="producttable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Availability</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Product rows will be added dynamically here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#producttable').DataTable();
        });

        function addProduct() {
            // Get values from the form
            var formData = new FormData($('#productForm')[0]);

            // Add a new row to the table
            var table = $('#producttable').DataTable();
            table.row.add([
                table.data().length + 1, // Auto-increment #
                '<img src="' + URL.createObjectURL(formData.get('productImage')) + '" alt="Product Image" style="max-width: 50px; max-height: 50px;">',
                formData.get('productName'),
                formData.get('productPrice'),
                formData.get('productQuantity'),
                formData.get('productAvailability'),
                '<button type="button" class="btn btn-secondary btn-sm" onclick="modifyProduct(this)">Modify</button>' +
                '<button type="button" class="btn btn-secondary btn-sm" onclick="deleteProduct(this)">Trash</button>'
            ]).draw();

            // Clear form inputs
            $('#productForm')[0].reset();
            $('#imagePreview').hide();

            // Close the modal
            $('#staticBackdrop').modal('hide');

            // Show success notification
            alert('Product added successfully!');
        }

        function modifyProduct(button) {
            // Implement the logic to display and modify the row data as needed
            alert('Modify product logic goes here!');
        }

        function deleteProduct(button) {
            // Implement the logic to delete the row as needed
            alert('Delete product logic goes here!');
        }

        function previewImage(input) {
            var imgPreview = $('#imagePreview');
            var fileInput = input;

            imgPreview.show();

            var reader = new FileReader();
            reader.onload = function (e) {
                imgPreview.attr('src', e.target.result);
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    </script>
@endsection
