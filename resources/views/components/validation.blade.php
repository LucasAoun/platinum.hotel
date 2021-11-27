
@php
    //toastJs and toastrJs to show a validation messages and actions returns
@endphp
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script type="text/javascript">
            $(function() {
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "onclick": true,
                    "showDuration": "800",
                    "hideDuration": "1000",
                    "timeOut": "8000",
                    "extendedTimeOut": "1500",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr.error('<b>@lang("validation.generic.verify_data")</b><br><p>{{$error}}</p><br>')
            })
        </script>
    @endforeach
@endif
@if(Session::has('message'))
    <script type="text/javascript">
        $(function() {
            var message = "<b>{{ Session::get("title") }}</b><br><br><p>{{ Session::get("message") }}</p><br>";
            var type = "{{ Session::get('alert-type', 'default') }}"
            new Toast({
                message: message,
                type: type
            });
        })
    </script>
@endif
@if(!Session::has('message') && Session::has('status'))
    <script type="text/javascript">
        $(function() {
            var message = "<p>{{ Session::get("status") }}</p><br>";
            var type = "success"
            new Toast({
                message: message,
                type: type
            });
        })
    </script>
@endif

