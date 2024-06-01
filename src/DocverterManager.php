<?php

namespace DocVerter;

use Illuminate\Support\Facades\Config;
use DocVerter\RTF2PDFConverter;
use DocVerter\PDF2RTFConverter;
use DocVerter\HTML2PDFConverter;
use DocVerter\PDF2HTMLConverter;
use DocVerter\Text2PDFConverter;
use DocVerter\PDF2TextConverter;
use DocVerter\Image2PDFConverter;
use DocVerter\PDF2ImageConverter;
use DocVerter\Markdown2PDFConverter;
use DocVerter\PDF2MarkdownConverter;
use DocVerter\Excel2PDFConverter;
use DocVerter\PDF2ExcelConverter;
use DocVerter\Word2PDFConverter;
use DocVerter\PDF2WordConverter;

class DocverterManager
{
    protected $config;

    public function __construct()
    {
        $this->config = Config::get('docverter');
    }

    public function convert($type, $source, $destination)
    {
        switch ($type) {
            case 'rtf2pdf':
                $converter = new RTF2PDFConverter($source, $destination);
                break;
            case 'pdf2rtf':
                $converter = new PDF2RTFConverter($source, $destination);
                break;
            case 'html2pdf':
                $converter = new HTML2PDFConverter($source, $destination);
                break;
            case 'pdf2html':
                $converter = new PDF2HTMLConverter($source, $destination);
                break;
            case 'text2pdf':
                $converter = new Text2PDFConverter($source, $destination);
                break;
            case 'pdf2text':
                $converter = new PDF2TextConverter($source, $destination);
                break;
            case 'image2pdf':
                $converter = new Image2PDFConverter($source, $destination);
                break;
            case 'pdf2image':
                $converter = new PDF2ImageConverter($source, $destination);
                break;
            case 'markdown2pdf':
                $converter = new Markdown2PDFConverter($source, $destination);
                break;
            case 'pdf2markdown':
                $converter = new PDF2MarkdownConverter($source, $destination);
                break;
            case 'excel2pdf':
                $converter = new Excel2PDFConverter($source, $destination);
                break;
            case 'pdf2excel':
                $converter = new PDF2ExcelConverter($source, $destination);
                break;
            case 'word2pdf':
                $converter = new Word2PDFConverter($source, $destination);
                break;
            case 'pdf2word':
                $converter = new PDF2WordConverter($source, $destination);
                break;
            default:
                throw new \InvalidArgumentException("Invalid conversion type: $type");
        }

        return $converter->convert();
    }
}
