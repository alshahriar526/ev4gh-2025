<h2>Import GB Members (CSV)</h2>

<form action="{{ route('gb_members.import') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="csv_file" required>
    <button type="submit">Upload CSV</button>
</form>
