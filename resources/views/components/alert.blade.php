
<script>
    const alertCloseBtns = document.querySelectorAll('.alert .btn-close');
    alertCloseBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const alert = btn.closest('.alert');
            alert.remove();
        });
    });
</script>


@if(session('success'))
<div class="container alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session('error'))
<div class="container alert alert-success alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
