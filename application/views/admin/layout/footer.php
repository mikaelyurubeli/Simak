<div class="container-fluid footer">
	<hr />
	<p>SIMAK (Sistem Informasi Administrasi Laboratorium Kimia)</p>
	<p>&copy; 2017 Mikael-Y. All Rights Reserved</p>
</div>

<script>
(function ($) {
    $(document).ready(function () {
        $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function (event) {
            event.preventDefault();
            event.stopPropagation();
            $(this).parent().siblings().removeClass('open');
            $(this).parent().toggleClass('open');
        });

        $('[data-toggle="tooltip"]').tooltip(); 
        
        $(".table-datatable").DataTable();
    });
})(jQuery);
</script>
