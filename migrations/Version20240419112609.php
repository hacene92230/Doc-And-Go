<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240419112609 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appointment ADD planing_id INT NOT NULL');
        $this->addSql('ALTER TABLE appointment ADD CONSTRAINT FK_FE38F8445E544CE5 FOREIGN KEY (planing_id) REFERENCES planing (id)');
        $this->addSql('CREATE INDEX IDX_FE38F8445E544CE5 ON appointment (planing_id)');
        $this->addSql('ALTER TABLE planing ADD date_of LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appointment DROP FOREIGN KEY FK_FE38F8445E544CE5');
        $this->addSql('DROP INDEX IDX_FE38F8445E544CE5 ON appointment');
        $this->addSql('ALTER TABLE appointment DROP planing_id');
        $this->addSql('ALTER TABLE planing DROP date_of');
    }
}
