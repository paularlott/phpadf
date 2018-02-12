<?php

require_once 'lib/flStrideNode.php';
require_once 'lib/flStrideDocument.php';
require_once 'lib/flStrideParagraph.php';
require_once 'lib/flStrideCodeBlock.php';
require_once 'lib/flStrideBlockquote.php';

$doc = new flStrideDocument();
$doc->paragraph()
	->text('Normal text ')
	->strong('strong ')
	->em('italic ')
	->link(' my site ', 'https://paul.arlott.me/')
	->emoji(':rofl:')
	->emoji(':smile:')
	->code(' var i = 0;')
	->hardBreak()
	->text('next line');

$doc->paragraph()
	->text('next paragraph')
	->strike(' strike')
	->underline(' underline')
	->textColor(' this is red', '#ff0000')
	->sub(' subscript')
	->sup(' superscript ')
	->mention('all', '@all');

$doc->codeBlock('php')
	->text("function abc(\$a) {\n\techo \$a;\n}");

$doc->blockquote()
	->paragraph()
	->text('Hello world!')
	->hardBreak()
	->text('line 2');

echo json_encode($doc->toJSON()) . "\n\n";
