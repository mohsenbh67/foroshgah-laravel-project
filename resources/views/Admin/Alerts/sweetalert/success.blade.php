@if (session('swal-success'))

    <script>

        $(document).ready(function () {

            swal.fire({

                title: 'عملیات با موفق انجام شد',
                text: '{{ session('swal.success') }}',
                icon: 'success',
                confirmButtonText: 'باشه'
            });

        });


    </script>

@endif
