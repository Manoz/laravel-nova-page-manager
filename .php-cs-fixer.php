<?php

$excludes = [
    'resources',
    'vendor',
];

$rules = [
    '@PSR2' => true,
    'blank_line_after_opening_tag' => true,
    'concat_space' => ['spacing' => 'none'],
    'no_multiline_whitespace_around_double_arrow' => true,
    'no_empty_statement' => true,
    'simplified_null_return' => false,
    'encoding' => true,
    'single_blank_line_at_eof' => true,
    'no_extra_blank_lines' => true,
    'no_spaces_after_function_name' => true,
    'function_declaration' => true,
    'include' => true,
    'indentation_type' => true,
    'no_alias_functions' => true,
    'blank_line_after_namespace' => true,
    'line_ending' => true,
    'no_trailing_comma_in_list_call' => true,
    'not_operator_with_successor_space' => false,
    'lowercase_cast' => true,
    'lowercase_keywords' => true,
    'method_argument_space' => true,
    'trailing_comma_in_multiline' => true,
    'single_import_per_statement' => true,
    'no_leading_namespace_whitespace' => true,
    'no_blank_lines_after_class_opening' => true,
    'no_blank_lines_after_phpdoc' => true,
    'object_operator_without_whitespace' => true,
    'no_spaces_inside_parenthesis' => true,
    'phpdoc_indent' => true,
    'phpdoc_no_access' => true,
    'phpdoc_scalar' => true,
    'phpdoc_to_comment' => false,
    'phpdoc_trim' => true,
    'phpdoc_no_alias_tag' => true,
    'phpdoc_var_without_name' => true,
    'no_leading_import_slash' => true,
    'braces' => false,
    'blank_line_before_statement' => true,
    'self_accessor' => true,
    'array_syntax' => ['syntax' => 'short'],
    'echo_tag_syntax' => true,
    'full_opening_tag' => true,
    'no_trailing_comma_in_singleline_array' => true,
    'single_blank_line_before_namespace' => true,
    'single_line_after_imports' => true,
    'single_quote' => true,
    'no_singleline_whitespace_before_semicolons' => true,
    'cast_spaces' => true,
    'standardize_not_equals' => true,
    'ternary_operator_spaces' => true,
    'no_trailing_whitespace' => true,
    'trim_array_spaces' => true,
    'unary_operator_spaces' => true,
    'no_unused_imports' => true,
    'visibility_required' => true,
    'no_whitespace_in_blank_line' => true,
];

$finder = PhpCsFixer\Finder::create()
    ->name('*.php')
    ->exclude($excludes)
    ->ignoreDotFiles(true)
    ->in(__DIR__);

$config = new PhpCsFixer\Config();

return $config->setRules($rules)
    ->setFinder($finder)
    ->setUsingCache(true);
