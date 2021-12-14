<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211207130321 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tomes ADD photo_id INT NOT NULL');
        $this->addSql('ALTER TABLE tomes ADD CONSTRAINT FK_38BCB1507E9E4C8C FOREIGN KEY (photo_id) REFERENCES photo (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_38BCB1507E9E4C8C ON tomes (photo_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tomes DROP FOREIGN KEY FK_38BCB1507E9E4C8C');
        $this->addSql('DROP INDEX UNIQ_38BCB1507E9E4C8C ON tomes');
        $this->addSql('ALTER TABLE tomes DROP photo_id');
    }
}
