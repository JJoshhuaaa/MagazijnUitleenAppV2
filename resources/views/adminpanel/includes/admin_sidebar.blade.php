<form action="{{ route('reservations.search') }}" method="GET">
    <div class="input-group">
        <input type="text" class="form-control" name="query" placeholder="Search by barcode, product name, or description">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
</form>
