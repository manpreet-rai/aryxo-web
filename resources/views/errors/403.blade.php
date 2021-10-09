@php
    $error = array('title'=>'Forbidded',
                    'code'=>'403',
                    'description'=>'Access forbidden');
@endphp

<x-error-layout :error="$error" />
