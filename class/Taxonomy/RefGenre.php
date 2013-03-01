<?php
/**
 * This file is part of a "Docalist Biblio" plugin.
 *
 * For copyright and license information, please view the
 * LICENSE.txt file that was distributed with this source code.
 *
 * @package     Docalist
 * @subpackage  Biblio
 * @author      Daniel Ménard <daniel.menard@laposte.net>
 * @version     SVN: $Id$
 */

namespace Docalist\Biblio\Taxonomy;
use Docalist\Taxonomy;

/**
 * Taxonomie "Genres de documents".
 */
class RefGenre extends Taxonomy {
    /**
     * @inheritdoc
     */
    protected $id = 'dclrefgenre';

    /**
     * @inheritdoc
     */
    protected $postTypes = array('dclref');

    /**
     * @inheritdoc
     */
    protected function options() {
        return array(
            'label' => __('Genres de documents', 'docalist-biblio'),
            'hierarchical' => false,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => false,
        );
    }

}
