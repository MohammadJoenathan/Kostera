<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Registrasi Berhasil</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<script>
document.addEventListener('DOMContentLoaded', function () {
    Swal.fire({
        icon: 'success',
        title: 'Registrasi Berhasil!',
        text: 'Selamat, akun Kostera berhasil dibuat. Silakan login terlebih dahulu.',
        confirmButtonColor: '#2563eb',
        allowOutsideClick: false,
        allowEscapeKey: false
    }).then(() => {
        window.location.href = "{{ route('login') }}";
    });
});
</script>

</body>
</html>