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
        $iconPassionweb = $this->iconFactory->getIcon(
            'tx-passionweb',
            IconSize::MEDIUM,
            'overlay-identifier',
        );
        $iconStars = $this->iconFactory->getIcon(
            'tx-stars',
            IconSize::SMALL,
            'overlay-identifier',
        );

        $this->view->assign('iconPassionweb', $iconPassionweb);
        $this->view->assign('iconStars', $iconStars);

        return $this->htmlResponse();
    }
}
