<?php

declare(strict_types=1);

namespace Passionweb\IconApi\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Imaging\IconFactory;
use TYPO3\CMS\Core\Imaging\IconSize;
use TYPO3\CMS\Extensionmanager\Controller\AbstractController;


class IconController extends AbstractController
{
    public function __construct(
        private readonly IconFactory $iconFactory,
    ) {}

    public function assignIconsAction(): ResponseInterface
    {
        $iconSVG = $this->iconFactory->getIcon(
            'tx-passionweb-svg',
            IconSize::MEDIUM,
            'overlay-identifier',
        );
        $iconPNG = $this->iconFactory->getIcon(
            'tx-passionweb-png',
            IconSize::SMALL,
            'overlay-identifier',
        );

        $this->view->assign('iconSVG', $iconSVG);
        $this->view->assign('iconPNG', $iconPNG);

        return $this->htmlResponse();
    }
}
