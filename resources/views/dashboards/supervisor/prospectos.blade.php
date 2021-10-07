    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>

    .modal-header .close {
        padding: 1rem 1rem !important;
        margin: 0rem 0rem 0rem auto !important;
    }
    .marquee {
        width: 100%;
        overflow: hidden;
        white-space: nowrap;
        }
        .marquee:hover .marquee__item {
        -webkit-animation-play-state: paused;
                animation-play-state: paused;
        }
        .marquee__seperator {
        margin: 0 2rem;
        }
        .marquee__item {
        display: inline-block;
        will-change: transform;
        -webkit-animation: marquee 25s linear infinite;
                animation: marquee 25s linear infinite;
        }

        @-webkit-keyframes marquee {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-100%);
        }
        }

        @keyframes marquee {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-100%);
        }
        }
        .marquee {
        background-color: red;
        padding: 1rem 0;
        color: #fff;
        }

    /* Tabla */
    body {
        color: #566787;
        background: #f5f5f5;
        font-family: "Varela Round", sans-serif;
        font-size: 13px;
        }
        .table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
        border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        }
        .table-title {
        padding-bottom: 15px;
        background: #435d7d;
        color: #fff;
        padding: 16px 30px;
        margin: -20px -25px 10px;
        border-radius: 3px 3px 0 0;
        }
        .table-title h2 {
        margin: 5px 0 0;
        font-size: 24px;
        }
        .table-title .btn-group {
        float: right;
        }
        .table-title .btn {
        color: #fff;
        float: right;
        font-size: 13px;
        border: none;
        min-width: 50px;
        border-radius: 2px;
        border: none;
        outline: none !important;
        margin-left: 10px;
        }
        .table-title .btn i {
        float: left;
        font-size: 21px;
        margin-right: 5px;
        }
        .table-title .btn span {
        float: left;
        margin-top: 2px;
        }
        table.table tr th,
        table.table tr td {
        border-color: #e9e9e9;
        padding: 12px 15px;
        vertical-align: middle;
        }
        table.table tr th:first-child {
        width: 60px;
        }
        table.table tr th:last-child {
        width: 100px;
        }
        table.table-striped tbody tr:nth-of-type(odd) {
        background-color: #fcfcfc;
        }
        table.table-striped.table-hover tbody tr:hover {
        background: #f5f5f5;
        }
        table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
        }
        table.table td:last-child i {
        opacity: 0.9;
        font-size: 22px;
        margin: 0 5px;
        }
        table.table td a {
        font-weight: bold;
        color: #566787;
        display: inline-block;
        text-decoration: none;
        outline: none !important;
        }
        table.table td a:hover {
        color: #2196f3;
        }
        table.table td a.edit {
        color: #ffc107;
        }
        table.table td a.delete {
        color: #f44336;
        }
        table.table td i {
        font-size: 19px;
        }
        table.table .avatar {
        border-radius: 50%;
        vertical-align: middle;
        margin-right: 10px;
        }
        .pagination {
        float: right;
        margin: 0 0 5px;
        }
        .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
        }
        .pagination li a:hover {
        color: #666;
        }
        .pagination li.active a,
        .pagination li.active a.page-link {
        background: #03a9f4;
        }
        .pagination li.active a:hover {
        background: #0397d6;
        }
        .pagination li.disabled i {
        color: #ccc;
        }
        .pagination li i {
        font-size: 16px;
        padding-top: 6px;
        }
        .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
        }
        /* Custom checkbox */
        .custom-checkbox {
        position: relative;
        }
        .custom-checkbox input[type="checkbox"] {
        opacity: 0;
        position: absolute;
        margin: 5px 0 0 3px;
        z-index: 9;
        }
        .custom-checkbox label:before {
        width: 18px;
        height: 18px;
        }
        .custom-checkbox label:before {
        content: "";
        margin-right: 10px;
        display: inline-block;
        vertical-align: text-top;
        background: white;
        border: 1px solid #bbb;
        border-radius: 2px;
        box-sizing: border-box;
        z-index: 2;
        }
        .custom-checkbox input[type="checkbox"]:checked + label:after {
        content: "";
        position: absolute;
        left: 6px;
        top: 3px;
        width: 6px;
        height: 11px;
        border: solid #000;
        border-width: 0 3px 3px 0;
        transform: inherit;
        z-index: 3;
        transform: rotateZ(45deg);
        }
        .custom-checkbox input[type="checkbox"]:checked + label:before {
        border-color: #03a9f4;
        background: #03a9f4;
        }
        .custom-checkbox input[type="checkbox"]:checked + label:after {
        border-color: #fff;
        }
        .custom-checkbox input[type="checkbox"]:disabled + label:before {
        color: #b8b8b8;
        cursor: auto;
        box-shadow: none;
        background: #ddd;
        }
        /* Modal styles */
        .modal .modal-dialog {
        max-width: 400px;
        }
        .modal .modal-header,
        .modal .modal-body,
        .modal .modal-footer {
        padding: 20px 30px;
        }
        .modal .modal-content {
        border-radius: 3px;
        }
        .modal .modal-footer {
        background: #ecf0f1;
        border-radius: 0 0 3px 3px;
        }
        .modal .modal-title {
        display: inline-block;
        }
        .modal .form-control {
        border-radius: 2px;
        box-shadow: none;
        border-color: #dddddd;
        }
        .modal textarea.form-control {
        resize: vertical;
        }
        .modal .btn {
        border-radius: 2px;
        min-width: 100px;
        }
        .modal form label {
        font-weight: normal;
        }

