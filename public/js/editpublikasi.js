document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function() {
            // Get the row data
            let row = this.closest('tr');
            let judul = row.querySelector('.jdl_publikasi').textContent;
            let link = row.querySelector('.link_publikasi a').href;
            let tahun = row.querySelector('.thn_terbit').textContent;

            // Populate the modal with the data
            document.getElementById('editJudul').value = judul;
            document.getElementById('editLink').value = link;
            document.getElementById('editTahun').value = tahun;

            // Show the modal
            $('#editModal').modal('show');
        });
    });

    // Handle save button click
    document.getElementById('saveBtn').addEventListener('click', function() {
        // Get the updated data from the form
        let updatedJudul = document.getElementById('editJudul').value;
        let updatedLink = document.getElementById('editLink').value;
        let updatedTahun = document.getElementById('editTahun').value;

        // You can now send this data to your server via an AJAX request or update the table directly

        // Close the modal
        $('#editModal').modal('hide');
    });
});

$(document).ready(function() {
    // Handle Edit button click
    $('.edit-btn').on('click', function(event) {
        event.preventDefault();
        var url = $(this).attr('href');
        window.location.href = url;
    });
});
