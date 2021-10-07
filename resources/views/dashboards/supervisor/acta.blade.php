<link rel="stylesheet" href="//cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">

@extends('layouts.theme.tablero')

@section('content')

<div class="container">
    <h2>Actas Administrativas</h2>
</div>

<table id="myTable" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>

@endsection

<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<script src="//cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
