@php
    $error = array('title'=>'Unavailable',
                    'code'=>'503',
                    'description'=>'This service is currently unavailable');
@endphp

<x-error-layout :error="$error" />
