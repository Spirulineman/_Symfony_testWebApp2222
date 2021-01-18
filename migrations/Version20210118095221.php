<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210118095221 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE classe_eleve ADD classe_id INT NULL');
        $this->addSql('ALTER TABLE classe_eleve ADD CONSTRAINT FK_A5D651CF8F5EA509 FOREIGN KEY (classe_id) REFERENCES eleve (id)');
        $this->addSql('CREATE INDEX IDX_A5D651CF8F5EA509 ON classe_eleve (classe_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE classe_eleve DROP FOREIGN KEY FK_A5D651CF8F5EA509');
        $this->addSql('DROP INDEX IDX_A5D651CF8F5EA509 ON classe_eleve');
        $this->addSql('ALTER TABLE classe_eleve DROP classe_id');
    }
}
