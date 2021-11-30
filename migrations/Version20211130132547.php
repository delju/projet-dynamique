<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211130132547 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE manga ADD statut_id INT NOT NULL');
        $this->addSql('ALTER TABLE manga ADD CONSTRAINT FK_765A9E03F6203804 FOREIGN KEY (statut_id) REFERENCES statut (id)');
        $this->addSql('CREATE INDEX IDX_765A9E03F6203804 ON manga (statut_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE manga DROP FOREIGN KEY FK_765A9E03F6203804');
        $this->addSql('DROP INDEX IDX_765A9E03F6203804 ON manga');
        $this->addSql('ALTER TABLE manga DROP statut_id');
    }
}
