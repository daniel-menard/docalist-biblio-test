<?php
/**
 * This file is part of the "Docalist Biblio" plugin.
 *
 * Copyright (C) 2012-2014 Daniel Ménard
 *
 * For copyright and license information, please view the
 * LICENSE.txt file that was distributed with this source code.
 *
 * @package     Docalist
 * @subpackage  Biblio
 * @author      Daniel Ménard <daniel.menard@laposte.net>
 * @version     SVN: $Id$
 */

/*
 * Liste des vocabulaires disponibles pour l'indexation.
 *
 * Ce type de table est destiné à être utilisé dans le champ "topic" et liste
 * les différents vocabulaires.
 *
 * Par défaut, seul le vocabulaire "indexation libre" est disponible.
 *
 * La table contient les champs suivants :
 * - code : nom de code du vocabulaire, doit être unique.
 * - type : type de vocabulaire. Les valeurs possibles sont 'table' ou 'index'
 * - source : source des entrées. Pour un vocabulaire de type "table", c'est le
 *   nom de la table d'autorité à utiliser, pour un vocabulaire de type "index"
 *   c'est le nom du champ elastic-search à utiliser.
 * - label : libellé utilisé dans le champ topic.type
 */

return [
    ['code', 'label', 'description', 'source'],

    ['free', __('Indexation libre', 'docalist-biblio'), __('Candidats descripteurs', 'docalist-biblio'), 'index:topic.free'],
];