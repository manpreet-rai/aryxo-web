@php
    $error = array('title'=>'Page Expired',
                    'code'=>'419',
                    'description'=>'Page expired.');
@endphp

<x-error-layout :error="$error" />
