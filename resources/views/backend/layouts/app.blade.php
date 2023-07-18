{{-- @php
    App\Models\User::where('id', Auth::user()->id)->update(['last_active' =>  Carbon\Carbon::now() ]);
    $default_setting = App\Models\DefaultSetting::first();
@endphp --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

@yield('title')

@yield('content')


<script>
    $(document).ready(function() {
        @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;

                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;

                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;

                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    });
</script>

@yield('script')
