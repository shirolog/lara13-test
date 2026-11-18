@if (session('success'))
    <div class="alert alert-success" id="alert">
        <span>{{ session('success') }}</span>
        <button type="button" onclick="document.getElementById('alert').remove()">&times;</button>
    </div>
@endif
