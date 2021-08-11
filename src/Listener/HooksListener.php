<?php

declare(strict_types=1);

namespace Heimseiten\ContaoArticleInsideBundle\Listener;

use Contao\FrontendTemplate;
use Contao\Template;
use Contao\Module;

class HooksListener
{
    public function __invoke(string $buffer, string $template): string
    {

        if (TL_MODE === 'FE') {

            if ('mod_article' === $template) {
                $buffer = preg_replace('/>/', '><div class="inside">', $buffer, 1);
                $buffer = $buffer . '</div>';
            }
        
        }
        return $buffer;
        
    }

}
