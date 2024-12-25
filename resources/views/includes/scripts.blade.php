<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('logout-btn').addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default action
            
            Swal.fire({
                title: 'Apakah anda yakin ingin keluar?',
                text: "Data yang belum tersimpan mungkin akan hilang",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('logout-form').submit();
                }
            });
        });
    });
</script>