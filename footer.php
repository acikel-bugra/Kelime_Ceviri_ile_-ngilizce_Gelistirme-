<!-- BEGIN: Footer--> <footer class="footer footer-static footer-light"> <p
    class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block
    mt-25">COPYRIGHT &copy; 2020<a class="ml-25"
    href="https://1.envato.market/pixinvent_portfolio" target="_blank"></a><span
    class="d-none d-sm-inline-block">, ToDo Proje</span></span><span
    class="float-md-right d-none d-md-block"></i></span></p> </footer> <button class="btn btn-primary
    btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <script src="ajax.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../app-assets/vendors/js/editors/quill/katex.min.js"></script>
    <script src="../app-assets/vendors/js/editors/quill/highlight.min.js"></script>
    <script src="../app-assets/vendors/js/editors/quill/quill.min.js"></script>
    <script src="../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="../app-assets/vendors/js/extensions/dragula.min.js"></script>
    <script src="../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="../app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/pages/app-todo.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

</body>
<!-- END: Body-->

</html>

<script >

    $("#todo-task-list").load("listele.php");
    function gorevtamam($id, tur){
        $.ajax({
            url     : 'islem.php',
            data    : 'islem=gorevtamam&id='+$id,
            type    : 'POST',
            success : function(data){
                gorevgetir('gorevlerim');
            }
        });
    }
    
    



    function gorevgetir($tur){


        $('#todo-task-list').html('<div class="d-flex justify-content-center my-1"><div class="spinner-border" role="status" aria-hidden="true"></div></div>');

        $.ajax({
            url     : 'listele.php',
            data    : 'durum=gorevgetir&tur='+$tur,
            type    : 'POST',
            success : function(data){
                $('#todo-task-list').html(data); 
            }
        });
    }

</script>