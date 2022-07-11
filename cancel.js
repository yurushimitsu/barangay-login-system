function cancel(){
    Swal.fire({
        title: 'Are you sure you want to cancel?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes',
        cancelButtonText: 'No'
    })
    .then((result) => {
        if (result.isConfirmed) {
            window.location = "userHome.php";
        }
    })
}