</style>

@extends('layouts.theme.tablero')

@section('content')

  <div class="container-fluid">
    <div style="background-color: rgb(255, 255, 255);">
        <h2 style=" padding:1rem 2rem; font-weight:500; text-transform: uppercase;">Prospectos</h2>
    </div>
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-6">
            <h2>Administrador de <b>Prospectos</b></h2>
          </div>
          <div class="col-sm-6">
            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
                <i class="material-icons">&#xE147;</i> 
                <span>Agregar</span></a>
            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
                <i class="material-icons">&#xE15C;</i> 
                <span>Eliminar seleccionados</span></a>
          </div>
        </div>
      </div>
      
      <table class="table table-striped table-hover" id="usuarios">
        <thead>
          <tr>
            <th>
              <span class="custom-checkbox">
                  <input type="checkbox" id="selectAll" placeholder="todos">
                  <label for="selectAll"></label>
              </span>
            </th>
              <th>#</th>
              <th>Nombre</th>
              <th>Usuario</th>
              <th>Rol</th>
              <th>Zona</th>
              <th>Cliente</th>
              <th>Estatus</th>
              <th>/</th>
              <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($usuario as $usuario)
              <tr>
                  <td>
                    <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                        <label for="checkbox1"></label>
                  </span>
                  </td>

                  <td>{{ $usuario->id }}</td>
                  <td>{{ $usuario->nombre }}</td>
                  <td>{{ $usuario->nombreUsuario }}</td>
                  <td>{{ $usuario->nombreUsuario }}</td>
                  <td>{{ $usuario->tipo_usuario }}</td>
                  <td>{{ $usuario->zona }}</td>
                  <td>{{ $usuario->cliente }}</td>
                  <td>{{ $usuario->estatus }}</td>
               

                  <td>
                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                  </td>
              </tr>
          @endforeach
        </tbody>
      </table>
      <div class="clearfix">
        <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
        <ul class="pagination">
          <li class="page-item disabled"><a href="#">Previous</a></li>
          <li class="page-item"><a href="#" class="page-link">1</a></li>
          <li class="page-item"><a href="#" class="page-link">2</a></li>
          <li class="page-item active"><a href="#" class="page-link">3</a></li>
          <li class="page-item"><a href="#" class="page-link">4</a></li>
          <li class="page-item"><a href="#" class="page-link">5</a></li>
          <li class="page-item"><a href="#" class="page-link">Next</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Edit Modal HTML -->
  <div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h4 class="modal-title">Add Employee</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Address</label>
              <textarea class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <label>Phone</label>
              <input type="text" class="form-control" required>
            </div>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <input type="submit" class="btn btn-success" value="Add">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Edit Modal HTML -->
  <div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h4 class="modal-title">Edit Employee</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Address</label>
              <textarea class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <label>Phone</label>
              <input type="text" class="form-control" required>
            </div>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <input type="submit" class="btn btn-info" value="Save">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Delete Modal HTML -->
  <div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h4 class="modal-title">Delete Employee</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to delete these Records?</p>
            <p class="text-warning"><small>This action cannot be undone.</small></p>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <input type="submit" class="btn btn-danger" value="Delete">
          </div>
        </form>
      </div>
    </div>
  </div>


@endsection
<script>
    $(document).ready(function () {
      // Activate tooltip
      $('[data-toggle="tooltip"]').tooltip();

      // Select/Deselect checkboxes
      var checkbox = $('table tbody input[type="checkbox"]');
      $("#selectAll").click(function () {
          if (this.checked) {
          checkbox.each(function () {
              this.checked = true;
          });
          } else {
          checkbox.each(function () {
              this.checked = false;
          });
          }
      });
      checkbox.click(function () {
          if (!this.checked) {
          $("#selectAll").prop("checked", false);
          }
      });
      });

</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
