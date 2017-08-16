<?php

namespace luklew\ModuleSkeleton\Tests\Helper;

use luklew\ModuleSkeleton\Helper\Data;
use Magento\Framework\App\Helper\AbstractHelper;
use PHPUnit\Framework\TestCase;

/**
 * Tests for Data Helper
 *
 * @package luklew\ModuleSkeleton\Tests\Helper
 * @author  Lukasz Lewandowski <luklewluk@gmail.com>
 */
class DataTest extends TestCase
{
    /**
     * Example test
     */
    public function testIfHelperExtendsAbstractHelper()
    {
        // Prophecy to disable constructor
        $helperProphecy = $this->prophesize(Data::class);
        $helper = $helperProphecy->reveal();

        $this->assertInstanceOf(AbstractHelper::class, $helper);
    }
}
