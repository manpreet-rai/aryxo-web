@php
    $error = array('title'=>'Request Flood',
                    'code'=>'429',
                    'description'=>'Too many requests');
@endphp

<x-error-layout :error="$error" />
