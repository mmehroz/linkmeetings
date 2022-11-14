<!-- Footer Here -->
 <!-- Pop Up Code -->
 <div class="hover_bkgr_fricc">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">&times;</div>
                <p>Are you sure, you want to delete this?</p></br>
                <span class="add_delete_btn">
                        <a class="primary-btn btn-brown-sm" href="javascript:;">Yes, Continue</a>
                    </span>
            </div>
        </div>
<!-- End Footer -->
<style>
            /* Popup box BEGIN */
            .hover_bkgr_fricc{
                background:rgba(0,0,0,.4);
                cursor:pointer;
                display:none;
                height:100%;
                position:fixed;
                text-align:center;
                top:0;
                width:100%;
                z-index:10000;
            }
            .hover_bkgr_fricc .helper{
                display:inline-block;
                height:100%;
                vertical-align:middle;
            }
            .hover_bkgr_fricc > div {
                background-color: #fff;
                box-shadow: 10px 10px 60px #555;
                display: inline-block;
                height: auto;
                max-width: 551px;
                min-height: 100px;
                vertical-align: middle;
                width: 60%;
                position: relative;
                border-radius: 8px;
                padding: 15px 5%;
            }
            .popupCloseButton {
                background-color: #fff;
                border: 3px solid #999;
                border-radius: 50px;
                cursor: pointer;
                display: inline-block;
                font-family: arial;
                font-weight: bold;
                position: absolute;
                top: -20px;
                right: -20px;
                font-size: 25px;
                line-height: 30px;
                width: 30px;
                height: 30px;
                text-align: center;
            }
            .popupCloseButton:hover {
                background-color: #ccc;
            }
            .trigger_popup_fricc {
                cursor: pointer;
                font-size: 20px;
                margin: 20px;
                display: inline-block;
                font-weight: bold;
            }
            /* Popup box BEGIN */
        </style>
        <!-- Pop Up Code -->

	<script src="{{ URL::to('/') }}/js/app.js"></script>
	<script src="{{ URL::to('/') }}/js/custom.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.tiny.cloud/1/da2oauswkfu8i2eexhjvligp7nv2vrj385mdkbdjsnswtky4/tinymce/5/tinymce.min.js" referrerpolicy="origin"/></script>
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
