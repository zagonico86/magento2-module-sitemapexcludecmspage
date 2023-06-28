<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Zagonico\SitemapExcludeCmsPage\Model\ItemProvider;

use Zagonico\SitemapExcludeCmsPage\Model\PageFactory;
use Magento\Sitemap\Model\SitemapItemInterfaceFactory;
use Magento\Sitemap\Model\ItemProvider\CmsPageConfigReader;

class CmsPage implements \Magento\Sitemap\Model\ItemProvider\ItemProviderInterface
{
    /**
     * Cms page factory
     *
     * @var PageFactory
     */
    private $cmsPageFactory;

    /**
     * Sitemap item factory
     *
     * @var SitemapItemInterfaceFactory
     */
    private $itemFactory;

    /**
     * Config reader
     *
     * @var CmsPageConfigReader
     */
    private $configReader;

    /**
     * CmsPage constructor.
     *
     * @param CmsPageConfigReader $configReader
     * @param PageFactory $cmsPageFactory
     * @param SitemapItemInterfaceFactory $itemFactory
     */
    public function __construct(
        CmsPageConfigReader $configReader,
        PageFactory $cmsPageFactory,
        SitemapItemInterfaceFactory $itemFactory
    ) {
        $this->cmsPageFactory = $cmsPageFactory;
        $this->itemFactory = $itemFactory;
        $this->configReader = $configReader;
    }

    /**
     * {@inheritdoc}
     */
    public function getItems($storeId)
    {
        $collection = $this->cmsPageFactory->create()->getCollection($storeId);
        //$collection->addFieldToFilter('exclude_from_sitemap', ['eq' => 0]);

        $items = array_map(function ($item) use ($storeId) {
            return $this->itemFactory->create([
                'url' => $item->getUrl(),
                'updatedAt' => $item->getUpdatedAt(),
                'images' => $item->getImages(),
                'priority' => $this->configReader->getPriority($storeId),
                'changeFrequency' => $this->configReader->getChangeFrequency($storeId),
            ]);
        }, $collection);

        return $items;
    }
}
