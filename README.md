# Docverter

Docverter is a versatile PHP package for document conversion between various formats. Whether you need to convert RTF, PDF, HTML, Text, Image, Markdown, Excel, or Word documents, this package provides seamless functionality using industry-standard libraries.

## Requirements
PHP Version : 7.4 +
Laravel Version: 8 +

## Installation

You can install the package via Composer:

```bash
composer require jumbaeric/docverter
```

## Usage

```php
use DocVerter\Facades\DocverterFacade;

// Convert RTF to PDF
DocverterFacade::convert('rtf2pdf', 'example.rtf', 'output.pdf');

// Convert PDF to RTF
DocverterFacade::convert('pdf2rtf', 'example.pdf', 'output.rtf');

// Convert HTML to PDF
DocverterFacade::convert('html2pdf', 'example.html', 'output.pdf');

// Convert PDF to HTML
DocverterFacade::convert('pdf2html', 'example.pdf', 'output.html');

// Convert Text to PDF
DocverterFacade::convert('text2pdf', 'example.txt', 'output.pdf');

// Convert PDF to Text
DocverterFacade::convert('pdf2text', 'example.pdf', 'output.txt');

// Convert Image to PDF
DocverterFacade::convert('image2pdf', 'example.jpg', 'output.pdf');

// Convert PDF to Image
DocverterFacade::convert('pdf2image', 'example.pdf', 'output.jpg');

// Convert Markdown to PDF
DocverterFacade::convert('markdown2pdf', 'example.md', 'output.pdf');

// Convert PDF to Markdown
DocverterFacade::convert('pdf2markdown', 'example.pdf', 'output.md');

// Convert Excel to PDF
DocverterFacade::convert('excel2pdf', 'example.xlsx', 'output.pdf');

// Convert PDF to Excel
DocverterFacade::convert('pdf2excel', 'example.pdf', 'output.xlsx');

// Convert Word to PDF
DocverterFacade::convert('word2pdf', 'example.docx', 'output.pdf');

// Convert PDF to Word
DocverterFacade::convert('pdf2word', 'example.pdf', 'output.docx');
```

## Features

- Versatile Conversion: Convert between RTF, PDF, and HTML formats seamlessly.
- Powered by Industry-standard Libraries: Utilizes Dompdf, PHPRtfLite, PhpSpreadsheet, PhpWord, and other libraries for reliable conversion.
- Simple Integration: Easily integrate into your PHP projects with Composer.
- Customizable Options: Easily customize PDF generation options as needed.

## Keywords and Tags
- Docverter
- PHP RTF to PDF
- Rich Text Format to PDF
- HTML to PDF
- PDF to HTML
- Dompdf
- PHPRtfLite
- RTF Converter
- HTML Converter
- PDF Generation
- PHP Package
- Composer Package
- Document Conversion

## Credits
<a href="https://github.com/dompdf/dompdf">Dompdf</a> - PDF generation library.
<a href="https://github.com/phprtflite/phprtflite">PHPRtfLite</a> - RTF generation library.
<a target="_new" rel="noreferrer" href="https://github.com/PHPOffice/phpspreadsheet">PhpSpreadsheet</a> - Excel generation library.
<a target="_new" rel="noreferrer" href="https://github.com/PHPOffice/PHPWord">PhpWord</a> - Word generation library.