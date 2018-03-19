<?php

namespace Luklewluk\ModuleSkeleton\Test\Unit\Helper;

use Luklewluk\ModuleSkeleton\Helper\Data;
use Magento\Framework\App\Helper\AbstractHelper;
use PHPUnit\Framework\TestCase;

/**
 * Tests for Data Helper
 *
 * @author Lukasz Lewandowski <luklewluk@gmail.com>
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
