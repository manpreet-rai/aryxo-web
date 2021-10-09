@php
    $error = array('title'=>'Not Found',
                    'code'=>'404',
                    'description'=>'Page doesn\'t exist');
@endphp

<x-error-layout :error="$error" />
