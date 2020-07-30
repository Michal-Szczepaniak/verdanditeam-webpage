<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180504161633 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__device AS SELECT id, name, sfos_version, have_ota, xda_link, broken_list, name_pretty, description, working_list, install_description, download_cm, download_sfos, download_logo, install_preparations, install_instructions FROM device');
        $this->addSql('DROP TABLE device');
        $this->addSql('CREATE TABLE device (id INTEGER NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, sfos_version VARCHAR(255) NOT NULL COLLATE BINARY, have_ota BOOLEAN NOT NULL, xda_link VARCHAR(255) NOT NULL COLLATE BINARY, broken_list VARCHAR(255) NOT NULL COLLATE BINARY, name_pretty VARCHAR(255) NOT NULL COLLATE BINARY, description VARCHAR(255) NOT NULL COLLATE BINARY, working_list VARCHAR(255) NOT NULL COLLATE BINARY, download_logo VARCHAR(255) DEFAULT NULL COLLATE BINARY, install_description VARCHAR(255) NOT NULL, download_cm VARCHAR(255) NOT NULL, download_sfos VARCHAR(255) NOT NULL, install_preparations VARCHAR(255) NOT NULL, install_instructions VARCHAR(255) NOT NULL, ota_description VARCHAR(255) DEFAULT NULL, ota_instructions VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO device (id, name, sfos_version, have_ota, xda_link, broken_list, name_pretty, description, working_list, install_description, download_cm, download_sfos, download_logo, install_preparations, install_instructions) SELECT id, name, sfos_version, have_ota, xda_link, broken_list, name_pretty, description, working_list, install_description, download_cm, download_sfos, download_logo, install_preparations, install_instructions FROM __temp__device');
        $this->addSql('DROP TABLE __temp__device');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__device AS SELECT id, name, sfos_version, have_ota, xda_link, broken_list, name_pretty, description, working_list, install_description, download_cm, download_sfos, download_logo, install_preparations, install_instructions FROM device');
        $this->addSql('DROP TABLE device');
        $this->addSql('CREATE TABLE device (id INTEGER NOT NULL, name VARCHAR(255) NOT NULL, sfos_version VARCHAR(255) NOT NULL, have_ota BOOLEAN NOT NULL, xda_link VARCHAR(255) NOT NULL, broken_list VARCHAR(255) NOT NULL, name_pretty VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, working_list VARCHAR(255) NOT NULL, download_logo VARCHAR(255) DEFAULT NULL, install_description VARCHAR(255) DEFAULT \'""\' NOT NULL COLLATE BINARY, download_cm VARCHAR(255) DEFAULT \'""\' NOT NULL COLLATE BINARY, download_sfos VARCHAR(255) DEFAULT \'""\' NOT NULL COLLATE BINARY, install_preparations VARCHAR(255) DEFAULT \'""\' NOT NULL COLLATE BINARY, install_instructions VARCHAR(255) DEFAULT \'""\' NOT NULL COLLATE BINARY, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO device (id, name, sfos_version, have_ota, xda_link, broken_list, name_pretty, description, working_list, install_description, download_cm, download_sfos, download_logo, install_preparations, install_instructions) SELECT id, name, sfos_version, have_ota, xda_link, broken_list, name_pretty, description, working_list, install_description, download_cm, download_sfos, download_logo, install_preparations, install_instructions FROM __temp__device');
        $this->addSql('DROP TABLE __temp__device');
    }
}
