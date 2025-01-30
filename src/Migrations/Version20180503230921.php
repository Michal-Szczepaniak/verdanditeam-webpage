<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180503230921 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', "Migration can only be executed safely on 'sqlite'.");

        $this->addSql('CREATE TABLE device (id INTEGER NOT NULL, name VARCHAR(255) NOT NULL, sfos_version VARCHAR(255) NOT NULL, have_ota BOOLEAN NOT NULL, xda_link VARCHAR(255) NOT NULL, broken_list VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', "Migration can only be executed safely on 'sqlite'.");

        $this->addSql('DROP TABLE device');
    }
}
