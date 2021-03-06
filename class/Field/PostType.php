<?php
/**
 * This file is part of the 'Docalist Biblio' plugin.
 *
 * Copyright (C) 2012-2015 Daniel Ménard
 *
 * For copyright and license information, please view the
 * LICENSE.txt file that was distributed with this source code.
 *
 * @package     Docalist
 * @subpackage  Biblio
 * @author      Daniel Ménard <daniel.menard@laposte.net>
 * @version     $Id$
 */
namespace Docalist\Biblio\Field;

use Docalist\Biblio\Type\String;
use Docalist\Search\MappingBuilder;
use Docalist\Biblio\DatabaseIndexer;

/**
 * Le PostType WordPress de la notice.
 */
class PostType extends String {
    public function mapping(MappingBuilder $mapping) {
        DatabaseIndexer::standardMapping('post_type', $mapping);
    }

    public function map(array & $document) {
        DatabaseIndexer::standardMap('post_type', $this->value(), $document);
    }
}