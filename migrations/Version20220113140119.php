<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220113140119 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE collection_user (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, UNIQUE INDEX UNIQ_C7E4FAA7A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE collection_user ADD CONSTRAINT FK_C7E4FAA7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE tomes ADD collection_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tomes ADD CONSTRAINT FK_38BCB150F342A144 FOREIGN KEY (collection_user_id) REFERENCES collection_user (id)');
        $this->addSql('CREATE INDEX IDX_38BCB150F342A144 ON tomes (collection_user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tomes DROP FOREIGN KEY FK_38BCB150F342A144');
        $this->addSql('DROP TABLE collection_user');
        $this->addSql('DROP INDEX IDX_38BCB150F342A144 ON tomes');
        $this->addSql('ALTER TABLE tomes DROP collection_user_id');
    }
}
