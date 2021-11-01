<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Yaml\Yaml;

/*
|--------------------------------------------------------------------------
| Python Course Routes
|--------------------------------------------------------------------------
|
| Here Python course routes are defined.
|
*/

Route::get('python/python-introduction', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/python-introduction.yml')));
    return view('chapter', [
        'material' => 'courses.python.python-introduction',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => '',
        'next' => 'Features and Applications of Python']);
});

Route::get('python/features-and-applications-of-python', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/features-and-applications-of-python.yml')));
    return view('chapter', [
        'material' => 'courses.python.features-and-applications-of-python',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Python Introduction',
        'next' => 'Python Installation']);
});

Route::get('python/python-installation', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/python-installation.yml')));
    return view('chapter', [
        'material' => 'courses.python.python-installation',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Features and Applications of Python',
        'next' => 'Keywords and Identifiers']);
});

Route::get('python/keywords-and-identifiers', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/keywords-and-identifiers.yml')));
    return view('chapter', [
        'material' => 'courses.python.keywords-and-identifiers',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Python Installation',
        'next' => 'Statements and Comments']);
});

Route::get('python/statements-and-comments', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/statements-and-comments.yml')));
    return view('chapter', [
        'material' => 'courses.python.statements-and-comments',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Keywords and Identifiers',
        'next' => 'Variables']);
});

Route::get('python/variables', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/variables.yml')));
    return view('chapter', [
        'material' => 'courses.python.variables',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Statements and Comments',
        'next' => 'Operators']);
});

Route::get('python/operators', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/operators.yml')));
    return view('chapter', [
        'material' => 'courses.python.operators',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Variables',
        'next' => 'Python IO and Import']);
});

Route::get('python/python-io-and-import', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/python-io-and-import.yml')));
    return view('chapter', [
        'material' => 'courses.python.python-io-and-import',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Operators',
        'next' => 'Python Namespace']);
});

Route::get('python/python-namespace', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/python-namespace.yml')));
    return view('chapter', [
        'material' => 'courses.python.python-namespace',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Python IO and Import',
        'next' => 'If and Else']);
});

Route::get('python/if-and-else', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/if-and-else.yml')));
    return view('chapter', [
        'material' => 'courses.python.if-and-else',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Python Namespace',
        'next' => 'Loops']);
});

Route::get('python/loops', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/loops.yml')));
    return view('chapter', [
        'material' => 'courses.python.loops',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'If and Else',
        'next' => 'Break and Continue']);
});

Route::get('python/break-and-continue', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/break-and-continue.yml')));
    return view('chapter', [
        'material' => 'courses.python.break-and-continue',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Loops',
        'next' => 'Pass']);
});

Route::get('python/pass', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/pass.yml')));
    return view('chapter', [
        'material' => 'courses.python.pass',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Break and Continue',
        'next' => 'Data Types']);
});

Route::get('python/data-types', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/data-types.yml')));
    return view('chapter', [
        'material' => 'courses.python.data-types',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Pass',
        'next' => 'Numbers']);
});

Route::get('python/numbers', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/numbers.yml')));
    return view('chapter', [
        'material' => 'courses.python.numbers',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Data Types',
        'next' => 'String']);
});

Route::get('python/string', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/string.yml')));
    return view('chapter', [
        'material' => 'courses.python.string',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Numbers',
        'next' => 'List']);
});

Route::get('python/list', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/list.yml')));
    return view('chapter', [
        'material' => 'courses.python.list',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'String',
        'next' => 'Tuple']);
});

Route::get('python/tuple', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/tuple.yml')));
    return view('chapter', [
        'material' => 'courses.python.tuple',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'List',
        'next' => 'Set']);
});

Route::get('python/set', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/set.yml')));
    return view('chapter', [
        'material' => 'courses.python.set',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Tuple',
        'next' => 'Dictionary']);
});

Route::get('python/dictionary', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/dictionary.yml')));
    return view('chapter', [
        'material' => 'courses.python.dictionary',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Set',
        'next' => 'Functions']);
});

Route::get('python/functions', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/functions.yml')));
    return view('chapter', [
        'material' => 'courses.python.functions',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Dictionary',
        'next' => 'Function Arguments']);
});

Route::get('python/function-arguments', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/function-arguments.yml')));
    return view('chapter', [
        'material' => 'courses.python.function-arguments',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Functions',
        'next' => 'Python Recursion']);
});

Route::get('python/python-recursion', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/python-recursion.yml')));
    return view('chapter', [
        'material' => 'courses.python.python-recursion',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Function Arguments',
        'next' => 'Anonymous or Lambda Function']);
});

Route::get('python/anonymous-or-lambda-function', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/anonymous-or-lambda-function.yml')));
    return view('chapter', [
        'material' => 'courses.python.anonymous-or-lambda-function',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Python Recursion',
        'next' => 'Global Local and Nonlocal Functions']);
});

