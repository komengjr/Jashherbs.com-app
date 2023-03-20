$(document).ready(function() {
    $(document).on('click', '#tambahpostinganbarang', function(e) {
                e.preventDefault();
                var url = $(this).data('url');
                $.ajax({
                        url: url,
                        type: 'GET',
                        dataType: 'html'
                    })
                    .done(function(data) {
                        $('#menupostinganbarang').html(data);
                    })
                    .fail(function() {
                        $('#menupostinganbarang').html(
                            '<i class="fa fa-info-sign"></i> Something went wrong, Please try again...'
                            );
                    });
    });
});
$(document).ready(function() {
    $(document).on('click', '#lihatdatabarang', function(e) {
                e.preventDefault();
                var url = $(this).data('url');
                $.ajax({
                        url: url,
                        type: 'GET',
                        dataType: 'html'
                    })
                    .done(function(data) {
                        $('#postinganbarang').html(data);
                    })
                    .fail(function() {
                        $('#postinganbarang').html(
                            '<i class="fa fa-info-sign"></i> Something went wrong, Please try again...'
                            );
                    });
    });
    $(document).on('click', '#editdatabarang', function(e) {
                e.preventDefault();
                var url = $(this).data('url');
                $.ajax({
                        url: url,
                        type: 'GET',
                        dataType: 'html'
                    })
                    .done(function(data) {
                        $('#postinganbarang').html(data);
                    })
                    .fail(function() {
                        $('#postinganbarang').html(
                            '<i class="fa fa-info-sign"></i> Something went wrong, Please try again...'
                            );
                    });
    });
});
