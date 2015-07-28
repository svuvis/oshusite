@extends('layouts.admin.mastermenu')

@section('mtitle')
    OSHU - Bestuursleden
@stop

@section('mcontent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bestuurslid Aanpassen</h1>
            </div>
        </div>
        <div class="row">
            {!! Form::model($member, ['method' => 'PATCH', 'action' => ['BoardMembersController@update', $member->id]]) !!}
            @include('includes.admin.boardmembersform',['submitButtonText' => 'Aanpassen'])
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('mjs')
    {!! HTML::script('js/jquery.ui.widget.js') !!}
    {!! HTML::script('js/jquery.iframe-transport.js') !!}
    {!! HTML::script('js/jquery.fileupload.js') !!}
    <script>
        var myApp = myApp || (function () {
                    var pleaseWaitDiv = $('<div class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top:15%; overflow-y:visible;">' +
                            '<div class="modal-dialog modal-m">' +
                            '<div class="modal-content">' +
                            '<div class="modal-header"><h3 style="margin:0;">Uploaden...</h3></div>' +
                            '<div class="modal-body">' +
                            '<div class="progress progress-striped active" style="margin-bottom:0;">' +
                            '<div class="progress-bar" id="progress-bar2" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div></div>' +
                            '</div>' +
                            '</div></div></div>')
                    return {
                        showPleaseWait: function () {
                            pleaseWaitDiv.modal('show');
                        },
                        hidePleaseWait: function () {
                            pleaseWaitDiv.modal('hide');
                        },

                    };
                })();
        $(function () {
            'use strict';
            $('#fileupload').fileupload({
                url: '{{ url() }}/admin/edit/upload?_token=' + '{{ csrf_token() }}',
                dataType: 'json',
                start: function (e) {
                    myApp.showPleaseWait();
                },
                done: function (e, data) {
                    myApp.hidePleaseWait()
                    if(data.result.hasOwnProperty('file')){
                        $.each(data.result.file.filelink, function (index, file) {
                            $("#img-thumb").attr('src', file)
                            $("#picture").attr('value', file)
                        });
                    }
                    if(data.result.hasOwnProperty('error')) {
                        $.each(data.result.error.file, function (file, item) {
                            toastr.error(item);
                        });
                    }
                }
            });
        });

    </script>
@stop