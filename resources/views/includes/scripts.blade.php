<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('edit-profile').addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default action
            
            Swal.fire({
                title: 'Apakah anda yakin ingin mengedit profil?',
                text: "Password wajib diganti bila ingin mengubah data profil",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('edit-form').submit();
                }
            });
        });
    });

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

    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('back-btn').addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default action
            
            Swal.fire({
                title: 'Apakah anda yakin ingin kembali?',
                text: "Data yang belum tersimpan mungkin akan hilang",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('back-form').submit();
                }
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('first-btn').addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default action
            
            Swal.fire({
                title: 'Apakah anda yakin ingin melanjutkan?',
                text: "Periksa kembali data diri yang telah diisi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('first-form').submit();
                }
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('second-btn').addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default action
            
            Swal.fire({
                title: 'Apakah anda yakin ingin melanjutkan?',
                text: "Periksa kembali data diri yang telah diisi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('second-form').submit();
                }
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('third-btn').addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default action
            
            Swal.fire({
                title: 'Apakah anda yakin ingin melanjutkan?',
                text: "Periksa kembali data diri yang telah diisi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('third-form').submit();
                }
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('forth-btn').addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default action
            
            Swal.fire({
                title: 'Apakah anda yakin ingin mengunci?',
                text: "Periksa kembali data diri yang telah diisi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('forth-form').submit();
                }
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('regist-btn').addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default action
            
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Selesaikan dulu pendaftaran sebelumnya, sebelum melanjutkan",
            });
        });
    });
</script>