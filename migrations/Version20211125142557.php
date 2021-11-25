<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211125142557 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category_message (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE edition (id INT AUTO_INCREMENT NOT NULL, manga_id INT DEFAULT NULL, editor_id INT NOT NULL, date DATE NOT NULL, INDEX IDX_A891181F7B6461 (manga_id), INDEX IDX_A891181F6995AC4C (editor_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE edition ADD CONSTRAINT FK_A891181F7B6461 FOREIGN KEY (manga_id) REFERENCES manga (id)');
        $this->addSql('ALTER TABLE edition ADD CONSTRAINT FK_A891181F6995AC4C FOREIGN KEY (editor_id) REFERENCES editor (id)');
        $this->addSql('ALTER TABLE message ADD category VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE tomes ADD manga_id INT NOT NULL');
        $this->addSql('ALTER TABLE tomes ADD CONSTRAINT FK_38BCB1507B6461 FOREIGN KEY (manga_id) REFERENCES manga (id)');
        $this->addSql('CREATE INDEX IDX_38BCB1507B6461 ON tomes (manga_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE category_message');
        $this->addSql('DROP TABLE edition');
        $this->addSql('ALTER TABLE message DROP category');
        $this->addSql('ALTER TABLE tomes DROP FOREIGN KEY FK_38BCB1507B6461');
        $this->addSql('DROP INDEX IDX_38BCB1507B6461 ON tomes');
        $this->addSql('ALTER TABLE tomes DROP manga_id');
    }
}
