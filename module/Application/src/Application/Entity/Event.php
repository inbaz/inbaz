<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-realentity) on 2016-12-25 19:00:26.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Application\Entity\Event
 *
 * @ORM\Entity()
 * @ORM\Table(name="event", indexes={@ORM\Index(name="fk_event_role1_idx", columns={"role_id"})})
 */
class Event extends Base\Event
{
    public function __construct()
    {
        parent::__construct();
    }

}