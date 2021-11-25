<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211109140928 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE manga ADD classification_id INT NOT NULL, ADD author_id INT NOT NULL');
        $this->addSql('ALTER TABLE manga ADD CONSTRAINT FK_765A9E032A86559F FOREIGN KEY (classification_id) REFERENCES classification (id)');
        $this->addSql('ALTER TABLE manga ADD CONSTRAINT FK_765A9E03F675F31B FOREIGN KEY (author_id) REFERENCES author (id)');
        $this->addSql('CREATE INDEX IDX_765A9E032A86559F ON manga (classification_id)');
        $this->addSql('CREATE INDEX IDX_765A9E03F675F31B ON manga (author_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE manga DROP FOREIGN KEY FK_765A9E032A86559F');
        $this->addSql('ALTER TABLE manga DROP FOREIGN KEY FK_765A9E03F675F31B');
        $this->addSql('DROP INDEX IDX_765A9E032A86559F ON manga');
        $this->addSql('DROP INDEX IDX_765A9E03F675F31B ON manga');
        $this->addSql('ALTER TABLE manga DROP classification_id, DROP author_id');
    }
}
