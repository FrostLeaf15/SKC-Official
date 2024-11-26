$('#nik').on('blur', function () {
    var nik = $(this).val();
    $.ajax({
        url: '/check-nik',
        method: 'POST',
        data: {
            nik: nik,
            _token: '{{ csrf_token() }}'
        },
        success: function (response) {
            if (response.exists) {
                alert('NIK sudah terdaftar!');
                $('#nik').val(''); // Kosongkan input
            }
        }
    });
});
