<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211207124440 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE photo (id INT AUTO_INCREMENT NOT NULL, url VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE manga ADD statut_id INT NOT NULL');
        $this->addSql('ALTER TABLE manga ADD CONSTRAINT FK_765A9E03F6203804 FOREIGN KEY (statut_id) REFERENCES statut (id)');
        $this->addSql('CREATE INDEX IDX_765A9E03F6203804 ON manga (statut_id)');
        $this->addSql('ALTER TABLE manga RENAME INDEX fk_editor TO IDX_765A9E036995AC4C');
        $this->addSql('ALTER TABLE message ADD category_id INT NOT NULL, ADD date DATETIME NOT NULL, DROP category');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307F12469DE2 FOREIGN KEY (category_id) REFERENCES category_message (id)');
        $this->addSql('CREATE INDEX IDX_B6BD307F12469DE2 ON message (category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE photo');
        $this->addSql('ALTER TABLE manga DROP FOREIGN KEY FK_765A9E03F6203804');
        $this->addSql('DROP INDEX IDX_765A9E03F6203804 ON manga');
        $this->addSql('ALTER TABLE manga DROP statut_id');
        $this->addSql('ALTER TABLE manga RENAME INDEX idx_765a9e036995ac4c TO FK_editor');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307F12469DE2');
        $this->addSql('DROP INDEX IDX_B6BD307F12469DE2 ON message');
        $this->addSql('ALTER TABLE message ADD category VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP category_id, DROP date');
    }
}
