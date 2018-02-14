<?php

require_once 'lib/flStrideNode.php';
require_once 'lib/flStrideMarks.php';
require_once 'lib/flStrideText.php';
require_once 'lib/flStrideEmoji.php';
require_once 'lib/flStrideHardBreak.php';
require_once 'lib/flStrideMention.php';
require_once 'lib/flStrideListItem.php';
require_once 'lib/flStrideDocument.php';
require_once 'lib/flStrideParagraph.php';
require_once 'lib/flStrideCodeBlock.php';
require_once 'lib/flStrideBlockquote.php';
require_once 'lib/flStrideBulletList.php';
require_once 'lib/flStrideOrderedList.php';
require_once 'lib/flStrideHeading.php';
require_once 'lib/flStridePanel.php';


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
	->text(' this is red', (new flStrideMarks())->textColor('#ff0000'))
	->text(' subscript', (new flStrideMarks())->sub())
	->text(' superscript ', (new flStrideMarks())->sup())
	->mention('all', '@all');

$doc->codeBlock('php')
	->text("function abc(\$a) {\n\techo \$a;\n}");

$doc->blockquote()
	->paragraph()
	->text('Hello world!')
	->hardBreak()
	->text('line 2');

$doc->bulletList()
	->textItem('item 1')
	->textItem('item 2');

echo json_encode($doc->toJSON()) . "\n\n";
