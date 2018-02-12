
A library that simplifies the building of Atlassian Document Format structure for use with Stride.

```php
$doc = new flStrideDocument();
$doc->paragraph()
	->text('Normal text ')
	->strong('strong ')
	->em('italic ')
	->emoji(':rofl:')
	->emoji(':smile:')
	->code(' var i = 0;')
	->hardBreak()
	->text('next line');
```