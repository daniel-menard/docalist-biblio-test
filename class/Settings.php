<?php
/**
 * This file is part of a "Docalist Biblio" plugin.
 *
 * For copyright and license information, please view the
 * LICENSE.txt file that was distributed with this source code.
 *
 * @package Docalist
 * @subpackage Biblio
 * @author Daniel Ménard <daniel.menard@laposte.net>
 * @version SVN: $Id$
 */
namespace Docalist\Biblio;

use Docalist\Data\Entity\AbstractSettingsEntity;

/**
 * Config de Docalist Biblio.
 *
 * @property Docalist\Biblio\DatabaseSettings[] $databases Liste des bases.
 */
class Settings extends AbstractSettingsEntity
{
    protected function loadSchema() {
        return array(
            'databases' => array(
                'type' => 'DatabaseSettings*',
                'label' => __('Liste des bases de données documentaires', 'docalist-biblio'),
                'default' => array(
                    array(
                        'name' => '',
                        'label' => 'Base Prisme',
                        'creation' => 'datecreat',
                    ),
                    array(
                        'name' => 'bdsp',
                        'label' => 'Base BDSP',
                        'creation' => 'datecreat',
                    ),
                    array(
                        'name' => 'prisme-travail',
                        'label' => 'Base de travail Prisme',
                        'creation' => 'datecreat',
                    ),
                ),
            ),
        );
    }
}
