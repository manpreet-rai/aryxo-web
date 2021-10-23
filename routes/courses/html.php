<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Html Course Routes
|--------------------------------------------------------------------------
|
| Here Html course routes are defined.
|
*/

Route::get('html/introduction-to-html', function () {
    return view('courses.html.introduction-to-html');
});

Route::get('html/editors', function () {
    return view('courses.html.editors');
});

Route::get('html/basic-tags', function () {
    return view('courses.html.basic-tags');
});

Route::get('html/document-type', function () {
    return view('courses.html.document-type');
});

Route::get('html/elements', function () {
    return view('courses.html.elements');
});

Route::get('html/core-attributes', function () {
    return view('courses.html.core-attributes');
});

Route::get('html/special-attributes', function () {
    return view('courses.html.special-attributes');
});

Route::get('html/generic-attributes', function () {
    return view('courses.html.generic-attributes');
});

Route::get('html/style', function () {
    return view('courses.html.style');
});

Route::get('html/fonts', function () {
    return view('courses.html.fonts');
});

Route::get('html/text-size', function () {
    return view('courses.html.text-size');
});

Route::get('html/text-alignment', function () {
    return view('courses.html.text-alignment');
});

Route::get('html/background-color', function () {
    return view('courses.html.background-color');
});

Route::get('html/text-color', function () {
    return view('courses.html.text-color');
});

Route::get('html/bold', function () {
    return view('courses.html.bold');
});

Route::get('html/italic', function () {
    return view('courses.html.italic');
});

Route::get('html/underline', function () {
    return view('courses.html.underline');
});

Route::get('html/strike', function () {
    return view('courses.html.strike');
});

Route::get('html/insert', function () {
    return view('courses.html.insert');
});

Route::get('html/delete', function () {
    return view('courses.html.delete');
});

Route::get('html/highlighting', function () {
    return view('courses.html.highlighting');
});

Route::get('html/subscript-and-superscript', function () {
    return view('courses.html.subscript-and-superscript');
});

Route::get('html/abbreviation', function () {
    return view('courses.html.abbreviation');
});

Route::get('html/larger-and-smaller-text', function () {
    return view('courses.html.larger-and-smaller-text');
});

Route::get('html/text-links', function () {
    return view('courses.html.text-links');
});

Route::get('html/image-links', function () {
    return view('courses.html.image-links');
});

Route::get('html/email-links', function () {
    return view('courses.html.email-links');
});

Route::get('html/ordered', function () {
    return view('courses.html.ordered');
});

Route::get('html/unordered', function () {
    return view('courses.html.unordered');
});

Route::get('html/nested', function () {
    return view('courses.html.nested');
});

Route::get('html/description', function () {
    return view('courses.html.description');
});

Route::get('html/table', function () {
    return view('courses.html.table');
});

Route::get('html/table-sizes', function () {
    return view('courses.html.table-sizes');
});

Route::get('html/table-headers', function () {
    return view('courses.html.table-headers');
});

Route::get('html/paddings-and-spacing', function () {
    return view('courses.html.paddings-and-spacing');
});

Route::get('html/colspan-and-rowspan', function () {
    return view('courses.html.colspan-and-rowspan');
});

Route::get('html/table-borders', function () {
    return view('courses.html.table-borders');
});

Route::get('html/inserting-images', function () {
    return view('courses.html.inserting-images');
});

Route::get('html/image-map', function () {
    return view('courses.html.image-map');
});

Route::get('html/background-images', function () {
    return view('courses.html.background-images');
});

Route::get('html/inline-style-sheets', function () {
    return view('courses.html.inline-style-sheets');
});

Route::get('html/embedded-style-sheets', function () {
    return view('courses.html.embedded-style-sheets');
});

Route::get('html/external-style-sheets', function () {
    return view('courses.html.external-style-sheets');
});

Route::get('html/class-attribute', function () {
    return view('courses.html.class-attribute');
});

Route::get('html/multiple-classes', function () {
    return view('courses.html.multiple-classes');
});

Route::get('html/id-attribute', function () {
    return view('courses.html.id-attribute');
});

Route::get('html/text', function () {
    return view('courses.html.text');
});

Route::get('html/color', function () {
    return view('courses.html.color');
});

Route::get('html/button', function () {
    return view('courses.html.button');
});

Route::get('html/checkbox-and-radio-buttons', function () {
    return view('courses.html.checkbox-and-radio-buttons');
});

Route::get('html/input-validation', function () {
    return view('courses.html.input-validation');
});

Route::get('html/password', function () {
    return view('courses.html.password');
});

Route::get('html/file', function () {
    return view('courses.html.file');
});

Route::get('html/reset', function () {
    return view('courses.html.reset');
});

Route::get('html/submit', function () {
    return view('courses.html.submit');
});

Route::get('html/number', function () {
    return view('courses.html.number');
});

Route::get('html/range', function () {
    return view('courses.html.range');
});

Route::get('html/search', function () {
    return view('courses.html.search');
});

Route::get('html/date-and-time', function () {
    return view('courses.html.date-and-time');
});

Route::get('html/form-attributes', function () {
    return view('courses.html.form-attributes');
});

Route::get('html/form-elements', function () {
    return view('courses.html.form-elements');
});

Route::get('html/input-types-and-attributes', function () {
    return view('courses.html.input-types-and-attributes');
});

Route::get('html/iframe', function () {
    return view('courses.html.iframe');
});

Route::get('html/setting-the-frame-size', function () {
    return view('courses.html.setting-the-frame-size');
});

Route::get('html/iframe-as-link-target', function () {
    return view('courses.html.iframe-as-link-target');
});
