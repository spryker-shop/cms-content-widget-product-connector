<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\CmsContentWidgetProductConnector\Dependency\Plugin\ProductWidget;

use Generated\Shared\Transfer\ProductViewTransfer;
use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

/**
 * @deprecated Use {@link \SprykerShop\Yves\ProductWidget\Widget\CmsProductWidget} instead.
 */
interface ProductWidgetPluginInterface extends WidgetPluginInterface
{
    /**
     * @var string
     */
    public const NAME = 'ProductWidgetPlugin';

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductViewTransfer $productViewTransfer
     *
     * @return void
     */
    public function initialize(ProductViewTransfer $productViewTransfer): void;
}
