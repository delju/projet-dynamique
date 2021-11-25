<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211109141318 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tomes ADD manga_id INT NOT NULL');
        $this->addSql('ALTER TABLE tomes ADD CONSTRAINT FK_38BCB1507B6461 FOREIGN KEY (manga_id) REFERENCES manga (id)');
        $this->addSql('CREATE INDEX IDX_38BCB1507B6461 ON tomes (manga_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tomes DROP FOREIGN KEY FK_38BCB1507B6461');
        $this->addSql('DROP INDEX IDX_38BCB1507B6461 ON tomes');
        $this->addSql('ALTER TABLE tomes DROP manga_id');
    }
}
