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
        'next' => 'Core Attributes']);
});

Route::get('html/core-attributes', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/core-attributes.yml')));
    return view('chapter', [
        'material' => 'courses.html.core-attributes',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Elements',
        'next' => 'Special Attributes']);
});

Route::get('html/special-attributes', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/special-attributes.yml')));
    return view('chapter', [
        'material' => 'courses.html.special-attributes',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Core Attributes',
        'next' => 'Generic Attributes']);
});

Route::get('html/generic-attributes', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/generic-attributes.yml')));
    return view('chapter', [
        'material' => 'courses.html.generic-attributes',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Special Attributes',
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
        'prev' => 'Generic Attributes',
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
        'next' => 'Text Size']);
});

Route::get('html/text-size', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/text-size.yml')));
    return view('chapter', [
        'material' => 'courses.html.text-size',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Fonts',
        'next' => 'Text Alignment']);
});

Route::get('html/text-alignment', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/text-alignment.yml')));
    return view('chapter', [
        'material' => 'courses.html.text-alignment',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Text Size',
        'next' => 'Background Color']);
});

Route::get('html/background-color', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/background-color.yml')));
    return view('chapter', [
        'material' => 'courses.html.background-color',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Text Alignment',
        'next' => 'Text Color']);
});

Route::get('html/text-color', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/text-color.yml')));
    return view('chapter', [
        'material' => 'courses.html.text-color',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Background Color',
        'next' => 'Bold']);
});

Route::get('html/bold', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/bold.yml')));
    return view('chapter', [
        'material' => 'courses.html.bold',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Text Color',
        'next' => 'Italic']);
});

Route::get('html/italic', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/italic.yml')));
    return view('chapter', [
        'material' => 'courses.html.italic',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Bold',
        'next' => 'Underline']);
});

Route::get('html/underline', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/underline.yml')));
    return view('chapter', [
        'material' => 'courses.html.underline',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Italic',
        'next' => 'Strike']);
});

Route::get('html/strike', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/strike.yml')));
    return view('chapter', [
        'material' => 'courses.html.strike',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Underline',
        'next' => 'Insert']);
});

Route::get('html/insert', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/insert.yml')));
    return view('chapter', [
        'material' => 'courses.html.insert',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Strike',
        'next' => 'Delete']);
});

Route::get('html/delete', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/delete.yml')));
    return view('chapter', [
        'material' => 'courses.html.delete',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Insert',
        'next' => 'Highlighting']);
});

Route::get('html/highlighting', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/highlighting.yml')));
    return view('chapter', [
        'material' => 'courses.html.highlighting',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Delete',
        'next' => 'Subscript and Superscript']);
});

Route::get('html/subscript-and-superscript', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/subscript-and-superscript.yml')));
    return view('chapter', [
        'material' => 'courses.html.subscript-and-superscript',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Highlighting',
        'next' => 'Abbreviation']);
});

Route::get('html/abbreviation', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/abbreviation.yml')));
    return view('chapter', [
        'material' => 'courses.html.abbreviation',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Subscript and Superscript',
        'next' => 'Larger and Smaller text']);
});

Route::get('html/larger-and-smaller-text', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/larger-and-smaller-text.yml')));
    return view('chapter', [
        'material' => 'courses.html.larger-and-smaller-text',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Abbreviation',
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
        'prev' => 'Larger and Smaller text',
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
        'next' => 'Nested']);
});

Route::get('html/nested', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/nested.yml')));
    return view('chapter', [
        'material' => 'courses.html.nested',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Unordered',
        'next' => 'Description']);
});

Route::get('html/description', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/description.yml')));
    return view('chapter', [
        'material' => 'courses.html.description',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Nested',
        'next' => 'Table']);
});

Route::get('html/table', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/table.yml')));
    return view('chapter', [
        'material' => 'courses.html.table',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Description',
        'next' => 'Table Sizes ']);
});

Route::get('html/table-sizes', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/table-sizes.yml')));
    return view('chapter', [
        'material' => 'courses.html.table-sizes',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Table',
        'next' => 'Table Headers']);
});

Route::get('html/table-headers', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/table-headers.yml')));
    return view('chapter', [
        'material' => 'courses.html.table-headers',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Table Sizes ',
        'next' => 'Paddings and Spacing']);
});

Route::get('html/paddings-and-spacing', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/paddings-and-spacing.yml')));
    return view('chapter', [
        'material' => 'courses.html.paddings-and-spacing',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Table Headers',
        'next' => 'Colspan and Rowspan']);
});

Route::get('html/colspan-and-rowspan', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/colspan-and-rowspan.yml')));
    return view('chapter', [
        'material' => 'courses.html.colspan-and-rowspan',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Paddings and Spacing',
        'next' => 'Table Borders']);
});

Route::get('html/table-borders', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/table-borders.yml')));
    return view('chapter', [
        'material' => 'courses.html.table-borders',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Colspan and Rowspan',
        'next' => 'Inserting Images']);
});

