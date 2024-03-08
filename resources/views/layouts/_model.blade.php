<script>
    function showAlert(icon, title, timer = 10000) {
        Swal.fire({
            icon: icon,
            title: title,
            showConfirmButton: false,
            timer: timer,
            timerProgressBar: true,
        });
    }

    @if(Session::has('success'))
    showAlert('success', '{{ Session::get('success') }}');
    @endif

    @if(Session::has('error'))
    showAlert('error', '{{ Session::get('error') }}');
    @endif

    window.addEventListener('alert', event => {
        showAlert(event.detail[0].type, event.detail[0].title);
    });

    window.addEventListener('refreshPage', event => {
        setTimeout(function () {
            location.reload();
        }, event.detail[0].timeout);
    });

    window.addEventListener('showDeleteModel', event => {
        $("#DeleteModel").modal('show');
    });

    window.addEventListener('hideDeleteModel', event => {
        $("#DeleteModel").modal('hide');
    });
</script>
