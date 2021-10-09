@php
    $error = array('title'=>'Server Error',
                    'code'=>'500',
                    'description'=>'Server error occurred');
@endphp

<x-error-layout :error="$error" />
