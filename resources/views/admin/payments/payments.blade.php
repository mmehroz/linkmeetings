
@extends('layout.user.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : 'Link Meeting' !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : 'Link Meeting' !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : 'Link Meeting' !!}
@stop
@section('body-class') @stop
@section('content')
    <div class="content-area">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="panel">
                        <div class="panel-tab-info">
                            <h2>Payment list</h2>

{{--                            <div class="tab-info">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <span>@lang('admin/menu.show')</span>--}}
{{--                                        <select>--}}
{{--                                            <option>20</option>--}}
{{--                                        </select> @lang('admin/menu.entries')--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <i class="fa fa-search"></i>--}}
{{--                                        <input type="text" placeholder="Search" name="">--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                        </div>
                        <table class="display info-data-user" id="payment-list">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User Name</th>
                                    <th>Payment</th>
                                    <th>Date</th>
                                    <th>Total</th>
{{--                                    <th>Invoice</th>--}}
                                    <th>Invoice</th>
                                </tr>
                            </thead>

                        </table>
{{--                        <div class="info-tab-ft">--}}
{{--                            <div class="total">--}}
{{--                                <span>Show</span>--}}
{{--                                <select>--}}
{{--                                    <option>20</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="paginate">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="javascript:;" class="prev">Previous</a></li>--}}
{{--                                    <li><a href="javascript:;" class="active">1</a></li>--}}
{{--                                    <li><a href="javascript:;">2</a></li>--}}
{{--                                    <li><a href="javascript:;">3</a></li>--}}
{{--                                    <li><a href="javascript:;">4</a></li>--}}
{{--                                    <li><a href="javascript:;">5</a></li>--}}
{{--                                    <li><a href="javascript:;">6</a></li>--}}
{{--                                    <li><a href="javascript:;" class="next">Next</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="hover_bkgr_fricc1">
        <span></span>

        <span class="helper"></span>
        <div>

            <div class="popupCloseButton">&times;</div>
            <p> </p></br>

        </div>
    </div>
    <style>
    /* Popup box BEGIN */
    .hover_bkgr_fricc1{
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
    .hover_bkgr_fricc1 .helper{
    display:inline-block;
    height:100%;
    vertical-align:middle;
    }
    .hover_bkgr_fricc1 > div {
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
@endsection

@section('footer_script')
{{--    <a href="javascript:;" class="trigger_popup_fricc">Click here to show the popup</a>--}}


    <script>
        $(function() {
            var table = $('#payment-list').DataTable({
                processing: true,
                //serverSide: true,
                ajax: '{!! route('admin_payments_data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'company_name', name: 'company_name' },
                    { data: 'title', name: 'title' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'paid', name: 'paid' },
                    // { data: 'invoice', name: 'invoice' },
                    { data: 'actions', name: 'actions', orderable: false, searchable: false }
                ],
                searching: true,
                lengthChange: true,
            });
            table.on( 'draw', function () {
                // $('.livicon').each(function(){
                //     $(this).updateLivicon();
                // });
            } );

            // #column3_search is a <input type="text"> element
            $('.search_field').on( 'keyup', function () {
                table
                    //.columns( 3 ) //to search in specific column
                    .search( this.value )
                    .draw();
            } );

            $('.page_length').on( 'click', function () {
                table.page.len( $(this).val() ).draw();
            } );
        });

        $(document).ready(function () {
            $(document).on('click','.trigger_popup_fricc_content',function(){
                var invoice = $(this).attr('data-invoice');
                var username = $(this).attr('data-username');
                var package = $(this).attr('data-package');
                var paid = $(this).attr('data-paid');
                var created_at = $(this).attr('data-created_at');
                $('.hover_bkgr_fricc1  div p').html('Invoice: '+invoice);
                $('.hover_bkgr_fricc1  div p').append('</br>');
                $('.hover_bkgr_fricc1  div p').append('</br>');
                $('.hover_bkgr_fricc1  div p').append('Company Name: '+username);
                $('.hover_bkgr_fricc1  div p').append('</br>');
                $('.hover_bkgr_fricc1  div p').append('</br>');
                $('.hover_bkgr_fricc1  div p').append('Package Name: '+package);
                $('.hover_bkgr_fricc1  div p').append('</br>');
                $('.hover_bkgr_fricc1  div p').append('</br>');
                $('.hover_bkgr_fricc1  div p').append('Total payment: '+paid);
                $('.hover_bkgr_fricc1  div p').append('</br>');
                $('.hover_bkgr_fricc1  div p').append('</br>');
                $('.hover_bkgr_fricc1  div p').append('Created At: '+created_at);


                $('.hover_bkgr_fricc1').show();
            })

            $(document).on('click','.hover_bkgr_fricc1',function(){
                $('.hover_bkgr_fricc1').hide();
            })

            $(document).on('click','.popupCloseButton',function(){
                $('.hover_bkgr_fricc1').hide();
            })

        });
    </script>
@endsection