Route::get('html/inserting-images', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/inserting-images.yml')));
    return view('chapter', [
        'material' => 'courses.html.inserting-images',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Table Borders',
        'next' => 'Image Map']);
});

Route::get('html/image-map', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/image-map.yml')));
    return view('chapter', [
        'material' => 'courses.html.image-map',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Inserting Images',
        'next' => 'Background Images']);
});

Route::get('html/background-images', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/background-images.yml')));
    return view('chapter', [
        'material' => 'courses.html.background-images',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Image Map',
        'next' => 'Inline Style Sheets']);
});

Route::get('html/inline-style-sheets', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/inline-style-sheets.yml')));
    return view('chapter', [
        'material' => 'courses.html.inline-style-sheets',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Background Images',
        'next' => 'Embedded Style Sheets']);
});

Route::get('html/embedded-style-sheets', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/embedded-style-sheets.yml')));
    return view('chapter', [
        'material' => 'courses.html.embedded-style-sheets',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Inline Style Sheets',
        'next' => 'External Style Sheets']);
});

Route::get('html/external-style-sheets', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/external-style-sheets.yml')));
    return view('chapter', [
        'material' => 'courses.html.external-style-sheets',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Embedded Style Sheets',
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
        'prev' => 'External Style Sheets',
        'next' => 'Multiple Classes']);
});

Route::get('html/multiple-classes', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/multiple-classes.yml')));
    return view('chapter', [
        'material' => 'courses.html.multiple-classes',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Class Attribute',
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
        'prev' => 'Multiple Classes',
        'next' => 'Text']);
});

Route::get('html/text', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/text.yml')));
    return view('chapter', [
        'material' => 'courses.html.text',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Id Attribute',
        'next' => 'Color']);
});

Route::get('html/color', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/color.yml')));
    return view('chapter', [
        'material' => 'courses.html.color',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Text',
        'next' => 'Button']);
});

Route::get('html/button', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/button.yml')));
    return view('chapter', [
        'material' => 'courses.html.button',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Color',
        'next' => 'Checkbox and Radio Buttons']);
});

Route::get('html/checkbox-and-radio-buttons', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/checkbox-and-radio-buttons.yml')));
    return view('chapter', [
        'material' => 'courses.html.checkbox-and-radio-buttons',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Button',
        'next' => 'Input Validation']);
});

Route::get('html/input-validation', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/input-validation.yml')));
    return view('chapter', [
        'material' => 'courses.html.input-validation',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Checkbox and Radio Buttons',
        'next' => 'Password']);
});

Route::get('html/password', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/password.yml')));
    return view('chapter', [
        'material' => 'courses.html.password',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Input Validation',
        'next' => 'File']);
});

Route::get('html/file', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/file.yml')));
    return view('chapter', [
        'material' => 'courses.html.file',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Password',
        'next' => 'Reset']);
});

Route::get('html/reset', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/reset.yml')));
    return view('chapter', [
        'material' => 'courses.html.reset',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'File',
        'next' => 'Submit']);
});

Route::get('html/submit', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/submit.yml')));
    return view('chapter', [
        'material' => 'courses.html.submit',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Reset',
        'next' => 'Number']);
});

Route::get('html/number', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/number.yml')));
    return view('chapter', [
        'material' => 'courses.html.number',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Submit',
        'next' => 'Range']);
});

Route::get('html/range', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/range.yml')));
    return view('chapter', [
        'material' => 'courses.html.range',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Number',
        'next' => 'Search']);
});

Route::get('html/search', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/search.yml')));
    return view('chapter', [
        'material' => 'courses.html.search',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Range',
        'next' => 'Date and Time']);
});

Route::get('html/date-and-time', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/date-and-time.yml')));
    return view('chapter', [
        'material' => 'courses.html.date-and-time',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Search',
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
        'prev' => 'Date and Time',
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
        'next' => 'Input Types and Attributes']);
});

Route::get('html/input-types-and-attributes', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/input-types-and-attributes.yml')));
    return view('chapter', [
        'material' => 'courses.html.input-types-and-attributes',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Form Elements',
        'next' => 'IFrame']);
});

Route::get('html/iframe', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/iframe.yml')));
    return view('chapter', [
        'material' => 'courses.html.iframe',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Input Types and Attributes',
        'next' => 'Setting the Frame Size']);
});

Route::get('html/setting-the-frame-size', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/setting-the-frame-size.yml')));
    return view('chapter', [
        'material' => 'courses.html.setting-the-frame-size',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'IFrame',
        'next' => 'IFrame as Link Target']);
});

Route::get('html/iframe-as-link-target', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/html/iframe-as-link-target.yml')));
    return view('chapter', [
        'material' => 'courses.html.iframe-as-link-target',
        'course' => 'html',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Setting the Frame Size',
        'next' => '']);
});
