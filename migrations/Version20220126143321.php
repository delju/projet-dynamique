<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

class Version20220126143321 extends AbstractMigration
{

    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comment_flag (id INT AUTO_INCREMENT NOT NULL, comment_id INT NOT NULL, date DATETIME NOT NULL, handled TINYINT(1) NOT NULL, INDEX IDX_F7C24976F8697D13 (comment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comment_flag ADD CONSTRAINT FK_F7C24976F8697D13 FOREIGN KEY (comment_id) REFERENCES comment (id)');
        $this->addSql('ALTER TABLE comment_flag ADD author_id INT NOT NULL');
        $this->addSql('ALTER TABLE comment_flag ADD CONSTRAINT FK_F7C24976F675F31B FOREIGN KEY (author_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_F7C24976F675F31B ON comment_flag (author_id)');
        }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE comment_flag');
        $this->addSql('ALTER TABLE comment_flag DROP FOREIGN KEY FK_F7C24976F675F31B');
        $this->addSql('DROP INDEX IDX_F7C24976F675F31B ON comment_flag');
        $this->addSql('ALTER TABLE comment_flag DROP author_id');
    }

}