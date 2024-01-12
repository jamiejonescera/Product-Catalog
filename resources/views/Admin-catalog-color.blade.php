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
            Add Value
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Color Attribute</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="exampleDataList" class="form-label">Color Value</label>
                        <input class="form-control" type="text" id="attributeValue" placeholder="Enter Attribute Value" aria-label="default input example">

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success" onclick="addAttributeValue()">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        <div class="card mx-auto">
            <div class="card-header">
                Manage Product Color
            </div>
            <div class="card-body">
                <table class="table" id="producttable">
                    <thead>
                        <tr>
                            <th scope="col">Attribute</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
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

        function addAttributeValue() {
            // Get value from the input field
            var attributeValue = $('#attributeValue').val();

            // Add a new row to the table
            var table = $('#producttable').DataTable();
            table.row.add([
                attributeValue,
                '<button type="button" class="btn btn-secondary btn-sm" onclick="modifyAttributeValue(this)">Modify</button>' +
                '<button type="button" class="btn btn-secondary btn-sm" onclick="deleteAttributeValue(this)">Trash</button>'
            ]).draw();

            // Clear the input field
            $('#attributeValue').val('');

            // Close the modal
            $('#staticBackdrop').modal('hide');

            // Show success notification
            alert('Color attribute value added successfully: ' + attributeValue);
        }

        function modifyAttributeValue(button) {
            // Implement the logic to display and modify the row data as needed
            alert('Modify color attribute value logic goes here!');
        }

        function deleteAttributeValue(button) {
            // Implement the logic to delete the row as needed
            alert('Delete color attribute value logic goes here!');
        }
    </script>
@endsection
