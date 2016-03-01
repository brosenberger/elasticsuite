<?php
/**
 * DISCLAIMER
 * Do not edit or add to this file if you wish to upgrade Smile Elastic Suite to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile_ElasticSuiteCore
 * @author    Romain Ruaud <romain.ruaud@smile.fr>
 * @copyright 2016 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */
namespace Smile\ElasticSuiteCore\Model\Relevance\Config\Reader;

/**
 * Relevance configuration initial reader
 *
 * @category Smile
 * @package  Smile_ElasticSuiteCore
 * @author   Romain Ruaud <romain.ruaud@smile.fr>
 */
class Initial extends \Magento\Framework\App\Config\Initial\Reader
{
    /**
     * The relevance configuration default filename
     */
    const FILE_NAME = 'relevance.xml';

    /**
     * @param \Magento\Framework\Config\FileResolverInterface                      $fileResolver  The file resolver
     * @param \Magento\Framework\Config\ConverterInterface                         $converter     Converter
     * @param \Smile\ElasticSuiteCore\Model\Relevance\Config\Initial\SchemaLocator $schemaLocator The schema locator
     * @param \Magento\Framework\Config\DomFactory                                 $domFactory    The DOM factory
     * @param string                                                               $fileName      The file name
     */
    public function __construct(
        \Magento\Framework\Config\FileResolverInterface $fileResolver,
        \Magento\Framework\Config\ConverterInterface $converter,
        \Smile\ElasticSuiteCore\Model\Relevance\Config\Initial\SchemaLocator $schemaLocator,
        \Magento\Framework\Config\DomFactory $domFactory,
        $fileName = self::FILE_NAME
    ) {
        parent::__construct($fileResolver, $converter, $schemaLocator, $domFactory, $fileName);
    }
}
