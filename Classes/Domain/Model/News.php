<?php
namespace Helhum\ExtScaffold\Domain\Model;
use GeorgRinger\News\Domain\Model\News as BaseModel;


class News extends BaseModel {

    /**
     * @var string
     */
    protected $title1;

    /**
     * @return string
     */
    public function getTitle1(): string
    {
        return $this->title1;
    }

    /**
     * @param string $title1
     */
    public function setTitle1(string $title1): void
    {
        $this->title1 = $title1;
    }



}