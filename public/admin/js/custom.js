$(document).on("click", "#delete", function (e) {
    e.preventDefault();
    var link = $(this).attr("href");

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to Delete this!",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Delete it!'
    }).then((result) => {
        if (result.value) {
            window.location.href = link;
            // Swal.fire(
            //     'Deleted!',
            //     'Your file has been deleted.',
            //     'success'
            // )
        }else{
            Swal.fire(
                'Cancelled!',
                'Your imaginary file is safe.',
                'error'
            )
        }
    });

});
