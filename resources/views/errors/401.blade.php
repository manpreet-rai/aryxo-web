@php
    $error = array('title'=>'Unauthorized',
                    'code'=>'401',
                    'description'=>'You are unauthorized to view this page');
@endphp

<x-error-layout :error="$error" />
