<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Yaml\Yaml;

/*
|--------------------------------------------------------------------------
| Html Course Routes
|--------------------------------------------------------------------------
|
| Here Html course routes are defined.
|
*/

Route::get('html/introduction-to-html', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/introduction-to-html.yml')));
    return view('chapter', [
        'material' => 'courses.html.introduction-to-html',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => '',
        'next' => 'Editors']);
});

Route::get('html/editors', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/editors.yml')));
    return view('chapter', [
        'material' => 'courses.html.editors',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Introduction to HTML',
        'next' => 'Basic Tags']);
});

Route::get('html/basic-tags', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/basic-tags.yml')));
    return view('chapter', [
        'material' => 'courses.html.basic-tags',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Editors',
        'next' => 'Document Type']);
});

Route::get('html/document-type', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/document-type.yml')));
    return view('chapter', [
        'material' => 'courses.html.document-type',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Basic Tags',
        'next' => 'Elements']);
});

Route::get('html/elements', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/elements.yml')));
    return view('chapter', [
        'material' => 'courses.html.elements',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Document Type',
        'next' => 'Data Attributes']);
});

Route::get('html/data-attributes', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/data-attributes.yml')));
    return view('chapter', [
        'material' => 'courses.html.data-attributes',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Elements',
        'next' => 'Style']);
});

Route::get('html/style', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/style.yml')));
    return view('chapter', [
        'material' => 'courses.html.style',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Data Attributes',
        'next' => 'Fonts']);
});

Route::get('html/fonts', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/fonts.yml')));
    return view('chapter', [
        'material' => 'courses.html.fonts',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Style',
        'next' => 'Text Formatting']);
});

Route::get('html/text-formatting', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/text-formatting.yml')));
    return view('chapter', [
        'material' => 'courses.html.text-formatting',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Fonts',
        'next' => 'Text Links']);
});

Route::get('html/text-links', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/text-links.yml')));
    return view('chapter', [
        'material' => 'courses.html.text-links',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Text Formatting',
        'next' => 'Image Links']);
});

Route::get('html/image-links', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/image-links.yml')));
    return view('chapter', [
        'material' => 'courses.html.image-links',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Text Links',
        'next' => 'Email Links']);
});

Route::get('html/email-links', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/email-links.yml')));
    return view('chapter', [
        'material' => 'courses.html.email-links',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Image Links',
        'next' => 'Ordered']);
});

Route::get('html/ordered', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/ordered.yml')));
    return view('chapter', [
        'material' => 'courses.html.ordered',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Email Links',
        'next' => 'Unordered']);
});

Route::get('html/unordered', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/unordered.yml')));
    return view('chapter', [
        'material' => 'courses.html.unordered',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Ordered',
        'next' => 'Table ']);
});

Route::get('html/table', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/table.yml')));
    return view('chapter', [
        'material' => 'courses.html.table',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Unordered',
        'next' => 'Padding and Spacing']);
});

Route::get('html/padding-and-spacing', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/padding-and-spacing.yml')));
    return view('chapter', [
        'material' => 'courses.html.padding-and-spacing',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Table ',
        'next' => 'Row and Colspan']);
});

Route::get('html/row-and-colspan', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/row-and-colspan.yml')));
    return view('chapter', [
        'material' => 'courses.html.row-and-colspan',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Padding and Spacing',
        'next' => 'Image insertion and Mapping']);
});

Route::get('html/image-insertion-and-mapping', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/image-insertion-and-mapping.yml')));
    return view('chapter', [
        'material' => 'courses.html.image-insertion-and-mapping',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Row and Colspan',
        'next' => 'Types of Stylesheets']);
});

Route::get('html/types-of-stylesheets', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/types-of-stylesheets.yml')));
    return view('chapter', [
        'material' => 'courses.html.types-of-stylesheets',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Image insertion and Mapping',
        'next' => 'Class Attribute']);
});

Route::get('html/class-attribute', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/class-attribute.yml')));
    return view('chapter', [
        'material' => 'courses.html.class-attribute',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Types of Stylesheets',
        'next' => 'Id Attribute']);
});

Route::get('html/id-attribute', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/id-attribute.yml')));
    return view('chapter', [
        'material' => 'courses.html.id-attribute',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Class Attribute',
        'next' => 'Control Elements']);
});

Route::get('html/control-elements', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/control-elements.yml')));
    return view('chapter', [
        'material' => 'courses.html.control-elements',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Id Attribute',
        'next' => 'Form Attributes']);
});

Route::get('html/form-attributes', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/form-attributes.yml')));
    return view('chapter', [
        'material' => 'courses.html.form-attributes',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Control Elements',
        'next' => 'Form Elements']);
});

Route::get('html/form-elements', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/form-elements.yml')));
    return view('chapter', [
        'material' => 'courses.html.form-elements',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Form Attributes',
        'next' => 'IFrame and Link Target']);
});

Route::get('html/iframe-and-link-target', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/iframe-and-link-target.yml')));
    return view('chapter', [
        'material' => 'courses.html.iframe-and-link-target',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Form Elements',
        'next' => '']);
});
