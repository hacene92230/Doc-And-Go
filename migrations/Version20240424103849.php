<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240424103849 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reason ADD speciality_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reason ADD CONSTRAINT FK_3BB8880C3B5A08D7 FOREIGN KEY (speciality_id) REFERENCES speciality (id)');
        $this->addSql('CREATE INDEX IDX_3BB8880C3B5A08D7 ON reason (speciality_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reason DROP FOREIGN KEY FK_3BB8880C3B5A08D7');
        $this->addSql('DROP INDEX IDX_3BB8880C3B5A08D7 ON reason');
        $this->addSql('ALTER TABLE reason DROP speciality_id');
    }
}