Route::get('python/global-local-and-nonlocal-functions', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/global-local-and-nonlocal-functions.yml')));
    return view('chapter', [
        'material' => 'courses.python.global-local-and-nonlocal-functions',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Anonymous or Lambda Function',
        'next' => 'Global Keyword']);
});

Route::get('python/global-keyword', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/global-keyword.yml')));
    return view('chapter', [
        'material' => 'courses.python.global-keyword',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Global Local and Nonlocal Functions',
        'next' => 'Python Modules']);
});

Route::get('python/python-modules', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/python-modules.yml')));
    return view('chapter', [
        'material' => 'courses.python.python-modules',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Global Keyword',
        'next' => 'Datetime Module']);
});

Route::get('python/datetime-module', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/datetime-module.yml')));
    return view('chapter', [
        'material' => 'courses.python.datetime-module',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Python Modules',
        'next' => 'Math Module']);
});

Route::get('python/math-module', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/math-module.yml')));
    return view('chapter', [
        'material' => 'courses.python.math-module',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Datetime Module',
        'next' => 'OS Module']);
});

Route::get('python/os-module', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/os-module.yml')));
    return view('chapter', [
        'material' => 'courses.python.os-module',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Math Module',
        'next' => 'Sys Module']);
});

Route::get('python/sys-module', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/sys-module.yml')));
    return view('chapter', [
        'material' => 'courses.python.sys-module',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'OS Module',
        'next' => 'Python Packages']);
});

Route::get('python/python-packages', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/python-packages.yml')));
    return view('chapter', [
        'material' => 'courses.python.python-packages',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Sys Module',
        'next' => 'Python PIP']);
});

Route::get('python/python-pip', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/python-pip.yml')));
    return view('chapter', [
        'material' => 'courses.python.python-pip',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Python Packages',
        'next' => 'Python JSON']);
});

Route::get('python/python-json', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/python-json.yml')));
    return view('chapter', [
        'material' => 'courses.python.python-json',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Python PIP',
        'next' => 'Python RegEx']);
});

Route::get('python/python-regex', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/python-regex.yml')));
    return view('chapter', [
        'material' => 'courses.python.python-regex',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Python JSON',
        'next' => 'Exception and its Types']);
});

Route::get('python/exception-and-its-types', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/exception-and-its-types.yml')));
    return view('chapter', [
        'material' => 'courses.python.exception-and-its-types',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Python RegEx',
        'next' => 'Exception Handling']);
});

Route::get('python/exception-handling', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/exception-handling.yml')));
    return view('chapter', [
        'material' => 'courses.python.exception-handling',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Exception and its Types',
        'next' => 'File Handling']);
});

Route::get('python/file-handling', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/file-handling.yml')));
    return view('chapter', [
        'material' => 'courses.python.file-handling',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Exception Handling',
        'next' => 'Python Directory']);
});

Route::get('python/python-directory', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/python-directory.yml')));
    return view('chapter', [
        'material' => 'courses.python.python-directory',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'File Handling',
        'next' => 'Arrays']);
});

Route::get('python/arrays', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/arrays.yml')));
    return view('chapter', [
        'material' => 'courses.python.arrays',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Python Directory',
        'next' => 'Array Operations']);
});

Route::get('python/array-operations', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/array-operations.yml')));
    return view('chapter', [
        'material' => 'courses.python.array-operations',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Arrays',
        'next' => 'OOPs Concepts']);
});

Route::get('python/oops-concepts', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/oops-concepts.yml')));
    return view('chapter', [
        'material' => 'courses.python.oops-concepts',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Array Operations',
        'next' => 'Class and Object']);
});

Route::get('python/class-and-object', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/class-and-object.yml')));
    return view('chapter', [
        'material' => 'courses.python.class-and-object',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'OOPs Concepts',
        'next' => 'Constructors']);
});

Route::get('python/constructors', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/constructors.yml')));
    return view('chapter', [
        'material' => 'courses.python.constructors',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Class and Object',
        'next' => 'Inheritance ']);
});

Route::get('python/inheritance', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/inheritance.yml')));
    return view('chapter', [
        'material' => 'courses.python.inheritance',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Constructors',
        'next' => 'Abstraction']);
});

Route::get('python/abstraction', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/abstraction.yml')));
    return view('chapter', [
        'material' => 'courses.python.abstraction',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Inheritance ',
        'next' => 'Operator Overloading']);
});

Route::get('python/operator-overloading', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/python/operator-overloading.yml')));
    return view('chapter', [
        'material' => 'courses.python.operator-overloading',
        'course' => 'python',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Abstraction',
        'next' => '']);
});
