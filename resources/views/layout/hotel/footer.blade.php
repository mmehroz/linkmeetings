<!-- Footer Here -->

<!-- End Footer -->
<script src="{{ URL::to('/') }}/js/app.js"></script>
<script src="{{ URL::to('/') }}/js/custom.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.tiny.cloud/1/cz5yzdii2ravw0w6xu7hmgwz8m6ik0th7g67g1h873yjbeoa/tinymce/5/tinymce.min.js" referrerpolicy="origin"/></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
@yield('footer_script')
<script>
    $(document).ready(function () {
        $(document).on('click','.trigger_popup_fricc',function(){
            var delurl = $(this).attr('data-href');
            $('.hover_bkgr_fricc .add_delete_btn a').attr('href',delurl);
            $('.hover_bkgr_fricc').show();
        })

        $(document).on('click','.hover_bkgr_fricc',function(){
            $('.hover_bkgr_fricc').hide();
        })

        $(document).on('click','.popupCloseButton',function(){
            $('.hover_bkgr_fricc').hide();
        })

    });
</script>

	</body>
</html>
